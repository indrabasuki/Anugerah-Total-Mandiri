 <aside class="main-sidebar sidebar-light-primary  fixed">
     <a href="#" class="brand-link logo-switch bg-blue text-center">
         <img src="{{ asset('images/logo_atm.png') }}" alt="Logo" class="brand-image-xl logo-xs">

         <span class="brand-image-xs logo-xl mx-3 mt-2" style="left: 12px"> ATM ERP SYSTEM</span>
     </a>

     <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('images/default.png') }}" class="img-circle elevation-" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Str::upper(Auth::user()->name) }}</a>
             </div>
         </div>

         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="{{ route('dashboard.index') }}"
                         class="nav-link {{ request()->is('dashboard') ? 'active' : '' }} ">
                         <img src="{{ asset('images/icon/menu/dashboard_menu.svg') }}" width="30" alt="">
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 @can('master.access')
                     <li class="nav-item my-1">
                         <a href="{{ url('master') }}"
                             class="nav-link {{ request()->segment(1) == 'master' ? 'active' : '' }} ">
                             <img src="{{ asset('images/icon/menu/icon_1.svg') }}" width="30" alt="">
                             <p>
                                 Master Data
                             </p>
                         </a>
                     </li>
                 @endcan
                 {{-- <li class="nav-item my-1">
                     <a href="#" class="nav-link">
                         <img src="{{ asset('images/icon/menu/icon_4.svg') }}" width="30" alt="">
                         <p>
                             Order
                             Management

                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('quotations.index') }}" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_1.svg') }}" width="30" alt="">
                                 <p>Quotation</p>
                             </a>

                         </li>
                         <li class="nav-item">
                             <a href="{{ route('salesorders.index') }}" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30" alt="">
                                 <p>Sales Order</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-item my-1">
                     <a href="#" class="nav-link">
                         <img src="{{ asset('images/icon/menu/icon_12.svg') }}" width="30" alt="">
                         <p>
                             Purchase
                             Management

                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('purchase-orders.index') }}" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_11.svg') }}" width="30" alt="">
                                 <p>Purchase Order</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30" alt="">
                                 <p>Purchase Invoice</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30" alt="">
                                 <p>Purchase Adjustment</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-item my-1">
                     <a href="#" class="nav-link">
                         <img src="{{ asset('images/icon/menu/icon_16.svg') }}" width="30" alt="">
                         <p>
                             Inventory
                             Management

                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_1.svg') }}" width="30" alt="">
                                 <p>Request PO</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30" alt="">
                                 <p>Inventory IN</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30"
                                     alt="">
                                 <p>Inventory OUT</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30"
                                     alt="">
                                 <p>Trancation Book</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30"
                                     alt="">
                                 <p>Inventory Closing</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-item my-1">
                     <a href="#" class="nav-link">
                         <img src="{{ asset('images/icon/menu/icon_19.svg') }}" width="30" alt="">
                         <p>
                             Sales
                             Management

                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_1.svg') }}" width="30"
                                     alt="">
                                 <p>Sales Invoice</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30"
                                     alt="">
                                 <p>Balance Of customer</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30"
                                     alt="">
                                 <p>Balance Of Detail</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <img src="{{ asset('images/icon/menu/icon_6.svg') }}" width="30"
                                     alt="">
                                 <p>Sales Adjustment</p>
                             </a>
                         </li>

                     </ul>
                 </li> --}}

             </ul>
         </nav>
     </div>
 </aside>
