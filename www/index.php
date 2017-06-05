<style type="text/css">@import url("style.css");</style>
<a href="index.php">Go back to index</a>
| <a href="<?php echo $_SERVER["REQUEST_URI"];?>">Refresh</a>
| <a href="register.php">Register</a>


<title>Login</title>
<h1>Login</h1>

<form enctype="multipart/form-data" action="index.php" method="POST">
 username: <input type=text name="u_name"><br>
 password: <input type=password name="pass"><br>
 <input type=submit><br>
</form>

<?php
if(isset($_POST['u_name'])){
	$u_name = $_POST['u_name'];
	$pass = $_POST['pass'];	
	try
    {
	$db = new PDO('sqlite:Acquaintsoft.sqlite');
    $result = $db->query("SELECT * FROM register WHERE `u_name`='".$u_name."' AND `pass`='".$pass."'");
    //$num = $result->fetchColumn();
    if ($result->fetchColumn() > 0) {
    	echo"Login Sucssfully";
    	echo"<script type='text/javascript'>location.href = 'home.php'</script>";
    }else{
    	echo "Login Failed";
    }
    }catch(PDOException $e)
 	 {
   		 print 'Exception : '.$e->getMessage();
 	 }
}



?>

