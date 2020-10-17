<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">
    <div class="user-profile px-20 py-15">
      <div class="d-flex align-items-center">
        <div class="image">
          <img src="<?php echo base_url(); ?>images/avatar/avatar-13.png" class="avatar avatar-lg bg-primary-light" alt="User Image">
        </div>
        <div class="info">
          <a class="dropdown-toggle px-20" data-toggle="dropdown" href="#">Admin Makam</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
            <a class="dropdown-item" href="#"><i class="ti-link"></i> Connections</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
          </div>
        </div>
      </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
          <span>Pemakaman</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data</a></li>
          <li><a href="<?php echo base_url(); ?>Ahliwaris"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ahli Waris</a></li>
          <li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lokasi</a></li>
          <li><a href="index4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Retribusi</a></li>
        </ul>
      </li>
      <!--<li>
        <a href="mailbox.html">
          <i class="icon-Incoming-mail"><span class="path1"></span><span class="path2"></span></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
          <span>Apps</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
          <li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
          <li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
          <li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
        </ul>
      </li>-->
    </ul>
  </section>
</aside>