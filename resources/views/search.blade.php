@extends('main_layouts.master')
@section('title', $title. ' - News ')
@section('content')
  <div class="main--breadcrumb">
        <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                    <li class="active"><span>{{ $title }}</span></li>
                </ul>
            </div>
        </div>
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">{{ $posts->count() }} {{ $title }} : <span style="color: black; background-color: #f7f201;" class="h4">{{$key}}</span></h2>                                       
                                    </div>
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
											@for($i =0 ; $i < count($posts) ; $i++)
                                            <li>
                                                <div class="post--item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="post--img">
                                                                <a href="{{ route('posts.show', $posts[$i] ) }}" class="thumb">
                                                                    <img src="{{ asset($posts[$i]->image ? 'storage/' . $posts[$i]->image->path : 'storage/placeholders/placeholder-image.png')}}"alt="">
                                                                </a>
                                                                <a href="{{ route('categories.show', $posts[$i]->category) }}" class="cat">{{ $posts[$i]->category->name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="post--info">
                                                                <ul class="nav meta">
																	<li><span>{{ $posts[$i]->author->name }}</a></li>
																	<li><span>{{ $posts[$i]->created_at->locale('vi')->diffForHumans() }}</span></li>
                                                                    <li><a href="#"><i class="fa fm fa-eye"></i>{{ $posts[$i]->views }}</span></li>
                                                                    <li><a href="{{ route('posts.show', $posts[$i] ) }}"><i class="fa fm fa-comments"></i>{{ count($posts[$i]->comments) }}</a></li>
                                                                </ul>
                                                                <div class="title">
                                                                    <h2 class="h3" style="color:black">
                                                                        <a href="{{ route('posts.show', $posts[$i] ) }}" class="btn-link">{{ $posts[$i]->title }}</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <div class="post--content">
                                                                <p>{{ $posts[$i]->excerpt }}</p>
                                                            </div>
                                                            <div class="post--action">
                                                                <a class="btn btn-link" href="{{ route('posts.show', $posts[$i] ) }}">Đọc thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="divider">
                                            </li>
											@endfor
                                        </ul>
                                        {{ $posts->links() }} 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">                
                            <x-blog.tintuc :outstanding_posts="$outstanding_posts"/>
                            <x-blog.binhchon />
                            <x-blog.quangcao />
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

