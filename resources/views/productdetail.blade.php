@include('header')

<section id="center" class="center_o bg_gray pt-2 pb-2">
    <div class="container-xl">
        <div class="row center_o1">
            <div class="col-md-5">
                <div class="center_o1l">
                    <h2 class="mb-0">Product Detail</h2>
                </div>
            </div>
            <div class="col-md-7">
                <div class="center_o1r text-end">
                    <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i
                                class="fa fa-caret-right"></i></span> Product Detail</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="detail" class="p_4">
    <div class="container-xl">
        <div class="row detail_1">
            <div class="col-md-5">
                <div class="detail_1l">
                    <img src="{{$product->package_pic}}" class="d-block w-100" alt="abc">

                </div>
            </div>
            <div class="col-md-7">
                <div class="detail_1r">
                    <h2>{{$product->package_name}}</h2>
                    <h6 class="font_14 mt-3 col_pink ">
                        <span class="col_yell">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-sta-or"></i>
                        </span>
                        - 3 Customer Reviews
                    </h6>
                    <h4 class="mt-3"><span class="me-2">₹ {{$product->package_price}}</span> <span
                            class="fs-6 text-decoration-line-through col_light">{{$product->package_discount}} %</span></h4>
                    <p>package description: {{$product->package_desc}}</p>
                    <p>duration: {{$product->duration}}</p>
                    <p>route : {{$product->route}}</p>
                    <p>detail description: {{$product->detail_desc}}</p>
                    <h6 class="mt-4 mb-0 text-uppercase"><a class="button" href="/addcart/{{$product->_id}}">Book Now</a></h6>
                   
                    <p>Category: <a class="col_pink hover_white" href="">category</a></p>
                    
                </div>
            </div>
        </div>
        
        



    </div>
</section>
@include('footer')