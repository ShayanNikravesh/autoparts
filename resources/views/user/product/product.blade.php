@extends('user.layouts.master')

@section('content')

<!--Main:start-->
<main class="container mt-xxxx-large">
    <!--Product Details:start-->
    <section class="product-details">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 position-relative">
                <!--Product Incredible Offer:start-->
                <div class="product-incredible-offer ms-5">
                    
                </div>
                <!--Product Incredible Offer:end-->

                <!--Product Action:start-->
                <div class="product-action">
                    <div class="share mb-3" id="copyButton" data-bs-toggle="tooltip" data-bs-placement="right" title="اشتراک گذاری">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                        </svg>
                    </div>
                </div>
                <!--Product Action:end-->
                <!--Product Images:start-->
                <div class="product-images">
                    @foreach ($product->photos as $photo)
                        @if ($photo->pivot->sort == 1)
                            <img class="xzoom img-fluid" src="{{asset($photo->src)}}" xoriginal="{{asset($photo->src)}}"/>
                        @endif
                    @endforeach
                    <div class="xzoom-thumbs mt-2">
                        @foreach ($product->photos as $photo)
                            <a href="{{asset($photo->src)}}">
                                <img class="xzoom-gallery" src="{{asset($photo->src)}}">
                            </a>
                        @endforeach
                    </div>
                </div>
                <!--Product Images:end-->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <!--Product Details:start-->
                <div class="product-details">
                    <!--Product Title:start-->
                    <h1 class="fs-5 fw-bold">{{$product->title}}</h1>
                    <span class="gray-400 en-title d-block pb-1 fs-7">{{$product->english_title}}</span>
                    <!--Product Title:end-->

                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
                            <!--Product Details Right:start-->
                            <div class="product-details-right">
                                <div class="product-attr">
                                </div>
                                <div class="product-attr my-4">
                                    <p class="fs-5 fw-bold mb-2">ویژگی ها</p>
                                    <ul>
                                        <hr>
                                        <li class="fs-6">
                                            <span class="gray-600">دسته :</span>
                                            <span>{{$product->category->title}}</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">برند :</span>
                                            <span>{{$product->brand->title}}</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">کد محصول :</span>
                                            <span>{{$product->tracking_code}}</span>
                                        </li>
                                        <li class="fs-6">
                                            <span class="gray-600">مشخصات :</span>
                                            <span>{!!$product->description!!}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Product Details Right:end-->
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                            <!--Product Details Right:start-->
                            <div class="product-details-left p-3 border-radius-xl">
                                @switch($product->status)
                                        @case('active')
                                            @if ($product->stock > 0)
                                                <!--Status:start-->
                                                <div class="warranty my-2 border-bottom-gray-300 pb-2">
                                                    <span class="fw-bold  fs-7">
                                                        <i class="fa fa-warehouse pe-3 align-middle text-primary"></i>
                                                        موجود در انبار
                                                    </span>
                                                </div>
                                                <!--Status:end-->
                                                <!--Product Price:start-->
                                                @if ($product->price_discounted > 0)
                                                    <div class="price py-2 d-flex justify-content-between align-items-center">
                                                        <p class="gray-600 fs-7">
                                                            قیمت :
                                                        </p>
                                                        <div>
                                                            <span class="fw-bold pe-1 fs-4">{{priceFormatter($product->price)}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="price py-2 d-flex justify-content-between align-items-center">
                                                        <p class="gray-600 fs-7">
                                                            قیمت با تخفیف :
                                                        </p>
                                                        <div>
                                                            <span class="fw-bold pe-1 fs-4 text-danger">{{priceFormatter($product->price_discounted)}}</span>
                                                        </div>
                                                    </div>
                                                    @else
                                                        <div class="price py-2 d-flex justify-content-between align-items-center">
                                                            <p class="gray-600 fs-7">
                                                                قیمت :
                                                            </p>
                                                            <div>
                                                                <span class="fw-bold pe-1 fs-4">{{priceFormatter($product->price)}}</span>
                                                            </div>
                                                        </div>
                                                @endif    
                                                {{-- <div class="d-grid gap-2 mt-2">
                                                    <a href="" class="btn btn-primary border-radius-xl fs-6">افزودن به سبد خرید</a>
                                                </div> --}}
                                                <!--Product Price:end-->
                                            @else
                                                <!--Status:start-->
                                                <div class="warranty my-2 border-bottom-gray-300 pb-2">
                                                    <span class="fw-bold  fs-7">
                                                        <i class="fa fa-box pe-3 align-middle text-danger"></i>
                                                        این محصول ناموجود است.
                                                    </span>
                                                </div>
                                                <!--Status:end-->
                                            @endif
                                        @break
                                        @case('stop_selling')
                                            <!--Status:start-->
                                            <div class="warranty my-2 border-bottom-gray-300 pb-2">
                                                <span class="fw-bold  fs-7">
                                                    <i class="fa fa-box pe-3 align-middle text-warning"></i>
                                                    فروش این محصول متوقف شده است.
                                                </span>
                                            </div>
                                            <!--Status:end-->
                                        @break
                                        @case('unavailable')
                                            <!--Status:start-->
                                            <div class="warranty my-2 border-bottom-gray-300 pb-2">
                                                <span class="fw-bold  fs-7">
                                                    <i class="fa fa-box pe-3 align-middle text-danger"></i>
                                                    این محصول ناموجود است.
                                                </span>
                                            </div>
                                            <!--Status:end-->
                                        @break
                                        @default
                                    @endswitch
                            </div>
                            <!--Product Details Right:end-->
                        </div>
                    </div>
                </div>
                <!--Product Details:end-->
            </div>
        </div>
    </section>
    <!--Product Details:end-->

    <!--Product Attr:start-->
    <div class="product-attr border-top custom-box-shadow-s-1-bottom my-5">
        <!--Slider:start-->
        {{-- <div class="swiper productAttr">
            <div class="swiper-wrapper">

                <!--Attr Item:start-->
                <div class="swiper-slide">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <p class=" fs-8 gray-500">
                            <img src="{{asset('user_assets/img/support%20(1).svg')}}" alt="" title="" class="img-fluid p-3">
                            24 ساعته، 7 روز هفته
                        </p>
                    </div>
                </div>
                <!--Attr Item:end-->

                <!--Attr Item:start-->
                <div class="swiper-slide">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <p class=" fs-8 gray-500">
                            <img src="{{asset('user_assets/img/days-return%20(1).svg')}}" alt="" title="" class="img-fluid p-3">
                            هفت روز ضمانت بازگشت کالا
                        </p>
                    </div>
                </div>
                <!--Attr Item:end-->

                <!--Attr Item:start-->
                <div class="swiper-slide">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <p class=" fs-8 gray-500">
                            <img src="{{asset('user_assets/img/express-delivery%20(1).svg')}}" alt="" title="" class="img-fluid p-3">
                            امکان تحویل اکسپرس
                        </p>
                    </div>
                </div>
                <!--Attr Item:end-->

                <!--Attr Item:start-->
                <div class="swiper-slide">
                    <div class="brands-item d-flex justify-content-center align-items-center">
                        <p class=" fs-8 gray-500">
                            <img src="{{asset('user_assets/img/original-products%20(1).svg')}}" alt="" title="" class="img-fluid p-3">
                            ضمانت اصل بودن کالا
                        </p>
                    </div>
                </div>
                <!--Attr Item:end-->

            </div>
        </div> --}}
        <!--Slider:end-->
    </div>
    <!--    Product Attr:end-->

    <!--Product Tabs:start-->
    <section class="product-tabs mt-5">
        <ul class="nav nav-tabs">
            {{-- <li class="nav-item fs-7">
                <a class="nav-link active custom-link" href="#attributes" data-bs-toggle="tab">
                مشخصات
                </a>
            </li> --}}
            <li class="nav-item fs-7">
                <a class="nav-link custom-link" href="#productCheckExpert" data-bs-toggle="tab">
                بررسی
                </a>
            </li>
        </ul>
        <div class="tab-content p-3">
            
            <!--Product Info:start-->
            {{-- <div class="tab-pane fade show active" id="attributes">
                {!!$product->description!!}
            </div> --}}
            <!--Product Info:end-->

            <!--Product Check Expert:start-->
            <div class="tab-pane fade" id="productCheckExpert">
                <div class="product-check-item mb-3">
                    <div class="product-check-item-img">
                        {!!$product->review!!}
                    </div>
                </div>
            </div>
            <!--Product Check Expert:end-->

            <!--Product Comments:start-->
            
            <!--Product Comments:end-->
        </div>
    </section>
    <!--Product Tabs:end-->

     <!--Similar Products:start-->
    
    <!--Similar Products:end-->

</main>
<!--Main:end-->
<script>
    document.getElementById('copyButton').addEventListener('click', function() {
        // لینک صفحه را دریافت کنید
        const url = window.location.href;

        // ایجاد یک عنصر موقت input برای کپی کردن لینک
        const tempInput = document.createElement('input');
        tempInput.value = url;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        // نمایش پیغام موفقیت
        alert('لینک کپی شد.');
    });
</script>

@endsection