@extends('admin.mastar')
@section('dashboard_body')


  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
				<div class="row">
					
					<div class="col-xl-9 col-lg-8">
						<div class="card  card-bx m-b30">
							<div class="card-header">
								<h6 class="title">Account setup</h6>
							</div>
							<form class="profile-form" method="POST" action="{{route('update.admin.password')}}">
								@csrf

								<div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b30 ">
											<label class="form-label">Current password</label>
											<input type="password" class="form-control" name="current_password" >
                                            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
										</div>

                                        <div class="col-sm-6 ">
											<label class="form-label">New password</label>
											<input type="password" class="form-control" name="new_password" >
                                            <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
										</div>

                                        <div class="col-sm-6 ">
											<label class="form-label">Confirm password</label>
											<input type="password" class="form-control" name="confirm_password" >
                                            <x-input-error :messages="$errors->get('confirm_password')" class="mt-2" />
										</div>
										
                                                
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">Update Password</button>
									
								</div>
							</form>
						</div>
					</div>
				</div>	
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


@endsection