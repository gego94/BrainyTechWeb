<?php
	  include('server.php');
      if(isset($_SESSION['loggedin'])) { 
          	session_destroy();
          	header('Location: index.php');
      }
?>