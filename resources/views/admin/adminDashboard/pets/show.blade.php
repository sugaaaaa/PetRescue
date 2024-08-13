<div class="grid grid-cols-2 gap-5">
    <div class="text-lg text-start">
        <div>
            <h4><strong>Name: </strong> {{ $pet->name }}</h4>
        </div>
        <div>
            <h4><strong>Age: </strong> {{ $pet->age }} month</h4>
        </div>
        <div>
            <h4><strong>Sex: </strong> {{ $pet->sex }}</h4>
        </div>
        <div>
            <h4><strong>Vaccine: </strong> {{ $pet->vaccine }}</h4>
        </div>
        <div>
            <h4><strong>Content: </strong> {{ $pet->content }}</h4>
        </div>
    </div>
    <div>
        <div>
            <img src="/images/{{ $pet->images }}" alt="Pet Image" class="object-cover rounded-lg">
        </div>
    </div>
</div>
