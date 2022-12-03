<?php
session_start();
session_destroy();
echo "<script>
   window.top.location.href = 'login.php';
   </script>";