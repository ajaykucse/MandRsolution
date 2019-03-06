<!--sidebar-menu-->
<div id="sidebar"><a href="{{ url('admin/dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($page=='dashboard'){echo 'active';} ?>"><a href="{{ url('admin/dashboard')}}" active-class="active" exact><i class="icon icon-home"></i> <span>Home/Dashboard</span></a> </li>
    <li class="<?php if($page=='menu'){echo 'active';} ?>"> <a href="{{ url('admin/view-menu')}}"><i class="fas fa-th-large nav-icon"></i> <span>Manage Menu</span></a> </li>
    <li class="<?php if($page=='menuItem'){echo 'active';} ?>"> <a href="{{ url('admin/view-menu-item')}}"><i class="fas fa-th-list nav-icon"></i> <span>Manage Menu Item</span></a> </li>
    <li><a href="tables.html"><i class="fas fa-font nav-icon"></i> <span>Manage Article</span></a></li>
    <li><a href="grid.html"><i class="fas fa-file nav-icon"></i> <span>Manage File</span></a></li>
    <li><a href="#"><i class="far fa-image nav-icon"></i> <span>Manage Gallery</span></li>
    <li><a href="buttons.html"><i class="fas fa-user"></i> <span>Recommended &amp; Special Trips</span></a></li>
    <li><a href="interface.html"><i class="fab fa-trade-federation nav-icon"></i> <span>Manage Link</span></a></li>
    <li><a href="interface.html"><i class="fab fa-facebook-messenger nav-icon"></i> <span>Manage Feedback</span></a></li>
    <li><a href="interface.html"><i class="fas fa-heart nav-icon" style="color: red"></i> <span>Manage Career</span></a></li>
    <li><a href="{{ url('admin/settings')}}"><i class="fas fa-cog nav-icon"></i> <span>Setting</span></a></li>
  </ul>
</div>
<!--sideba?-menu-->



 

