@extends('user.layouts.master')

@section('content')

<!--Main:start-->
<main class="container mt-xxxx-large">
    <!--Search:start-->
    <div class="search">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                <!--Search Filters:start-->
                @include('user.layouts.filter')
                <!--Search Filters:end-->
            </div>
            @if (count($products))
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
                    <!--Products:start-->
                    <div class="products">
                        <!--Product Ordering:start-->
                        <div class="d-flex justify-content-between align-items-center border-bottom-gray-300 pb-2 product-ordering">
                            <p class="count-of-comments">
                                تعداد کالا : {{count($products)}}
                            </p>
                        </div>
                        <!--Product Ordering:end-->
                        <div class="row">
                            @foreach ($products as $product)
                                <!--Product Item:start-->
                                <div class="product-item col-sm-12 col-md-6 col-lg-4 col-xl-3 position-relative">

                                    <!--Product Item Image:start-->
                                    <div class="product-item-img mt-3">
                                        @php
                                            $photo = $product->photos->first();
                                        @endphp
                                        @isset($photo)
                                            <img src="{{asset($photo->src)}}" alt="img" class="img-fluid">
                                        @endisset
                                    </div>
                                    <!--Product Item Image:end-->

                                    <!--Product Item Desc:start-->
                                    <div class="product-item-title">
                                        <h3 class="fs-7 fw-bold">{{$product->title}}</h3>
                                    </div>
                                    <h3 class="gray-400 en-title d-block pb-1 fs-7">{{$product->english_title}}</h3>
                                    <!--Product Item Desc:end-->

                                    <!--Product Item Price:start-->
                                    <div class="product-item-price text-end my-3">
                                        <p class="fw-bold">
                                            {{priceFormatter($product->price)}}
                                        </p>
                                    </div>
                                    <!--Product Item Price:end-->

                                    <!--Product Link:start-->
                                    <a target="_blank" href="{{ route('single_product',$product->tracking_code) }}" class="stretched-link"></a>
                                    <!--Product Link:end-->
                                </div>
                                <!--Product Item:end-->
                            @endforeach
                        </div>
                    </div>
                    <!--Products:end-->
                    
                    <!--Pagination:start-->
                    <div class="mt-3 d-flex justify-content-center align-items-center">
                        {{ $products->links('vendor.pagination.bootstrap-4') }}
                    </div>
                    <!--Pagination:end-->
                </div>
                @else
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <div class="mt-3 border border-radius-xl py-2 px-4">
                            <p class="fw-bold">
                                <i class="fa fa-info-circle text-dark pe-2"></i>
                                کالایی با این مشخصات یافت نشد.
                            </p>
                            <p class="fs-7 fw-lighter">پیشنهاد می‌کنیم فیلترها را تغییر دهید.</p>
                        </div>
                    </div>
                </div>
            @endif
            
        </div>
    </div>
    <!--Search:end-->
</main>
<!--Main:end-->

@endsection()