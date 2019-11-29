<?php
require_once ('class/connection.php');

 if ( isset($_POST['login']))
 {	session_start();
        if (empty($_POST['usr_username']) || empty($_POST['usr_password']))
        {
            header("location:login.php?Empty= Si prega di compilare gli spazi vuoti");
        }
        else
            {
                $query="select * from user where login='".$_POST['usr_username']."' and password='".$_POST['usr_password']."'";
                $result=mysqli_query($con,$query);

                    if(mysqli_fetch_assoc($result))
                    {
                        $_SESSION['usr_username']=$_POST['usr_username'];
                        header("location:soc.php");
                    }
                    else
                    {
                        header("location:login.php?Invalid= Inserisci il nome utente e la usr_passwordword corretti ");

                    }
            }


     }



?>