 <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">{{Auth::user()->email}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item {{setSingleActive('dashboard')}}" href="{{route('dashboard')}}"
            ><i class="app-menu__icon fa fa-dashboard"></i
            ><span class="app-menu__label">Dashboard</span></a
          >
        </li>
        <li>
          <a class="app-menu__item {{setSingleActive('all-posts')}}" href="{{route('all-posts')}}"
            ><i class="app-menu__icon fa fa-dashboard"></i
            ><span class="app-menu__label">Posts</span></a
          >
        </li>
        <li>
          <a class="app-menu__item {{setSingleActive('all-users')}}"" href="{{route('all-users')}}"
            ><i class="app-menu__icon fa fa-dashboard"></i
            ><span class="app-menu__label">Users</span></a
          >
        </li>

      </ul>
    </aside>
