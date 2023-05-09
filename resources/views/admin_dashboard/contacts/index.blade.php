@extends("admin_dashboard.layouts.app")
@section("style")
	<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Phản hồi</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
							<a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tất cả phản hồi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Họ và Tên</th>
										<th>Email</th>
										<th>Tiêu đề</th>
										<th>Nội dung</th>
										<th>Chức năng</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($contacts as $contact)
									<tr>
										<td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
										<td>{{ $contact->email }}</td>
										<td>{{ $contact->subject }}</td>
										<td>{{ $contact->message }}</td>
                                        <td>
											<div class="d-flex order-actions">
												<a href="#" onclick="event.preventDefault(); document.querySelector('#delete_form_{{  $contact->id }}').submit();" class="ms-3">
													<i class='bx bxs-trash'></i>
												</a>
												<form method="post" action="{{ route('admin.contacts.destroy',  $contact) }}" id="delete_form_{{  $contact->id }}">
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
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
	<script src="{{ asset('admin_dashboard_assets/js/user.js') }}"></script>
@endsection
