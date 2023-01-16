@extends('main_layouts.master')
@section('title','News')
@section('content')

<div class="wrapper">
	<!-- Main Content Section Start -->
	<div class="main-content--section pbottom--30">
		<div class="container">
			<!-- Main Content Start -->
			<!-- 4 bài đăng gần nhât -->
			<div class="main--content">
				<!-- Post Items Start -->
				<div class="post--items post--items-1 pd--30-0">
					<div class="row gutter--15">
						<div class="col-md-6">
							<div class="row gutter--15">
							@for ( $i = 0; $i <= 1; $i++)
								<div class="col-xs-6 col-xss-12">
									<!-- Post Item Start -->
									<div class="post--item post--layout-1 post--title-large">
										<div class="post--img">
											<a href="{{ route('posts.show', $posts_new[$i][0]) }}"class="thumb">
												<img src="{{ asset($posts_new[$i][0]->image ? 'storage/' .$posts_new[$i][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
											</a>
											<a href="{{ route('categories.show', $posts_new[$i][0]->category) }}" class="cat">{{ $posts_new[$i][0]->category->name }}</a>
											<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>
											<div class="post--info">
												<ul class="nav meta">
													<li><a href="javascript:;">{{ $posts_new[$i][0]->author->name }}</a></li>
													<li><a href="javascript:;">{{ $posts_new[$i][0]->created_at->locale('vi')->diffForHumans() }}</a></li>
												</ul>
												<div class="title">
													<h2 class="h4">
														<a href="{{ route('posts.show', $posts_new[$i][0]) }}" class="btn-link">{{ $posts_new[$i][0]->title }}</a>
													</h2>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</div>
								@endfor
						
								<div class="col-sm-12 hidden-sm hidden-xs">
									<!-- Post Item Start -->
									<div class="post--item post--layout-1 post--title-larger">
										<div class="post--img">
											<a href="{{ route('posts.show', $posts_new[2][0]) }}" class="thumb">
												<img src="{{ asset($posts_new[2][0]->image ? 'storage/' .$posts_new[2][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" style="height:200px" alt="">												
											</a>
											<a href="{{ route('categories.show', $posts_new[2][0]->category) }}" class="cat">{{ $posts_new[2][0]->category->name }}</a>
											<a href="javascript:;" class="icon"><i class="fa fa-fire"></i></a>
											<div class="post--info">
												<ul class="nav meta">
													<li>
														<a href="javascript:;">{{ $posts_new[2][0]->author->name }}</a>
													</li>
													<li>
														<a href="javascript:;">{{ $posts_new[2][0]->created_at->locale('vi')->diffForHumans() }}</a>
													</li>
												</ul>

												<div class="title">
													<h2 class="h4">
														<a href="{{ route('posts.show', $posts_new[2][0]) }}" class="btn-link">{{ $posts_new[2][0]->title }}</a>
													</h2>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<!-- Post Item Start -->
							<div class="post--item post--layout-1 post--title-larger">
								<div class="post--img">
									<a href="{{ route('posts.show', $posts_new[3][0]) }}" class="thumb">
										<img src="{{ asset($posts_new[3][0]->image ? 'storage/' .$posts_new[3][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
									</a>
									<a href="{{ route('categories.show', $posts_new[3][0]->category ) }}" class="cat">{{ $posts_new[3][0]->category->name }}</a>
									<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>
									<div class="post--info">
										<ul class="nav meta">
											<li><a href="javascript:;">{{ $posts_new[3][0]->author->name }}</a></li>
											<li><a href="javascript:;">{{ $posts_new[3][0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
										</ul>
										<div class="title">
											<h2 class="h4">
												<a href="{{ route('posts.show', $posts_new[3][0]) }}" class="btn-link">{{ $posts_new[3][0]->title }}</a>
											</h2>
										</div>
									</div>
								</div>
							</div>
							<!-- Post Item End -->
						</div>
					</div>
				</div>
				<!-- Post Items End -->
			</div>
	        
			<!-- Thể thao, giải trí, pháp luật , công nghệ, khoa học -->
			<div class="main--content pd--30-0">
				<div class="post--items-title" data-ajax="tab">
					<h2 class="h4">{{ $category_home[5]->name }}</h2>
				</div>
				<div class="post--items post--items-4" data-ajax-content="outer">
					<ul class="nav row" data-ajax-content="inner">
						<li class="col-md-8">
							<!-- Post Item Start -->
							<div class="post--item post--layout-1 post--type-video post--title-large">
								<div class="post--img">
									<a href="{{ route('posts.show', $post_category_home5[0]) }}" class="thumb">
										<img src="{{ asset($post_category_home5[0]->image ? 'storage/' . $post_category_home5[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt=""></a>
									<a href="{{ route('categories.show', $post_category_home5[0]->category) }}" class="cat">{{ $post_category_home5[0]->category->name }}</a>
									<a href="{{ route('categories.show', $post_category_home5[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

									<div class="post--info">
										<ul class="nav meta">
											<li><a href="javascript:;">{{ $post_category_home5[0]->author->name }}</a></li>
											<li><a href="javascript:;">{{ $post_category_home5[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
										</ul>

										<div class="title">
											<h2 class="h4">
												<a href="{{ route('posts.show', $post_category_home5[0]) }}" class="btn-link">{{ $post_category_home5[0]->title }}</a>
											</h2>
										</div>
									</div>
								</div>
							</div>
							<!-- Divider Start -->
							<hr class="divider hidden-md hidden-lg">
							<!-- Divider End -->
						</li>
						<li class="col-md-4">
							<ul class="nav">
							@for ($i = 1; $i <= 4; $i++)
								<li>
									<!-- Post Item Start -->
									<div class="post--item post--type-audio post--layout-3">
										<div class="post--img">
											<a href="{{ route('posts.show', $post_category_home5[$i]) }}"class="thumb">
												<img src="{{ asset($post_category_home5[$i]->image ? 'storage/' . $post_category_home5[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"alt="">
											</a>
											<div class="post--info">
												<ul class="nav meta">
													<li><a href="javascript:;">{{ $post_category_home5[$i]->author->name }}</a></li>
													<li><a href="javascript:;">{{ $post_category_home5[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
												</ul>
												<div class="title">
													<h3 class="h4">
														<a href="{{ route('posts.show', $post_category_home5[$i]) }}" class="btn-link">{{ $post_category_home5[$i]->title }}</a>
													</h3>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</li>
								@endfor		
							</ul>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<!-- Main Content Start -->
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- Health and fitness Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[6]->name }}</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home6[0]) }}"class="thumb">
														<img src="{{ asset($post_category_home6[0]->image ? 'storage/' . $post_category_home6[0]->image->path : 'storage/placeholders/placeholder-image.png') }}" alt="">
													</a>
													<a href="{{ route('categories.show', $post_category_home6[0]->category) }}"class="cat">{{ $post_category_home6[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home6[0]->category) }}" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home6[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home6[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home6[0]) }}" class="btn-link">{{ $post_category_home6[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home6[$i]) }}"
														class="thumb">
														<img src="{{ asset($post_category_home6[0]->image ? 'storage/' . $post_category_home6[$i]->image->path : 'storage/placeholders/placeholder-image.png') }}"alt="">
													</a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home6[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home6[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home6[$i]) }}" class="btn-link">{{ $post_category_home6[$i]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor									
									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- Health and fitness End -->

							<!-- Lifestyle Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[7]->name }}</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">

										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home7[0]) }}"class="thumb">
														<img src="{{ asset($post_category_home7[0]->image ? 'storage/' . $post_category_home7[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"alt="">
													</a>
													<a href="{{ route('categories.show', $post_category_home7[0]->category) }}" class="cat">{{ $post_category_home7[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home7[0]->category) }}" class="icon"><i class="fa fa-heart-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home7[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home7[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home7[0]) }}" class="btn-link">{{ $post_category_home7[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										
										</li>
										@for ($i = 1; $i <= 4; $i++)
											@if ($i === 1 || $i === 3)
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											@endif
										<li class="col-xs-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home7[$i]) }}" class="thumb">
														<img src="{{ asset($post_category_home7[$i]->image ? 'storage/' . $post_category_home7[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"alt="">
													</a>
													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home7[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home7[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>
														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home7[$i]) }}" class="btn-link">{{ $post_category_home7[$i]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- Lifestyle End -->

							<!-- Công nghệ -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[8]->name }}</h2>
								</div>
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home8[0]) }}" class="thumb">
														<img src="{{ asset($post_category_home8[0]->image ? 'storage/' . $post_category_home8[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
													</a>
													<a href="{{ route('categories.show', $post_category_home8[0]->category) }}" class="cat">{{ $post_category_home8[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home8[0]->category) }}" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home8[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home8[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home8[0]) }}" class="btn-link">{{ $post_category_home8[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
												
											</div>
											<!-- Post Item End -->

											<hr class="mar_bottom15 ">

										</li>
										
									</ul>
								</div>
								<!-- Post Items End -->
							</div>

							<!-- Photo Gallery Start -->
							<!-- Khoa học -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[9]->name }}</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-1" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-md-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1 post--title-large">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home9[0]) }}" class="thumb">
														<img src="{{ asset($post_category_home9[0]->image ? 'storage/' . $post_category_home9[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
													</a>
													<a href="{{ route('categories.show', $post_category_home9[0]->category) }}"
														class="cat">{{ $post_category_home9[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home9[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home9[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home9[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title text-xxs-ellipsis">
															<h2 class="h4">
																<a href="{{ route('posts.show', $post_category_home9[0]) }}" class="btn-link">{{ $post_category_home9[0]->title }}</a>
															</h2>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@for ($i = 1; $i <= 3; $i++)
										<li class="col-md-4 col-xs-6 col-xxs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home9[$i]) }}" class="thumb">
														<img src="{{ asset($post_category_home9[$i]->image ? 'storage/' . $post_category_home9[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
													</a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home9[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home9[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h2 class="h4">
																<a href="{{ route('posts.show', $post_category_home9[$i]) }}" class="btn-link">{{ $post_category_home9[$i]->title }}</a>
															</h2>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor							
									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- Photo Gallery End -->
						</div>
					</div>
				</div>
				<!-- Main Content End -->

				<!-- Main Sidebar Start -->
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Bình chọn</h2>
								<div class="nav">
									<a href="javascript:;" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
										<i class="fa fa-long-arrow-left"></i>
									</a>
									<span class="divider">/</span>
									<a href="javascript:;" class="next btn-link" data-ajax-action="load_next_poll_widget">
										<i class="fa fa-long-arrow-right"></i>
									</a>
								</div>
							</div>

							<!-- Poll Widget Start -->
							<div class="poll--widget" data-ajax-content="outer">
								<ul class="nav" data-ajax-content="inner">
									<li class="title">
										<h3 class="h4">
											Theo bạn thì giải đội bóng nào sẽ vô địch WoldCup 2022 ?
										</h3>
									</li>

									<li class="options">
										<form action="javascript:;">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-1">
													<img src="{{ asset('kcnew/frontend/img/Flag_barzill.png') }}" alt="Brasil" srcset="">
													<span>Brasil</span>
												</label>
												<p>55%<span style="width: 55%;"></span></p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_Agrennal.png') }}" alt="Brasil" srcset="">
													<span>Argentina</span>
												</label>
												<p>28%<span style="width: 28%;"></span></p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_tay_ban_nha.png') }}" alt="Brasil" srcset="">
													<span>Tây Ban Nha</span>
												</label>
												<p>12%<span style="width: 12%;"></span></p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_bo-dao-nha.png') }}" alt="Brasil" srcset="">
													<span>Bồ Đào Nha</span>
												</label>
												<p>05%<span style="width: 05%;"></span></p>
											</div>
											<button type="submit" class="btn btn-primary">Vote Ngay</button>
										</form>
									</li>
								</ul>

								<!-- Preloader Start -->
								<div class="preloader bg--color-0--b" data-preloader="1">
									<div class="preloader--inner"></div>
								</div>
								<!-- Preloader End -->
							</div>
							<!-- Poll Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<!-- Ad Widget Start -->
							<div class="ad--widget">
								<div class="row">
									<div class="col-sm-6">
										<a href="javascript:;">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt="">
										</a>
									</div>
									<div class="col-sm-6">
										<a href="javascript:;">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt="">
										</a>
									</div>
								</div>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Ý KIẾN NGƯỜI ĐỌC</h2>
							</div>

							<!-- List Widgets Start -->
							<div class="list--widget list--widget-2" data-ajax-content="outer">
								<!-- Post Items Start -->
								<div class="post--items post--items-3">
									<ul class="nav" data-ajax-content="inner">
										@foreach ($top_commnents as $top_commnent) 
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<span class="thumb"><img style="margin: auto; background-size: cover ;  width: 60px; height: 60px;   background-image: url({{ $top_commnent->user->image ?  asset('storage/' . $top_commnent->user->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})"  alt=""></span>

													<div class="post--info">
														<div class="title">
															<h3 class="h4"><a href="{{ route('posts.show', $top_commnent->post ) }}">{{ $top_commnent->the_comment }}</a> </h3>
														</div>

														<ul class="nav meta">
															<li>
																<span> {{ $top_commnent->user->name }}</span>
															</li>
															<li>
																<span>{{ $top_commnent->created_at->format('d/m/Y') }}</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endforeach
									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- List Widgets End -->
						</div>
						<!-- Widget End -->
					</div>
				</div> 
				<!-- Main Sidebar End -->
			</div>
		</div>
	</div>
	<!-- Main Content Section End -->
</div>
@endsection

	