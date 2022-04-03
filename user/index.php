<?php
include_once '../admin/config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if($user->loggedIn()) {
	header("location: posts.php");
}

$loginMessage = '';
if(!empty($_POST["login"]) && $_POST["email"]!=''&& $_POST["password"]!='') {	
	$user->email = $_POST["email"];
	$user->password = $_POST["password"];
	if($user->login()) {
		header("location: posts.php");
	} else {
		$loginMessage = 'Invalid login! Please try again.';
	}
}

include('inc/header.php');
?>
<title>User Login</title>
<?php include('inc/container.php');?>

<style>
body {background: linear-gradient(90deg, rgba(27,114,128,1) 0%, rgba(45,123,148,1) 39%, rgba(8,150,208,1) 100%);} 
</style>
<h2 style="color:white;text-align: center;font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif">Task Log Management System</h2>	
</br>
<div class="container contact" style="padding-left:340px;">	
		
	<div class="col-md-7">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#1510A3;color:white;">
				<div class="panel-title">User Login</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($loginMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $loginMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-info">	

						</div>	
						

					</div>	

					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
								  
						</div>						
					</div>	
					<div >
						  <a href="../admin/index.php"style="text-align: center;">Admin Login</a>	
						  					  
						</div>
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>