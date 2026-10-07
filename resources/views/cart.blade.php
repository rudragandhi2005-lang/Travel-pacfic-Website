@include('header')

<section>
   
    <div class="container">
        <h1>Cart</h1>
        <hr>

        <div class="row justify-content-between">
            <div class="col-7">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Pic
                            </th>
                           
                            <th>
                                Total
                            </th>
                            <th>
                                Remove
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            
                        <tr>
                            <td>{{$item->pname}}</td>
                            <td>{{$item->price}}</td>
                            <td><img src="{{$item->ppic}}" height="100" width="100" /></td>
                           
                            <td>{{$item->total}}</td>
                            <td><a href="/remove/{{$item->_id}}" class="btn btn-danger">Remove</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="col-3">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Address</h4>
                        <p class="card-text">{{$address}}</p>
                    </div>
                </div>

                <div class="card mt-3">

                  <div class="card-body">
                      <h4 class="card-title">Total</h4>
                      <p class="card-text">₹ {{$total}}</p>
                  </div>
              </div>

              <a href="/confirm" class="btn btn-success">Confirm Order</a>
            </div>


        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (Session::has('success'))
    
<script>
    Swal.fire({
        title: "Thank You!",
        text: "package is  successfully Book!!!",
        imageUrl:"https://media.tenor.com/S72N1icu9K8AAAAi/the-lind-hotels-thelindhotels.gif",
        imageWidth: 400,
        imageHeight: 400,
        imageAlt: "Custom image"
    });

</script>
@endif

@include('footer')