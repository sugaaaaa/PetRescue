@extends('pages.pets-show.petsPage')
@section('content')
    <section class="sm:my-20">
        {{-- for card --}}
        <div class="max-w-screen-2xl mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 sm:mt-10 px-5">
            {{-- loop here --}}
            @foreach($dogs as $pet)
            <div class="bg-[#F9F6E5] rounded-2xl max-w-sm">
                <a href="{{ url('/pages/detailPets', $pet->id) }}">
                    <img class="rounded-t-[1rem] rounded-b-[50%] w-full h-[400px] object-cover" src="{{ asset('/images/' . $pet->images) }}" alt=""/>
                </a>
                <div class="pt-5 pb-10 grid justify-items-center">
                    <a href="{{ url('/pages/detailPets', $pet->id) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pet->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pet->age . " year old" }}, {{ $pet->sex }}</p>
                    <a href="{{ url('/pages/detailPets', $pet->id) }}" class="border border-[#F4C38F] px-5 py-1.5 rounded-full text-sm text-gray-500">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection