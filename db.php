<?php
/*
try
{
    $pdo = new PDO("mysql:host=localhost;dbname=id7914913_test","id7914913_root","asd100200");
    $pdo->setAttribute(PDO::ERR_MODE,PDO::ERRMODE_EXECPTION);

}catch(PDOException $e)
{
    echo "error: " . $e->getMessage();

}
*/
/*
$connection = mysqli_connect('localhost','id7914913_root','asd100200','id7914913_test');

if($connection)
{
    echo 'connection is ok';
}else
{
    echo 'connection is not ok' . mysqli_connect_error($connection);
}

$sql="INSERT INTO user(name) VALUE('MOHAMED')";
if(mysqli_query($connection,$sql))
{
    echo 'insert is ok';
}else
{
    echo 'error : ' . mysqli_error($connection);
}
*/

$conn = new mysqli('localhost','id7914913_root','asd100200','id7914913_test');

if($conn->connect_error)
{
    echo 'error :' . $conn->connect_error;
}


?>