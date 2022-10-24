<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Test') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="h-96 p-6 bg-white border-b border-gray-200">
                    <p class="pt-4 text-sm text-sky-600">Question {{$index}}</p>
                    <form method="POST" action="{{ route($next) }}">
                        @csrf
                        <p class="pt-6 pb-4 font-bold">{{$question}}</p>

                        @foreach ($answers as $answer)
                            <div class="py-2">
                                <input type="radio" name="{{$name}}" value="{{$answer}}" checked>
                                <label> {{$answer}}</label><br>
                            </div>
                        @endforeach

                        <x-button class="mt-10">
                            {{ __('Next') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center h-20">
        <p class="ml-4 pt-16 text-center text-sm text-gray-700">&copy; {{ now()->year }} Franziska</p>
    </div>
    
</x-app-layout>
