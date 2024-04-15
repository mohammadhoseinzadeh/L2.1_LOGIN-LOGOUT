<?php


// echo 'hi';
// var_dump($_GET);
// $email = $_GET['email'];
// $password = $_GET['password'];
echo'<pre>';
$email = $_POST['email'];
$password = $_POST['password'];

if($email === 'm.hosseiin.1989@gmail.com' && $password === '1234')
{
    echo 'YOU ARE LOGIN';
}
else
{
    echo 'WRONG ! ';
}
//  var_dump($_REQUEST);


