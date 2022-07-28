<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="project";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 	$name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $mode = $_POST['mode'];
        $development = $_POST['development'];
        $benefit = $_POST['benefit'];
        $content = $_POST['content'];
        $cost = $_POST['cost'];
        $suggestion = $_POST['suggestion'];

	 $sql_query = "INSERT INTO survey (name,email,phone,branch,year,mode,development,benefit,content,cost,suggestion)
	 VALUES ('$name','$email','$phone','$branch','$year','$mode','$development','$benefit','$content','$cost','$suggestion')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Thank you for your time";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>