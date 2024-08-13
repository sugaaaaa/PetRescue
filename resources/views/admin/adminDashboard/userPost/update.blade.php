@extends('admin.adminDashboard.dashboard')

@section('content')    
    <div class="max-w-2xl mx-auto">
        <div onclick="history.back()" class="mb-5 text-end">
            <i class="fa-regular fa-circle-xmark text-4xl cursor-pointer"></i>
        </div>

        <div class="p-4 bg-white rounded-lg shadow-2xl dark:bg-gray-800 sm:p-5">
            <div class="border-b py-2 text-xl font-semibold">
                <h2>Please update the Post information</h2>
            </div>

            <div class="card-body mt-5">
                <div class="row">
                    <div class="col">
                        <form class="form-group mt-" method="post"
                            action="{{ url('/admin/adminDashboard/userPost/update/' . $post->id)}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <div class="flex gap-4">
                                <div class="flex flex-col w-full">
                                    <label for="formGroupExampleInput2">Title</label>
                                    <input value="{{ $post->title }}" type="text" name="title" id="title" required placeholder="title" class="bg-gray-50 border border-gray-300 py-1.5 px-4 rounded-lg mt-2 text-sm">
                                </div>
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="formGroupExampleInput2">Description</label>
                                <textarea class="border border-gray-300 bg-gray-50 mt-2 p-2.5 rounded-lg text-sm" rows="5" name="description" id="description" required placeholder="Content">{{ $post->description }}</textarea>
                            </div>

                            <div class="sm:col-span-2 mt-5">
                                <h1 class="mb-2">Chose New Image</h1>
                                <div class="flex items-center justify-center w-full">
                                    <label for="image" class="flex flex-col items-center justify-center w-full h-[500px] cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full relative">
                                            <i class="fa-regular fa-image text-9xl text-gray-400"></i>
                                            <img src="{{ asset('userImage/' . $post->images) }}" id="image-preview" class="text-white absolute w-full h-full object-cover rounded-lg">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <input class="form-control hidden" type="file" name="image" id="image" accept="images/*" onchange="showFile(event)">
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div> 
                            </div>
                            
                            <button type="submit" name="submit" class="mt-10 px-4 py-2 text-white rounded-lg hover:bg-blue-400 bg-blue-500">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function () {
                var dataURL = reader.result;
                var output = document.getElementById('image-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection

