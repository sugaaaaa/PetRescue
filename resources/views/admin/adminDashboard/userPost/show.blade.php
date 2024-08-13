@extends('admin.adminDashboard.dashboard')

@section('content')    
    <div class="mt-5 max-w-2xl ml-24">
        <div onclick="history.back()" class="text-end">
            <i class="fa-regular fa-circle-xmark text-4xl cursor-pointer"></i>
        </div>

        <div class="mb-4 mt-5 border-2 p-5">
            <div class="bg-gray-200 text-center font-blod py-2 rounded-lg">
                <h2 class="text-2xl">Post User</h2>
            </div>
            <div class="mt-5">
                <div class="flex justify-between">
                    <div class="text-xl">
                        <div>
                            <h4><strong>Title: </strong> {{ $post->title }}</h4>
                        </div>
                        <div>
                            <h4><strong>Description: </strong> {{ $post->description }} </h4>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="/userImage/{{ $post->images }}" alt="" class="w-[350px] h-[400px] object-cover rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
