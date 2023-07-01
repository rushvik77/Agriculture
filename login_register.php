<?php

require('conection.php');
session_start();

// for login 
if(isset($_POST['login'])){
    $query = "SELECT * FROM registered_users WHERE email = '{$_POST['email_username']}' OR username = '{$_POST['email_username']}'";
    $result = mysqli_query($con, $query);

if($result)
{
  if(mysqli_num_rows($result)==1)
  {
    $result_fetch=mysqli_fetch_assoc($result);
    if(password_verify($_POST['password'],$result_fetch['password']))
    {
        // if pass matched 
       $_SESSION['logged_in']=true;
       $_SESSION['username']=$result_fetch['username'];
       header("location: index.php");
    }
    else
    {
        //  if incorrect pass
        echo"
        <Script> alert('Incorrect Password ');
        window.location.href='index.php';
        </script>"
        ;
    }
  }
  else{
    echo"
    <Script> alert('Email or Username not registerd');
    window.location.href='index.php';
    </script>"
    ;
  }
}
else
    {   
        echo"
        <Script> alert('Cannot run Quary');
        window.location.href='index.php';
        </script>"
        ;
    }
}





// for registration 
if(isset($_POST['register']))
{
    $user_exist_query = "SELECT * FROM registered_users WHERE username = '{$_POST['username']}' OR email = '{$_POST['email']}'";
    $result=mysqli_query($con, $user_exist_query);    

 if($result)
 {
    if(mysqli_num_rows($result)>0)#it will be executed username or email already use 
    {
         $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['username']==$_POST['username'])
        {

              echo"
            <Script> 
            alert('$result_fetch[username]-user name already taken ');
            window.location.href='index.php';
            </script>
            ";
        }
        else
        {
            echo"
            <Script>
             alert('$result_fetch[email]-email already registerd ');
            window.location.href='index.php';
            </script>
            ";
        }
    }
    else # no one has taken or user name 
    {
        $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
     $query= "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
    if(mysqli_query($con,$query))
    {
        #if data  inserted
        echo"
        <Script> alert('Registartion Sucssful');
        window.location.href='index.php';
        </script>"
        ;
    }
    else
    {
        #if data not inserted
        echo"
            <Script> alert('Cannot run Quary');
            window.location.href='index.php';
            </script>"
            ;
    }
    
    }
  } 
    else
    {
        echo"
        <Script> alert('Cannot run Quary');
        window.location.href='index.php';
         </script>"
         ;
    }
}

?>