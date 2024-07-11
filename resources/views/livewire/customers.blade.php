<div class="m-5">
    <div class="row">
        <div class="col-auto">

            <button wire:navigate href="customers/create" class="btn btn-success btn-sm">Create</button>
        </div>
        <div class="col-auto">
            <input type="text" placeholder="Search User" class="form-control" wire:model.live.debounce.150ms="search">
        </div>
    </div>

    <livewire:flash-message />

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>
                        <button wire:navigate href="/customers/view/{{ $value->id }}"
                            class="btn btn-primary btn-sm">View</button>
                        <button wire:navigate href="/customers/edit/{{ $value->id }}"
                            class="btn btn-secondary btn-sm">Edit</button>
                        <button wire:click="deleteCustomer({{ $value->id }})"
                            class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
