@include('adminheader')



<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card bg-primary">
                
                <div class="card-body">
                    <div class="card-title">
                        <h2>Revenue</h2>
                    </div>
                    <h4 class="card-title">{{$r}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card bg-warning">
                
                <div class="card-body">
                    <div class="card-title">
                        <h2>Category</h2>
                    </div>
                    <h4 class="card-title">{{$c_count}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card bg-success">
                
                <div class="card-body">
                    <div class="card-title">
                        <h2>Package</h2>
                    </div>
                    <h4 class="card-title">{{$p_count}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4 mt-3">
            <div class="card bg-danger">
                
                <div class="card-body">
                    <div class="card-title">
                        <h2>Bookings</h2>
                    </div>
                    <h4 class="card-title">{{$o_count}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4 mt-3">
            <div class="card bg-info">
                
                <div class="card-body">
                    <div class="card-title">
                        <h2>Users</h2>
                    </div>
                    <h4 class="card-title">{{$u_count}}</h4>
                </div>
            </div>

        </div>
        

    </div>
</div>

<hr>
<h1>Recent Booking</h1>
<hr>

<table class="table table-striped col-6" >
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Username</th>
            <th>Pic</th>
            <th>Package name</th>
            <th>Total amount</th>

        </tr>
    </thead>
    <tbody>

    @foreach ($data as $item)
     <tr>   
    <td>{{$loop->index + 1 }}</td>
    <td>{{$item->username}}</td>
    <td><img src="{{$item->ppic}}" height="50" width="50" alt=""></td>
    <td>{{$item->pname}}</td>
    <td>{{$item->total}}</td>
    </tr>
    @endforeach




    </tbody>
</table>
</div>


@include('adminfooter')