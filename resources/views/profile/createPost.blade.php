<x-app-layout>
    <div class="max-w-screen-lg mx-auto">
        <div class="py-5">
            <a href="/profile/userPost">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>
        <div class="w-full">
            <form method="POST" action="{{ route('profile.storePost') }}" enctype="multipart/form-data">

                {!! csrf_field() !!}
                <div class="flex gap-5">
                    <div>
                        <div class="flex items-center justify-center border-dashed border-2 border-gray-400 rounded-2xl bg-gray-200">
                            <label for="images" class="flex flex-col items-center justify-center w-[375px] h-[455px] cursor-pointer">
                                <div class="flex flex-col items-center justify-center w-full h-full relative">
                                    <i class="fa-regular fa-image text-9xl text-gray-400"></i>
                                    <img src="" id="file-preview" class="absolute w-full h-full object-cover rounded-2xl">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <input class="form-control hidden" type="file" name="images[]" id="images" accept="image/*" onchange="showFile(event)" required multiple>
                                </div>
                            </label>
                        </div> 
                    </div>
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add a title" required>
                        </div>
    
                        <div class="mb-5">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add a detailed description here..."></textarea>
                        </div>
    
                        <div class="flex items-center space-x-4">
                            <button type="submit" class="bg-[#F4C38F] hover:bg-[#F7CEA3] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Create Post
                            </button>
                            <button type="reset" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                Clear
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
<script>
    function showFile(event){
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('file-preview');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>