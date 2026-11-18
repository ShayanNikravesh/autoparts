@extends('user.layouts.master')

@section('content')

<!--Main:start-->
<main class="container mt-xxxx-large">
    <!--Contact Us:start-->
    <section class="contact-us border-radius-2xl">
        <!--Contact Us Form:start-->
        <div class="contact-us-wrapper mb-3">
            <div class="contact-us-header border-bottom-gray-150 pb-2">
                <h2 class="fs-5 fw-bold">تماس با ما</h2>
                <div class="vertical-line"></div>
            </div>
            <div class="contact-us-content">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">{{$error}}</div>
                    @endforeach
                @endif
                <form action="{{ route('store_message') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4 my-3">
                            <label for="first_name">نام<span class="text-danger">*</span></label>
                            <input name="first_name" type="text" class="form-control mt-2" id="first_name" placeholder="لطفا نام خود را وارد کنید...">
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4 my-3">
                            <label for="last_name">نام خانوادگی<span class="text-danger">*</span></label>
                            <input name="last_name" type="text" class="form-control mt-2" id="last_name" placeholder="لطفا نام خانوادگی خود را وارد کنید...">
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4 my-3">
                            <label for="mobile">شماره همراه<span class="text-danger">*</span></label>
                            <input name="mobile" type="text" class="form-control mt-2" id="mobile" placeholder="لطفا شماره همراه خود را وارد کنید...">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3">
                            <label for="message">متن پیام </label>
                            <textarea name="message" type="text" class="form-control mt-2" id="message" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">ثبت و ارسال</button>
                    </div>
                </form>
            </div>
        </div>
        <!--Contact Us Form:end-->

        <!--Contact Us Information:start-->
        <div class="contact-us-wrapper mb-3">
            <div class="contact-us-header pb-2">
                <h2 class="fs-5 fw-bold">اطلاعات برگ شاپ</h2>
                <div class="vertical-line"></div>
            </div>
            <div class="contact-us-content mt-3">
                <!--                address-->
                <div class="mb-3">
                    <strong class="fs-5">آدرس دفتر مرکزی</strong>
                    <p class="fs-7 mt-2">سبزوار - بلوار آزادگان - آزادگان 19 - کوچه شهید امری - پلاک 92</p>
                </div>
                <!--                contact phone email ...-->
                <div class="mb-3">
                    <strong class="fs-5">شماره تماس</strong>
                    <p class="fs-7 mt-2">0930587474</p>
                </div>
                <div class="mb-3">
                    <strong class="fs-5">ایمیل</strong>
                    <p class="fs-7 mt-2">info@bergShop.com</p>
                </div>
            </div>
        </div>
        <!--Contact Us Information:end-->
    </section>
    <!--Contact Us:end-->
</main>
<!--Main:end-->

@endsection