<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div>
                    @error('name')
                        <span class="text-danger" style="font-size: 12px; ">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div>
                    @error('email')
                        <span class="text-danger" style="font-size: 12px; ">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone number</label>
                <input wire:model="phone" type="test" class="form-control" id="exampleInputPassword1">
                <div>
                    @error('phone')
                        <span class="text-danger" style="font-size: 12px; ">*{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:navigate href="{{route('index')}}" class="btn btn-danger btn-sm">Back</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
