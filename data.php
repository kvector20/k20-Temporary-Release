<?php
require('db.php');
if(isset($_POST['send']))
{   
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $first;
    $second;

    foreach($_POST['first'] as $f)
    {
        $first = $f;
    }
    foreach($_POST['second'] as $s)
    {
        $second = $s;
    }
    $sql = "INSERT INTO form(name,mail,phone,first,second) VALUES(?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('sssss',$name,$mail,$phone,$first,$second);

    //$stmt->execute();
    if($stmt->execute())
    {
        header('location:https://heroarmna.000webhostapp.com/thanks.php');
    }else
    {
        header('location:https://heroarmna.000webhostapp.com/index.php?error=1');
    }
    

}

?>