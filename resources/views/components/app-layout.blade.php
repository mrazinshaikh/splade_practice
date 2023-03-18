<x-banner />

<div class="min-h-screen bg-gray-100">
    <x-splade-flash>
        <div v-if="flash.has('danger') || flash.has('success')" data-flash="message">
            <div v-for="(value, key) in flash" :data-key="key" :data-value="value" v-html="value"
                class="sticky border z-[999] bg-white left-0 right-0 top-0 p-5"
                :class="[
                    { 'text-red-500 border-red-500': key == 'danger' },
                    { 'text-green-500 border-green-500': key == 'success' },
                    { 'hidden': typeof value == 'function' }
                ]">
            </div>
        </div>
    </x-splade-flash>
    <x-navigation />

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
