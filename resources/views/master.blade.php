<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-SHOP HTML Template</title>
    <base href="{{asset('')}}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="resource/css/bootstrap.min.css" />
		<!-- quick view -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="resource/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="resource/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="resource/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="resource/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="resource/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header">
			<!-- Logo -->
				<div class="container-fluid">
					<div class="col-md-4" style="margin-top: 30px">
						<h4 style="font-family: hind;text-transform: uppercase;">hotline: 0972 296 733</h4>
					</div>
					<div class="col-md-4">
							<div class="col-md-4 col-md-offset-4">
							<a class="logo" href="#">
								<img src="resource/img/logo3.jpg" alt="">
							</a>
							</div>
					</div>
			<!-- /Logo -->		
					<div class="col-md-3 col-md-offset-1">
						<ul class="header-btns">					
							<!-- Cart -->
							<li class="header-cart dropdown default-dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<div class="header-btns-icon">
											<i class="fa fa-shopping-cart"></i>
											<span class="qty">2</span>
										</div>
										<strong class="text-uppercase">Giỏ hàng:</strong>
										<br>
										<span>35.20$</span>
									</div>
									
									<div class="custom-menu">
										<div id="shopping-cart">
											<div class="shopping-cart-list">
												<div class="product product-widget">
													<div class="product-thumb">
														<img src="resource/img/thumb-product01.jpg" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
														<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
													</div>
													<button class="cancel-btn"><i class="fa fa-trash"></i></button>
												</div>
												<div class="product product-widget">
													<div class="product-thumb">
														<img src="resource/img/thumb-product01.jpg" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
														<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
													</div>
													<button class="cancel-btn"><i class="fa fa-trash"></i></button>
												</div>
											</div>
											<div class="shopping-cart-btns">
												<button class="main-btn">Vào giỏ hàng</button>
												<button class="primary-btn">Thanh toán <i class="fa fa-arrow-circle-right"></i></button>
											</div>
										</div>
									</div>
							</li>
							<!-- /Cart -->
	
							<!-- Account -->
							<li class="header-account dropdown default-dropdown">
								<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
									<div class="header-btns-icon">
										<i class="fa fa-user-o"></i>
									</div>
									<strong class="text-uppercase">Tài khoản <i class="fa fa-caret-down"></i></strong>
									<br>
									<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
								</div>
								
								<ul class="custom-menu">
									<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
									<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
									<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
									<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
									<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
									<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
								</ul>
							</li>
							<!-- /Account -->
	
	
							<!-- Mobile nav toggle-->
							<li class="nav-toggle">
								<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
							</li>
							<!-- / Mobile nav toggle -->
						</ul>
					</div>
				</div>
			
			<!-- header -->
		</div>
		<!-- container -->
	</header>

	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav" id="cate-nav" >
					<span class="category-header">Danh mục <i class="fa fa-list"></i></span>
					<ul class="category-list" id="cate-list">						
						@foreach($product_type as $type)		
						<?php $count = 0; $pro_type1=$pro_type?>			
						@foreach($pro_type as $type1)
							@if($type->type_id === $type1->type_parent ) <?php $count=$count+1 ?> @endif
						@endforeach
						@if( $count <> 0)
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">{{$type->type_name}} <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-12">
										<?php $count_1=0;$first=0;?>
										@foreach ($pro_type as $type1)
										@if ($type->type_id === $type1->type_parent)
										<?php $count_1++;?>
										@if ($count_1<4 and $first===0)				
											<div class="col-md-4">
												<ul class="list-links">
													<li>
														<h3 class="list-links-title"><a href="#">{{$type1->type_name}}</a></h3></li>
													@foreach($pro_type1 as $type2)
													@if ($type1->type_id === $type2->type_parent)
													<li><a href="#">{{$type2->type_name}}</a></li>
													@endif
													@endforeach
												</ul>
												<hr class="hidden-md hidden-lg">
											</div>
										@elseif ($count_1===4)
										<?php $count_1=1; $first=1;?>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title"><a href="#">{{$type1->type_name}}</a></h3></li>
												@foreach($pro_type1 as $type2)
												@if ($type1->type_id === $type2->type_parent)
												<li><a href="#">{{$type2->type_name}}</a></li>
												@endif
												@endforeach
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										@elseif ($count_1<4 and $first===1)
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title"><a href="#">{{$type1->type_name}}</a></h3></li>
												@foreach($pro_type1 as $type2)
												@if ($type1->type_id === $type2->type_parent)
												<li><a href="#">{{$type2->type_name}}</a></li>
												@endif
												@endforeach
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										@endif
										@endif
										@endforeach	
									</div>
								</div>							
							</div>
						</li>
						@else 
						<li><a href="#">{{$type->type_name}}</a></li>
						@endif
						@endforeach
						<li><a href="#">Bags & Shoes</a></li>
						<li><a href="#">View All</a></li>
					</ul>
	 			</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="{{ url('/') }}"><b>Trang chủ</b></a></li>
						<li><a href="{{ url('products') }}" action="products.php"><b>Cửa hàng</b></a></li>
						<li><a href="#"><b>Khuyến mãi</b></a></li>
						<li><a href="{{ url('about') }}" action="about.php"><b>Giới thiệu</b></a></li>
						<li><a href="#"><b>liên hệ</b></a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<script src="resource/js/main.js"></script>
	<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 79 || document.documentElement.scrollTop > 79) {
		document.getElementById("navigation").style.top = "0";
		document.getElementById("navigation").style.position = "fixed";
		document.getElementById("navigation").style.width = "100%";
		document.getElementById("home").style.margin = "50px 0 0 0";
		// document.getElementById("navigation").style.z-index = 1000;
	}
	else {
		document.getElementById("navigation").style.top = "0";
		document.getElementById("navigation").style.position = "relative";
		document.getElementById("navigation").style.width = "100%";
		document.getElementById("home").style.margin = "0 0 0 0";
	}
}
</script>
	<!-- /NAVIGATION -->

    @yield('content')

	<!-- FOOTER -->
	<hr>
	<div class="col-md-1"></div>
	<div class="row" align="left">
		<div class="col-md-4"><h2>Hệ Thống Cửa Hàng<h2>
			<hr>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 504 CMT8, P.11, Q.3</h3>
					</a>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 412 Lê Văn Sỹ, P.14, Q.3</h3>
					</a>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 19 Nguyễn Trãi, P.2, Q.5</h3>
					</a>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 439 Nguyễn Trãi, P.7, Q.5</h3>
					</a>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 304-306 Nguyễn Trãi, P.8, Q.5</h3>
					</a>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 55 Quang Trung, P.10, Q.Gò Vấp</h3>
					</a>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" target="_blank">
						<h3>- 170A Võ Văn Ngân, P.Bình Thọ, Q.Thủ Đức</h3>
					</a>	
			<hr>			
					<h2>Thông Tin Hộ Kinh Doanh HuTuNa</h2>
						<a href="https://www.google.com/maps/place/Lê+Văn+Sỹ,+Quận+3,+Hồ+Chí+Minh,+Việt+Nam/@10.7894186,106.672839,17z/data=!3m1!4b1!4m5!3m4!1s0x3175292dca10e2d5:0xdf19a7972db22451!8m2!3d10.7894186!4d106.6750277" target="_blank">
							<h3>Đ.C: Lê Văn Sỹ, P14 Q3.TPHCM</h3>
						</a>
						<h3>ĐKKD số: 41C8013053 cấp ngày 01/12/2010, nơi cấp UBND quận 1</h3>
		</div>
		<div class="col-md-1"></div>

		<div class="col-md-2"><h2>Liên Hệ<h2>
			<hr>
				<li>
					<a href="https://www.facebook.com/huypm97" title="facebook" target="_blank">
						<img src="resource/img/facebook.png" alt="facebook" width="50px" height="auto">
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/tung.vu.17061997" title="instagram" target="_blank">
						<img src="resource/img/instagram.png" alt="instagram" width="50px" height="auto">
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/knightgarian" title="zalo" target="_blank">
						<img src="resource/img/zalo.png" alt="zalo" width="50px" height="auto">

					</a>
				</li>

				<li>
					<a href="https://www.youtube.com/channel/UCsaMa3VD1I9G952DDlOX7aw" title="youtube" target="_blank">
						<img src="resource/img/youtube.png" alt="youtube" width="50px" height="auto">
					</a>
				</li>
	  </div>

	  <div class="col-md-3">
		<a href="http://localhost/e-shop/" title="eshop">
			<img src="resource/img/footer.jpg" alt="logo" width="400px" height="auto">
		</a>
		<a href="http://www.online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=21115" title="congsan" target="_blank">
					<img src="resource/img/cộng sản.png" alt="congsan" width="400px" height="auto">
		</a>
		
	  </div>

	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="resource/js/jquery.min.js"></script>
	<script src="resource/js/bootstrap.min.js"></script>
	<script src="resource/js/slick.min.js"></script>
	<script src="resource/js/nouislider.min.js"></script>
	<script src="resource/js/jquery.zoom.min.js"></script>
	<script src="resource/js/main.js"></script>

</body>

</html>
