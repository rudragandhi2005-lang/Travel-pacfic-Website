@include('adminheader')

<form method="POST" action="{{ route('product.update',$product->_id) }}" enctype="multipart/form-data">
    @csrf
  @method('put')

    <div class="col-6">
        <div class="mb-3">
            <label for="package_name" class="form-label">Package Name</label>
            <input type="text" name="package_name" value="{{$product->package_name}}" id="package_name" class="form-control" placeholder="Enter package name" />
            @error('package_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="package_desc" class="form-label">Package Description</label>
            <input type="text" name="package_desc"  value="{{$product->package_desc}}" id="package_desc" class="form-control" placeholder="Enter package description" />
            @error('package_desc')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="package_discount" class="form-label">Package Discount</label>
            <input type="text" name="package_discount" value="{{$product->package_discount}}" id="package_discount" class="form-control" placeholder="Enter package discount" />
            @error('package_discount')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="package_price" class="form-label">Package Price</label>
            <input type="text" name="package_price" value="{{$product->package_price}}" id="package_price" class="form-control" placeholder="Enter package price" />
            @error('package_price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="package_pic" class="form-label">Package Picture</label>
            <input type="file" name="package_pic" value="{{$product->package_pic}}" id="package_pic" class="form-control" />
            @error('package_pic')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" value="{{$product->duration}}" id="duration" class="form-control" placeholder="Enter duration" />
            @error('duration')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="route" class="form-label">Route</label>
            <input type="text" name="route" value="{{$product->route}}" id="route" class="form-control" placeholder="Enter route" />
            @error('route')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="detail_desc" class="form-label">Detail Description</label>
            <input type="text" name="detail_desc" value="{{$product->detail_desc}}" id="detail_desc" class="form-control" placeholder="Enter detail description" />
            @error('detail_desc')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="mb-3">
            <label for="category" class="form-label">Select Category</label>
            <select name="category" id="category" class="form-control">
                @foreach($cats as $item)
                @if(strcmp($item->category_name,$product->category)==0)
                    <option value="{{ $item->category_name }}" selected>{{ $item->category_name }}</option>
                    @else
                    <option value="{{ $item->category_name }}" >{{ $item->category_name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Update Product</button>
</form>

@include('adminfooter')