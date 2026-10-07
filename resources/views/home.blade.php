@include('header')



<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Pacific Provide Places</span>
                <h2 class="mb-4">Select Your Destination</h2>
            </div>
        </div>
    </div>
    <div class="container container-2">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-destination owl-carousel ftco-animate">

                    @foreach ($cats as $item)
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img"
                                    style="background-image: url({{ $item->category_pic }});">
                                    <div class="text">
                                        <h3>{{ $item->category_name }}</h3>
                                    </div>
                                </a>
                            </div>


                        </div>
                    @endforeach

                </div>
            </div>
        </div>
</section>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Destination</span>
                <h2 class="mb-4">Tour package</h2>
            </div>
        </div>
        <div class="row">
        @foreach ($prods as $item)

            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="/detail/{{ $item->_id }}" class="img" style="background-image: url({{ $item->package_pic }});">
                        <span class="price">{{ $item->package_price }}/person</span>
                    </a>
                    <div class="text p-4">
                        <span class="days">{{ $item->package_name }}</span>
                        <h3><a href="#">{{ $item->category }}</a></h3>
                        <p class="location"><span class="fa fa-map-marker"></span> {{ $item->route }}</p>
                        <ul>
                            <li><span class="">{{ $item->duration }} days</span></li>
                            <li><span class=""></span>{{ $item->package_price }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




@include('footer')
