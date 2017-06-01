<!DOCTYPE html>
<html lang="###LANG###">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title>###TITLE1###</title>	
        <!--
		<base href="http://localhost:6352/teach/">
        -->
		<base href="https://www.50lingue.com/teach/">
		<meta name="keywords" content="###KEYWORDS###" />
		<meta name="description" content="###DESCRIPTION###">
		<link rel="shortcut icon" href="/template/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/template/img/apple-touch-icon.png">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="/template/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/template/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/template/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/template/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/template/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/template/vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="/template/css/theme.css">
		<link rel="stylesheet" href="/template/css/theme-elements.css">
		<link rel="stylesheet" href="/template/css/theme-blog.css">
		<link rel="stylesheet" href="/template/css/theme-shop.css">
		<link rel="stylesheet" href="/template/css/theme-animate.css">
		<link rel="stylesheet" href="/template/vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="/template/vendor/rs-plugin/css/layers.css" media="screen">
		<link rel="stylesheet" href="/template/vendor/rs-plugin/css/navigation.css" media="screen">
		<link rel="stylesheet" href="/template/vendor/circle-flip-slideshow/css/component.css" media="screen">
		<link rel="stylesheet" href="/template/css/skins/default.css">
		<link rel="stylesheet" href="/template/css/custom.css">
		<link rel="stylesheet" href="css/custom-teach.css">
		<script src="/template/vendor/modernizr/modernizr.min.js"></script>
        <script>
        window.fbAsyncInit = function() {
        FB.init({
            appId      : '267131810396447',
            xfbml      : true,
            version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        FB.login(function(response){
          // Handle the response object, like in statusChangeCallback() in our demo
          // code.
        });

        function checkLoginState() {
            FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
            });
        }
        </script>
	</head>
	
	<body>
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px"}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column header-column-center">
								<div class="header-logo">
									<a href="/"><img alt="50 Languages" width="301" height="55" src="images/logo.png"></a>						
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-center header-nav-bar-primary">
						<div class="container">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li><a href="/"><i class="fa fa-home fa-lg"></i></a></li>
										<li>
											<a href="/teach">
												Start
											</a>
										</li>
										&nbspFind:&nbsp<li class="dropdown"><a class="dropdown-toggle" href="people.php?type=1">Teachers</a>
										<ul class="dropdown-menu">
										    <li><a href="">Search / Browse</a></li>
										    <li><a href="people.php?type=1&lang=EN"><div class="flag-en"></div> English UK</a></li>
										    <li><a href="people.php?type=1&lang=DE"><div class="flag-de"></div> German</a></li>
										    <li><a href="people.php?type=1&lang=ES"><div class="flag-es"></div> Spanish</a></li>
										    <li><a href="people.php?type=1&lang=EM"><div class="flag-em"></div> English US</a></li>
										</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" href="people.php?type=2">Tutors</a>
										<ul class="dropdown-menu">
										    <li><a href="">Search / Browse</a></li>
										    <li><a href="people.php?type=2&lang=EN"><div class="flag-en"></div> English UK</a></li>
										    <li><a href="people.php?type=2&lang=DE"><div class="flag-de"></div> German</a></li>
										    <li><a href="people.php?type=2&lang=ES"><div class="flag-es"></div> Spanish</a></li>
										    <li><a href="people.php?type=2&lang=EM"><div class="flag-em"></div> English US</a></li>
										</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" href="people.php?type=3">Friends</a>
										<ul class="dropdown-menu">
										    <li><a href="">Search / Browse</a></li>
										    <li><a href="people.php?type=3&lang=EN"><div class="flag-en"></div> English UK</a></li>
										    <li><a href="people.php?type=3&lang=DE"><div class="flag-de"></div> German</a></li>
										    <li><a href="people.php?type=3&lang=ES"><div class="flag-es"></div> Spanish</a></li>
										    <li><a href="people.php?type=3&lang=EM"><div class="flag-em"></div> English US</a></li>
										</ul>
										</li>
										|
										<li class="active">
											<a href="#">
												<i class="fa fa-sign-in fa-lg"></i> Login
											</a>
										</li>
										<li>
											<a href="">
												<i class="fa fa-user-plus fa-lg"></i> Register
											</a>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" href="javascript:void();"><div class="flag-en"></div> EN</a>
										<ul class="dropdown-menu">
										    <li><a href="#"><div class="flag-en"></div> EN</a></li>
										    <li><a href="#"><div class="flag-de"></div> DE</a></li>
										</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>


			<div role="main" class="main">
				<section class="page-header page-header-light">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h1>Login / Register <span>Create a free user account and get access to language teachers worldwide</span></h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="featured-boxes">
								<div class="row">
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-sm">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md"><i class="fa fa-sign-in fa-lg"></i>&nbsp&nbsp&nbspLogin to your account</h4>
												<form action="/" id="frmSignIn" method="post">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Username or Email address</label>
																<input type="text" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<a class="pull-right" href="#">(Lost password?)</a>
																<label>Password</label>
																<input type="password" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<span class="remember-box checkbox">
																<label for="rememberme">
																	<input type="checkbox" id="rememberme" name="rememberme">Remember me
																</label>
															</span>
														</div>
														<div class="col-md-6">
															<input style="width:100%;" type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-sm">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md"><i class="fa fa-user-plus fa-lg"></i> Register a new account</h4>
												<p>Registered and confirmed users can browse our list of language teachers and schedule lessons. They can also
												find free language friends from around the world. As a registered user you can also apply to become a teacher or tutor yourself.</p>
												<button onclick="FB.login()" style="width:100%;color:#fff;background-color:#4e69a2;" type="submit" class="btn"><i class="fa fa-facebook fa-lg"></i> &nbsp; Continue with Facebook</button>
												<button style="width:100%;color:#fff;background-color:#1da1f2;margin-top:5px;" type="submit" class="btn"><i class="fa fa-twitter fa-lg"></i> &nbsp; Continue with Twitter</button>
												<br/><br/>
												<form action="/" id="frmSignUp" method="post">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Email address</label>
																<input type="text" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-6">
																<label>Password</label>
																<input type="password" value="" class="form-control input-lg">
															</div>
															<div class="col-md-6">
																<label>Re-enter password</label>
																<input type="password" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<input style="width:100%;" type="submit" value="Register with Email address" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
															<br/><br/>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
 
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>50 LANGUAGES</span>
						</div>
						<div class="col-md-4">
							<div class="newsletter">
								<h4>About 50 LANGUAGES</h4>
								<p>With 50 LANGUAGES you can learn over 50 languages like Afrikaans, Arabic, Chinese, Dutch, English, French, German, Hindi, Italian, Japanese, Persian, Portuguese, Russian, Spanish or Turkish in your native language!</p>									
								<a href="https://play.google.com/store/apps/details?id=com.goethe.f50languages" target="_blank">
								<img src="/template/images/googleplay.png" alt="Download our Android app"/> </a>								
								<a href="https://itunes.apple.com/us/app/50languages/id487070134" target="_blank">
								<img src="/template/images/itunes.png" alt="Download our iPhone / iPad app"/> </a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>&nbsp;</h4>
								<p>High quality MP3 files for all lessons are included and you are free to share them.</p>
								<ul class="contact">
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> 
									<a href="mailto:&#105;&#110;&#102;&#111;&#64;&#53;&#48;&#108;&#97;&#110;&#103;&#117;&#97;&#103;&#101;&#115;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#53;&#48;&#108;&#97;&#110;&#103;&#117;&#97;&#103;&#101;&#115;&#46;&#99;&#111;&#109;</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Language teachers</h4>
								<p>
								&raquo; <a href="">English language teachers</a><br/>
								&raquo; <a href="">German language teachers</a><br/>
								&raquo; <a href="">French language teachers</a><br/>
								&raquo; <a href="">Italian language teachers</a><br/>
								&raquo; <a href="">Russian language teachers</a><br/>
								&raquo; <a href="">Chinese language teachers</a><br/>
								</p>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/50-LANGUAGES-202119503266743/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="/" class="logo">
								<a href="/" class="logo"><img alt="50 Languages" class="img-responsive" src="images/logo-footer.png"></a>
								</a>
							</div>
							<div class="col-md-7">
								<p>Copyright &copy; 1997-2016 by Goethe Verlag GmbH Starnberg, Germany<br/>
								All rights reserved. <a href="https://www.50languages.com/licence.html">View licence.</a><br/>
								FREE for  public schools and personal non-commercial use.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="https://www.50languages.com/imprint.html">Imprint</a></li>
										<li><a href="https://www.50languages.com/privacypolicy.html">Privacy policy</a></li>
										<li><a href="https://www.50languages.com/disclaimer.html">Disclaimer</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="/template/vendor/jquery/jquery.min.js"></script>
		<script src="/template/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/template/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/template/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="/template/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/template/vendor/common/common.min.js"></script>
		<script src="/template/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="/template/vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="/template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="/template/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/template/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/template/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/template/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/template/vendor/vide/vide.min.js"></script>

		<script src="/template/js/theme.js"></script>

		<script src="/template/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/template/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="/template/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="/template/js/views/view.home.js"></script>

		<script src="/template/js/custom.js"></script>

		<script src="/template/js/theme.init.js"></script>
		
		
		<!-- 
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>