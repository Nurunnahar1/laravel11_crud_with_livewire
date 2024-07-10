<div class="card offset-3 col-6">
    {{-- {{$getRecord->id}} --}}
    <h5 class="card-header">Customer View</h5>
    <div class="card-body">
        <h5 class="card-title">ID : {{ $getRecord->id }}</h5>
        <h5 class="card-title">Name : {{ $getRecord->name }}</h5>
        <h5 class="card-title">Email : {{ $getRecord->email }}</h5>
        <h5 class="card-title">Phone : {{ $getRecord->phone }}</h5>
        <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
    </div>
</div>
