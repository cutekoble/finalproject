<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Announcement') }}
        </h2>
    </x-slot>


    <div class="py-12">
         @if ( session('status') )

      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success Alert!</span> {{ session('status') }}
                </div>
            </div>
         @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="float-left">
                        {{ __('Announcement Management') }}
                    </h2>

                    <a href="{{ url('/users/add') }}">

                        <button class="float-right rounded-full bg-blue-500 p-1 hover:bg-blue-700">
                            Add Announcement</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
