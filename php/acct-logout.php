<?php 

session_start();

session_unset();
session_destroy();

echo "
    <script type=\"text/javascript\">
    window.location.href = \"/ojt_k3l_pos/index.php\";
    </script>
    ";
?>