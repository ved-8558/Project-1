<?php
include("config.php");
session_start();
session_unset();
session_destroy();
echo "<script>alert('Sign Out!!'); window.location.href='index.php'</script>"

?>