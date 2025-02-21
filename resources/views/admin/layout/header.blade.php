<!-- <div class="loader-wrapper">
    <div class="loader"></div>
</div> -->

@section('admin_header')
    <header class="page-header row">
        <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"><img class="for-dark" src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="logo"></a><a class="close-btn" href="javascript:void(0)">
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
                            <svg class="svg-color circle-color">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                            </svg></a><span class="badge rounded-pill badge-secondary">3</span>
                        <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                            <h5 class="title bg-primary-light">Notifications <a href="private-chat.html"><span class="font-primary">View</span></a></h5>
                        </div>
                    </li>
                    <li class="profile-dropdown custom-dropdown">
                        <div class="d-flex align-items-center"><img src="{{ asset('assets/images/profile.png') }}" alt="">
                            <div class="flex-grow-1">
                                <h5>Wade Warren</h5><span>UI Designer</span>
                            </div>
                        </div>
                        <div class="custom-menu overflow-hidden">
                            <ul>
                                <li class="d-flex">
                                    <svg class="svg-color">
                                        <use href="assets/svg/iconly-sprite.svg#Profile"></use>
                                    </svg><a class="ms-2" href="user-profile.html">Account</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
@endsection
