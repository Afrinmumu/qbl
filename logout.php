<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: creat_account.php");
   }
?>