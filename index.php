<?php include('Admin&Registration/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion </title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/display.css" rel="stylesheet" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <script>
 new WOW().init();
</script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft">
					<h1><a href="index.php">Youth <span>Fashion</span></a></h1>	
				</div>
			<div class="col-sm-4 world animated wow fadeInRight">
					<div class="cart box_1">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSdLSFC4uiuJjOvhSUJGAfyORLKzDA5PpS026oAm-G_WVgKDrA/viewform?embedded=true" target="_blank" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0"><p><button class="w3-button w3-black" type="submit"> Заказать </button></p></a>
					</div>
			</div>
			<div class="col-sm-2 number animated wow fadeInRight">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					<p>Позвоните мне</p>
				</div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
				<nav class="navbar nav_bottom" role="navigation">
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="index.php">Главная</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="women.php" class="dropdown-toggle" data-toggle="dropdown">Женская<span class="caret"></span></a>				
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="men.php" class="dropdown-toggle" data-toggle="dropdown">Мужская<span class="caret"></span></a>						
							</li>
							<li><a href="products.php">Товары</a></li>
							<li class="last"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdpT5LjtEBk5XJf_ARz9dGKimPEy5WAg1x2nftYHBX6NxmnFQ/viewform?embedded=true" target="_blank" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0"><p><button class="w3-button w3-black" type="submit"> Обратная связь</span></a>	
							</li>
							
							<li class='active' style='float:right;'>
  <?php 
  if($_SESSION['user']==true)
    { 
      echo $_SESSION["username"];
      echo '<a href="../function.php"><span>Выйти</span></a></li>';//logout
    }
  elseif($_SESSION['user']==false)
    {
      echo '<a href="Admin&Registration/login.php"><span>Логин/Регистрация</span></a></li>';
    }
  ?>
						</ul>
					 </div>
				  
				</nav>
			</div>
		<div class="clearfix"> </div>
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
		</div>
	</div>
</div>
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="images/1.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<p>OFFER</p>
						</div>
	       			 </li>
			 		 <li>
	          			<img src="images/3.jpg" alt=""> 
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<p>OFFER</p>
						</div>					
	       			 </li>
					 <li>
	          			<img src="images/2.jpg" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<p>OFFER</p>
						</div>
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi5.png" alt="" />
						</a>
						<h3><a href="single.html">Брюки палаццо</a></h3>
						<div class="price">
								<h5 class="item_price">12 000 тг</h5>
								<h5 class="item_cod">код товара #001</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
				<div class="col-md-6 animated wow fadeInDown animated">
					<div class="col-md3">
						<div class="up-t">
							<h3>50% Скидки</h3>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi4.png" alt="" />
						</a>
						<h3><a href="single.html">Брюки</a></h3>
						<div class="price">
								<h5 class="item_price">11 000тг</h5>
								<h5 class="item_cod">код товара #002</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>	
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi3.png" alt="" />
						</a>
						<h3><a href="single.html">Брюки палаццо</a></h3>
						<div class="price">
								<h5 class="item_price">11 500тг</h5>
								<h5 class="item_cod">код товара #003</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi2.png" alt="" />
						</a>
						<h3><a href="single.html">Брюки</a></h3>
						<div class="price">
								<h5 class="item_price">14 000тг</h5>
								<h5 class="item_cod">код товара #004</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi6.png" alt="" />
						</a>
						<h3><a href="single.html">Брюки</a></h3>
						<div class="price">
								<h5 class="item_price">16 000тг</h5>
								<h5 class="item_cod">код товара #005</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 cmn animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi8.png" alt="" />
						</a>
						<h3><a href="single.html">Расклешенные брюки</a></h3>
						<div class="price">
								<h5 class="item_price">9 000</h5>
								<h5 class="item_cod">код товара #006</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</div>
	<div class="con-tp">
		<div class="container">
			<div class="content-top2">
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="products.php">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>30%Скидки</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s">
				<a href="products.php">			
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>45%Скидки</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInRight">
				<a href="products.php">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>50%Скидки</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			</div>
			<div class="clearfix"></div>
			<div class="content-top2">
		<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
			<a href="products.php">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>25%Скидки</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInUp animated">
			<a href="products.php">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>50%Скидки</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInRight">
			<a href="products.php">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>35%Скидки</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
		</div>
	</div>
	<div class="c-btm">
		<div class="content-top3">
			<div class="container">
				<div class="col-md-3 col-md2 animated wow fadeInLeft">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="singleM.html">
							<img class="img-responsive" src="images/pi9.png" alt="" />
						</a>
						<h3><a href="singleM.html">Классические брюки</a></h3>
						<div class="price">
								<h5 class="item_price">10 000тг</h5>
								<h5 class="item_cod">код товара #007</h5>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="singleM.html">
							<img class="img-responsive" src="images/pi10.png" alt="" />
						</a>
						<h3><a href="singleM.html">Классические брюки</a></h3>
						<div class="price">
								<h5 class="item_price">8 750 тг</h5>
								<h5 class="item_cod">код товара #008</h5>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="singleM.html">
							<img class="img-responsive" src="images/pi11.png" alt="" />
						</a>
						<h3><a href="singleM.html">Классические брюки</a></h3>
						<div class="price">
								<h5 class="item_price">11 500тг</h5>
								<h5 class="item_cod">код товара #009</h5>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="singleM.html">
							<img class="img-responsive" src="images/pi12.png" alt="" />
						</a>
						<h3><a href="singleM.html">Классические брюки</a></h3>
						<div class="price">
								<h5 class="item_price">13 200тг</h5>
								<h5 class="item_cod">код товара #010</h5>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			</div>	
		</div>
	</div>
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer animated wow fadeInLeft">
				<h3>Подпишитесь на нас в</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="#"><i></i></a> </li>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="google"></i> </a></li>
						<li><a href="#"><i class="linked"></i> </a></li>						
					</ul>
				 </div>
			</div>
			<div class="col-md-6 top-footer1 animated wow fadeInRight">
				<h3>Новостная рассылка</h3>
					<form action="#" method="post">
						<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input class="sub" type="submit" value="SUBSCRIBE">
					</form>
			</div>
		</div>	
	</div>
		<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Категории</h6>
						<ul>
						<li><a href=>Популярные заказы</a></li>
						<li><a href=>Стильные товары</a></li>
						<li><a href=>Сейчас в моде</a></li>
						<li><a href=>Вечерние платья</a></li>
						<li><a href=>Костюмы</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Лучшие бренды</h6>
					<ul>
						<li><a href=>Zara</a></li>
						<li><a href=>Koton</a></li>
						<li><a href=>QLP</a></li>
						<li><a href=>Tommy</a></li>
						<li><a href=>Thomas graf</a></li>						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight">
					<h6>Наши контакты</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker"></i>Адрес : г. Алматы, ул. Абылайхана 1 <span></span></li>
						<li><i class="glyphicon glyphicon-envelope"></i>Email : <a href="mailto:info@example.com">yfashiontek@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone"></i>Телефон : +1234 567 567</li>
					</ul>
				</div>
				</div>
				<p class="footer-class animated wow fadeInUp animated"> © 2018 Youth Fashion . </p>
	</div>
</div>
</body>
</html># web_final_project
