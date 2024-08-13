@extends('profile.edit')
@section('content')
    @if(!Auth::user()->hasRole('Admin'))
         <div class="max-w-screen-xl mx-auto">
            <h1 class="text-xl font-bold">Keep track of what inspires you</h1>
            <p>Boards let you organize the Pins you save into collections. Start from a cluster below, or create your own.</p>     
            <br>   
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-5 gap-4 mt-5">
                    @forelse($post as $postBlog)
                        <div class="bg-white shadow-md mb-4 p-5 border rounded-lg" data-order-id="{{ $postBlog->id }}">
                            <a href="{{ url('/profile/detailPost/' . $postBlog->id) }}">
                                <img src="{{ asset('/userImage/' . $postBlog->images) }}" alt="" class="w-full h-full object-cover rounded-xl">
                            </a>
                        </div>
                    @empty
                        <p>Create your Pets blog content with us</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
        