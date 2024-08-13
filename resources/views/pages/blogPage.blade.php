@extends('layouts.blog')
@section('content')
    <section>
        {{-- New --}}
        <div class="mt-5 sm:mt-10 mb-20 max-w-screen-2xl mx-auto px-5">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
                @foreach($petblog as $blog)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/pages/detailBlogs/' . $blog->id) }}">
                            <img class="rounded-t-lg h-[350px] w-full object-cover" src="{{ asset('/blogs/' . $blog->images) }}" alt=""/>
                        </a>
                        <div class="p-5">
                            <p class="text-sm text-blue-500">{{ $blog->created_at->format('F d, Y') }}</p>
                            <a href="{{ url('/pages/detailBlogs/' . $blog->id) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">{{ $blog->title }}</h5>
                            </a>
                            <div class="flex justify-between items-center mt-5 text-gray-600">
                                {{-- Favorite count --}}
                                <div>
                                    <button class="favorite-btn" data-blog-id="{{ $blog->id }}">
                                        <i class="fa-heart {{ $blog->is_favorited ? 'fa-solid text-red-500' : 'fa-regular text-gray-500' }}"></i> <span class="likes-count">{{ $blog->likes }}</span>
                                    </button>
                                </div>
                                {{-- Share button --}}
                                <div>
                                    {!! $shareComponents[$blog->id] !!}
                                </div>
                            </div>
                            <a href="{{ url('/pages/detailBlogs/' . $blog->id) }}">
                                <div class="flex justify-between mt-5 items-end text-md text-blue-800">
                                    <p>Read More</p>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.favorite-btn').forEach(button => {
            button.addEventListener('click', function() {
                const blogId = this.dataset.blogId;
                const formData = new FormData();
                formData.append('blog_id', blogId);
                formData.append('_token', '{{ csrf_token() }}');

                fetch('{{ route("favorite.add") }}', {
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
                        const heartIcon = this.querySelector('i');
                        const likesCount = this.querySelector('.likes-count');
                        // Toggle the heart icon class and likes count
                        if (heartIcon.classList.contains('fa-regular')) {
                            heartIcon.classList.remove('fa-regular', 'text-gray-500');
                            heartIcon.classList.add('fa-solid', 'text-red-500');
                        } else {
                            heartIcon.classList.remove('fa-solid', 'text-red-500');
                            heartIcon.classList.add('fa-regular', 'text-gray-500');
                        }
                        likesCount.textContent = ` ${data.likes}`;
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection

