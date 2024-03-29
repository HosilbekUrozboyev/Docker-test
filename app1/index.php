<?php
echo "Hello from App1! <br> ";
echo "Bu app2 => ";
$response = file_get_contents('http://localhost:81/');
echo $response;
?>
