@seoTitle(__('Users'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
        </x-slot>

        <div class="pt-6 px-5">
            <Link slideover href="{{ route('user.create') }}" class="float-right inline-block py-2 px-3 rounded-md border border-gray-300 shadow-sm bg-white hover:bg-gray-100 relative cursor-pointer font-medium text-gray-700 text-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:border-indigo-300 focus:ring-indigo-200 text-center">Create User</Link>
        </div>
        <div class="py-12 px-5">
            <x-splade-table :for="$users">
                @cell('profile_photo_path', $user)
                    <img v-if="@js($user->profile_photo_path)" src="{{ asset('storage/' . $user->profile_photo_path) }}" height="60" width        ="60" alt="{{ $user->name }}">
                    <img v-else src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&color=7F9CF5&background=EBF4FF" height="60" width        ="60" alt="{{ $user->name }}">
                @endcell
            </x-splade-table>
        </div>
</x-app-layout>
