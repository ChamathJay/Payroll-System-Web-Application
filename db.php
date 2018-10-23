<?php

  $connect = mysqli_connect("localhost","root", "","freehrea_login");

  if(!$connect) {
      die("Conncetion failed:".mysqli_error());
  }

?>