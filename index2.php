<?php
if (isset($_POST['SendMessage']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$link=mysqli_connect('localhost','root','','tr');
if($link)
{

$qur=mysqli_query($link,"insert into th(name,email, password,subject,message)values('$name','$email','$password','$subject','$message')");


if($qur)
echo "<script>alert('now your account has been hacked')</script>";
else
echo "<script>alert('data inserted failed')</script>";

}
else 
echo "<script>alert('connection with dbms failed')</script>";

}




?>