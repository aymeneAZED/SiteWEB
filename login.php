<?php

session_start();

    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        
        $db = new PDO('mysql:host=localhost;dbname=luxurywatch', 'root','');
        $sql= "SELECT * FROM user WHERE username = '$username'";
        $result = $db->prepare($sql);
        $result->execute();

        if($result->rowCount()>0)
        {
                $data = $result->fetchall();
                if (password_verify($pass ,$data[0]["password"]))
                {
                    header('location:landing.php');
                   
                }
        }
        else
        {
            $pass= password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username,password) VALUES ('$username','$pass')";
            $req = $db->prepare($sql);
            $req->execute();
            echo 'Enrigistrement reussi';
        }
    }
?>