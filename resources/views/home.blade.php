@extends('main_layouts.master')
@section('title','News')
@section('content')

<div class="wrapper">
	<!-- Main Content Section Start -->
	<div class="main-content--section pbottom--30">
		<div class="container">
			<!-- 4 bài đăng gần nhât -->
			<div class="main--content">
				<div class="post--items post--items-1 pd--30-0">
					<div class="row gutter--15">
						<div class="col-md-6">
							<div class="row gutter--15">
							@for ( $i = 0; $i <= 1; $i++)
								<div class="col-xs-6 col-xss-12">
									<div class="post--item post--layout-1 post--title-large">
										<div class="post--img">
											<a href="{{ route('posts.show', $posts_new[$i][0]) }}"class="thumb">
												<img src="{{ asset($posts_new[$i][0]->image ? 'storage/' .$posts_new[$i][0]->image->path : 'storage/placeholders/placeholder-image.png')}}" style="height: 185px;">
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
								</div>
								@endfor
						
								<div class="col-sm-12 hidden-sm hidden-xs">
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
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="post--item post--layout-1 post--title-larger">
								<div class="post--img">
									<a href="{{ route('posts.show', $posts_new[3][0]) }}" class="thumb">
										<img src="{{ asset($posts_new[3][0]->image ? 'storage/' .$posts_new[3][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" style="height:399px" alt="">
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
						</div>
					</div>
				</div>
			</div>
			<!-- Các danh mục  -->
			<div class="row">
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- Home 0 sức khỏe -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[0]->name }}</h2>
								</div>
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-xs-12">
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home0[0]) }}" class="thumb">
														<img src="{{ asset($post_category_home0[0]->image ? 'storage/' . $post_category_home0[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" style="height: 202px;"alt="">
													</a>
													<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>
													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home0[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home0[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>
														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home0[0]) }}" class="btn-link">{{ $post_category_home0[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
										</li>
										@for ($i = 1; $i <= 4; $i++)
											@if($i==1 || $i == 3 )
											<li class="col-xs-12">
												<hr class="divider">
											</li>
											@endif 
											<li class="col-xs-6">
												<div class="post--item post--layout-2">
													<div class="post--img">
														<a href="{{ route('posts.show', $post_category_home0[$i]) }}"class="thumb">
															<img src="{{ asset($post_category_home0[$i]->image ? 'storage/' . $post_category_home0[$i]->image->path : 'storage/placeholders/placeholder-image.png')}}"style="height: 97px;">
														</a>
														<div class="post--info">
															<ul class="nav meta">
																<li><a href="javascript:;">{{ $post_category_home0[$i]->author->name }}</a></li>
																<li><a href="javascript:;">{{ $post_category_home0[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
															</ul>
															<div class="title">
																<h3 class="h4">
																	<a href="{{ route('posts.show', $post_category_home0[$i]) }}" class="btn-link">{{ $post_category_home0[$i]->title }}</a>
																</h3>
															</div>
														</div>
													</div>
												</div>
											</li>
										@endfor
									</ul>
								</div>
							</div>
							<!-- Home 1 giáo dục -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[1]->name }}</h2>
								</div>
								<!-- Post Items Title End -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">								
										<li>
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home1[0]) }}" class="thumb">
														<img src="{{ asset($post_category_home1[0]->image ? 'storage/' . $post_category_home1[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"  alt="">
													</a>				
													<a href="javascript:;" class="icon">
														<i class="fa fa-flash"></i>
													</a>
													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home1[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home1[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>
														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home1[0]) }}" class="btn-link">{{ $post_category_home1[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@for ($i = 1; $i <= 5; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home1[$i]) }}" class="thumb">
														<img src="{{ asset($post_category_home1[$i]->image ? 'storage/' . $post_category_home1[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"alt="">
													</a>
													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home1[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home1[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>
														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home1[$i]) }}"class="btn-link">{{ $post_category_home1[$i]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
										</li>
										@endfor
									</ul>
								</div>
							</div>
							<!-- Home 2 thể thao -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[2]->name }}</h2>
								</div>
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-6">
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home2[0]) }}"class="thumb">
														<img src="{{ asset($post_category_home2[0]->image ? 'storage/' . $post_category_home2[0]->image->path : 'storage/placeholders/placeholder-image.png')}}"style="height: 153px;">
													</a>
													<a href="{{ route('categories.show', $post_category_home2[0]->category) }}" class="cat">{{ $post_category_home2[0]->category->name }}</a>
													<a href="javascript:;" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home2[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home2[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>
														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home2[0]) }}" class="btn-link">{{ $post_category_home2[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<hr class="mar_bottom15 ">
											<ul class="list_news_show_home">
												@for ($i = 4; $i <= 6; $i++)
													@if($i!=6)
													<li class="boder_link_show_home">
														<h3 class="h3">
															<a href="{{ route('posts.show', $post_category_home2[$i]) }}">{{ $post_category_home2[$i]->title }}</a>
														</h3>
													</li>
													@endif
													@if($i==6)
													<li>
														<h3 class="h3">
															<a href="{{ route('posts.show', $post_category_home2[$i]) }}">{{ $post_category_home2[$i]->title }}</a>
														</h3>
													</li>
													@endif											
												@endfor
											</ul>
										</li>
										<li class="col-md-6">
											<ul class="nav row">
												<li class="col-xs-12 hidden-md hidden-lg">
													<hr class="divider">
												</li>
												@for ($i = 1; $i <= 4; $i++)
													@if($i == 3 )
															<li class="col-xs-12">
																<hr class="divider">
															</li>
													@endif 
													<li class="col-xs-6">
														<div class="post--item post--layout-2">
															<div class="post--img">
																<a href="{{ route('posts.show', $post_category_home2[$i]) }}" class="thumb">
																	<img src="{{ asset($post_category_home2[$i]->image ? 'storage/' . $post_category_home2[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"alt="">
																</a>
																<div class="post--info">
																	<ul class="nav meta">																		
																		<li><a href="javascript:;">{{ $post_category_home2[$i]->author->name }}</a></li>
																		<li><a href="javascript:;">{{ $post_category_home2[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
																	</ul>
																	<div class="title">
																		<h3 class="h4">
																			<a href="{{ route('posts.show', $post_category_home2[$i]) }}" class="btn-link">{{ $post_category_home2[$i]->title }}</a>
																		</h3>
																	</div>
																</div>
															</div>
														</div>
													</li>
												@endfor
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- Home 3 giải trí-->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[3]->name }}</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home3[0]) }}" class="thumb">
														<img src="{{ asset($post_category_home3[0]->image ? 'storage/' . $post_category_home3[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" style="height: 240px;">
													</a>
													<a href="{{ route('categories.show', $post_category_home3[0]->category) }}"class="cat">{{ $post_category_home3[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home3[0]->category) }}" class="icon"><i class="fa fa-fire"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home3[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home3[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home3[0]) }}"class="btn-link">{{ $post_category_home3[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
										@if($i==1 || $i == 3 )
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
														<a href="{{ route('posts.show', $post_category_home3[$i]) }}"class="thumb">
															<img src="{{ asset($post_category_home3[$i]->image ? 'storage/' . $post_category_home3[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
														</a>

														<div class="post--info">
															<ul class="nav meta">
																<li><a href="javascript:;">{{ $post_category_home3[$i]->author->name }}</a></li>
																<li><a href="javascript:;">{{ $post_category_home3[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
															</ul>

															<div class="title">
																<h3 class="h4">
																	<a href="{{ route('posts.show', $post_category_home3[$i]) }}" class="btn-link">{{ $post_category_home3[$i]->title }}</a>
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
							<!-- Home 4  Pháp luật-->
							<div class="col-md-6 ptop--30 pbottom--30">
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[4]->name }}</h2>
								</div>
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home4[0]) }}"class="thumb">
														<img src="{{ asset($post_category_home4[0]->image ? 'storage/' . $post_category_home4[0]->image->path : 'storage/placeholders/placeholder-image.png')}}" alt="">
													</a>
													<a href="{{ route('categories.show', $post_category_home4[0]->category) }}" class="cat">{{ $post_category_home4[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home4[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home4[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home4[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home4[0]) }}" class="btn-link">{{ $post_category_home4[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 5; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home4[$i]) }}"
														class="thumb">
														<img src="{{ asset($post_category_home4[$i]->image ? 'storage/' . $post_category_home4[$i]->image->path : 'storage/placeholders/placeholder-image.png')}}"alt="">
													</a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $post_category_home4[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home4[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4">
																<a href="{{ route('posts.show', $post_category_home4[$i]) }}" class="btn-link">{{ $post_category_home4[$i]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
										</li>
										@endfor
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Tin tức nổi bật, mạng xã hội....-->
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Tin tức nổi bật</h2>
								<i class="icon fa fa-newspaper-o"></i>
							</div>
							<div class="list--widget list--widget-1">
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">				
										@foreach($outstanding_posts as $outstanding_post)
										<li>
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $outstanding_post) }}"
														class="thumb">
														<img width ="120" src="{{ asset($outstanding_post->image ? 'storage/' .$outstanding_post->image->path : 'storage/placeholders/placeholder-image.png')}}" alt="">
													</a>
													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">{{ $outstanding_post->created_at->locale('vi')->diffForHumans() }}</a></li>
															<li><a  href="javascript:;"><i class="fa fm fa-comments"></i>{{ count($outstanding_post->comments) }}</a></li>
                                       						<li><span><i class="fa fm fa-eye"></i>{{ $outstanding_post->views }}</span></li>
														</ul>
														<div class="title">
															<h3  class="h4">
																<a href="{{ route('posts.show', $outstanding_post) }}" class="btn-link">{{ $outstanding_post->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
										</li>
										@endforeach								
									</ul>
								</div>
							</div>
						</div>
						<!-- Bắt đầu Từ khóa -->
						<div class="widget">
							<div class="widget--title  " data-ajax="tab">
								<h2 class="h4">Từ khóa</h2>
							</div>
							<div class="list--widget list--widget-1" data-ajax-content="outer">
								<div class="post--items post--items-3">
									<ul style="padding:20px" class="nav sidebar" data-ajax-content="inner">
										<x-blog.side-tags :tags="$tags"/>
									</ul>
								</div>
							</div>
						</div>
						<div class="widget" style="margin-top: 20px;">
							<div class="ad--widget--banner">
								<div class="row">
									<div class="col-sm-12">
										<a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
											<img src="{{ asset('kcnew/frontend/img/ads-img/tuyensinh2022.png') }}" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
						<x-blog.mangxahoi />		
						<x-blog.quangcao />
					</div>
				</div>
			</div>
			<!-- Home 5 công nghệ -->
			<div class="main--content pd--30-0">
				<div class="post--items-title" data-ajax="tab">
					<h2 class="h4">{{ $category_home[5]->name }}</h2>
				</div>
				<div class="post--items post--items-4" data-ajax-content="outer">
					<ul class="nav row" data-ajax-content="inner">
						<li class="col-md-8">
							<div class="post--item post--layout-1 post--type-video post--title-large">
								<div class="post--img">
									<a href="{{ route('posts.show', $post_category_home5[0]) }}" class="thumb">
										<img src="{{ asset($post_category_home5[0]->image ? 'storage/' . $post_category_home5[0]->image->path : 'storage/placeholders/placeholder-image.png')}}" style="height: 377px;" >
									</a>
									<a href="{{ route('categories.show', $post_category_home5[0]->category) }}" class="cat">{{ $post_category_home5[0]->category->name }}</a>
									<a href="{{ route('categories.show', $post_category_home5[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

									<div class="post--info">
										<ul class="nav meta">
											<li><a href="javascript:;">{{ $post_category_home5[0]->author->name }}</a></li>
											<li><a href="javascript:;">{{ $post_category_home5[0]->created_at->locale('vi')->diffForHumans() }}</a></li>
										</ul>
										<div class="title">
											<h2 class="h4">
												<a href="{{ route('posts.show', $post_category_home5[0]) }}" class="btn-link">{{ $post_category_home5[0]->title }}</a>
											</h2>
										</div>
									</div>
								</div>
							</div>
							<hr class="divider hidden-md hidden-lg">
						</li>
						<li class="col-md-4">
							<ul class="nav">
							@for ($i = 1; $i <= 4; $i++)
								<li>
									<div class="post--item post--type-audio post--layout-3">
										<div class="post--img">
											<a href="{{ route('posts.show', $post_category_home5[$i]) }}"class="thumb">
												<img src="{{ asset($post_category_home5[$i]->image ? 'storage/' . $post_category_home5[$i]->image->path : 'storage/placeholders/placeholder-image.png')}}" alt="">
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
								</li>
								@endfor		
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- Home 6-9 -->
			<div class="row">
				<!-- Home 6-9 khoa h-->
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- home 6 khoa học-->
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
							<!-- Home7 xe cộ -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[7]->name }}</h2>
								</div>
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-xs-12">
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home7[0]) }}"class="thumb">
														<img src="{{ asset($post_category_home7[0]->image ? 'storage/' . $post_category_home7[0]->image->path : 'storage/placeholders/placeholder-image.png')}}"style="height: 217px;">
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
										</li>
										@for ($i = 1; $i <= 4; $i++)
											@if ($i === 1 || $i === 3)
											<li class="col-xs-12">
												<hr class="divider">
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
										</li>
										@endfor
									</ul>
								</div>
							</div>
	                        <!-- Home 8 kinh doanh  -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[8]->name }}</h2>
								</div>
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home8[0]) }}" class="thumb">
														<img src="{{ asset($post_category_home8[0]->image ? 'storage/' . $post_category_home8[0]->image->path : 'storage/placeholders/placeholder-image.png')}}" style="height: 163px;">
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
											<hr class="mar_bottom15 ">
											<ul class="list_news_show_home">
												@for ($i = 3; $i <= 5; $i++)
													@if($i!=5)
													<li class="boder_link_show_home">
														<h3 class="h3">
															<a href="{{ route('posts.show', $post_category_home8[$i]) }}">{{ $post_category_home8[$i]->title }}</a>
														</h3>
													</li>
													@endif

													@if($i==5)
													<li>
														<h3 class="h3">
															<a href="{{ route('posts.show', $post_category_home8[$i]) }}">{{ $post_category_home8[$i]->title }}</a>
														</h3>
													</li>
													@endif
												@endfor
											</ul>
										</li>
										<li class="col-md-6">
											<ul class="nav row">
												<li class="col-xs-12 hidden-md hidden-lg">
													<hr class="divider">
												</li>
												@for ($i = 1; $i <= 4; $i++)
													@if($i==3)
														<li class="col-xs-12">
															<hr class="divider">
														</li>
													@endif
													<li class="col-xs-6">
														<!-- Post Item Start -->
														<div class="post--item post--layout-2">
															<div class="post--img">
																<a href="{{ route('posts.show', $post_category_home8[$i]) }}"
																	class="thumb">
																	<img src="{{ asset($post_category_home8[$i]->image ? 'storage/' . $post_category_home8[$i]->image->path : 'storage/placeholders/placeholder-image.png' )}}"style="height: 120px;">
																</a>

																<div class="post--info">
																	<ul class="nav meta">
																		<li><a href="javascript:;">{{ $post_category_home8[$i]->author->name }}</a></li>
																		<li><a href="javascript:;">{{ $post_category_home8[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
																	</ul>
																	<div class="title">
																		<h3 class="h4">
																			<a href="{{ route('posts.show', $post_category_home8[$i]) }}" class="btn-link">{{ $post_category_home8[$i]->title }}</a>
																		</h3>
																	</div>
																</div>
															</div>
														</div>
													</li>
												@endfor										
											</ul>
										</li>
									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- Home 9 xã hội-->
							<div class="col-md-12 ptop--30 pbottom--30">
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[9]->name }}</h2>
								</div>
								<div class="post--items post--items-1" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-md-12">
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
										</li>
										@for ($i = 1; $i <= 3; $i++)
										<li class="col-md-4 col-xs-6 col-xxs-12">
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home9[$i]) }}" class="thumb">
														<img src="{{ asset($post_category_home9[$i]->image ? 'storage/' . $post_category_home9[$i]->image->path : 'storage/placeholders/placeholder-image.png')}}"style="height: 154px;">
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
										</li>
										@endfor							
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						<x-blog.binhchon />
						<!-- Ý kiến người đọc -->
						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Ý KIẾN NGƯỜI ĐỌC</h2>
							</div>
							<div class="list--widget list--widget-2" data-ajax-content="outer">
								<div class="post--items post--items-3">
									<ul class="nav" data-ajax-content="inner">
										@foreach ($top_commnents as $top_commnent) 
										<li>
											<div class="post--item post--layout-3">
												<div class="post--img">
													<span class="thumb">
														<img 
															style="margin: auto; background-size: cover ;  
															width: 60px; height: 60px;   
															background-image: url({{ $top_commnent->user->image ?  asset('storage/' . $top_commnent->user->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})"  
															alt=""
														>
													</span>
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
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection

	