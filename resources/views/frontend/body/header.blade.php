<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="brix---header-wrapper w-nav">
    <div class="brix---container-default w-container">
      <div class="brix---header-content-wrapper"><a href="/" class="brix---header-logo-link w-nav-brand">
          <h1 class="heading-14">RecipeBook</h1>
        </a>
        <div class="brix---header-middle-col">
          <nav role="navigation" class="brix---header-menu-wrapper w-nav-menu">
            <ul role="list" class="brix---header-nav-menu-list">
              <li class="brix---header-nav-list-item-middle"><a href="/filter/view-recipes" class="brix---header-nav-link w-nav-link">Home</a></li>
              <li class="brix---header-nav-list-item-middle">
                <div data-hover="true" data-delay="0" class="brix---dropdown-wrapper w-dropdown">
                  <div class="brix---dropdown-toggle w-dropdown-toggle">
                    <div class="text-block-9">Recipes</div>  <svg class="brix---dropdown-chevron" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.27374 2.13684L10 10.8631L18.7263 2.13684" stroke="#211F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                   
                    
                  </div>
                  <nav class="brix---dropdown-column-wrapper w-dropdown-list">
                    <div class="brix---dropdown-card">
                      <div class="brix---dropdown-pd">
                        <div class="w-layout-grid brix---dropdown-links-grid"><a href="#" class="brix---dropdown-link w-dropdown-link">Breakfast recipes</a><a href="#" class="brix---dropdown-link w-dropdown-link">Lunch recipes</a><a href="#" class="brix---dropdown-link w-dropdown-link">Dinner recipes</a><a href="#" class="brix---dropdown-link w-dropdown-link">Appetizer recipes</a><a href="#" class="brix---dropdown-link w-dropdown-link">Salad recipes</a><a href="#" class="brix---dropdown-link w-dropdown-link">Soup recipes</a></div>
                      </div>
                    </div>
                  </nav>
                </div>
              </li>
              <li class="brix---header-nav-list-item-middle"><a href="/filter/blogs" class="brix---header-nav-link w-nav-link">Blogs</a></li>
              <li class="brix---header-nav-list-item-middle"><a href="/filter/contact" class="brix---header-nav-link w-nav-link">Contact</a></li>
              <li class="brix---header-nav-list-item-show-in-mbl"><a href="#" class="brix---btn-primary-small w-button">Get started</a></li>
            </ul>
          </nav>
        </div>
        <div class="brix---header-right-col">
          <div class="brix---hamburger-menu-wrapper w-nav-button">
            <div class="brix---hamburger-menu-bar-top"></div>
            <div class="brix---hamburger-menu-bar-bottom"></div>
            <div class="brix---hamburger-menu-bar-bottom"></div>
          </div>
          @if(auth()->check())
              @if(auth()->user()->role == 'admin')
                <div class="brix---btn-header-hidden-on-mbl"><a href="{{route('admin.dashboard')}}" class="brix---btn-primary-small w-button">Dashboard</a></div>
              @else
                <div class="brix---btn-header-hidden-on-mbl"><a href="{{route('dashboard')}}" class="brix---btn-primary-small w-button">Dashboard</a></div>
              @endif
          @else
              <div class="brix---btn-header-hidden-on-mbl second"><a href="{{route('login')}}" class="button-3 w-button">Login</a></div>
              <div class="brix---btn-header-hidden-on-mbl"><a href="{{'register'}}" class="brix---btn-primary-small w-button">Get Started</a></div>
          @endif
                 {{-- <div class="brix---btn-header-hidden-on-mbl second"><a href="{{route('login')}}" class="button-3 w-button">Hey David</a></div> --}}
       
              
         
          
        </div>
      </div>
    </div>
  </div>