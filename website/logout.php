<?php
    session_name('foodfeed');
    session_start();

    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name('foodfeed'),'',0,'/');
    //session_regenerate_id(true);
?>
    <script type="text/javascript">
    	{window.location.replace("index.php");}
	</script>
<?php
?>