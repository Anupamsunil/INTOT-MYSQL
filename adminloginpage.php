<!DOCTYPE html>
<html>
	<head>
		<title>ADMIN LOGIN PAGE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="components/styles.css">
        <title>USER RECORDS</title>
</head>
<body  style="margin:50px;">
    <h1>LIST OF USERS</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Password</th>
</tr>
</thead>
<tbody>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="register";
    //create connection
    $connection = new mysqli($servername,$username,$password,$database);

    //check connection
    if($connection->connect_error){
        die("connection failed:" .$connection->connect_error);
    }
    //read data from database table
    $sql="SELECT * FROM users";
    $result = $connection->query($sql);

if (!$result){

    die("invalid query: " .$connection->error);
}
//read data of each row
while($row = $result->fetch_assoc()){

    echo " <tr>
    <td>" .$row['id'] . "</td>
    <td>" .$row['firstname'] . "</td>
    <td>" .$row['surname'] . "</td>
    <td>" .$row['username'] . "</td>
    <td>" .$row['email'] . "</td>
    <td>" .$row['gender'] . "</td>
    <td>" .$row['password'] . "</td>

<td>
<a class='bt btn-primary btn-sm' href='update.php' >Update</a>
<a class='bt btn-danger btn-sm' href='delete'>Delete</a>
</td>


</tr>";

}
   
?>
</tbody>
</table>
</body>
</html>
                
    