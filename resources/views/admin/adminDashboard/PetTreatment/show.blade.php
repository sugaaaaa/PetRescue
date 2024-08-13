<div class="grid grid-cols-2 gap-5">
    <div class="text-lg text-start">
        <div>
            <h4><strong>Name: </strong> {{ $pet->name }}</h4>
        </div>
        <div>
            <h4><strong>Address: </strong> {{ $pet->address }} month</h4>
        </div>
        <div>
            <h4><strong>phoneNumber: </strong> {{ $pet->phoneNumber }}</h4>
        </div>
        <div>
            <h4><strong>email: </strong> {{ $pet->email }}</h4>
        </div>
        <div>
            <h4><strong>openDay: </strong> {{ $pet->openDay }}</h4>
        </div>
        <div>
            <h4><strong>timeOpen: </strong> {{ $pet->timeOpen }}</h4>
        </div>
        <div>
            <h4><strong>content: </strong> {{ $pet->content }}</h4>
        </div>
        <div>
            <h4><strong>location: </strong> {{ $pet->location }}</h4>
        </div>
    </div>
    <div>
        <div>
            <img src="/petTreatment/{{ $pet->images }}" alt="Pet Image" class="object-cover rounded-lg">
        </div>
    </div>
</div>
