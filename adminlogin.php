<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "WELCOME ADMIN!!!";
}else{
    echo "no connection";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>ADMIN LOGIN PAGE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="components/styles.css">
        <?php include 'links.php' ?>
</head>
<body>
    <header>
    
        <div class="container center-div">
            <div class="heading text-center text-uppercase text-white">ADMIN LOGIN PAGE</div>
            <div class="container row">
                <div class="admin-form">
                    <form action="logincheck.php" method="POST">
                        <div class="form-group">
                            <label>Email ID </label>
                            <input type="email" name="user" value="" class="form-control" autocomplete="off">
                             </div>
                             <label>Password</label>
                            <input type="text" name="pass" value="" class="form-control" autocomplete="off">
                             </div>
                             <input type="submit" class="btn btn-success" name="submit">
</form>
</div>
</div>
</div>
</header>

</body>