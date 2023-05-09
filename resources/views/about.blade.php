@extends('main_layouts.master')
@section('title','News - Giới thiệu')
@section('content')
		
<div class="colorlib-counters colorlib-about">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="about-desc">
					<div class="about-img-1 animate-box" style="background-image: url( {{ asset('storage/' . $setting->about_first_image ) }} );"></div>
					<div class="about-img-2 animate-box" style="background-image: url( {{ asset('storage/' . $setting->about_second_image ) }} );"></div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 colorlib-heading animate-box">
						<h1 class="heading-big">Chúng tôi là ai</h1>
						<h2>Chúng tôi là</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box pbottom--30">
						<p>{{ $setting->about_first_text }}</p>
					</div>
					<div class="col-md-6 col-xs-6 animate-box">
						<div class="counter-entry">
							<div class="desc">
								<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Danh mục</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 animate-box">
						<div class="counter-entry">
							<div class="desc">
								<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Bài viết</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 animate-box">
						<div class="counter-entry">
							<div class="desc">
								<span class="colorlib-counter js-counter" data-from="0" data-to="2300" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Người đăng ký</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 animate-box">
						<div class="counter-entry">
							<div class="desc">
								<span class="colorlib-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Bình luận</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection