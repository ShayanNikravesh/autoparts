@extends('admin.layouts.master')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">ایجاد محصول</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="font-weight-bold mr-4">در این صفحه می توانید محصول جدید ایجاد کنید.</span>
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
                    <h3 class="card-title">افزودن محصول</h3>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">{{$error}}</div>
                    @endforeach
                @endif
                <!--begin::Form-->
                <form class="form" method="post" action="{{route('products.store')}}" id="kt_form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row justify-content-center">
                            <div class="col-lg-4">
                                <label>عنوان:</label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان را وارد کنید...">
                            </div>
                            <div class="col-lg-4">
                                <label>عنوان انگلیسی:</label>
                                <input type="text" name="english_title" class="form-control" placeholder="عنوان انگلیسی را وارد کنید...">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-lg-3">
                                <label class="text-right">دسته بندی :</label>
                                <select name="category" class="form-control text-right selectpicker" title="انتخاب کنید." data-live-search="true">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label class="text-right">برند :</label>
                                <select name="brand" class="form-control text-right selectpicker" title="انتخاب کنید." data-live-search="true">
                                    @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label class="text-right">وضعیت:</label>
                                <select name="status" class="form-control text-right selectpicker" title="انتخاب کنید.">
                                    <option value="active">فعال</option>
                                    <option value="inactive">غیرفعال</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-lg-3">
                                <label>قیمت:</label>
                                <input type="number" name="price" class="form-control" placeholder="قیمت را وارد کنید..."  min="100000" step="50000">
                            </div>
                            <div class="col-lg-3">
                                <label>قیمت با تخفیف:</label>
                                <input type="number" name="price_discounted" class="form-control" placeholder="قیمت با تخفیف را وارد کنید..." step="50000" value="0">
                            </div>
                            <div class="col-lg-3">
                                <label>موجودی:</label>
                                <input type="number" name="stock" class="form-control" min="0" step="1" value="0">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-lg-12">
                                <label class="text-right"> مشخصات و توضیحات :</label>
                                <textarea class="summernote" name="description" style="display: none;"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <label class="text-right">نقد و بررسی :</label>
                                <textarea class="summernote" name="review" style="display: none;"></textarea>
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