@php
$users = Illuminate\Support\Facades\Auth::user()->id;
$user =  App\Models\User::find($users);
@endphp
   <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center">
							<img src="{{(!empty($user->photo))?url('upload/admin_image/'.$user->photo):url('upload/no_image.jpg')}}" alt="">
							<div class="d-flex align-items-center sidebar-info">
								<div>
									<span class="font-w400 d-block">{{$user->name}}</span>
									<small class="text-end font-w400">{{$user->role}}</small>
								</div>	
								<i class="fas fa-chevron-down"></i>
							</div>
							
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="{{route('admin.profile')}}" class="dropdown-item ai-icon ">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
							<span class="ms-2">Profile </span>
						</a>
						<a href="{{route('admin.change.password')}}" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							<span class="ms-2">Inbox </span>
						</a>
						<a href="{{route('admin.logout')}}" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
							<span class="ms-2">Logout </span>
						</a>
					</div>
				</div>
				<ul class="metismenu" id="menu">
                    <li><a href="{{route('admin.dashboard')}}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                       

                    </li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-093-waving"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('all.user')}}">All Users</a></li>
                            <li><a href="{{route('active.user')}}">Active Users</a></li>
                            <li><a href="{{route('inactive.user')}}">Inactive Users</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="fa-solid fa-gear"></i>
					
						
						<span class="nav-text">Recipes</span>
						<span class="badge badge-xs style-1 badge-danger">New</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="content.html">Content</a></li>
						<li><a href="menu.html">Menu</a></li>	
						<li><a href="email-template.html">Email Template</a></li>		
						<li><a href="blog.html">Blog</a></li>			
					</ul>
					</li>
                    
                </ul>
				
				
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->