<?php
setcookie('authCust','',time()-7200,'/');
setcookie('authRest','',time()-7200,'/');

header('location:index.php');
?>