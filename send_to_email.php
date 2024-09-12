<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  //mengambil data dari form
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);


  //mengirimkan ke alamat penerima 
  $to = 'ricoandrepratama16@gmail.com';

  $email_subject = "pesan baru dari $name : $subject";

  //isi pesan 
  $email_body = "kamu dapat pesan baru dari $name. \n".
  "ini pesannya yang dia kirim:\n$message";

  //header untuk email 
  $headers = "From : $email\n";
  $headers .="Reply-To : $email";

  if (mail($to, $email_subject, $email_body, $headers)) {
      echo "Message sent successfully!";
  } else {
      echo "Failed to send message!";
  }
}
?>