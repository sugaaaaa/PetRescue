@extends('profile.edit')
@section('content')
    <div>
        @if(session('success'))
            <div class="alert alert-success bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
    </div>
     <div class="max-w-screen-xl mx-auto">
        <h2 class="text-2xl font-semibold mt-5 mb-5">Favorite</h2>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid sm:grid-cols-3 gap-5 px-5">
                    @forelse($favorites as $fav)
                        <div class="bg-white shadow-md mb-4 p-5 border rounded-lg" data-order-id="{{ $fav->id }}">
                            <h2 class="text-xl font-semibold"> #{{ $fav->id }}</h2>
                            <a href="{{ url('/pages/detailBlogs/' . $fav->blog->id)}}">                            
                                <img src="{{ asset('/blogs/' . $fav->blog->images) }}" alt="Pet Image" class="w-full h-48 rounded-lg object-cover">
                            </a>
                            <h2 class="mt-2 text-lg font-bold">{{ $fav->blog->title }}</h2>
                             <div class="flex justify-between items-center mt-5 text-gray-600">
                                {{-- Favorite count --}}
                                <div>
                                    <button class="favorite-btn" data-blog-id="{{  $fav->blog->id }}">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                            </div>
                            <a href="{{ url('/pages/detailBlogs/' .  $fav->blog->id) }}">
                                <div class="flex justify-between mt-5 items-end text-md text-blue-800">
                                    <p>Read More</p>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p>No favorite pets blog added yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.remove-from-favorite-btn').forEach(button => {
            button.addEventListener('click', function() {
                const petsId = this.dataset.petsId;
                const formData = new FormData();
                formData.append('product_id', petsId);
                formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                fetch('{{ route("favorite.remove") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        document.getElementById(`favorite-item-${petsId}`).remove();
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection
