@extends("admin_dashboard.layouts.app")	
@section("style")
<script src="https://cdn.tiny.cloud/1/5nk94xe9fcwk22fkp6gou9ymszwidnujnr2mu3n3xe2biap3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section("wrapper")
	<div class="page-wrapper">
		<div class="page-content">
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Giới thiệu</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item">
								<a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Sửa trang giới thiệu</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="card">
				<div class="card-body p-4">
					<h5 class="card-title">Sửa trang giới thiệu</h5>
					<hr/>
					<form action="{{ route('admin.setting.update') }}" method="POST"  enctype="multipart/form-data" >
					@csrf
                       <div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="about_first_text" class="form-label">Chúng tôi là ai ?</label>
											<textarea name="about_first_text" class="form-control" id="about_first_text" >{{ $setting->about_first_text}}</textarea>
											@error('about_first_text')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="mb-3">
													<label for="about_first_image" class="form-label">Ảnh giới thiệu thứ nhất</label>
													<input name="about_first_image" type="file" class="form-control" id="about_first_image" >
													@error('about_first_image')
														<p class="text-danger">{{ $message }}</p>
													@enderror
												</div>
											</div>
											<div class="col-md-4">
												<div class="user_image p-2">
													<img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $setting->about_first_image ) }}" alt="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-8">
												<div class="mb-3">
													<label for="about_second_image" class="form-label">Ảnh giới thiệu thứ hai</label>
													<input name="about_second_image" type="file" class="form-control" id="about_second_image" >
													@error('about_second_image')
														<p class="text-danger">{{ $message }}</p>
													@enderror
												</div>
											</div>
											<div class="col-md-4">
												<div class="user_image p-2">
													<img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $setting->about_second_image ) }}" alt="">
												</div>
											</div>
										</div>
										<button class="btn btn-primary" type="submit">Cập nhật</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section("script")
	<script src="{{ asset('admin_dashboard_assets/js/about.js') }}"></script>
@endsection