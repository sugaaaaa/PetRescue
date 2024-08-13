<div>
    <form action="/admin/adminDashboard/blogs/create" method="POST" enctype="multipart/form-data">
        
        {!! csrf_field() !!}

        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div class="sm:col-span-2">
                <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name" required>
            </div>

            <div>
                <label for="content" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Content</label>
                <textarea id="content" name="content" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description..." required></textarea>                    
            </div>

            <div>
                <div class="flex items-center justify-center w-full">
                    <label for="images" class="flex flex-col items-center justify-center w-full h-[500px] cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full relative">
                            <i class="fa-regular fa-image text-9xl text-gray-400"></i>
                            <img src="" id="file-preview" class="text-white absolute w-full h-full object-cover rounded-lg rounded-lg">
                            <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <input class="form-control hidden" type="file" name="images" id="images" accept="images/*" onchange="showFile(event)" required>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <button type="submit" name="submit" class="text-white bg-gray-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Add
            </button>
            <button type="reset" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                Clear
            </button>
        </div>
    </form>
</div>

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