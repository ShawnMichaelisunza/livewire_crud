<div class="card">
    <h5 class="card-header">View Customer</h5>
    <div class="card-body">
      <h5 class="card-title">{{ $customer->name }}</h5>
      <p class="card-text">{{$customer->email}}</p>
      <p class="card-text">{{$customer->phone}}</p>
      <b wire:navigate href="{{route('index')}}" class="btn btn-danger btn-sm">back</b>
    </div>
  </div>
