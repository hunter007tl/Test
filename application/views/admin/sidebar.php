 <?php $menu = $this->uri->segment(1); ?>

 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="<?=($menu=='admin-dashboard')?'active':'';?>"><a href="<?php echo site_url('admin-dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li class="<?=($menu=='users-list')?'active':'';?> <?=($menu=='users-register-form')?'active':'';?>"><a href="<?php echo site_url('users-list') ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>

        <li class="<?=($menu=='log-activity')?'active':'';?>"><a href="<?php echo site_url('log-activity') ?>"><i class="fa fa-history"></i> <span>Log Activity</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

  