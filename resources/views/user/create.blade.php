{{-- Used in user/index.blade.php on create button click --}}
<x-splade-modal position="right">
    <div class="-mt-3">
        <h1 class="text-xl mb-3">Create new user</h1>

        <x-splade-form action="{{ route('user.store') }}" method="POST">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <x-splade-input type="text" v-model="form.name" name="name" id="text"
                    placeholder="User full name" required />
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <x-splade-input type="email" v-model="form.email" name="email" id="email"
                    placeholder="user@email.com" required />
            </div>
            <div class="mb-4">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <x-splade-input type="text" v-model="form.password" name="password" id="password"
                    placeholder="Strong password" required />
            </div>
            <div class="mb-4">
                <label for="password_confirmation"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                <x-splade-input type="text" v-model="form.password_confirmation" name="password_confirmation"
                    id="password_confirmation" placeholder="Confirm password" required />
            </div>
            <div class="flex flex-row gap-x-3">
                <x-splade-submit label="Create" :spinner="true" />
                <x-splade-submit secondary label="Clear all values" @click.prevent="form.reset" />
            </div>
        </x-splade-form>
    </div>
</x-splade-modal>
