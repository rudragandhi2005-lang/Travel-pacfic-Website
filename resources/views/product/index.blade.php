@include('adminheader')
<a href="{{route("product.create")}}" class="btn btn-outline-danger">Add product</a>
<table class="table">
    <thead>
        <tr>
            <th>sr no</th>
            <th>Category</th>
            <th>packge_name</th>
            <th>packge_desc</th>
            <th>packge_discount</th>
            <th> packge_price</th>
            <th> package_pic</th>
            <th>duration</th>
            <th>route</th>
            <th>detail_desc</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
            <tr>
                <td>{{$loop->index+ 1}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->package_name}}</td>
                <td>{{$item->package_desc}}</td>
                <td>{{$item->package_discount}}</td>
                <td>{{$item->package_price}}</td>
                <td><img src="{{$item->package_pic}}" height="100" width="100" alt=""></td>
                <td>{{$item->duration}}</td>
                <td>{{$item->route}}</td>
                <td>{{$item->detail_desc}}</td>
                <td>

                    <a href="{{ Route('product.edit', $item->_id ) }}" class="btn btn-warning">Edit</a>
                        <form class="d-inline" onsubmit="onDelete(event)" action="{{ Route('product.destroy', $item->_id ) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js
"></script>

@if (Session::get('success'))
    <script>
        Swal.fire({

            icon: "success",
            title: "{{ Session::get('success') }}",
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

<script>
    function onDelete(event) {
        event.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {

                event.target.submit();

            }
        });
    }
</script>
{{$data->links()}}
@include('adminfooter')