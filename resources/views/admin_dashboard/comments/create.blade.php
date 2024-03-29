@extends("admin_dashboard.layouts.app")
@section("style")
	<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
@endsection	
@section("wrapper")
		<div class="page-wrapper">
			<div class="page-content">
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Bình luận</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Thêm mới bình luận</li>
							</ol>
						</nav>
					</div>
				</div>	  
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Thêm bình luận mới</h5>
					  <hr/>
					<form action="{{ route('admin.comments.store') }}" method="POST" >
						@csrf
                       <div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Chi tiết bài viết</label>
												<div class="card">
													<div class="card-body">
														<div class="p-3 rounded">
															<div class="mb-3">
																<select name="post_id" required class="single-select">
																	@foreach( $posts as $key => $post )
																	<option value="{{ $key }}">{{ $post }}</option>
																	@endforeach
																</select>
																@error('post_id')
																	<p class="text-danger">{{ $message }}</p>
																@enderror
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Bình luận bài viết</label>
											<textarea name="the_comment" id="post_comment" class="form-control" id="inputProductDescription" rows="3">{{ old("the_comment" ) }}</textarea>				
											@error('the_comment')
												<p class="text-danger">{{ $message }}</p>
											@enderror		
										</div>
										<button class="btn btn-primary" type="submit">Thêm bình luận</button>
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
	<script src="{{ asset('admin_dashboard_assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/js/user.js') }}"></script>
@endsection