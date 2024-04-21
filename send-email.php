<?php 
    if ($_SEVER['REQUEST_METHOD'] == 'POST') {
        function cleanInput($input) {
            return htmlspecialchars(trim($input));
         }
         $name = cleanInput($_POST['fullname']);
         $email = cleanInput($_POST['email']);
         $message = cleanInput($_POST['message']);
     
     
         echo $name;
         echo $email;
         echo $message;
    }

?>
