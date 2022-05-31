<?php
//print_r($_POST);
$email = $_POST['email']
$message = $_POST['message']
$error = '';
if(trim($email) == '')
   $error = 'Введите ваш email';
   else if(trim($message) == '')
   $error = 'Введите сообщение';
   else if(strlen($message) < 10)
   $error = 'Сообщение должно содержать не менее 10 символов'
   if($error != '') {
       echo $error;
       exit;
   }


?>