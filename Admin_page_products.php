<?php
    $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'products');
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
            
         if(isset($_GET['delete'])){
             $sql = "DELETE FROM products WHERE ID=".$_GET['delete'];
	         $result = mysqli_query($conn,$sql);
         }

         if (isset($_GET['Image'])) {
            $sql = "INSERT INTO products (ID, Image, Name, Price, code)
          VALUES (NULL, '".$_GET['Image']."','".$_GET['Name']."','".$_GET['Price']."','".$_GET['code']."','"."')";
          $result = mysqli_query($conn, $sql);
         }



        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn,$sql);
        $length = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion </title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo">
					<h1><a href="index.php">Youth <span>Fashion</span></a></h1>	
				</div>
			<div class="col-sm-4 world">
					<div class="cart box_1">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSdLSFC4uiuJjOvhSUJGAfyORLKzDA5PpS026oAm-G_WVgKDrA/viewform?embedded=true" target="_blank" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0"><p><button class="w3-button w3-black" type="submit"> Заказать </button></p></a>
					</div>
			</div>
			<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					<p>Позвоните мне </p>
				</div>
			<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
				<nav class="navbar nav_bottom" role="navigation">
					
					<div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 

					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="index.php">Главная</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Женская<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="women.php"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="women.php"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="women.php"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="women.php"><img src="images/t11.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="women.php"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="women.php"><img src="images/t12.jpg" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
									   </div>
									</div>
									                
								</div>				
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Мужская<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="men.php"><img src="images/t10.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.php"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.php"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.php"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.php"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.php"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
										 
									   </div>
									</div>
									                   
								</div>				
							</li>
							<li><a href="products.php">Товары</a></li>
							<li class="last"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdpT5LjtEBk5XJf_ARz9dGKimPEy5WAg1x2nftYHBX6NxmnFQ/viewform?embedded=true" target="_blank" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0"><p><button class="w3-button w3-black" type="submit">Обратная связь</span></a>	
							</li>
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
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Главная</a></li>
				<li class="active">Товары</li>
				      <h1>Admin Page</h1>

			</ol>
		</div>
	</div>
<div class="products">
	<div class="container">
		<h2>Товары</h2>
		<div class="col-md-9">
			<div class="content-top1">	
				
<?php
        
        for($i=0; $i<$length;$i++){
            $row = mysqli_fetch_assoc($result);
            print '<div class="col-md-4 col-md4 col-md1 simpleCart_shelfItem">
            <img class="img-responsive" src="'.$row['Image'].'"/>
	        <div class="right">
		    <h3><a href="singleM.html">'.$row['Name'].'</a></h3>
		<div class="price">
		  <div class="row"><div class="">Price:</div><div>'.$row['Price'].' тг</div></div>
		  <div class="row"><div class="">Code:</div><div>#00'.$row['code'].'</div></div> 
          <div class=""><a href="Admin_page_products.php?delete='.$row['ID'].'">Delete</a></div>
		  </div>
		</div>
        </div>';
    }
        
    mysqli_close($conn);
?>
	<form action="Admin_page_products.php" style="margin-right: 50px">
      <table>
            <tr>
                <td>Image(URL): </td>
                <td><input type="text" name="maker">
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="year"></td>
            </tr>
            <tr>
                <td>Products code:</td>
                <td><input type="number" name="price"></td>
            </tr>
        </table>
        <input type="submit" value="Add new">
    </form>
			</div>	
		</div>

		<div class="col-md-3 product-bottom">
					<div class="product-bottom">
						<h3 class="cate">Лучшие товары </h3>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="best.php"><img class="img-responsive " src="images/pr.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best"><a href="best.php" >Чернаяя кофта из новой колекций </a></h6>
							<span class=" price-in1">6 000тг</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="best.php"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="best.php" >черное платье из итальянской колекций</a></h6>
							<span class=" price-in1">15 000тг</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="best.php"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="best.php" >Красная стильная молодежная футболка </a></h6>
							<span class=" price-in1">3 500тг</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="best.php"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="best.php" >Женская стильная блузка</a></h6>
							<span class=" price-in1">7 000тг</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div>
		</div>
		<div class="clearfix"> </div>
	
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer">
				<h3>Подпишитесь на нас в</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="#"><i></i></a> </li>
						<li><a href="#"><i class="facebook"></i></a></li>	
						<li><a href="#"><i class="google"></i> </a></li>
						<li><a href="#"><i class="linked"></i> </a></li>						
					</ul>
						<div class="clearfix"></div>
				 </div>
			</div>
			<div class="col-md-6 top-footer1">
				<h3>Новостная рассылка</h3>
					<form action="#" method="post">
						<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
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
					<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
					<h6>Наши контакты</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Адрес : г. Астана, ул. Кенесары 60 <span></span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">yfashiontek@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Телефон : +1234 567 567</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class">© 2018 Youth Fashion .</a> </p>
			</div>
	</div>
</div>
</body>
</html>