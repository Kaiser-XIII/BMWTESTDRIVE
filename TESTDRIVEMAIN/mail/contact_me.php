<?php 
$conn=@mysql_connect("Localhost","root","");
mysql_select_db("bmwdatabase",$conn) or die("Database Connection Error.");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");

if(isset ($_POST['submit'])){


		$name = $_POST['username'];
		$adress = $_POST['message'];
        $mail =$_POST['email'];
		
		$add=mysql_query("insert into testdrivejoin(name,email,message)values('".$name."','".$mail."','".$adress."')");
		
		if($add){
		
		echo 'Success!<br>';
	   }
	

}

	$query =@mysql_query("Select * from testdrive");
if(isset($query)){
while($search=@mysql_fetch_array($query)){
	
	echo "Name:   ".$search["username"]."<br>";
	echo "Email:  ".$search["email"]."<br>";
	echo "Message:".$search["message"]."<br>";
	
	}
}else{
	echo "Can't reached the database.";
	}
	
?>
	