<?php
//Sanitization method for data input:
function sanitizeData ($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

?>