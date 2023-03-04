@seoTitle(__('Dashboard'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-welcome />
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="flex flex-row justify-center space-x-4">
                <label class="w-64 cursor-pointer rounded-md shadow-sm bg-white border-2 py-8 px-4 hover:border-green-400 hover:shadow">
                    <div class="text-center">
                        <span class="font-bold">Plan Basic</span>
                    </div>
                </label>

                <label class="w-64 cursor-pointer rounded-md shadow-sm bg-white border-2 py-8 px-4 hover:border-green-400 hover:shadow">
                    <div class="text-center">
                        <span class="font-bold">Plan Pro</span>
                    </div>
                </label>

            </div>
        </div>
</x-app-layout>
