<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Test') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="h-3/4 bg-white overflow-hidden shadow sm:rounded-lg">
            <div class="h-96 p-6 bg-white border-b border-gray-200">
                <div class="pt-4 text-xl font-bold">Hi, {{ Auth::user()->username }}!</div>
                    <p class="pt-10 pb-2">This test has 8 questions. Select the answer of the given choices that matches your situation or preference best.</p>
                    <p class="py-2">After submiting your last answer you will find out who your ocean soulmate is and why it is among the endangered species.</p>
                    <form method="POST" action="{{ route('question1') }}">
                        @csrf
                        <x-button class="mt-10">
                            {{ __('Start') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex justify-center h-20">
            <p class="ml-4 pt-16 text-center text-sm text-gray-700">&copy; {{ now()->year }} Franziska</p>
        </div>
    </div>

</x-app-layout>
