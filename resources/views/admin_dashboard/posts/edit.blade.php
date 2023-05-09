@extends("admin_dashboard.layouts.app")
@section("style")
	<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_dashboard_assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
	<style>
		.imageuploadify{
			margin: 0;
			max-width: 100%;
		}
	</style>
	<script src="https://cdn.tiny.cloud/1/5nk94xe9fcwk22fkp6gou9ymszwidnujnr2mu3n3xe2biap3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection	
@section("wrapper")
		<div class="page-wrapper">
			<div class="page-content">
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Bài viết</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item">
									<a href="{{ route('admin.index') }}">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Bài viết</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Sửa bài viết: {{ $post->title}}</h5>
					  <hr/>
					<form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" >
						@csrf
                        @method('PATCH')
                       <div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Tiêu đề bài viết</label>
											<input 
												type="text" 
												value='{{ old("title", $post->title) }}' 
												name="title" required  
												class="inputPostTitle form-control" 
												id="inputProductTitle" 
												placeholder="Nhập tiêu đề bài viết"
											>										
											@error('title')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Slug - liên kết</label>
											<input 
												type="text" 
												value='{{ old("slug", $post->slug) }}' 
												name="slug" required  
												class="slugPost form-control" 
												id="inputProductTitle" 
												placeholder="Nhập slug"
											>										
											@error('slug')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Mô tả</label>
											<textarea required 
												name="excerpt" 
												class="form-control" 
												id="inputProductDescription" 
												rows="3"
											>
												{{ old("excerpt", $post->excerpt) }}
											</textarea>		
											@error('excerpt')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										
										</div>
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Danh mục bài viết</label>
											<div class="card">
												<div class="card-body">
													<div class="p-3 rounded">
														<div class="mb-3">
															<select name="category_id" required class="single-select">
															@foreach( $categories as $key => $category )
																<option {{ $post->category_id === $key ? 'selected' : '' }} value="{{ $key }}">{{ $category }}</option>
															@endforeach
															</select>
															@error('category_id')
																<p class="text-danger">{{ $message }}</p>
															@enderror
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mb-3">
                                            <label class="form-label">Từ khóa</label>
                                            <input type="text" class="form-control" value="{{ $tags }}" name="tags" data-role="tagsinput">
                                        </div>						
										<div class="mb-3">
                                            <div class="row">
												<div class="col-md-5">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="inputProductDescription" class="form-label">Hình ảnh bài viết</label>
															<input id="thumbnail" name="thumbnail" type="file" id="file" value="">                                                     
                                                            @error('thumbnail')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 text-center">                                                
													<img style="width: 100%; border-radius: 16px;" src="/storage/{{ $post->image ? $post->image->path : 'placeholders/placeholder-image.jpg' }}" class="img-responsive" alt="All thumbnail">
												</div>
                                            </div>										
										</div>
										
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Nội dung bài viết</label>
											<textarea 
												name="body" 
												id="post_content" 
												class="form-control" 
												id="inputProductDescription" 
												rows="3"
											>
												{{ old("body", str_replace('../../', '../../../', $post->body )) }}
											</textarea>								
											@error('body')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>
										<div class="mb-3">
											<div class="form-check form-switch">
												<input name="approved" {{  $post->approved ? 'checked' : '' }} class="form-check-input" type="checkbox" id="flexSwitchChecked">
												<label class="form-check-label {{  $post->approved ? 'text-success' : 'text-warning' }}" for="flexSwitchChecked">
													{{ $post->approved ? 'Đã phê duyệt' : 'Chưa phê duyệt' }}
												</label>
											</div>
										</div>
										<button class="btn btn-primary" type="submit">Sửa bài viết</button>
										<a 
											class="btn btn-danger" 
											onclick="event.preventDefault(); 
											document.getElementById('delete_post_{{ $post->id }}').submit();" 
											href="#"
										>
											Xóa bài viết
										</a>
									</div>
								</div>
							</div>
						</div>
					</form>
					<form id="delete_post_{{ $post->id }}" action="{{ route('admin.posts.destroy', $post) }}"  method="post">
						@csrf
						@method('DELETE')
					</form>
				  </div>
			  </div>
			</div>
		</div>
@endsection
	
@section("script")
	<script src="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/input-tags/js/tagsinput.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/js/post.js') }}"></script>

@endsection