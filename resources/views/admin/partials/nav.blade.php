<ul class="sidebar-menu">
    <li class="header">NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('admin') ? 'class=active' : ''}}><a href="{{route('admin')}}"><i class="fa fa-link"></i> <span>Administration</span></a></li>
    <li><a href="#"><i class="fa fa-link"></i> <span></span></a></li>
    <li class="treeview  {{ request()->is('admin/post*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-link"></i> <span>Blog</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">

        <li {{ request()->is('admin.post.index') ? 'class=active' : ''}} ><a href="{{route('admin.post.index')}}">Show Post</a></li>
        <li {{ request()->is('admin.post.create') ? 'class=active' : ''}}  ><a href="{{route('admin.post.create')}}">Create Post</a></li>
      </ul>
    </li>
  </ul>
