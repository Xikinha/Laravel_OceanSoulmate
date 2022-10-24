<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Test') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <p class="text-center pt-4 text-sm text-sky-600 uppercase">Your ocean soulmate</p>
                <p class="text-center pt-2 text-2xl font-bold">{{ $result }}</p>
                <div class="flex justify-center pt-4">
                    <img class="max-h-64 rounded-lg" src = "{{ asset($img_link) }}" />
                </div>
                <p class="pt-6 font-bold text-sm">Scientific name <span class="font-normal">{{ $name }}</span></p>
                <p class="font-bold text-sm">Status <span class="font-normal">{{ $status }}</span></p>
                <p class="font-bold text-sm">Habitat <span class="font-normal">{{ $habitat}}</span></p>
                <p class="pt-6">{{ $summary }}</p>
                <p><a href="{{ route('action') }}" class="font-semibold text-sky-600">Find out</a> what you can do to help your ocean soulmate.</p>

                <div class="pt-6 text-center">
                    <a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=https://ocean-soulmate-test.fran-ziska.com&quote=Discover_your_ocean_soulmate'><i class="fab fa-facebook icons text-2xl hover:text-sky-600 m-2"></i></a>
                    <a href="mailto:{{ $email }}?subject=Discover your ocean soulmate&body=Do the test (https://ocean-soulmate-test.fran-ziska.com) to discover your ocean soulmate, and find out how you can help to save it."><i class="fas fa-envelope icons text-2xl hover:text-sky-600 m-2"></i></a> 
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center h-20">
        <p class="ml-4 pt-16 text-center text-sm text-gray-700">&copy; {{ now()->year }} Franziska</p>
    </div>

</x-app-layout>
