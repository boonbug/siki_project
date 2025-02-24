<!-- <div class="loader-wrapper">
    <div class="loader"></div>
</div> -->

@section('admin_header')
    <header class="page-header row">
        <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
            <img class="for-dark" src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo"></a>
            <a lass="close-btn" href="javascript:void(0)">
                <div class="toggle-sidebar">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </a></div>
        <div class="page-main-header col">
            <div class="header-left d-lg-block d-none"></div>


            <div class="nav-right">
                <ul class="header-right">
                    <li class="serchinput d-lg-none d-flex"><a class="search-mode">
                            <svg class="svg-color">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Search') }}"></use>
                            </svg></a>
                        <div class="form-group search-form">
                            <input type="text" placeholder="Search here...">
                        </div>
                    </li>
                    <!-- Notification menu-->

                    <li class="custom-dropdown"><a href="javascript:void(0)">
                        <div class="text-center col-12 col-sm-6 col-md-12" style="margin-left:-85px;">
                            <a href="{{ route('department.index') }}" class="btn m-1 btn-secondary" data-bs-toggle="tooltip" title="btn btn-secondary">Master Setting</a>
                          </div>
                    </li>
                    <li class="custom-dropdown"><a href="javascript:void(0)">
                            <svg class="svg-color circle-color">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                            </svg></a><span class="badge rounded-pill badge-secondary">3</span>
                        <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                            <h5 class="title bg-primary-light">Notifications <a href="private-chat.html"><span class="font-primary">View</span></a></h5>
                        </div>
                    </li>
                    <li class="profile-dropdown custom-dropdown">
                        <div class="d-flex align-items-center">
                            @if(Auth::user()->user_image != "")
                                <img src="{{ asset('storage/Admin_profile/' . Auth::user()->user_image) }}" alt="User Image" height="60px;">
                            @else
                                <img alt="" src="{{ asset('assets/images/avatar/1.jpg') }}"><
                            @endif
                            <div class="flex-grow-1">
                                <h5>{{ Auth::user()->company_name }}</h5>
                                {{-- <h5>Wade Warren</h5><span>UI Designer</span> --}}
                            </div>
                        </div>
                        <div class="custom-menu overflow-hidden">
                            <ul>
                              <li class="d-flex">
                                <svg class="svg-color">
                                  <use href="../assets/svg/iconly-sprite.svg#Profile"></use>
                                </svg><a class="ms-2" href="user-profile.html">Account</a>
                              </li>
                              <li class="d-flex">
                                <svg class="svg-color">
                                  <use href="../assets/svg/iconly-sprite.svg#Message"></use>
                                </svg><a class="ms-2" href="letter-box.html">Inbox</a>
                              </li>
                              <li class="d-flex">
                                <svg class="svg-color">
                                  <use href="../assets/svg/iconly-sprite.svg#Document"></use>
                                </svg><a class="ms-2" href="to-do.html">Task</a>
                              </li>
                              <li class="d-flex">
                                <svg class="svg-color">
                                  <use href="../assets/svg/iconly-sprite.svg#Login"></use>
                                </svg><a class="ms-2" href="login.html">Log Out</a>
                              </li>
                            </ul>
                          </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
@endsection
