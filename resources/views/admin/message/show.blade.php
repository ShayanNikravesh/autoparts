@extends('admin.layouts.master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">جزئیات محصول</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="font-weight-bold mr-4">در این صفحه می توانید جزئیات محصول را مشاهده کنید.</span>
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
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body p-15 pb-20">
                    <div class="row mb-17">
                        <div class="col-xxl-7 pl-xxl-11">
                            <h2 class="font-weight-bolder text-dark" style="font-size: 32px;">{{$message->first_name}} {{$message->last_name}}</h2>
                            <h2 class="text-muted font-weight-bolder font-size-lg" style="font-size: 20px;">{{$message->mobile}}</h2>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <!--begin::Info-->
                        <div class="col-6 col-md-4">
                            <div class="mb-8 d-flex flex-column">
                                <span class="text-dark font-weight-bolder mb-4" style="font-size: 15px;">متن پیام :</span>
                                <span class="text-muted font-weight-bolder font-size-lg">{!!$message->message!!}</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection