@extends('user.layouts.master')

@section('content')
    <!--Story Section:start-->
    <div class="container mt-xxxx-large">
        {{-- <div class="story-section my-3 text-center px-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-around align-items-center mb-3">
                    <!--                Story Item:start-->
                    <div class="story-item">
                        <img src="{{asset('user_assets/img/story-1.jpg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">سشوار</strong>
                    </div>
                    <!--                Story Item:end-->

                    <!--                Story Item:start-->
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story1">
                        <img src="{{asset('user_assets/img/story-2.jpg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">دکوری</strong>
                    </div>
                    <!--                Story Item:end-->

                    <!--                Story Item:start-->
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story1">
                        <img src="{{asset('user_assets/img/story-3.jpg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">تخفیف پلاس</strong>
                    </div>
                    <!--                Story Item:end-->

                    <!--                Story Item:start-->
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story1">
                        <img src="{{asset('user_assets/img/story-4.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">بهداشتی</strong>
                    </div>
                    <!--                Story Item:end-->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-around align-items-center mb-3">
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story5">
                        <img src="{{asset('user_assets/img/story-5.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">وقت سفر</strong>
                    </div>
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story6">
                        <img src="{{asset('user_assets/img/story-7.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">پیراهن</strong>
                    </div>
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story7">
                        <img src="{{asset('user_assets/img/story-8.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">آرایش صورت</strong>
                    </div>
                    <div class="story-item" data-bs-toggle="modal" data-bs-target="#story8">
                        <img src="{{asset('user_assets/img/story-6.jpeg')}}" alt="" class="img-fluid border-radius-circle"
                            data-bs-toggle="modal" data-bs-target="#storyBanners">
                        <strong class="fs-7">برترین ها</strong>
                    </div>
                </div>
            </div>
            <!--        Show Story Details:start-->
            <div class="modal fade" id="storyBanners" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <button type="button" data-bs-dismiss="modal" class="btn-close btn-close-white"></button>
                        <div class="swiper storySlider w-100 position-relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-2.jpeg')}}" alt=""/></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-3.jpeg')}}" alt=""/></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-4.jpeg')}}" alt=""/></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-5.jpeg')}}" alt=""/></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-6.jpg')}}" alt=""/></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-7.jpg')}}" alt=""/></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" title=""><img src="{{asset('user_assets/img/story-banner-8.jpg')}}" alt=""/></a>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>

                        </div>

                    </div>
                </div>
            </div>
            <!--        Show Story Details:end-->
        </div> --}}
    </div>
    <!--Story Section:end-->

    <!--Main:start-->
    <main class="container mt-5">
        <header class="header my-5">
            <!-- Slider:start -->
            <div class="swiper headerSlider border-radius-3xl">
                <div class="swiper-wrapper">
                    @foreach ($carousel->photos as $photo)
                        <div class="swiper-slide">
                            <a href="javascript:;" title=""><img src="{{asset($photo->src)}}" class="img-fluid object-cover" alt=""></a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next bg-light border-radius-circle"></div>
                <div class="swiper-button-prev bg-light border-radius-circle"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Slider:end -->
        </header>

        <!--Recent Products:start-->
        <section class="suggestions">
            <h2 class="text-center fs-4">جدید ترین ها :</h2>
            <div class="wrapper mt-4 border-radius-3xl border border-gray-300 overflow-hidden">
                <div class="row">
                    @foreach ($recent_products as $product)
                        @php
                            $photo = $product->photos->first();
                        @endphp
                        <div class="suggest-item col-6 col-md-4 col-lg-2 col-xl-2">
                            <div class="p-3">
                                <a target="_blank" href="{{ route('single_product',$product->tracking_code) }}" title="" class="stretched-link">
                                    @isset($photo)
                                        <img src="{{asset($photo->src)}}" alt="" title="" class="img-fluid p-1">
                                    @endisset
                                    <h4 class="mt-3 fs-7">{{ $product->title }}</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Recent Products:end-->
 
        <!--Banners:start-->
        <div class="banners my-5">
            <div class="row">
                @foreach ($medium_banner->photos as $photo)
                    <div class="col-6 mb-3">
                        <a href="javascript:;" title="">
                            <img src="{{asset($photo->src)}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--Banners:end-->

        <hr>
        <!--Categories:start-->
        <section class="categories mt-5">
            <h2 class="text-center fs-4">دسته بندی ها :</h2>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 mb-3">
                    <!--Row:start-->
                    <div class="row">
                        @foreach ($categories as $category)
                            <!--Category Item:start-->
                            <div class="col-4 col-lg-2 col-xl-2 mb-4">
                                <a href="{{ route('category_products',$category->id) }}" title="">
                                    <strong class="text-center d-block fs-7">{{ $category->title }} </strong>
                                </a>
                            </div>
                            <!--Category Item:end-->
                        @endforeach
                    </div>
                    <!--Row:end-->
                </div>
            </div>
        </section>
        <!--Categories:end-->
        <hr>

        <!--Small Banners:start-->
        <div class="banners mt-4">
            <div class="row">
                @foreach ($small_banner->photos as $photo)
                    <div class="col-6 col-lg-3 col-xl-3 mb-3">
                        <a href="javascript:;" title="">
                            <img src="{{asset($photo->src)}}" alt="" class="img-fluid border-radius-3xl img-opacity">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--Small Banners:end-->

        <!--Best Brands:start-->
        <section class="best-brands border-radius-3xl border border-gray-300 mt-4 pb-4">
            <!--Section Title:start-->
            <h2 class="text-center my-4 section-title fs-4">
            برندها
            </h2>
            <!--Section Title:end-->

            <!--Slider:start-->
            <div class="swiper brandsSlider">
                <div class="swiper-wrapper justify-content-center">

                    <!--Brands Item:start-->
                    <div class="swiper-slide position-relative">
                        <div class="brands-item d-flex justify-content-center align-items-center">
                            <a href="javascript:;" title="" class="stretched-link">
                                <img src="{{asset('user_assets/img/brands/KIA2.png')}}" alt="" title="" class="img-fluid p-3">
                            </a>
                        </div>
                    </div>
                    <!--Brands Item:end-->

                    <!--Brands Item:start-->
                    <div class="swiper-slide position-relative">
                        <div class="brands-item d-flex justify-content-center align-items-center">
                            <a href="javascript:;" title="" class="stretched-link">
                                <img src="{{asset('user_assets/img/brands/Hyundai.png')}}" alt="" title="" class="img-fluid p-3">
                            </a>
                        </div>
                    </div>
                    <!--Brands Item:end-->

                </div>
                <div class="swiper-button-next bg-light border-radius-circle"></div>
                <div class="swiper-button-prev bg-light border-radius-circle"></div>
            </div>
            <!--Slider:end-->
        </section>
        <!--Best Brands:end-->

        <!--Blog Section:start-->
        <section class="blog mt-5">
            <div class="d-flex justify-content-between align-items-baseline mb-3">
                <h1 class="fw-bold fs-6">خواندنی ها :</h1>
                <a href="{{ route('blog') }}" class="text-danger fs-8">
                    مطالب بیشتر در قسمت مقالات
                    <i class="fa fa-angle-left ps-1"></i>
                </a>
            </div>
            <!--Blog Items:start-->
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                        <div class="blog-item border-radius-2xl overflow-hidden mb-3">
                            <div class="blog-item-img">
                                <a href="{{ route('show',$article->id) }}" class="img-fluid card-img">
                                    @php
                                        $photo = $article->photo->first();
                                    @endphp
                                    @isset($photo)
                                        <img src="{{asset($photo->src)}}" alt="" class="w-100">
                                    @endisset
                                </a>
                            </div>
                            <div class="blog-item-contents px-2 pb-3">
                                <h2 class="mt-1">
                                    <a href="{{ route('show',$article->id) }}" class="fs-6 fw-bold">
                                        {{$article->title}}
                                    </a>
                                </h2>
                                <p class="fs-8">
                                    {{$article->english_title}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--Blog Items:end-->
        </section>
        <!--Blog Section:end-->

    </main>
    <!--Main:end-->
@endsection
