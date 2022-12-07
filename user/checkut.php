<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cekut.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Pusat jam tangan murah dan berkualitas
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="akun.php" class="flex-c-m trans-04 p-lr-25">
							Akun saya
						</a>
						<a href="../masuk.php" class="flex-c-m trans-04 p-lr-25">
							Keluar
						</a>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-1.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Beranda</a>
							</li>

							<li>
								<a href="product.php">Beli</a>
							</li>
							<li>
							<a href="halaman pesanan.php">Pesanan saya</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl5 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl5 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="3">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="like.php" class="icon-header-item cl5 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="3">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
					Pusat jam tangan murah dan berkualitas
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="akun.php" class="flex-c-m p-lr-10 trans-04">
							Akun saya
						</a>
						<a href="../masuk.php" class="flex-c-m p-lr-10 trans-04">
							Keluar
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="product.php">Beli</a>
				</li>
				<li>
					<a href="pesanan.php">Pesanan Saya</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
				Keranjang Saya
				</span>

		
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item cart.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Olivia Burton Big Dial Quartz 
							</a>

							<span class="header-cart-item-info">
								1 x Rp. 338.000
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item cart-2.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Olivia Burton Abstract Floral
							</a>

							<span class="header-cart-item-info">
								1 x Rp. 539.000
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/itemcart1.png" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								REBIRTH Wanita Display Kuarsa Tahan Air
							</a>

							<span class="header-cart-item-info">
								1 x Rp. 258.000
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: Rp. 1.135.000
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						 LIHAT KERANJANG
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-104 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="shoping-cart.php" class="stext-109 cl8 hov-cl1 trans-04">
				Keranjang saya
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Checkout
			</span>
		</div>
	</div>
		
    	
    <div class="cekut">
		<div class="aa" style="margin-top: 40px;">
		 <h2 style="text-align: center;">Detail Pembelian</h2>
		 <table class="">
			 <tr>
				 <td class="satu" colspan="3"><input  type="text" placeholder="Nama Lengkap"></td>
			 </tr>
			 <tr>
				 <td><input  type="text" placeholder="Kelurahan/Kecamatan"></td>
				 <td><input  type="text" placeholder="Kota"></td>
				 <td><input  type="text" placeholder="Provinsi"></td>
			 </tr>
			 <tr>
				 <td class="dua" colspan="2"><input  type="text" placeholder="No Handphone"></td>
				 <td colspan="3"><input  type="text" placeholder="Kode Pos"></td>
			 </tr>
			 <tr>
				 <td class="tiga" colspan="3"><textarea name="" id="" cols="30" rows="10" placeholder="Detail Alamat"></textarea></td>
			 </tr>
		 </table>
		</div>
 
		 <div class="rdr">
			 <div class="bayar" >
				 <table >
					 <th colspan="2"><h5><b>Total pembayaran</b></h5></th>
					 <tr>
						 <td c>Total</td>
						 <td style="width: 100px;">Rp 1.135.000</td>
					 </tr>
					 <tr>
						 <td>Ongkir</td>
						 <td style="width: 100px;">Gratis</td>
						 <tr>
							 <td style="width: 100px;"><b>Metode Pembayaran</b></td>
							 <td >COD</td>
					 </tr>
					 <tr><td colspan="2"><div class="line"></div></td></tr>
					 <tr>
						 <td><b>Total Pembayaran</b></td>
						 <td ><b> 1.135.000</b></td></tr>
					 </tr>
					 <tr>
						 <td colspan="2" align="center" href="halaman pesanan.php"><input type="submit" class="btn" value="ORDER SEKARANG"  checked></td>
				</tr>
				 </table>
			 </div>
		 </div>
	 </div>
 </body>
 </html>

 <!-- Footer -->
 <footer class="bg3 p-t-75 p-b-32" style="margin-top: 150px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					<img src="images/icons/lg 2.png" alt="IMG-LOGO">
				</h4>
			</div>

			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Fitur
				</h4>

				<ul>
					<li class="p-b-10">
						<a href="index.php" class="stext-107 cl7 hov-cl1 trans-04">
							Beranda
						</a>
					</li>

					<li class="p-b-10">
						<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
							Beli
						</a>
					</li>

					<li class="p-b-10">
						<a href="pesanan.php" class="stext-107 cl7 hov-cl1 trans-04">
							Pesanan saya
						</a>
					</li>
					
					<li class="p-b-10">
						<a href="akun.php" class="stext-107 cl7 hov-cl1 trans-04">
							Akun saya
						</a>
					</li>

					
					<li class="p-b-10">
						<a href="shoping-cart.php" class="stext-107 cl7 hov-cl1 trans-04">
						   Keranjang
						</a>
					</li>
				</ul>
			</div>

			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Kategori
				</h4>
				<ul>
					<li class="p-b-10">
						<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
							Wanita
						</a>
					</li>

					<li class="p-b-10">
						<a href="product.php" class="stext-107 cl7 hov-cl1 trans-04">
							Pria
						</a>
					</li>
				</ul>
			</div>

			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Ada masalah ?
				</h4>

				<p class="stext-107 cl7 size-201">
					Hubungi : 0895-2335-1950
				</p>
				
				<p class="stext-107 cl7 size-201">
					Jalan Sumpil 3 No 32,Purwodadi, Blimbing, Malang, Jawa Timur
				</p>
			</div>
		</div>
		<p class="stext-107 cl6 txt-center">
		
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with by Annisa Kurli

		</p>
	</div>
</div>
</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>





