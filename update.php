<?php
$host='localhost';
$user='root';
$pass='';
$dbname='register';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(! $conn){
    die('could not connect:'. mysqli_error());
}
echo 'Connected successfully';  
mysqli_close($conn);  
?>
<?php
$id=$_GET[('editid')];
$sql="SELECT * FROM register WHERE id=$id";
$data=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($data);
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $pass=$_POST['pass'];
  $update="UPDATE register SET id=$id,firstname=$fname,surname=$sname,username=$uname,email=$email,gender=$gender,password=$password where id=$id";
  if(mysqli_query($conn,$update))
  {
    $popup="<script>alert('updated successfully');</script>";
    echo $popup;
  }
else{
    $popup="<script>alert('updation failed');</script>";
    echo popup;
    mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration form</title>
        <link rel="stylesheet" href="components/styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<center>
		<h1>REGISTRATION FORM</h1>
		<br>
		<form method="POST" >
        <label>id</label><br />
        <input type="number" value="<?php echo $row['id']?>" name='id' required/></br>
			<label>Firstname</label>
			<input type="text" name="fname" value="<?php echo $row['fname']?>" placeholder="enter your first name" required/><br />
			<br>
			<br>
			<label>surname</label>
			<input type="text" name="sname" value="<?php echo $row['sname']?>" placeholder="enter your last name" required/><br/>
			<br>
			<br>
			<label>Username</label>
			<input type="text" name="uname" value="<?php echo $row['uname']?>" placeholder="enter your username" required/><br/>
			<br>
			<br>
			<label>Email</label>
			<input type="email" name="email"  value="<?php echo $row['email']?>" placeholder="email" required/><br />
			<br>
			<br>
			<label>Gender</label>
			<input type="radio" name="gender" value="male" value="<?php echo $row['gender']?>">Male
			<input type="radio" name="gender" value="female" value="<?php echo $row['gender']?>">Female
			<input type="radio" name="gender" value="others" value="<?php echo $row['gender']?>">Others
			<br>
			<br>
			<label>Password</label>
			<input type="password" name="pass" value="<?php echo $row['password']?>" placeholder="password" required/><br/>
			<br>
			<br>
			<input type="submit" name="update" value="update"><br></br>
</form>
</center>
</body>
</html>