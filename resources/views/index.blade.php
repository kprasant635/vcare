<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Interview Test | Landing-Page </title>
	<!-- slick cdn link -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/slick.css')}}">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/custom.css')}}">

	<!-- bootstrap cdn link -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css')}}">

	<!-- boxicons -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

	<div class="container-fluid desktop-view" style="background: #14253b;">
		<nav class="navbar navbar-expand-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="https://www.canterburypilgrimages.com/wp-content/uploads/2021/04/dummy-logo-5b.png" style="filter: contrast(0);" width="200px" class=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item nav-item-text">
							<a class="nav-link nav-link-text" href="#">Home</a>
						</li>
						<li class="nav-item nav-item-text">
							<a class="nav-link nav-link-text" href="#"> Gold Specials</a>
						</li>
						<li class="nav-item nav-item-text">
							<a class="nav-link nav-link-text" href="#">Exclusive Offers</a>
						</li>
						<li class="nav-item nav-item-text">
							<a class="nav-link nav-link-text" href="#">Why Gold</a>
						</li>
						<li class="nav-item nav-item-text">
							<a class="nav-link nav-link-text" href="#">About Us </a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>




	<!-- mobile-navigation -->
	<!-- <div class="container-fluid mobile-view nav-mobile" style="background: #; padding: 1rem 1rem;">
	<div class="row" >
		<div class="nav">
		<div class="col-md-9 col-lg-9 col-9 col-sm-9" >
			<a class="navbar-brand" href="index.html"><img src="asset/logo/logo-white.png" width="200px" class=""></a>
		</div>
		<div class="col-md-3 col-lg-3 col-3 col-sm-3">
			<a href="" class="btn btn-menu menu-btn" type="button"><i class="fas fa-bars menu-btn"></i></a>    			
		</div>
	</div>

		<ul class="nav-list-item hide-menu mt-3">
			<li><a href="#">Home</a></li>	
			<li><a href="#">Gold Specials</a></li>
			<li><a href="#">Exclusive Offers</a></li>
			<li><a href="#">Why Gold</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</div>
