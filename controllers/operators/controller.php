<?php 
declare(strict_types = 1);

namespace Controllers\Operators;

function Startupfiles() {	

	require 'configurations/config.php';
	require 'controllers/operators/error_reporting_centre.php';
	require 'libraries/connection.php';
	require 'models/queries.php';
	require 'models/model.php';
	require 'libraries/date.php';
	require 'libraries/validations.php';
	require 'controllers/website.php';
	require 'controllers/user/user.php';
	require 'controllers/administrator/administration.php';
}


class PageController {

	// -- shows custom error page
	private static function Error(string $page = NULL)
	{
		require 'views/error/404.php';
	}

    // -- Responsible for rendering pages to the browser
	public function view(string $page, $data = NULL, $mixed = NULL, $cart = NULL)
	{
		if (!file_exists($page.'.php')) {
			return require 'views/error/404.php';

		} else {
			return require $page.'.php';
		}
	}

	public function sweetAlert(string $header, string $message, string $iconName)
	{
		// ICON NAMES :warning, error, success, info
		echo' <script src="node_modules/jquery/dist/jquery.min.js"></script>
              <script src="assets/js/popper.min.js" type="text/javascript"></script>
	          <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
              <script>swal("'.$header.'", "'.$message.'", "'.$iconName.'");</script>
            ';
	}

	public function windowLocation(string $location)
	{
		echo '<script type="text/javascript">
				setTimeout(function(){		
				window.location.assign("'.$location.'")}, 3000);
			  </script>';
	}

    // -- Responsible for redirecting pages to the browser
	public function redirectPage(string $page)
	{
		header("location:index.php?page=$page");
	}

	public static function Page($page)
	{
		if (!file_exists('controllers/'.$page.'.php')) {
		    
			if(!file_exists('controllers/user/'.$page.'.php'))
			{
				if(!file_exists('controllers/administrator/'.$page.'.php'))
				{
					self::Error($page);

				} else {

					require 'controllers/administrator/'.$page.'.php';
				}
			} else {

				require 'controllers/user/'.$page.'.php';
			}

	    } else {

		    require 'controllers/'.$page.'.php';
	    }
	}
}