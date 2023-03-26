<?php 
    $to = 'spec.nutricionista@gmail.com'; 
    $subject = 'Poruka sa sajta';
    $subject1 = 'Patekar Studio';

    $message = $_POST['poruka'];
    $from = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $body = "User " . $name . " phone number " . $phone . ",\n\nsent you:\n\n" . $message . "";
    $body1 = "Poštovani " . $name . ",\n\nHvala na poruci. Naš tim će Vas uskoro kontaktirati putem SMS-a.\n\nUgodan dan,\nVaš Patekar Studio";


    if(mail($to, $subject, $body)) {
      if(mail($from, $subject1, $body1)) {
        header("Location: http://patekarstudio.rs/kontakt.html");
      }
      else{
        echo "There was a problem sending your submission. Please try again later.";
      }
    } else {
      echo "There was a problem sending your submission. Please try again later.";
    }
?>




