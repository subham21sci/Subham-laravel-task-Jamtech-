<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title></title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="/adminassets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/adminassets/assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="/adminassets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="/adminassets/assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
            @if(Session::has('flash_message'))      
              <div class="alert {{ Session::get('alert-class', 'alert-danger') }}"> {{ Session::get('flash_message') }} <i class='bx bx-close'></i>
                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a> 
              </div>
            @endif
				<form class="login100-form " method="post">
					@csrf
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email" placeholder="Email">
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="/register">
							Register
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="/adminassets//assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="/adminassets//assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/adminassets//assets/js/pages/extra-pages/pages.js"></script>
	<!-- end js include path -->
</body>

</html>