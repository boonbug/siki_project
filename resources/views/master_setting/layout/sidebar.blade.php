 {{-- @section('admin_sidebar')
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
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>User Department</span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li><a href="department.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Department</a></li>
                            <li><a href="workout-role.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>workout role</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Pie"></use>
                            </svg><span>system utilities</span>
                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li><a href="vat.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>VAT</a></li>
                            <li><a href="container.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Container</a></li>
                            <li class=""><a class="submenu-title" href="javascript:void(0)">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Additional charge
                                    <svg class="feather">
                                        <use href="assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
                                    </svg></a>
                                <ul class="according-submenu" style="display: none;">
                                    <li><a href="tier-1-local.php">
                                            tier 1 local</a></li>
                                    <li><a href="error-page2.html">
                                            tier 2 local</a></li>
                                    <li><a href="error-page3.html">
                                            tier 1 transit</a></li>
                                    <li><a href="error-page4.html">
                                            tier 2 transit</a></li>
                                </ul>
                            </li>
                            <li><a href="unit-of-measure.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Unit of Measure</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>upload registry document </span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li><a href="local.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>local</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>shipping</span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li><a href="shiping.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>shipping</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>country & currency</span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li><a href="country.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>country </a></li>
                            <li><a href="currency.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>currency </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>CPS codes</span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li><a href="cps-codes.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>CPS codes </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>Vender</span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="add-vender.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Add Vender </a>
                            </li>
                            <li>
                                <a href="vender.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Add Profile </a>
                                <a href="add-vender-product.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Add Vender Product </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <svg class="pinned-icon">
                            <use href="assets/svg/iconly-sprite.svg#Pin"></use>
                        </svg><a class="sidebar-link" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg><span>Staff</span>

                            <svg class="feather">
                                <use href="assets/svg/feather-sprite.svg#chevron-right"></use>
                            </svg></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="add-staff.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Add Staff </a>
                            </li>
                            <li>
                                <a href="staff-profile.php">
                                    <svg class="svg-menu">
                                        <use href="assets/svg/iconly-sprite.svg#right-3"></use>
                                    </svg>Staff Profile </a>
                            </li>
                        </ul>
                    </li>
                    <li class="line"> </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow">
                <svg class="feather">
                    <use href="assets/svg/feather-sprite.svg#arrow-right"></use>
                </svg>
            </div>
        </aside>
@endsection --}}
