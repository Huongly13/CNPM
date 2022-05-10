<?php 

session_start();
include('../config.php');

if(isset($_SESSION['username']) && isset($_SESSION['level']))
{
	header("Location: index.php");
}
else
{

	if(isset($_POST['login']))
	{
		$error = array();
		$success = array();
		$showMess = false;
		if(empty($_POST['email']))
		{
			$error['email'] = 'Bạn chưa nhập <b> email </b>';
		}

		if(empty($_POST['password']))
		{
			$error['password'] = 'Bạn chưa nhập <b> mật khẩu </b>';
		}

		if(!$error)
		{	
			
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			$check = "SELECT email, mat_khau, quyen  FROM tai_khoan WHERE email = '$email'";
			$result = mysqli_query($conn, $check);
			$row = mysqli_fetch_array($result);
			$level = $row['quyen'];

			if(mysqli_num_rows($result) == 1)
			{
				if($row['mat_khau'] == $password)
				{
					$showMess = true;
					$_SESSION['username'] = $email;
					$_SESSION['level'] = $level;

          
					$success['mess'] = 'Đăng nhập thành công';
					header("Refresh: 1; index.php?p=index&a=statistic");
				}
				else
				{
					$error['check'] = 'Nhập sai <b> mật khẩu </b>. Vui lòng thử lại';
				}
			}
			else
			{
				$error['check'] = 'Nhập sai <b> email </b>. Vui lòng thử lại';
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../dist/images/logo.jpg" type="image/x-icon"/>
  <title> QUẢN LÝ NHÂN SỰ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>WELLCOME!</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Đăng nhập tài khoản</p>
    <?php
    	if(isset($error))
    	{
    		if($showMess == false)
    		{
	    		echo "<div class='alert alert-danger alert-dismissible'>";
	    		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
	    		echo "<h4><i class='icon fa fa-ban'></i> Lỗi!</h4>";
	    		foreach ($error as $err)
	    		{
	    			echo $err . "<br/>";
	    		}
	    		echo "</div>";
	    	}
    	}
    ?>

    <?php 
    	// show success
    	if(isset($success))
    	{
    		if($showMess == true)
    		{
    			echo "<div class='alert alert-success alert-dismissible'>";
	    		foreach ($success as $suc)
	    		{
	    			echo $suc . "<br/>";
	    		}
	    		echo "</div>";
    		}
    	}
    ?>

    <form method="POST">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Nhập email" name="email"
        value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Đăng nhập</button>
        </div>
      </div>
    </form>

    
  </div>
</div>

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

<?php 
}

?>