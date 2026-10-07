@include('adminheader')

<form  method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf

    
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">package_name</label>
            <input type="text" name="package_name" id="" class="form-control" placeholder=""aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('package_name')
        {{$message}}
        @enderror
    </span>
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">package_desc</label>
            <input type="text" name="package_desc" id="" class="form-control" placeholder=""aria-describedby="helpId">
        </div>
    </div>
    <span class="text-danger">
        @error('package_desc')
        {{$message}}
        @enderror
    </span>
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">package_discount</label>
            <input type="text" name="package_discount" id="" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('package_discount')
        {{$message}}
        @enderror
    </span>

    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">package_price</label>
            <input type="text" name="package_price" id="" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('package_price')
        {{$message}}
        @enderror
    </span>
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">package_pic</label>
            <input type="file" name="package_pic" id="" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('package_pic')
        {{$message}}
        @enderror
    </span>
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">duration</label>
            <input type="text" name="duration" id="" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('duration')
        {{$message}}
        @enderror
    </span>
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">route</label>
            <input type="text" name="route" id="" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('route')
        {{$message}}
        @enderror
    </span>
    <div class="col-6">
        <div class="mb-3">
            <label for="" class="form-label">detail_desc</label>
            <input type="text" name="detail_desc" id="" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>
    </div>
    <span class="text-danger">
        @error('detail_desc')
        {{$message}}
        @enderror
    </span>
    <div>
        <select name="category" id="" class="form-control">
            @foreach($cats as $item)
            <option value="{{$item->category_name}}" class="form-control">{{$item->category_name}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-danger" type="submit">Add product</button>
</form>

@include('adminfooter')