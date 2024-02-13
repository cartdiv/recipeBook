@extends('admin.mastar')
@section('dashboard_body')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">All Users</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $users as $key=>$user )
                                                
                                            
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td><img class="rounded-circle" width="35" src="{{(!empty($user->photo))?url('upload/admin_image/'.$user->photo):url('upload/no_image.jpg')}}" alt="{{$user->name}}"></td>
                                                <td>{{$user->name}}</td>
                                                <td><a href="javascript:void(0);">{{$user->email}}</a></td>
                                                <td><a href="javascript:void(0);">{{$user->phone}}</a></td>
                                                <td>{{$user['countrys']['name']}}</td>
                                                <td>
                                                    @if ($user->status == 'active')
                                                    <span class="badge light badge-success">Active</span>
                                                    @else
                                                    <span class="badge light badge-danger">Inactive</span>
                                                    @endif
                                                    
                                                </td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
        <!--**********************************
            Content body end
        ***********************************-->

@endsection