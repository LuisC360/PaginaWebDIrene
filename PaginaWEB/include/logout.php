    <?php session_start();
    
    session_destroy();
    sleep(2);
    ?>
    <SCRIPT LANGUAGE="javascript">
	 location.href = "../index.php";
    </SCRIPT>