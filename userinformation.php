<?php



$connection = mysqli_connect('database-endpoint','database-username','database-password','database-name');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO table-name (user, email, message) VALUES ('$user', '$email', '$message')";


if (mysqli_query($connection,$query))
{
echo " Data Inserted Successfully.";
}
else
{
echo "Error:" . mysqli_error($connection);
}


mysqli_close($connection);

?>