</div> -->



	<div class="container-fluid mobile-view">
		<div class="row">
			<nav class="mobile">
				<div class="logo d-flex">
					<a href="index.html" class="logo-mobile"><img src="{{ asset('asset/logo/logo-white.png')}}" width="180px"></a>

					<label for="click" class="menu-btn "><i class="fas fa-bars"></i></label>
				</div>

				<ul class="nav-list-item hide-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Gold Specials</a></li>
					<li><a href="#">Exclusive Offers</a></li>
					<li><a href="#">Why Gold</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</nav>
		</div>
	</div>











	<div class="container-fluid" style="padding: 0;"><br class="mobile-view"><br class="mobile-view"><br class="mobile-view">
		<div id="demo" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('asset/banners/Frame 17.png')}}" alt="image" class=" desktop-view" style="width:100%; cursor: pointer;">
					<img src="{{ asset('asset/banners/mobile-banner (2).png')}}" alt="image" class=" mobile-view" style="width:100%; cursor: pointer;">
				</div>
				<div class="carousel-item">
					<img src="{{ asset('asset/banners/Frame 18.png')}}" alt="image" class=" desktop-view" style="width:100%; cursor: pointer;">
					<img src="{{ asset('asset/banners/mobile-banner-2.png')}}" alt="image" class=" mobile-view" style="width:100%; cursor: pointer;">
				</div>
				<div class="carousel-item">
					<img src="{{ asset('asset/banners/Frame 19.png')}}" alt="image" class=" desktop-view" style="width:100%; cursor: pointer;">
					<img src="{{ asset('asset/banners/mobile-banner-3.png')}}" alt="image" class=" mobile-view" style="width:100%; cursor: pointer;">
				</div>
			</div>
			<!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
  		</button>
  		<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    		<span class="carousel-control-next-icon"></span>
  		</button> -->
		</div>
	</div>





	<div class="container-fluid pt-lg-5 trusted-box">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12"><br class="desktop-view"><br class="desktop-view">
				<h2 class="heading-text  pb-lg-4 text-center">Why Invest in Gold?</h2>
				<p class="conent-paragraph ">When you buy Gold, you're investing in a solid value asset that’s as old as civilization itself. </p>
				<p class="conent-paragraph ">If you're just thinking about investing in Gold and have any questions, anything at all, just let us know.</p>
				<p class="conent-paragraph ">One of our experienced specialists in the Gold Investment will answer those to suit your needs. </p>
			</div>

		</div><br class="desktop-view"><br class="desktop-view">
		<br class="desktop-view"><br class="desktop-view">
	</div>



	<div class="container-fluid mt-lg-5 px-lg-5">
		<h2 class="heading-text pt-5 text-center">Enhance your portfolio today </h2>
		<h3 class="spelization-paragraph pb-4">with Gold Bullion and Coins To Fit Any Budget</h3>
		<div class="row slider1 px-4">
			 {{ csrf_field() }}
     <div id="post_data" style="display: contents;"></div>
	</div>




	<div class="wrapper-container">

		<div class="container-fluid ">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-lg-5 col-12 col-sm-12 mt-4">
						<h2 class=" py-lg-4 spelization-heading" style="text-align: left;">Features</h2>
						<div class="d-flex">
							<div class="step-box"><strong><i class="fas fa-circle bullets"></i> </strong></div>
							<div class="started-text">
								<p class=" process-para"> In Attractive, Compact and Stackable Shapes.</p>
							</div>
						</div>
						<div class="d-flex">
							<div class="step-box"><strong><i class="fas fa-circle bullets"></i> </strong></div>
							<div class="started-text">
								<p class=" process-para">Store in our vault or get it delivered, both for *Free</p>
							</div>
						</div>
						<div class="d-flex">
							<div class="step-box"><strong><i class="fas fa-circle bullets"></i> </strong></div>
							<div class="started-text">
								<p class=" process-para">Highly Liquid, Resell at a premium</p>
							</div>
						</div>
						<div class="d-flex">
							<div class="step-box"><strong><i class="fas fa-circle bullets"></i></strong></div>
							<div class="started-text">
								<p class=" process-para"> Great Visual Appeal - Proudly Display or Gift</p>
							</div>
						</div>
					</div>
					<div class="col-md-7 col-lg-7 col-12 col-sm-12 ">
						<form action="{{url('contact-insert')}}" class=" mt-5 form-box-area" method="post">
							@csrf
							<div class="mb-3 mt-3">
								<!-- <label for="email">Name</label> -->
								<input type="name" class="form-control" id="email" placeholder="Enter your name" name="name">
							</div>
							<div class="mb-3">
								<!-- <label for="pwd">Email</label> -->
								<input type="email" class="form-control" id="pwd" placeholder="Your email id" name="email">
							</div>
							<div class="mb-3">
								<!-- <label for="pwd">Mobile Number</label> -->
								<input type="text" class="form-control" id="pwd" placeholder="Your Phone no..." name="phone" maxlength="10">
							</div>
							<div class="mb-3">
								<textarea class="form-control" rows="3" name="desc" placeholder="Your queries..."></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

























	<div class="container-fluid icon-background"><br><br><br><br>
		<div class="container">
			<h2 class="spelization-heading">Product Reviews </h2>
			<!-- <h3 class="spelization-paragraph p-1">What Our Patients Say</h3> -->
			<div class="row slider-review mt-5">
				<div class="col-md-4 testimonial-box">
					<div class="d-flex testimonial-parent-box">
						<div class="testimonial-img-box">
							<img src="asset/logo/placeholder.png" width="75px" height="75px" class="testimonial-img">
						</div>
						<div class="testimonial-name-box">
							<h2 class="testimonial-name">Sion Prawn</h2>
							<p class="testimonial-address"><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i></p>
						</div>
					</div>
					<div>
						<div class="testimonial-content-box py-3 px-sm-4 px-2">
							<p class="testimonial-content px-sm-4">Very good customer service. Polite and interested, without applying any pressure whatsoever. Felt very relaxed. Got the impression they were honest and knew what they were talking about, unlike a similar type of shop I'd popped into on the way here.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 testimonial-box">
					<div class="d-flex testimonial-parent-box">
						<div class="testimonial-img-box">
							<img src="asset/logo/placeholder.png" width="75px" height="75px" class="testimonial-img">
						</div>
						<div class="testimonial-name-box">
							<h2 class="testimonial-name">Sarah Summers</h2>
							<p class="testimonial-address"><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i></p>
						</div>
					</div>
					<div>
						<div class="testimonial-content-box py-3 px-sm-4 px-2 ">
							<p class="testimonial-content px-sm-4">I would fully recomend this company and it`s staff, in any bussiness matter dealing with jewellery ,bullion and coins. Thank you for your help. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 testimonial-box">
					<div class="d-flex testimonial-parent-box">
						<div class="testimonial-img-box">
							<img src="asset/logo/placeholder.png" width="75px" height="75px" class="testimonial-img">
						</div>
						<div class="testimonial-name-box">
							<h2 class="testimonial-name">Stuart Griffiths</h2>
							<p class="testimonial-address"><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i></p>
						</div>
					</div>
					<div>
						<div class="testimonial-content-box py-3 px-sm-4 px-2">
							<p class="testimonial-content  px-sm-4">Avoid at all costs. Was given a price of 4grand for a 100g bar of gold to sell to this company 2 weeks ago. Now the economy is unstable and people are loosing their income the rip off merchant running this business told me he could only pay me 3grand for my gold bar.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 testimonial-box">
					<div class="d-flex testimonial-parent-box">
						<div class="testimonial-img-box">
							<img src="asset/logo/placeholder.png" width="75px" height="75px" class="testimonial-img">
						</div>
						<div class="testimonial-name-box">
							<h2 class="testimonial-name">Spinoza's Ethic</h2>
							<p class="testimonial-address"><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i></p>
						</div>
					</div>
					<div>
						<div class="testimonial-content-box py-3 px-sm-4 px-2">
							<p class="testimonial-content  px-sm-4">I placed an order over the weekend and received tracking details on the Monday morning. The silver coin arrived the next morning via RM Special Delivery.
								After an extensive search BullionForLess had proved to offer the best price.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 testimonial-box">
					<div class="d-flex testimonial-parent-box">
						<div class="testimonial-img-box">
							<img src="asset/logo/placeholder.png" width="75px" height="75px" class="testimonial-img">
						</div>
						<div class="testimonial-name-box">
							<h2 class="testimonial-name">Tom Bryan</h2>
							<p class="testimonial-address"><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i></p>
						</div>
					</div>
					<div>
						<div class="testimonial-content-box py-3 px-sm-4 px-2">
							<p class="testimonial-content  px-sm-4">I really respect the team at Bullion For Less. It is obvious to me how much they care and how passionate they are about the potential of investing in precious metals and they have taken the time to educate me on it which I really appreciate. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid" style="background: #14253b;">
		<div class="row">
			<div class="col-md-4 pt-5">
				<img src="https://www.canterburypilgrimages.com/wp-content/uploads/2021/04/dummy-logo-5b.png" style="filter: contrast(0);" width="300px" class=" logo-img">
				<p class=" footer-text">We are proud of being an established and independent family run business located in South Wales, where we deliver the highest possible standard of customer service and client satisfaction. We have a wealth of knowledge and experience within the Bullion and jewellery industry.</p>
			</div>
			<div class="col-md-4 pt-5">
				<h2 class=" quick-heading">Quick Links</h2>
				<ul class="footer-ul">
					<li><a href="#" class="quick-links">Home</a></li>
					<li><a href="#" class="quick-links">Gold Specials</a></li>
					<li><a href="#" class="quick-links">Exclusive Offers</a></li>
					<li><a href="#" class="quick-links">Why Gold</a></li>
					<li><a href="#" class="quick-links">About Us </a></li>
				</ul>
			</div>
			<div class="col-md-4 pt-5">
				<h2 class="quick-payment">Payment Methods</h2>
				<img src="asset/img/image 1.png" width="350px" class="d-flex m-auto responsive-footer-img">
			</div>
		</div>

		<div class="container footer-small-box" style="background: #191919;">
			<div class="row">
				<div class="col-md-4">
					<p class="text-center information"><i class="fas fa-phone icon-icon"></i></i> &nbsp;&nbsp;02920470</p>
				</div>
				<div class="col-md-4">
					<p class="text-center information"><i class="fas fa-envelope icon-icon"></i> &nbsp;&nbsp;sales@dummyweb.com</p>
				</div>
				<div class="col-md-4">
					<p class="text-center information"><i class="fas fa-home icon-icon"></i> &nbsp;&nbsp;14-18 City Road, Demmysaw, Wales CF24 3DL</p>
				</div>
			</div>
		</div>

		<br><br><br>
	</div>






























	<script type="text/javascript" src="asset/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/js/slick.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script>
		$(document).ready(function() {

			var _token = $('input[name="_token"]').val();

			load_data('', _token);

			function load_data(id = "", _token) {
				$.ajax({
					url: "{{ route('loadmore.load_data') }}",
					method: "POST",
					data: {
						id: id,
						_token: _token
					},
					success: function(data) {
						$('#load_more_button').remove();
						$('#post_data').append(data);
					}
				})
			}

			$(document).on('click', '#load_more_button', function() {
				var id = $(this).data('id');
				$('#load_more_button').html('<b>Loading...</b>');
				load_data(id, _token);
			});

		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".slider").slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 5000,
				arrows: false,
				centerMode: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: true
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true
						}
					}
				]

			})
		})

		$(document).ready(function() {
			$(".slider-review").slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 3000,
				arrows: false,
				centerMode: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: true
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true
						}
					}
				]

			})
		})
	</script>
	<script type="text/javascript">
		$('.menu-btn').click(function() {
			// body...
			$('.nav-list-item').toggleClass('show-menu hide-menu')
		})
	</script>
</body>

</html>