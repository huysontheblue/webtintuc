<?php
    use App\Models\Post;
    use App\Models\Comment;
    use App\Models\Tag;
    $newComment = Comment::latest()->take(10)->get();
    foreach ($newComment as $comment) {
        $posts_comments[] = Post::where('id', $comment->post_id)->get();
    }
?>

<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu">
                <i class='bx bx-menu'></i>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Nhập để tìm kiếm..."> 
                    <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                </div>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mobile-search-icon">
                        <a class="nav-link" href="#">
                            <i class='bx bx-search'></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-notifications-list"></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">                                 
                            <div class="header-message-list"></div>                                  
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img_admn--user img-avatar " width="50" height="50" style="border-radius: 50% ; margin: auto; background-size: cover ;  background-image: url({{ auth()->user()->image ?  asset('storage/' . auth()->user()->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})" alt="">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                        <p class="designattion mb-0">{{ auth()->user()->role->name }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="http://127.0.0.1:8000/admin/users/1/edit">
                            <i class="bx bx-user"></i>
                            <span>Hồ sơ</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.setting.edit')}}">
                            <i class="bx bx-cog"></i>
                            <span>Cài đặt</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                        <a onclick="event.preventDefault(); document.getElementById('nav-logout-form').submit();" class="dropdown-item" >
                            <i class='bx bx-log-out-circle'></i>
                            <span>Đăng xuất</span>
                        </a>
                        <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>