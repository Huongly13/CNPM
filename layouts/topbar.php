<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php?p=index&a=statistic" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Group11</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GROUP11</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Bạn có 3 tin nhắn</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/huongly.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Hương Ly            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Tôi có câu hỏi ?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/ny.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Ny Manyvong
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Tôi có câu hỏi ?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/mailuong.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Mai Lương
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Tôi có câu hỏi ?</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">Xem tất cả tin nhắn</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Bạn có 2 thông báo</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i>5 thành viên mới tham gia
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i>Bạn đã thay đổi tên người dùng của mình thành công</a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Xem tất cả</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User tai_khoan: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../uploads/images/<?php echo $row_acc['hinh_anh']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $row_acc['ten']; ?> <?php echo $row_acc['ho']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../uploads/images/<?php echo $row_acc['hinh_anh']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $row_acc['ten']; ?> <?php echo $row_acc['ho']; ?> - 
                  <?php 
                    if($row_acc['quyen'] == 1)
                    {
                      echo "Quản trị viên";
                    }
                    else
                    {
                      echo "Nhân viên";
                    }
                  ?>
                  <small>
                    
                  </small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="thong-tin-tai-khoan.php?p=tai_khoan&a=profile" class="btn btn-default btn-flat">Thông tin</a>
                </div>
                <div class="pull-right">
                  <a href="dang-xuat.php" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>