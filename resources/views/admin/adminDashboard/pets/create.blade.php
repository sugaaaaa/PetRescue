<div>
    <form action="/admin/adminDashboard/pets/create" method="post" enctype="multipart/form-data">
            
        {!! csrf_field() !!}

        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name" required>
            </div>
            <div>
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                <input type="text" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Age" required>
            </div>
            <div>
                <label for="sex" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
                <select id="sex" name="sex" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @php
                        $json = '["Female", "Male"]';
                        $options = json_decode($json);
                    @endphp
                    @foreach ($options as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="Vaccine" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vaccine</label>
                <select name="vaccine" id="Vaccine" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @php
                        $vaccineOptions = [
                            "Finish",
                            "Have vaccine 1 time",
                            "Have vaccine 2 times",
                            "Have vaccine 3 times",
                            "Not get vaccine yet"
                        ];
                    @endphp
                    @foreach ($vaccineOptions as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mt-5">
                <div class="flex items-center justify-center w-full">
                    <label for="images" class="flex flex-col items-center justify-center w-full h-[400px] cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full relative">
                            <i class="fa-regular fa-image text-9xl text-gray-400"></i>
                            <img src="" id="file-preview" class="text-white absolute w-full h-full object-cover rounded-lg">
                            <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <input class="form-control hidden" type="file" name="images" id="images" accept="images/*" onchange="showFile(event)" required>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 
            </div>

            <div class="mt-5">
                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="content" name="content" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description..." required></textarea>                    
                </div>

                <div class="flex gap-2 font-medium bg-blue-600 px-5 py-2.5 text-center text-white rounded-lg mt-5">
                    <label for="category">Category:</label><br>
                    <select name="category_name" class="form-control hover:cursor-pointer bg-blue-600">
                        @foreach($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
