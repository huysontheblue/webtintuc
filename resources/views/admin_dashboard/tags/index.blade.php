@extends("admin_dashboard.layouts.app")	
@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Từ khóa</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tất cả từ khóa</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <div class="position-relative">
                            <input type="text" class="form-control ps-5 radius-30" placeholder="Tìm kiếm tù khóa"> 
                            <span class="position-absolute top-50 product-show translate-middle-y">
                                <i class="bx bx-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Tên từ khóa</th>
                                    <th>Xem chi tiết</th>
                                    <th>Ngày tạo</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{ $tag->id }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $tag->name }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.show', $tag) }}">Chi tiết bài viết</a>
                                    </td>
                                    <td>{{ $tag->created_at->format('d/m/Y') }}</td>  
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('admin.tags.edit', $tag)}}" class=""><i class='bx bxs-edit'></i></a>
                                            <a href="#" onclick="event.preventDefault(); document.querySelector('#delete_form_{{ $tag->id }}').submit();" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            <form method="post" action="{{ route('admin.tags.destroy', $tag) }}" id="delete_form_{{ $tag->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>                                 
                                        </div>
                                    </td>
                                </tr>
                                @endforeach                        
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $tags->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
	<script>
		$(document).ready(function () {
            setTimeout(()=>{
                $(".general-message").fadeOut();
            },5000);
		});
	</script>

@endsection
