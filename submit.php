<?php
if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['username'])  && isset($_POST['phone'])){
    
    $dbc_form = mysqli_connect("localhost","root","","form");
    
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $username = $_POST['username']
    $phone = $_POST['phone']
        
    $query = "INSERT INTO register (name,mail,password) VALUES ('$name','$mail','$pass','username','phone')";
    
    mysqli_query($dbc_form,$query);
    
    header("location: index.php");
    
}
?>