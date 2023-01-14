<x-app-layout>
    <x-slot name="header">
        <!-- Panel administrativo -->
        <?php
        $id = Auth::id();
        if ($id == 1){
        ?>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Management panel') }}</a>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- Panel público -->   
        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Public panel') }}</a> 
    </x-slot>
</x-app-layout>
