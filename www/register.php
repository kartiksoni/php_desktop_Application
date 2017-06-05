<style type="text/css" >@import url("style.css");</style>
<a href="index.php">Go back to index</a>
| <a href="<?php echo $_SERVER["REQUEST_URI"];?>">Refresh</a>
| <a href="register.php">Register</a>


<title>Register</title>
<h1>Register</h1>


<form enctype="multipart/form-data" action="register.php" method="POST">
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
    $db->exec("CREATE TABLE register (id INTEGER PRIMARY KEY AUTOINCREMENT , u_name TEXT, pass TEXT)");
    $db->exec("INSERT INTO register (u_name, pass) VALUES ('".$u_name."','".$pass."');");
    print_r('Register Sucssfully');
    }catch(PDOException $e)
 	 {
   		 print 'Exception : '.$e->getMessage();
 	 }

}
?>