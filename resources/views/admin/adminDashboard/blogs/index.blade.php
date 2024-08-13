@extends('admin.adminDashboard.dashboard')

@section('content')
<section>
    <div class="m-5">
        <a href="{{url('admin/adminDashboard/blogs/index')}}" class="font-bold">
            Blogs
        </a>
    </div>
    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
        <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
            <div class="flex items-center flex-1 space-x-4">
                <h5>
                    <span class="text-gray-500">All Blogs:</span>
                    <span class="dark:text-white">2</span>
                </h5>
                <h5>
                    <span class="text-gray-500">Total Blogs:</span>
                    <span class="dark:text-white">$88.4k</span>
                </h5>
                {{-- for search --}}
                <div class="card-header">
                    <div class="row">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <div class="">
                            <form class="" role="search" action="{{ route('pets.index') }}" method="GET" name="search">
                                <input name="query" type="search" placeholder="Search" aria-label="Search" class="bg-blue-200 px-10 py-1.5 rounded-lg" required>
                                <button class="text-gray-700 btn btn-outline-success bg-blue-200 hover:bg-blue-400 rounded-lg px-4 py-1.5" type="submit">Search</button>
                            </form>
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                <!-- Modal toggle -->
                <div class="flex justify-center m-5">
                    <button id="addBlogsButton" data-modal-target="addBlogsModal" data-modal-toggle="addBlogsModal" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-blue-200 border border-blue-300 rounded-lg focus:outline-none hover:bg-blue-400 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add new Blogs
                    </button>
                </div>

                <div id="addBlogsModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-screen-2xl h-[800px]">
                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                    Add new blog about pet
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="addBlogsModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            @include('admin.adminDashboard.blogs.create')
                        </div>
                    </div>
                </div>
            </div> 
        </div>

         {{-- Display --}}
         @if(isset($blogs) && $blogs->count() > 0)
         <div class="overflow-x-auto">
             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                 <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                         <th scope="col" class="px-4 py-3 text-center">Id</th>
                         <th scope="col" class="px-4 py-3">Title</th>
                         <th scope="col" class="px-4 py-3">Content</th>
                         <th scope="col" class="px-4 py-3 text-center">Images</th>
                         <th scope="col" class="px-4 py-3 text-center">Like</th>
                         <th scope="col" class="px-4 py-3 text-center">Share</th>
                         <th scope="col" class="px-4 py-3 text-center">Views</th>
                         <th scope="col" class="px-4 py-3 text-center">Actions</th>
                         <th scope="col" class="px-4 py-3 text-center">Delete/Edite</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach($blogs as $blog)
                        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                            {{-- Id --}}
                            <td scope="row" class="w-4 px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>

                            {{-- title --}}
                            <td class="px-4 py-2 text-start font-medium text-gray-900 dark:text-white w-[240px]"><p class="line-clamp-2">{{$blog->title}}</p></td>

                            {{-- content --}}
                            <td class="px-4 py-2 text-start font-medium text-gray-900 dark:text-white w-[240px]"><p class="line-clamp-2">{{$blog->content}}</p></td>

                            {{-- Image --}}
                            <th scope="row" class="flex items-center justify-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ asset('/blogs/' . $blog->images) }}" alt="pro-image" class="w-10 h-8 mr-3 object-cover">
                            </th>

                            {{-- likes --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$blog->likes}}</td>

                            {{-- shares --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $blog->shares  }}</td>

                            {{-- views --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $blog->views }}</td>

                            {{-- Actions --}}
                            <td class="px-4 py-2 font-medium text-gray-900 dark:text-white text-center">
                                <div class="flex justify-center">
                                    <button id="viewBlogsButton" data-modal-target="{{"view" . $blog->id}}" data-modal-toggle="{{"view" . $blog->id}}" type="button">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </button>
                                </div>
                            
                                <div id="{{"view" . $blog->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                                    Blogs Show
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{"view" . $blog->id}}">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            @include('admin.adminDashboard.blogs.show')
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- Edit and Delete --}}
                            <td class="px-4 py-2 text-center">
                                <button id="{{ $loop->iteration }}" data-dropdown-toggle="{{"blog" . $blog->id}}" class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="{{ "blog" . $blog->id}}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="pt-4 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{ $loop->iteration }}">
                                        
                                        {{-- delete --}}
                                        <li>
                                            <form method="POST" action="{{  url('/admin/adminDashboard/blogs/index/'. $blog->id)}}" accept-charset="UTF-8" style="display:inline" class="block py-4 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                {{ csrf_field() }}
                                                <button type="submit" class="w-full text-start" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash" class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </li>

                                        {{-- edit --}}
                                        <li>
                                            <a href="{{ url('/admin/adminDashboard/blogs/update/' . $blog->id)}}" title="Edit Item" class="block text-start py-4 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i>
                                                Edit
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
         </div>
        </div> 
    @endif

<script>
   $('.like-btn').on('click', function() {
        var blogId = $(this).data('blog-id');
        $.ajax({
            url: '/admin/adminDashboard/blogs/like/' + blogId,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
    $('.dislike-btn').on('click', function() {
        var blogId = $(this).data('blog-id');
        $.ajax({
            url: '/admin/adminDashboard/blogs/dislike/' + blogId,
            method: 'PUT',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
@endsection
