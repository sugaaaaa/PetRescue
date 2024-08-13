<x-app-layout>
    <section>
        {{-- Banner --}}
        <div class="bg-[#F9F6E5] pt-20 pb-20 text-center">
            <div class="flex justify-center items-center gap-5">
                <h1 class="text-3xl font-bold border-r-2 border-gray-900 px-5">Detail Blog</h1>
                <a href="/">
                    <h2 class="text-xl">Home</h2>
                </a>
            </div>
            <p class="mt-5">Help Improve Animal Welfare in Cambodia!</p>
        </div>

        {{-- detail about pets here --}}
        <div class="max-w-screen-xl mx-auto mt-20">
            <div class="mt-4">
                <h1 class="text-gray-900 font-bold text-3xl">{{$blogdetail->title}}</h1>
                <div class="flex gap-5 mt-5 items-center">
                    <h4>Admin</h4>
                    <h4>{{ $blogdetail->created_at->format('F d, Y') }}</h4>
                    <div class="flex items-center gap-5">
                        <span class="text-lg font-semibold">Share to: </span>
                        {!! $shareComponent !!} 
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <div class="w-[800px] h-[500px]">
                    <img src="{{ asset('/blogs/' . $blogdetail->images) }}" alt="" class="w-full h-full object-cover rounded-3xl">
                </div>
            </div>
            <div class="text-lg mt-5">
                <p>
                    {{$blogdetail->content}}
                </p>
            </div>
        </div>
        
        {{-- donation --}}
        <div class="bg-[#F4C38F] py-10 mt-20">
            <div class="flex items-end justify-evenly max-w-screen-2xl mx-auto">
                <div>
                    <img src="{{URL::asset('/image/img-banner.png')}}" alt="">
                </div>

                {{-- Donation form --}}
                <div class="lg:w-[700px] rounded-lg sm:rounded-3xl bg-white p-5 mt-5 sm:p-10 lg:px-10 lg:py-10 shadow-[1px_0px_25px_0px_#cbcbcb]">
                    <form action="">
                        <div>
                            <h1 class="text-lg sm:text-4xl font-bold text-[#F4C38F] text-center sm:pb-5">Make a Donation!</h1>
                            <h3 class="text-sm sm:text-lg">Every donation, no matter how big or small, make a significant difference to our cause. Thank you for doing your part to help.</h3>    
                        </div>

                        {{-- name and email --}}
                        <div class="grid sm:grid-cols-2 gap-2">
                            <div class="mt-3">
                                <label for="name">Name</label>
                                <input type="text" class="w-full bg-[#F9F6E5] py-0.5 px-3 sm:py-2 sm:px-4 mt-2 rounded-md sm:rounded-lg" placeholder="Your name" required>
                            </div>
                            <div class="mt-3">
                                <label for="email">Email</label>
                                <input type="email" class="w-full bg-[#F9F6E5] py-0.5 px-3 sm:py-2 sm:px-4 mt-2 rounded-md sm:rounded-lg" placeholder="example@gmail.com" required>
                            </div>
                        </div>

                        {{-- donation amount --}}
                        <div class="mt-4">
                            <h1 class="mb-2 text-sm sm:text-lg">Donation amount</h1>
                            <div class="flex justify-between text-lg">
                                <div class="flex items-center">
                                    <input id="fiveDolarButton" data-modal-target="fiveDolarModal" data-modal-toggle="fiveDolarModal" type="radio" value="" name="default-radio" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="five-dolar" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">5$</label>
                                    <!-- Main modal -->
                                    <div id="fiveDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold ">
                                                            $5 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="fiveDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{asset('image/pay/five-dolar.jpg')}}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="tenDolarButton" data-modal-target="tenDolarModal" data-modal-toggle="tenDolarModal" type="radio" value="" name="default-radio" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="ten-dolar" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">10$</label>

                                    {{-- modal --}}
                                    <div id="tenDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold ">
                                                            $10 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tenDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{asset('image/pay/ten-dolar.jpg')}}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="fifteenDolarButton" data-modal-target="fifteenDolarModal" data-modal-toggle="fifteenDolarModal" type="radio" value="" name="default-radio" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="fifteen-dolar" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">15$</label>

                                    {{-- modal --}}
                                    <div id="fifteenDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold ">
                                                            $15 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="fifteenDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{asset('image/pay/fefteen-dollar.jpg')}}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <input id="twentyDolarButton" data-modal-target="twentyDolarModal" data-modal-toggle="twentyDolarModal" type="radio" value="" name="default-radio" class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="twenty-dolar" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">20$</label>

                                    {{-- modal --}}
                                    <div id="twentyDolarModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold ">
                                                            $20 for donation
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="twentyDolarModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{asset('image/pay/twenty-dollar.jpg')}}" alt="" class="rounded-[22px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-center m-5">
                                        <button id="visaButton" data-modal-target="visaModal" data-modal-toggle="visaModal" class="bg-[#F9F6E5] hover:bg-[#F4C38F] py-0.5 px-3 text-sm sm:text-lg sm:py-2 sm:px-4 rounded-md sm:rounded-lg" type="button">
                                            Visa
                                        </button>
                                    </div>

                                    <div id="visaModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        Donation with Card
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="visaModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                {{-- body model --}}
                                                <div>
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <div class="panel panel-default credit-card-box">
                                                            <div class="panel-body">
                                                                @if (Session::has('success'))
                                                                <div class="alert alert-success text-center">
                                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                                    <p>{{ Session::get('success') }}</p>
                                                                </div>
                                                                @endif
                                                                <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                                                                    @csrf
                                                                    <input type="text" id="name" name="name" placeholder="Your Name" class="w-full bg-[#F9F6E5] mt-5 py-0.5 px-3 sm:py-2 sm:px-4 mt-2 rounded-md sm:rounded-lg">
                                                                    <input type="email" id="email" name="email" placeholder="Your Email" class="w-full mt-5 bg-[#F9F6E5] py-0.5 px-3 mb-5 sm:py-2 sm:px-4 mt-2 rounded-md sm:rounded-lg">
                                                                    <input type='hidden' name='stripeToken' id='stripe-token-id'>
                                                                    <br>
                                                                    <div id="card-element" class="form-control"></div>
                                                                    <button id='pay-btn' class="btn btn-success mt-3 bg-[#607856] w-full text-center mt-5 py-2 rounded-lg" type="button" style="margin-top: 20px; width: 100%;padding: 7px;">
                                                                        Donate $0.1
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        {{-- Occupation (optional) --}}
                        <div class="mt-4">
                            <div class="grid sm:grid-cols-3 gap-2">
                                <div class="sm:col-span-2">
                                    <label for="occupation">Your Occupation</label>
                                    <input type="text" class="w-full mt-2 text-sm sm:text-lg bg-[#F9F6E5] py-0.5 px-3 sm:py-2 sm:px-4 rounded-md sm:rounded-lg" placeholder="Occupation (optional)">
                                    <p class="mt-4">Screenshort your payment and upload here <i class="fa-solid fa-hand-point-right"></i></p>
                                </div>
                                <div class="flex items-center justify-center w-full">
                                    <label for="images" class="flex flex-col items-center justify-center sm:w-full h-40 sm:h-64 border cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full relative">
                                            <i class="fa-regular fa-image sm:text-5xl text-gray-400"></i>
                                            <img src="" id="file-preview" class="text-white absolute h-full object-scale-down rounded-lg">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 text-sm">Click to upload</p>
                                            <input class="form-control hidden" type="file" name="images" id="images" accept="images/*" onchange="showFile(event)" required>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div> 
                            </div>
                            <div class="flex items-center mt-3">
                                <input id="default-checkbox" type="checkbox" value="" class="sm:w-4 sm:h-4 w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="text-sm sm:text-lg ms-2 text-gray-900 dark:text-gray-300">I would like to receive occasional updates via email</label>
                            </div>
                        </div>
    
                        {{-- button donation--}}
                        <button type="submit" class="text-white bg-[#607856] hover:bg-[#81A073] w-full py-0.5 sm:py-2 rounded-lg mt-4 sm:mt-10">Donation</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- You May Also Like --}}
        <div class="mt-24 max-w-screen-2xl mx-auto">
            <h1 class="text-3xl font-bold">You May Also Like</h1>
            <div class="grid grid-cols-4 gap-4 mt-5">
                {{-- Loop through related blogs --}}
                @if ($adminBlogs->isEmpty())
                    <p class="text-center mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">No Products Related.</p>
                @else
                    @foreach ($adminBlogs as $relatedBlog)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ url('/pages/detailBlogs/' . $relatedBlog->id) }}">
                                <img class="rounded-t-lg h-[350px] w-full object-cover" src="{{ asset('/blogs/' . $relatedBlog->images) }}" alt=""/>
                            </a>
                            <div class="p-5">
                                <p class="text-sm text-blue-500">{{ $relatedBlog->created_at->format('F d, Y') }}</p>
                                <a href="{{ url('/pages/detailBlogs/' . $relatedBlog->id) }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">{{ $relatedBlog->title }}</h5>
                                </a>
                                <div class="flex justify-between items-center mt-5 text-gray-600">
                                    {{-- Favorite count --}}
                                    <div>
                                        <button class="favorite-btn" data-blog-id="{{ $relatedBlog->id }}">
                                            <i class="fa-heart {{ $relatedBlog->is_favorited ? 'fa-solid text-red-500' : 'fa-regular text-gray-500' }}"></i> <span class="likes-count">{{ $relatedBlog->likes }}</span>
                                        </button>
                                    </div>
                                    {{-- Share button --}}
                                    <div>
                                        {!! $shareComponent !!} 
                                    </div>
                                </div>
                                <a href="{{ url('/pages/detailBlogs/' . $relatedBlog->id) }}">
                                    <div class="flex justify-between mt-5 items-end text-md text-blue-800">
                                        <p>Read More</p>
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
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
</x-app-layout>