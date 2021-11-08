
<?php
include "../../db/db.php";
include "../../functions/functions.php";


$xmlDoc=new DOMDocument();

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$email = sanitizeData($_GET["email"]);
$resultCount = 0;
//lookup all links from the xml file if length of q>0
if (strlen($username)>0) {
    $querySQL = "   SELECT `emailAddress`
                    FROM `users`
                    WHERE `emailAddress` = '{$email}'";
    $result = $dbconn->query($querySQL);

    foreach($result as $current){
        $resultCount+=1;
    }


}

if($resultCount > 0){
    echo "Email is already taken";
}

else{
    echo "Email is valid";
}

?>