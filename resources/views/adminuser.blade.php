@include('adminheader')
<table class='table'>
    <thead>
        <tr>
            <th>srno</th>
            <th>username</th>
            <th>fullname</th>
            <th>Email</th>
            <th>Mobileno</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$loop->index +1}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->fullname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->mobileno}}</td>
                <td>{{$item->address}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('adminfooter')