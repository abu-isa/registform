<!DOCTYPE HTML>
<html>
	<head>
		<title>JP Webinar Form</title>
		<link rel="shortcut icon" href="images/logo.jpg">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/skel.min.js') }}"></script>
		<script src="{{ asset('js/skel-layers.min.js') }}"></script>
		<script src="{{ asset('js/init.js') }}"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="{{ asset('css/skel.css') }}" />
			<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
			<link rel="stylesheet" href="{{ asset('css/style-xlarge.css') }}" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
		<header id="header" class="skel-layers-fixed">
		<img src="images/logo-jp1.jpg" style="padding-left: 10px; padding-top: 10px; padding-bottom: 10px;" alt="logo">

<!-- 			<h1><a href="/">The Jakarta Post</a></h1> -->

			<nav id="nav">
				<ul>
					<li><span class="lnr lnr-envelope"></span> <span class="text">Email: life@jakpost.com</span></a></li>
			  		<li><a href="tel:+62215300476"><span class="lnr lnr-phone-handset"></span> <span class="text">Phone: (62) 21 5300-476</span></a></li>	
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>Welcome</h2>
				<p>Click here to register 
				<br>for the webinar</a></p>
				<ul class="actions">
					<li><a href="/daftar" class="button big special">Register now</a></li>
				</ul>
			</div>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1">
			<header class="major">
				<h2>Our Webinar</h2>
				<p>Register now before it runs out!</p>
			</header>
			<div class="container">
				<div class="row">
					@foreach($detail as $seminar)
						<div class="4u">
							<section class="special box">
							<img src="{{ url('uploads') }}/{{ $seminar->images }}" class="img-responsive" width="100px" height="100px">
								<h3>{{ $seminar->judul }}</h3>
								<p>{{ $seminar->tanggal }}</p>
								<p>{{ $seminar->speaker }}</p>
								<p>{{ $seminar->moderator }}</p>
								<p><a href="/daftar_id/{{ $seminar->id }}" class="btn btn-info btn-lg">Register</a></p>
							</section>							
						</div>
					@endforeach
				</div>
			</div>
		</section>
			
		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row double">
					<div class="6u">
						<div class="row collapse-at-2">
							<div class="6u">
								<h3>Read more</h3>
								<ul class="alt">
									<li><a href="https://www.thejakartapost.com/news">News</a></li>
									<li><a href="https://www.thejakartapost.com/life">Lifestyle</a></li>
									<li><a href="https://www.thejakartapost.com/travel">Travel</a></li>
									<li><a href="https://www.thejakartapost.com/multimedia">Multimedia</a></li>
								</ul>
							</div>
							<div class="6u">
								<h3>Social Media</h3>
								<ul class="alt">
									<li><a href="https://twitter.com/jakpost?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
									<li><a href="https://www.facebook.com/jakpost/">Facebook</a></li>
									<li><a href="https://www.youtube.com/channel/UC2zhLSPeHaH7fFBsRLf2Z0w">Youtube</a></li>
									<li><a href="https://www.instagram.com/jakpostimages/?hl=en">Instagram</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="6u">
						<h2>Our Office</h2>
						<p><b>PT Bina Media Tenggara</b></p>
						<p>Jl. Palmerah Barat 142-143, Jakarta 10270 
						Tel : 5300476, 5300478, 5306970 
						Fax: +62-21-5350050, 5306971 
						Email: editorial [at] thejakartapost.com</p>
					</div>
				</div>
				<ul class="copyright">
					<li>&copy; The Jakarta Post</li>
				</ul>
			</div>
		</footer>
	</body>
</html>