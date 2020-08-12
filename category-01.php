<?php require'action.php'; ?>


<!DOCTYPE html>
<html lang="ar">
<head>
	<title>عرض الكل </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/justice.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-rtl.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						
						<a href="login.php" class="left-topbar-item">
							الدخول
						</a>
						
						<a href="contact.php" class="left-topbar-item">
							إتصل بنا
						</a>
						<a href="droit-pub.php" class="left-topbar-item">
							سياسة النشر 
						</a>

						
					</div>

					<div class="right-topbar">
						<a href="https://www.facebook.com/OCIAEJ">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>

				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.php"><img src="images/logof.png" alt="IMG-LOGO"></a>
				</div>
	
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					

					<li class="left-topbar">

						<a href="login.php" class="left-topbar-item">
							الدخول
						</a>
						<a href="contact.php" class="left-topbar-item">
							إتصل بنا
						</a>
						<a href="droit-pub.php" class="left-topbar-item">
							سياسة النشر 
						</a>
					</li>

					<li class="right-topbar">
						<a href="https://www.facebook.com/OCIAEJ">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index.php">الرئيسية </a>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="blog-list-01.php">فضاء التشريع </a>
					</li>

					<li>
						<a href="blog-list-01.php">مقالات قانونية </a>
					</li>

					<li>
						<a href="blog-list-01.php">إجتهاد قضائي </a>
					</li>

					<li>
						<a href="blog-list-01.php">أنشطة علمية </a>
					</li>

					<li>
						<a href="blog-grid.php">صوت و صورة </a>
					</li>

				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw"><img src="images/banner.png" alt="IMG"></a>
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.php">
							<img src="images/logof.png" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li class="main-menu-active">
								<a href="index.php">الرئيسية </a>
							</li>
							<li>
								<a href="blog-list-01.php?id=فضاء التشريع">
									فضاء التشريع </a>
								<ul class="sub-menu">
									<li><a href="category-01.php">قوانين </a></li>
									<li><a href="category-01.php">مشاريع القوانين </a></li>
									<li><a href="category-01.php">إتفاقيات </a></li>
									
								</ul>
							</li>
							<li>
								<a href="blog-list-01.php?id=مقالات قانونية">
									مقالات قانونية </a>
								<ul class="sub-menu">
									<li><a href="category-01.php">دراسات  </a></li>
									<li><a href="category-01.php">وجهة نظر  </a></li>
									<li><a href="category-01.php">تعليق على قرار  </a></li>
									
								</ul>
							</li>
							<li>
								<a href="blog-list-01.php?id=إجتهاد قضائي">
									إجتهاد قضائي</a>
							</li>
							<li>
								<a href="blog-list-01.php?id=أنشطة علمية">
									أنشطة علمية</a>
								<ul class="sub-menu">
									<li><a href="category-01.php">فعاليات  </a></li>
									<li><a href="category-01.php">تقارير و تغطية  </a></li>
									
								</ul>
							</li>
							<li>
								<a href="blog-grid.php">صوت و صورة  </a>
							</li>

						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>

	<!-- Breadcrumb -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				
				<span class="breadcrumb-item f1-s-2 cl9">
		        	قوانين  
				</span>
				<a href="blog-list-01.php" class="breadcrumb-item f1-s-2 cl9">
					فضاء التشريع 
				</a>

				
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="بحث">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Page heading -->
	

	<!-- Post -->
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--40 p-b-40">
							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.php" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-43.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.php" class="f1-m-3 cl2 hov-cl10 trans-03 respon2">
											القانون المتعلق بمهنة المحاماة

										</a>
									</h5>

									<div class="cl8 p-b-18">

										<span class="f1-s-3">
											12 فبراير 2020
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										القانون رقم 28.08 الصادر بتنفيده الظهير شريف رقم 1.08.101 الصادر في 20 من شوال 1429 موافق 20 أكتوبر 2008 المتعلق بمهنة المحاماة 
									</p>

									<a href="blog-detail-01.php" class="f1-s-1 cl9 hov-cl10 trans-03">
										المزيد 
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
						</div>

						<a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
							لتحميل المزيد 
						</a>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								للإشتراك في المجلة
							</h5>

							<p class="f1-m-1 cl0 p-b-25">
								توصل بجديد المقالات و النصوص القانونية و الأنشطة العلمية المعلن عنها ، و ذلك من خلال إرسال التفاصيل إلى بريدكم الإلكتروني بشكل دوري 
							</p>

							<form  class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="البريد الإلكتروني">

                                <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>

						<!-- Most Popular -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									الأكثر متابعة
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										1
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										جائحة كورونا تجمع أساتذة قانون من المغرب والجزائر والعراق في ندوة افتراضية 
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										2
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										إشكالية التمييز بين خبرة التسيير والخبرة المحاسبية
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										3
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										ورقة حول موضوع الشرعية الجنائية الإجرائية في زمن كورونا
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										4
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										دور التحكيم الالكتروني في فض منازعات عقود التجارة الدولية
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
										5
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										تقرير للندوة العلمية عن بعد حول موضوع: تداعيات كوفيد 19 على الأسرة وحقوق أطرافها
									</a>
								</li>
							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="droit-pub.php">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
						<!-- Tag -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									علامات 
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									دراسات 
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									تعليق على قرار
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									اراء
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									قانون
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									أحكام قضائية
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									فعاليات
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									تقارير
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									مرئيات
								</a>
								
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<div class="bg2 p-t-40 p-b-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								فضــــاء العدالة
							</h5>
						</div>

						<div>
							<p class="f1-s-1 cl11 p-b-16">
								تهتم المجلة بنشر مختلف المواد التي لها علاقة بمجال القانون المغربي ، سواء المقالات القانونية أو الرسائل والأطروحات بما في ذلك الاجتهادات القضائية. وفي إطار تقريب المعلومة القانونية دائما، يقوم الموقع بدور الوسيط ولاسيما ما يخص النصوص القانونية المغربية والمقارنة، وكدا مختلف المجالات الاليكترونية والتي تهتم بالمجال القانون. وفي هذا الإطار لا يتحمل الموقع أية مسؤولية في المواد المنشور، وإنما ينسب الفكر أو التوجه لصاحب المقال، ونضع رهن إشارة الزائر، في حالة أي إخلال أو مس بالأمانة العلمية أو في ما يتعلق بأي محتوى خارج المادة العلمية المنشورة، التواصل معنا من أجل معالجة المشكل وذلك عبر البريد الإلكتروني
							</p>

							<p class="f1-s-5 cl11 p-b-16">
								fadaa.al.adala@gmail.com
							</p>

							<div class="p-t-15">
								<a href="https://www.facebook.com/OCIAEJ" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-facebook-f"></span>
								</a>

								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-twitter"></span>
								</a>

								<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-youtube"></span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								 الأكثر متـــابعة
							</h5>
						</div>

						<ul>
							<li class="flex-wr-sb-s p-b-20">
								<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
									<img src="images/popular-post-01.jpg" alt="IMG">
								</a>

								<div class="size-w-5">
									<h6 class="p-b-5">
										<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											جائحة كورونا تجمع أساتذة قانون من المغرب والجزائر والعراق في ندوة افتراضية
										</a>
									</h6>

									<span class="f1-s-3 cl6">
										22 فبراير 2020
									</span>
								</div>
							</li>

							<li class="flex-wr-sb-s p-b-20">
								<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
									<img src="images/popular-post-02.jpg" alt="IMG">
								</a>

								<div class="size-w-5">
									<h6 class="p-b-5">
										<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											إشكالية التمييز بين خبرة التسيير والخبرة المحاسبية
										</a>
									</h6>

									<span class="f1-s-3 cl6">
										22 فبراير 2020
									</span>
								</div>
							</li>

							<li class="flex-wr-sb-s p-b-20">
								<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
									<img src="images/popular-post-03.jpg" alt="IMG">
								</a>

								<div class="size-w-5">
									<h6 class="p-b-5">
										<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											ورقة حول موضوع الشرعية الجنائية الإجرائية في زمن كورونا
										</a>
									</h6>

									<span class="f1-s-3 cl6">
										22 فبراير 2020
									</span>
								</div>
							</li>
						</ul>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								الأقســــام 
							</h5>
						</div>

						<ul class="m-t--12">
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="blog-list-01.php" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									فضاء التشريع (22)
								</a>
							</li>

							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="blog-list-01.php" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									مقالات قانونية  (22)
								</a>
							</li>

							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="blog-list-01.php" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									الإجتهاد القضائي (22)
								</a>
							</li>

							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="blog-list-01.php" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
								    أنشطة علمية (22)
								</a>
							</li>

							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="blog-grid.php" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
								    صوت و صورة (22)
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2018 

					<a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
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
	<script src="js/main.js"></script>

</body>
</html>