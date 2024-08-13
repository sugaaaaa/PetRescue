<div class="grid grid-cols-2 gap-5">
    <div class="text-lg text-start">
        <div>
            <h4 class="text-2xl font-semibold"> {{ $blog->title }}</h4>
        </div>
        <div class="mt-2">
            <h4 class="text-sm text-gray-500"> {{ $blog->content }}</h4>
        </div>
    </div>
    <div>
        <div>
            <img src="/blogs/{{ $blog->images }}" alt="Pet Image" class="object-cover rounded-lg">
        </div>
    </div>
</div>