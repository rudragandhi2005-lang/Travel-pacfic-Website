@include('adminheader')


<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">

<div class="container">
    <a href="{{ route('category.create') }}" class="btn btn-danger">+ Add Category</a>





    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sr No.</th>
                <th scope="col">Category name</th>
                <th scope="col">Category Pic</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $item->category_name }}</td>
                    <td><img src="{{ $item->category_pic }}" height="100" width="100" alt=""></td>
                    <td>
                        <a href="{{ Route('category.edit', $item->_id ) }}" class="btn btn-warning">Edit</a>
                        <form class="d-inline" onsubmit="onDelete(event)" action="{{ Route('category.destroy', $item->_id ) }}"
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
    {{ $data->links() }}
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

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

@include('adminfooter')
