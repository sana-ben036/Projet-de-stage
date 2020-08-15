<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');

}
?>
<?php 
function valid_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
include("../../include/connect.php");
if(isset($_POST['login'])){
    $email = valid_data ($_POST['email']);
    $password = $_POST['password'];


  
						$sth= $mag->prepare(" SELECT * FROM `admin_users` WHERE user_id = :email   ");
						$sth->bindParam(':email ',$email);
						$sth->execute();
                        while ($row = $sth->fetch()){
                            if($row  )){
				
                            $_SESSION['user_id']=$row['user_id'];
                            $_SESSION['username']=$row['username'];
                            header('location:../');
                           
                        }else{
                    header('location:../login/?msg=iuser');    }
    }
}
        ?>