<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>E-Goverment Working Area</title>
		<meta name="description" content="Working Area" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		


		<!-- frontpage css -->
		<link href="../css/frontpage.css" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">


		<!-- Push & slide css -->
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<script src="../js/modernizr.custom.js"></script>
	</head>

	<body class="cbp-spmenu-push">
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Menu</h3>
			<a href="#">Home</a>
			<a href="#">Wiki</a>
			<a href="#">Forum</a>
			<a href="#">Links</a>
			<a href="#">About</a>
			<a href="#">FAQ</a>
		</nav>

		<div class="container">
			<header class="clearfix">
				<span>E-Government</span>
				<h1>Personal Task</h1>
				<nav>
                    <div class="dropdown">
					
					<button class="noborder" id="showLeftPush" class="icon-drop" data-info="Menu"><span class="glyphicon glyphicon-align-justify bigfont" aria-hidden="true"></span></button>
					<button class="noborder" id="showLeftPush" data-info="Login" data-toggle="dropdown"><span class="glyphicon glyphicon-user bigfont" aria-hidden="true"></span>Hello, User</button>
                    <button type="button" class="btn btn-danger noborder signout-btn">Sign out</button>
                    </div>
				</nav>
			</header>
		</div>


                <div id="cbp-fbscroller" class="cbp-fbscroller">

<!--    Pointer for describe current page 
				<nav>
					<a href="#fbsection1" class="cbp-fbcurrent">Section 1</a>
					<a href="#fbsection2">Section 2</a>
					<a href="#fbsection3">Section 3</a>
					<a href="#fbsection4">Section 4</a>
					<a href="#fbsection5">Section 5</a>
				</nav>
-->

				<section id="fbsection5">
					
					<div class="container text-center">

					<div class="container minibox"></div>

					<div class="row"> 
					<div class="col-md-6 bigbutton text-center">WiKi</div>
					<div class="col-md-6 bigbutton text-center">Web Forum</div>
					</div>
					

				</div>
				</section>

			<section id="fbsection5"></section>
			</div>

		

		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="../js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
			
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>



		<!-- Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        

		<!-- jquery.easing by http://gsgd.co.uk/ : http://gsgd.co.uk/sandbox/jquery/easing/ -->
		<script src="../js/jquery.easing.min.js"></script>
		<!-- waypoints jQuery plugin by http://imakewebthings.com/ : http://imakewebthings.com/jquery-waypoints/ -->
		<script src="../js/waypoints.min.js"></script>
		<!-- jquery-smartresize by @louis_remi : https://github.com/louisremi/jquery-smartresize -->
		<script src="../js/jquery.debouncedresize.js"></script>
		<script src="../js/cbpFixedScrollLayout.js"></script>
		<script>
			$(function() {
				cbpFixedScrollLayout.init();
			});
		</script>
	</body>
</html>
