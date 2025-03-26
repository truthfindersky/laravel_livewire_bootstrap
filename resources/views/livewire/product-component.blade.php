<div class="row">
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Sales Overview</h5>
                    </div>
                </div>

                <!-- Form for Adding/Editing Product -->
                <form wire:submit.prevent="{{ $product_id ? 'update' : 'store' }}" class="space-y-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" wire:model="name" id="name" placeholder="Product Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea wire:model="description" id="description" placeholder="Product Description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" wire:model="price" id="price" placeholder="Product Price" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">
                        {{ $product_id ? 'Update' : 'Add' }} Product
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>${{ $product->price }}</td>
                                <td>
                                    <button wire:click="edit({{ $product->id }})" class="btn btn-sm btn-info">Edit</button>
                                    <button wire:click="delete({{ $product->id }})" class="btn btn-sm btn-danger ml-2">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


