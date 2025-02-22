 @section('admin_sidebar')
        <div class="overlay"></div>
        <aside class="page-sidebar" data-sidebar-layout="stroke-svg">
            <div class="left-arrow" id="left-arrow">
                <svg class="feather">
                    <use href="{{ asset('assets/svg/feather-sprite.svg#arrow-left') }}"></use>
                </svg>
            </div>
            <div id="sidebar-menu">
                <ul class="sidebar-menu" id="simple-bar">
                    <li class="pin-title sidebar-list p-0">
                        <h5 class="sidebar-main-title">Pinned</h5>
                    </li>
                    <li class="line pin-line"></li>
                    <li class="sidebar-main-title">Admin</li>
                    <li class="sidebar-list">
                        <a class="sidebar-link" href="{{ route('dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                            </svg><span>Dashboard</span>
                            <svg >
                            </svg></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link" href="javascript:void(0)">
                              <svg class="stroke-icon">
                                  <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                              </svg> <span>Vender</span>
                              <svg class="feather">
                                  <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                              </svg></a>
                          <ul class="sidebar-submenu">
                              <li>
                                  <a href="{{ route('vender.index') }}">
                                      <svg class="svg-menu">
                                          <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                      </svg> Vender </a>
                              </li>
                              <li>
                                  <a href="{{ route('vender.create') }}">
                                      <svg class="svg-menu">
                                          <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                      </svg>Add Vender </a>
                              </li>
                              <li>
                                  <a href="{{ route('containerDetailsView') }}">
                                      <svg class="svg-menu">
                                          <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                                      </svg>Vender Product </a>
                              </li>
                          </ul>
                    </li>

                    <li class="line"> </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow">
                <svg class="feather">
                    <use href="{{ asset('assets/svg/feather-sprite.svg#arrow-right') }}"></use>
                </svg>
            </div>
        </aside>
@endsection
