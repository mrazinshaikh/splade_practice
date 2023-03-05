{{-- Used in user/index.blade.php on create button click --}}
<x-splade-modal>
    <div class="-mt-3">
        <h1 class="text-xl mb-3">Create new user</h1>

        <x-splade-form action="{{ route('user.store') }}" method="POST">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="name" v-model="form.name" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="User full name" required_>
                <p class="text-sm text-red-400" v-text="form.errors.name"></p>
              </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" v-model="form.email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="user@email.com" required_>
                <p class="text-sm text-red-400" v-text="form.errors.email"></p>
              </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="text" v-model="form.password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Strong password" required_>
                <p class="text-sm text-red-400" v-text="form.errors.password"></p>
              </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                <input type="text" v-model="form.password_confirmation" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Confirm password" required_>
                <p class="text-sm text-red-400" v-text="form.errors.password_confirmation"></p>
              </div>
            <div class="flex flex-row gap-x-3">
                <button type="submit" class="bg-blue-400 hover:bg-blue-500 inline-block py-2 px-3 rounded-md border border-gray-300 shadow-sm relative cursor-pointer font-medium text-gray-100 hover:text-gray-300 text-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:border-indigo-300focus:ring-indigo-200 text-center ">Create</button>
                <button @click.prevent="form.reset" class="inline-block py-2 px-3 rounded-md border border-gray-300 shadow-sm bg-white hover:bg-gray-100 relative cursor-pointer font-medium text-gray-700 text-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:border-indigo-300 focus:ring-indigo-200 text-center">
                    Clear all values
                </button>
            </div>
            </x-splade-form>
    </div>
</x-splade-modal>
