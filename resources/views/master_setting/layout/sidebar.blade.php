
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
             <li class="sidebar-main-title">Super Admin</li>
             <li class="sidebar-list">

                 <a class="sidebar-link" href="javascript:void(0)">
                     <svg class="stroke-icon">
                         <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                     </svg><span>User Department</span>

                     <svg class="feather">
                         <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                     </svg></a>
                 <ul class="sidebar-submenu">
                     <li><a href="{{ route('department.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Department</a></li>
                     <li><a href="{{ route('workoutrole.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>workout role</a></li>

                 </ul>
             </li>
             <li class="sidebar-list">
                <a class="sidebar-link" href="javascript:void(0)">
                     <svg class="stroke-icon">
                         <use href="{{ asset('assets/svg/iconly-sprite.svg#Pie') }}"></use>
                     </svg><span>system utilities</span>
                     <svg class="feather">
                         <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                     </svg></a>
                 <ul class="sidebar-submenu">
                     <li><a href="{{ route('vat.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>VAT</a></li>
                     <li><a href="{{ route('container.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Container</a></li>

                     <li class=""><a class="submenu-title" href="javascript:void(0)">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Additional charge
                             <svg class="feather">
                                 <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right') }}"></use>
                             </svg></a>
                         <ul class="according-submenu" style="display: none;">
                             <li><a href="{{ route('first_tier_local.index') }}">
                                     tier 1 local</a></li>
                             <li><a href="{{ route('second_tier_local.index') }}">
                                     tier 2 local</a></li>
                             <li><a href="{{ route('first_tier_transit.index') }}">
                                     tier 1 transit</a></li>
                             <li><a href="{{ route('second_tier_transit.index') }}">
                                     tier 2 transit</a></li>

                         </ul>
                     </li>
                     <li><a href="{{ route('unit_of_measure.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Unit of Measure</a></li>
                 </ul>
             </li>
             <li class="sidebar-list">
                <a class="sidebar-link" href="javascript:void(0)">
                     <svg class="stroke-icon">
                         <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                     </svg><span>upload registry document </span>
                     <svg class="feather">
                         <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                     </svg></a>
                 <ul class="sidebar-submenu">
                     <li><a href="{{ route('local_document.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>local</a></li>
                     <li><a href="{{ route('transit_document.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Transit</a></li>
                     <li><a href="{{ route('dg_cargo_document.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>DG Cargo</a></li>
                     <li><a href="{{ route('reefer_document.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Reefer</a></li>
                     <li><a href="{{ route('direct_loading_document.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>Direct Loading</a></li>
                 </ul>
             </li>
             <li class="sidebar-list">
              <a class="sidebar-link" href="javascript:void(0)">
                     <svg class="stroke-icon">
                         <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                     </svg><span>shipping</span>
                     <svg class="feather">
                         <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                     </svg></a>
                 <ul class="sidebar-submenu">
                     <li><a href="{{ route('shipping.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>shipping</a></li>
                 </ul>
             </li>
             <li class="sidebar-list">
                <a class="sidebar-link" href="javascript:void(0)">
                     <svg class="stroke-icon">
                         <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                     </svg><span>country & currency</span>

                     <svg class="feather">
                         <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                     </svg></a>
                 <ul class="sidebar-submenu">
                     <li><a href="{{ route('country.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>country </a></li>
                     <li><a href="{{ route('currency.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>currency </a></li>
                 </ul>
             </li>
             <li class="sidebar-list">
                <a class="sidebar-link" href="javascript:void(0)">
                     <svg class="stroke-icon">
                         <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                     </svg><span>CPS codes</span>
                     <svg class="feather">
                         <use href="{{ asset('assets/svg/feather-sprite.svg#chevron-right') }}"></use>
                     </svg></a>
                 <ul class="sidebar-submenu">
                     <li><a href="{{ route('cps_code.index') }}">
                             <svg class="svg-menu">
                                 <use href="{{ asset('assets/svg/iconly-sprite.svg#right-3') }}"></use>
                             </svg>CPS codes </a></li>
                 </ul>
             </li>

         </ul>
     </div>
     <div class="right-arrow" id="right-arrow">
         <svg class="feather">
             <use href="{{ asset('assets/svg/feather-sprite.svg#arrow-right') }}"></use>
         </svg>
     </div>
 </aside>

