<?php 

/* Creating Variables*/

$FullName = $_REQUEST['full_name']; 
$Username = $_REQUEST['user_name']; 
$PhoneNumer = $_REQUEST['phone'];    
$EmailAddress = $_REQUEST['mail'];    
$Password = $_REQUEST['pass'];    
$CREATEACCOUNT = $_REQUEST['btntest'];    
 

if(isset($_POST['btntest']))
{ 
   /* create variables of your database */
    $host = "localhost"; 
    $user = "root"; 
    $password ="";
    $db = "perception_lib"; 

    @$conn= mysqli_connect($host,$user,$password,$db);
   
    $insert= "insert into customers values('$FullName','$Username','$PhoneNumer','$EmailAddress','$Password','$CREATEACCOUNT')";
   
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
    }
   
}
?>

 