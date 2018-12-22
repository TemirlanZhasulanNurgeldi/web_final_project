<?php
    $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'products');
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="display.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
				<nav class="navbar nav_bottom" role="navigation">
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
              				<li><a href="index.html">Главная</a></li>
              				<li><a href="women.php">Женская</a></li>
            			  	<li><a href="men.php">Мужская</a></li>
              				<li><a href="products.html">Товары</a></li>
              				<li class="last"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdpT5LjtEBk5XJf_ARz9dGKimPEy5WAg1x2nftYHBX6NxmnFQ/viewform?embedded=true" target="_blank" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0"><p><button class="w3-button w3-black" type="submit">Обратная связь</span></a></li>
            			</ul>
					 </div>
				</nav>
			</div>						
		</div>
	</div>
</div>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Главная</a></li>
				<li class="active">Товары</li>
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
		  </div>
		</div>
        </div>';
    }
        
    mysqli_close($conn);
?>
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
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Адрес : г. Алматы, ул.Абылайхана 1  <span></span></li>
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