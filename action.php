<?php

// conexion db 
require 'connect.php';

// declarer session
session_start();

// fonction pr tester les input
function valid_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// script for login :::::::::::::::::::::::::::::::::::::

    if(isset($_POST['submit'])){

        $email = valid_data ($_POST['email']);
        $password = $_POST['password'];
    
    
        $sth = $mag->prepare("SELECT * FROM admin WHERE email_admin = :email ");
        $sth->bindParam(':email',$email);
        $sth->execute();
        while ($row = $sth->fetch())
        {
            $name=$row['name_admin'];
            $email=$row['email_admin'];
            $password=$row['password'];

            if ($row && ($_POST['password'] === $row['password']))
            {
                header("LOCATION:dashboard.php"); 
    
                //$_SESSION['message']= " You are login as admin !";
                //$_SESSION['msg_type']= "success";
                
                
                
            }else{

                $_SESSION['message']= "يرجى إدخال بيانات صحيحة";
                $_SESSION['msg_type']= "danger";
        
            }

        } 
        

    }

    // script for contact us :::::::::::::::::::::::::::::::::


if (isset($_POST['send'])) {
    $name = valid_data($_POST['name']);
    $email= valid_data($_POST['email']);
    $subject= valid_data($_POST['subject']);
    $message = valid_data($_POST['message']);

    if((!empty($name)) && (!empty($email)) && (!empty($subject)) && (!empty($message))){
        $dest = "fadaa.al.adala@gmail.com";
        $subj = "Contact Form";
        $msg= " New message recieved \n
        Name = $name \n
        E-mail = $email \n
        Subject = $subject \n
        Message = $message ";
        $headers= 'MINE-Version: 1.0'. "<br>";
        $headers= 'From : $name <$email>'. "<br>";
        $headers= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
        mail($dest, $subj, $msg, $headers);
    }else{
        echo "error";
    }

    $_SESSION['message']= "شكرا على تواصلكم ";
    $_SESSION['msg_type']= "success";

}



// script for newpost :::::::::::::::::::::::::::::::::::::

    $update = false;

    $id=" ";
    $title=" ";
    $text=" ";
    $category=" ";
    $image=" ";
    
    
    if(isset($_POST['add'])){                    
    
        //test values on input
        $title =valid_data ($_POST['title']);
        $text= valid_data($_POST['text']);
        $category = valid_data($_POST['cat']);
        $image= $_FILES['image']['name'];
        $upload="images/".$image;
    
         //insert values in  db
        $sth = $mag->prepare("
        INSERT INTO post(title_post, text_post, img_post,id_cat)
        VALUES(:title, :text, :image, :cat)");
        $sth->bindParam(':title',$title);
        $sth->bindParam(':text',$text);
        $sth->bindParam(':image',$upload);
        $sth->bindParam(':cat',$category);
        $sth->execute();
        move_uploaded_file($_FILES['image']['tmp_name'],$upload);
    
        //header('Location : dashboard.php');
    
        $_SESSION['message']= " تم حفظ المقال ";
        $_SESSION['msg_type']= "success";
    
    } 






    
    







?>