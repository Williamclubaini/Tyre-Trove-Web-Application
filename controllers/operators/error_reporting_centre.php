<?php

	if(CONFIG['environment'] == 'development'){
		error_reporting(E_ALL);

	} elseif (CONFIG['environment'] == 'production') {
		error_reporting(0);

	} else {
		require('views/error/404.php');
	}
?>