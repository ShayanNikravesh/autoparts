@extends('admin.layouts.master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">ویرایش محصول</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="font-weight-bold mr-4">در این صفحه می توانید محصول را ویرایش کنید.</span>
				<!--end::Actions-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Daterange-->
					<span class="text-muted font-size-base font-weight-bold mr-2">تاریخ:</span>
					<span class="text-primary font-size-base font-weight-bolder"><?php echo verta()->format('Y/m/d');?></span>
				<!--end::Daterange-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <h3 class="card-title">ویرایش محصول</h3>
                </div>
                <!--begin::Form-->
                <form class="form" method="post" action="{{route('products.update',$product)}}" id="kt_form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger text-center">{{$error}}</div>
                            @endforeach
                        @endif
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>عنوان:</label>
                                <input type="text" name="title" class="form-control" value="{{$product->title}}">
                            </div>
                            <div class="col-lg-6">
                                <label>عنوان انگلیسی:</label>
                                <input type="text" name="english_title" class="form-control" value="{{$product->english_title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>قیمت:</label>
                                <input type="number" name="price" class="form-control" min="100000" step="50000" value="{{$product->price}}">
                            </div>
                            <div class="col-lg-6">
                                <label>قیمت با تخفیف:</label>
                                <input type="number" name="price_discounted" class="form-control" step="50000" value="{{$product->price_discounted}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>موجودی :</label>
                                <input type="number" name="stock" class="form-control" min="0" step="1" value="{{$product->stock}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label class="text-right"> مشخصات و توضیحات :</label>
                                <textarea class="summernote" name="description" style="display: none;" value="{{$product->description}}">{{$product->description}}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <label class="text-right">نقد و بررسی :</label>
                                <textarea class="summernote" name="review" style="display: none;" value="{{$product->review}}">{{$product->review}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mr-2">ثبت</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection