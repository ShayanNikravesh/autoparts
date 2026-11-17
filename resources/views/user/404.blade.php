@extends('user.layouts.master')

@section('content')

<!--Main:start-->
<main class="container mt-xxxx-large">
    <div class="wrapper-404 text-center">
        <h2 class="fs-5">صفحه که به دنبال آن بودید پیدا نشد!</h2>
        <a href="{{route('user_index')}}" class="text-info d-block fs-7">صفحه اصلی
            <i class="fa ms-1"></i>
        </a>
        <img src="{{asset('user_assets/img/404.png')}}" alt="" class="img-fluid mt-5">
    </div>
</main>
<!--Main:end-->

@endsection()