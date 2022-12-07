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
    <link rel="stylesheet" type="text/css" href="css/pesanan.css">
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
							Akun Saya
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
						<a href="checkut.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						 lIHAT KERANJANG
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-104 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="halaman">
        <div class="pesanan">
            <table>
                <tr>
                    <td class="tebal"><b>Info Pembayaran</b></td>
                </tr>
                <tr>
                    <td class="uu"> Nama Pembeli </td>
                
                    <td class="uu">: Annisa Kurli</td>
                </tr>
                <tr>
                    <td class="uu">Tanggal Pembelian</td>
                  
                    <td class="uu">: 12 September 2022</td>
                </tr>
                <tr>
                    <td class="uu">Total</td>
               
                    <td class="uu">: Rp 1.135.000</td>
                </tr>
                <tr>
                    <td class="uu">Metode Pembayaran</td>
                    <td class="uu">: COD</td>
                </tr>
            </table>
        </div>

        <div class="pesanan1">
            <table>
                <tr>
                    <td class="der"><b>Status Pengiriman</b></td>
                </tr>
                <tr>
                    <td class="uu">Detail alamat</td>
                  
                    <td class="uu">: Jl Sumpil 3 no 32, Purwodadi, Malang, Jawa timur</td>
                </tr>
                <tr>
                    <td class="uu">Status Pengiriman</td>
                    <td class="uu">: Selesai</td>
                </tr>
            </table>
        </div>

        <div class="pesanan2">
            <table>
                <tr>
                    <td class="hai"><b>Tanya Pengiriman?</b></td>
                </tr>
                <tr>
                    <td class="uu"><b> Hubungi </b></td>
                
                    <td class="uu">: 0895-2335-1950</td>
                </tr>
</table>
        </div>
    </div >

    <div class="rincian">
        <div class="ktak">
			<table> 
				<h4>Detail Pesanan</h4>
				<tr ><td class="satu" style="width: 55%;">PRODUK</td>
				<td class="satu" style="width: 5%;"> JUMLAH</td>
				<td class="satu" style="width: 10%;"> HARGA</td>
				</tr>
				<tr>
					<td class="satu">Olivia Burton Big Dial Quartz</td>
					<td class="satu">x01</td>
					<td class="satu">Rp.338.000</td>
				</tr>
				<tr>
					<td class="satu">REBIRTH Wanita Display Kuarsa Tahan Air</td>
					<td class="satu">x01</td>
					<td class="satu"> Rp. 258.000</td>
				</tr>
				<tr>
					<td class="satu"><b>SUBTOTAL</b></td>
					<td class="satu"></td>
					<td class="satu">Rp 1.135.000</td>
				</tr>
				<tr>
					<td class="satu"><b>ONGKIR</b></td>
					<td class="satu"></td>
					<td class="satu">GRATIS</td>
				</tr>
				<tr>
					<td class="satu"><b>TOTAL</b></td>
					<td class="satu"></td>
					<td class="satu"><b>Rp 1.135.000</b></td>
				</tr>
				
			</table>
		</div>
    </div>
		
    

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