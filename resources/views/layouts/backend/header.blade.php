<!--Header-part-->
<div id="header">
  <h1><a href="{{ url('/admin/dashboard')}}">M&R Solution</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="fas fa-user"></i>  <span class="text">Welcome User</span><b class="fas fa-caret-up"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="fas fa-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="fas fa-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/logout')}}"><i class="fas fa-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fas fa-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="fas fa-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="fas fa-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="fas fa-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="fas fa-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{ url('/admin/settings')}}"><i class="fas fa-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="{{ url('/logout')}}"><i class="fas fa-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--start-top-serch-->

<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="fas fa-search fa-white"></i></button>
</div>

<!--End Header -->