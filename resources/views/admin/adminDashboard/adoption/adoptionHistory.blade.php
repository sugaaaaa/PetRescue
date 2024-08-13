@extends('admin.adminDashboard.dashboard')

@section('content')
    <section class="mt-10">
        <div class="max-w-screen-xl mx-auto">
            <h1 class="text-2xl text-center font-bold mb-5">Adoption History</h1>
            <div class="grid sm:grid-cols-3 gap-5 px-5">
                @foreach($adoptedPets as $adoptedPet)
                    <div class="bg-white shadow-md rounded-lg p-5">
                        <img src="{{ asset('/images/' . $adoptedPet->pet->images) }}" alt="Pet Image" class="w-full h-48 rounded-lg object-cover">
                        <h2 class="mt-2 text-lg font-bold">{{ $adoptedPet->pet->name }}</h2>
                        <p><strong>Age:</strong> {{ $adoptedPet->pet->age }}</p>
                        <p><strong>Sex:</strong> {{ $adoptedPet->pet->sex }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($adoptedPet->status) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
