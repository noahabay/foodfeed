<?php
include "includes/header.php";
include "db/db.php";

$blog_id = $_POST["blog_id"];
$userId = $_SESSION['userID'];
$querySQL="delete from blogs where blog_id=$blog_id";

$dbconn->query($querySQL);
$dbconn->close();
?>

<script type="text/javascript">
	{window.location.replace("blogs.php");}
</script>