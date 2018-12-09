<?php
	define("MAIN_PAGE", "../bootstrap/index.html");
    define("LOGIN_PAGE", "login_form.php");
    define("PAGE_1", "../page1/index.html");
    define("START", "../start/index.html");

	function requestValue($name) {
		return isset($_REQUEST[$name])?$_REQUEST[$name]:"";
	}


	function errorBack($msg) {
		/*
		echo"<script>
					alert(", $msg, ");
					location.href = 'member_join_form.php'; 
				</script> ";
		<script>
			alert(이미 사용중인 아이디입니다.);
			location.href='member_join_form.php';
		</script>		
		*/
	?>
		<script>
			alert('<?= $msg ?>');
			history.back();
		</script>		

	<?php	
		exit();

	}

	function okGo($msg, $url) {
    ?>
		<script>
				alert('<?= $msg ?>');
				location.href = '<?= $url ?>';
		</script>
		
    <?php
    	exit();

	}


	function goNow($url) {
    ?>
		<script>				
				location.href = '<?= $url ?>';
		</script>
		
    <?php
    	exit();

	}



?>
