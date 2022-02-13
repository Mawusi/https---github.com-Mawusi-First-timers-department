<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The Year of the Gathering Clouds') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <center>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Accra Ghana Zone First Timers Department') }}
                        </h2>  <hr><br>  
                                        
                        <a href="/upload-first-timer" class="btn btn-sm btn-primary">Upload First timers</a><br><br>
                        <a href="/" class="btn btn-sm btn-primary">Home </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
