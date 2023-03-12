<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Tables\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', [
            'users' => Users::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user_ = $user->only(['id', 'name', 'email']);
        return view('user.store', [
            'user' => $user_
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rule = [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)]
        ];

        if (!empty(trim($request->get('password')))) {
            $rule['password'] = ['required', 'confirmed', Password::min(6)];
            $rule['password_confirmation'] = [Rule::requiredIf(fn () => $request->get('password')), 'same:password'];
        }
        $data = $request->validate($rule);

        $user->name = $data['name'];
        $user->email = $data['email'];
        if (array_key_exists('password', $data) && $data['password']) {
            $user->password = Hash::make($data['password']);
        }
        $user->update();

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Request $request)
    {
        if($user instanceof User){
            try{
                $user->delete();
                $request->session()->flash('success', 'User delete successful!');
            }catch(\Exception $e){
                $request->session()->flash('danger', 'User delete failed! <br/> Error: '. $e->getMessage());
            }
        }else{
            $request->session()->flash('danger', 'User delete failed!');
        }
        return redirect(route('user.index'));
    }
}
