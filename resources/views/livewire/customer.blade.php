<div class="mt-5">
    <div>
        <h5>Welcome  {{ Auth::user()->name }}</h5>
    </div>
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                <span>{{ session('success')}}</span>
            </div>
        @endif
    </div>
    <div class="row my-3">
        <div class="col-auto">
            <button wire:navigate  href="{{route('create')}}" class="btn btn-success ">Create</button>
        </div>
        <div class="col-auto">
            <input wire:model.live.deboance.150ms="search" type="text" class="form-control" placeholder="Search">
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Costumer Email</th>
            <th scope="col">Costumer Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $customers as $customer)
          <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>
                <button wire:navigate href="{{route('view', $customer->id)}}" class="btn btn-primary btn-sm">View</button>
                <button wire:navigate href="{{route('edit', $customer->id)}}" class="btn btn-secondary btn-sm">Edit</button>
                <button wire:click="delete({{ $customer->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div>
        {{$customers->links()}}
      </div>
</div>
