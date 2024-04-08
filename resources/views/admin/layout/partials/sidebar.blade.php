<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            
            <li class="{{Route::is('admin.dashboard') ? 'active' : ''}}"><a href="{{route('admin.dashboard')}}" aria-expanded="false"><i
                        class="nav-icon ti ti-layout"></i><span class="nav-title">Dashboard</span></a>
            </li>
           
            <li class="{{Route::is('gallery-management.index') ? 'active' : ''}}"><a href="{{route('gallery-management.index')}}" aria-expanded="false"><i
                        class="nav-icon ti ti-gallery"></i><span class="nav-title">Gallery</span></a> </li>
            <li class="{{Route::is('events.index') ? 'active' : ''}}"><a href="{{route('events.index')}}" aria-expanded="false"><i
                class="nav-icon ti ti-briefcase"></i><span class="nav-title">Events</span></a> </li>
           
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>