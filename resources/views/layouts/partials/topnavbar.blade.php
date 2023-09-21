<div class="header-container fixed-top m-0 p-0" style="border-radius: 0px;">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/logo.png') }}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="index.html" class="nav-link"> {{ $cp->name }} </a>
                </li>
            </ul>

            
            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <i class="las la-search toggle-search"></i>
                    <form class="form-inline search-full form-inline search" action="{{ route('direct.search') }}" >
                        <div class="search-bar">
                            <input type="text" name="search_string" class="form-control search-form-control  ml-lg-auto" placeholder="Search here">
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                    <a class="nav-link full-screen-mode" href="javascript:void(0);">
                        <i class="las la-compress" id="fullScreenIcon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{ (!empty(Auth::user()->profile)) ? asset('uploads/'.Auth::user()->profile): asset('assets/assets/img/NoProfile.png') }}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="nav-drop is-account-dropdown" >
                            <div class="inner">
                                <div class="nav-drop-header">
                                      <span class="text-primary font-15">Welcome Admin !</span>
                                </div>
                                <div class="nav-drop-body account-items pb-0">
                                    <a id="profile-link"  class="account-item" href="{{ route('admin.profile') }}">
                                        <div class="media align-center">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img class="rounded-circle avatar-xs" src="{{ (!empty(Auth::user()->profile)) ? asset('uploads/'.Auth::user()->profile): asset('assets/assets/img/NoProfile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">{{ Auth::user()->name }}</h6>
                                                <small>{{ Auth::user()->roles->pluck('name') }}</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item" href="{{ route('admin.profile') }}">
                                      <div class="media align-center">
                                          <div class="icon-wrap">
                                            <i class="las la-user font-20"></i>
                                          </div>
                                          <div class="media-content ml-3">
                                              <h6 class="font-13 mb-0 strong">My profile</h6>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="account-item" href="{{ route('password.form') }}">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-lock font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">Change password</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a class="account-item" href="{{ route('logout') }}">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-sign-out-alt font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong ">Logout</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>