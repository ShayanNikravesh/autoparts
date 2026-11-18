@extends('admin.layouts.master')

@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
			<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-2">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">لیست پیام ها</h5>
					<!--end::Page Title-->
					<!--begin::Actions-->
					<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
					<span class="font-weight-bold mr-4">در این صفحه لیست پیام ها را مشاهده میکنید.</span>
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
		<!--begin::Container-->
		<div class="card card-custom">
			<div class="card-header">
				<div class="card-title">
					<span class="card-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
						</svg>
					</span>
					<h3 class="card-label font-weight">لیست پیام ها</h3>
				</div>
			</div>
			<div class="card-body">
				<!--begin: Datatable-->
				<table class="table table-bordered table-hover table-checkable" id="datatable" style="margin-top: 13px !important">
					<thead>
						<tr>
							<th>#</th>
							<th>نام</th>
                            <th>نام خانوادگی</th>
							<th>موبایل</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						{{-- @if ($categories) --}}
							@foreach ($messages as $message)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$message->first_name}}</td>
                                    <td>{{$message->last_name}}</td>
                                    <td>{{$message->mobile}}</td>
                                    <td>
										<div class="d-flex">
											<a href="{{ route('messages.show',$message->id) }}" class="btn-sm btn-primary btn mx-1" data-toggle="tooltip" data-placement="bottom" title="جزئیات پیام">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
													<path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
													<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
												</svg>
											</a>
											<a href="{{ route('messages.destroy',$message->id) }}" method="POST" data-toggle="tooltip" data-placement="bottom" title="حذف پیام" data-confirm-delete="true">
												<button class="btn-sm btn-danger btn mx-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
													<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
													</svg>
												</button>
											</a>
										</div>
									</td>
								</tr>
							@endforeach
						{{-- @endif --}}
					</tbody>
				</table>
				<!--end: Datatable-->
			</div>
		</div>
		<!--end::Container-->
	</div>
    <!--end::Entry-->
@endsection
