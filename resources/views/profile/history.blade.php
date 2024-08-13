@extends('profile.edit')

@section('content')
    <div class="max-w-screen-xl mx-auto">
        <h2 class="text-2xl font-semibold mt-5 mb-5">Adoption History</h2>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid sm:grid-cols-3 gap-5 px-5">
                    @forelse($adoptions as $adoption)
                        <div class="bg-white shadow-md mb-4 p-5 border rounded-lg" data-order-id="{{ $adoption->id }}">
                            <h2 class="text-xl font-semibold"> #{{ $adoption->id }}</h2>
                              <img src="{{ asset('/images/' . $adoption->pet->images) }}" alt="Pet Image" class="w-full h-48 rounded-lg object-cover">
                            <h2 class="mt-2 text-lg font-bold">{{ $adoption->pet->name }}</h2>
                            <p><strong>Age:</strong> {{ $adoption->pet->age }}</p>
                            <p><strong>Sex:</strong> {{ $adoption->pet->sex }}</p>
                            <p><strong>Status:</strong> {{ ucfirst($adoption->status) }}</p>
                        </div>
                     </div>
                    @empty
                        <p>No pets adoption yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
