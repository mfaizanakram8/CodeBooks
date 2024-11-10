
<?php 
session_start();
 
$testconfig = mysqli_connect('localhost', 'root', '', 'codebook');
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($testconfig,"SELECT * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['roles']=="Admin"){
		$_SESSION['username'] = $username;
		$_SESSION['roles'] = "Admin";
		header("location:homeadmin.php");
	}elseif($data['roles']=="User"){
		$_SESSION['username'] = $username;
		$_SESSION['roles'] = "User";
		header("location:homeuser.php");
	}
	else
	{
		
	echo ("<script LANGUAGE='JavaScript'> window.alert('Wrong Credential'); window.location.href='login.php';</script>");
	}	

}else{
	echo ("<script LANGUAGE='JavaScript'> window.alert('Wrong Credential'); window.location.href='login.php';</script>");
}

?>
