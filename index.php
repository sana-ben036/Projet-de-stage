<?php require 'action.php'; ?>


<!DOCTYPE html>
<html lang="ar">
<head>
	<title>الرئيسية</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'link.php'; ?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<?php include 'header.php'; ?>
	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span style="color:#17b978;"  class="text-uppercase cl2 p-r-8">
					مستجدات : &nbsp;
				</span>

				<span  class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown" >
					
					<?php
					$sth= $mag->query("SELECT * FROM post ORDER BY id_post DESC lIMIT 0,5");
					while ($row = $sth->fetch())
						{
						$news= $row['title_post'] ;
						?>
						<span style="width:100%;" class="dis-inline-block slide100-txt-item animated visible-false f1-s-1">
							<?= $news ;?>	
						</span>
						<?php
					
						}

					?>
					
				</span>
			</div>

			<form class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6" method="POST">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search"  placeholder="بحث" required>
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03" type="submit" name="look-for">
					<i class="zmdi zmdi-search"></i>
				</button>
				
			</form>
		</div>
	</div>
		
	<!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-6 p-rl-1 p-b-2">
				    <?php
					$sth= $mag->query("SELECT * FROM post WHERE id_cat = 3 ORDER BY date_post DESC lIMIT 0,1");
					while ($row = $sth->fetch())
					{
					?>
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(images/ma.jpg);">
						<a href="blog-detail-01.php?id=<?= $row['id_post'];?>" class="dis-block how1-child1 trans-03"></a>
						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="blog-list-01.php?cat=إجتهاد قضائي" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								إجتهاد قضائي 
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="blog-detail-01.php?id=<?= $row['id_post'];?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
								<?= $row['title_post']?>
								</a>
							</h3>
						</div>
					</div>
					<?php
					}
					?>
				</div>

				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						<div class="col-12 p-rl-1 p-b-2">
						<?php
				     	$sth= $mag->query("SELECT * FROM post WHERE id_cat = 11 ORDER BY date_post DESC lIMIT 0,1");
				     	while ($row = $sth->fetch())
				    	{
					    ?>
							<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(images/post-02.jpg);">
								<a href="blog-detail-01.php?id=<?= $row['id_post']?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
									<a href="category-01.php?sub=فعاليات" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										فعاليات 
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="blog-detail-01.php?id=<?= $row['id_post']?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
										<?= $row['title_post']?> 
										</a>
									</h3>
								</div>
							</div>
						<?php
						}
						?>
						</div>

						<div class="col-sm-6 p-rl-1 p-b-2">
						    <?php
				     	    $sth= $mag->query("SELECT * FROM post WHERE id_cat = 5 ORDER BY date_post DESC lIMIT 0,1");
				     	    while ($row = $sth->fetch())
				    	    {
					        ?>
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(images/etude1.jpg);">
								<a href="blog-detail-01.php?id=<?= $row['id_post']?>" class="dis-block how1-child1 trans-03"></a>
								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="category-01.php?sub=دراسات" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										دراسات 
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="blog-detail-01.php?id=<?= $row['id_post']?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
										<?= $row['title_post']?> 
										</a>
									</h3>
								</div>
							</div>
							<?php
							}
							?>
						</div>

						<div class="col-sm-6 p-rl-1 p-b-2">
						    <?php
				     	    $sth= $mag->query("SELECT * FROM post WHERE id_cat = 6 ORDER BY date_post DESC lIMIT 0,1");
				     	    while ($row = $sth->fetch())
				    	    {
					        ?>
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(images/avi.jpg);">
								<a href="blog-detail-01.php?id=<?= $row['id_post']?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="category-01.php?sub=وجهة نظر" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										وجهة نظر 
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="blog-detail-01.php?id=<?= $row['id_post']?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
										<?= $row['title_post']?> 
										</a>
									</h3>
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Post -->
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">
						<!-- مقالات قانونية  -->
						<div class="tab01 p-b-20">
							<a href="blog-list-01.php" class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl13 tab01-title">
									مقالات قانونية 
								</h3>

								
							</a>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
													<img src="images/avis3.jpg" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-m-3 cl2 hov-cl10 trans-03">
															دور التحكيم الالكتروني في فض منازعات عقود التجارة الدولية 
														</a>
													</h5>

													<span class="cl8">
														<span class="f1-s-4 cl8 ">
															دراسات
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															11 فبراير 2020 
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-05.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
												        إشكالية التمييز بين خبرة التسيير والخبرة المحاسبية

														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-6 cl8 ">
															تعليق على قرار
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															12 فبراير 2020
														</span>
													</span>
												</div>
											</div>
											
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-06.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															تعليق على قرار محكمة النقض المغربية  شرط عدم المنافسة  في إطار عقد الشغل

														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-6 cl8 ">
															تعليق على قرار
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															23 يناير 2020
														</span>
													</span>
												</div>
											</div>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/etude.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															ورقة حول موضوع الشرعية الجنائية الإجرائية في زمن كورونا
														</a>
													</h5>

													<span class="cl8">
														<span class="f1-s-6 cl8 ">
															دراسات
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															23 يونيو 2020
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- - -->

								<!-- - -->

								<!-- - -->

								<!-- - -->

							</div>
						</div>

						<!-- فضاء التشريع -->
						<div class="tab01 p-b-20">
							<a href="blog-list-01.php" class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									فضاء التشريع 
								</h3>

								<!-- Nav tabs -->

								<!--  -->
								
							</a>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" >
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
													<img src="images/post-10.jpg" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-m-3 cl2 hov-cl10 trans-03">
															مرسوم يقضي بتحديد أتعاب الموثقين، وكيفية استيفائها
 
														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-4 cl8 ">
															مشاريع القوانين
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															16 فبراير 2019
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-11.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															القانون رقم 73.17 المتعلق بمساطر صعوبات المقاولة
 
														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-6 cl8">
															القوانين 
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															17 فبراير 2019
														</span>
													</span>
												</div>
											</div>
											
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-12.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															التبادر التجاري الحر بين المغرب و الإتحاد الأوروبي  
														</a>
													</h5>

													<span class="cl8">
														<span class="f1-s-6 cl8 ">
															الإتفاقيات 
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															20 دجنبر 2019
														</span>
													</span>
												</div>
											</div>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-13.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															القانون المتعلق بمهنة المحاماة
 
														</a>
													</h5>

													<span class="cl8">
														<span class="f1-s-6 cl8 ">
															القوانين 
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															23 فبراير 2018
														</span>
													</span>
												</div>
											</div>
											
										</div>
									</div>
								</div>

								<!-- - -->

								<!-- - -->

								<!-- - -->

							</div>
						</div>

						<!-- أنشطة علمية -->
						<div class="tab01 p-b-20">
							<a href="blog-list-01.php" class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl14 tab01-title">
									أنشطة علمية 
								</h3>

								<!-- Nav tabs -->

								<!--  -->

							</a>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
													<img src="images/post-14.jpg" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-m-3 cl2 hov-cl10 trans-03">
															دورة تكوينية حول "التحكيم الداخلي والدولي في المنازعات التجارية" بمدينة الرباط يومي السبت والاحد 28 و 29 يوليوز 2018
 
														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-4 cl8 ">
															فعاليات  
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															12 فبراير 2019 
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-15.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															تقرير للندوة العلمية عن بعد حول موضوع: تداعيات كوفيد 19 على الأسرة وحقوق أطرافها 
														</a>
													</h5>

													<span class="cl8">
														<span class="f1-s-6 cl8">
															تقارير
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															22 يناير 2020
														</span>
													</span>
												</div>
											</div>
											
											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-16.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															جائحة كورونا تجمع أساتذة قانون من المغرب والجزائر والعراق في ندوة افتراضية 
														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-6 cl8 ">
															فعاليات
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															11 فبراير 2020
														</span>
													</span>
												</div>
											</div>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.php" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/post-17.jpg" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
															مؤتمر مراكش الدولي حول العدالة - النسخة الأولى: استقلال السلطة القضائية بين ضمان حقوق المتقاضين واحترام قواعد سير العدالة 
														</a>
													</h5>

													<span class="cl8">
														<span  class="f1-s-6 cl8 hov-cl10 trans-03">
															مؤتمرات
														</span>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															30 فبراير 2019
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- - -->

								<!-- - -->

								<!-- - -->

								<!-- - -->

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- most popular -->
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

						<!-- banner -->
						<div class="flex-c-s p-t-8">
							<a href="droit-pub.php">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
						<!-- social media -->
						<div class="p-t-50">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									لنبقى على تواصل دائم
									
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="https://www.facebook.com/%D9%81%D8%B6%D8%A7%D8%A1-%D8%A7%D9%84%D8%B9%D8%AF%D8%A7%D9%84%D8%A9-104292537954829" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										

										<a href="https://www.facebook.com/%D9%81%D8%B6%D8%A7%D8%A1-%D8%A7%D9%84%D8%B9%D8%AF%D8%A7%D9%84%D8%A9-104292537954829" class="f1-m-3 text-uppercase cl3 hov-cl10 trans-03">
											سجل إعجابك بالصفحة
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										

										<a href="#" class="f1-m-3 text-uppercase cl3 hov-cl10 trans-03">
											إنظم إلى قائمة متابعينا
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
			

										<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw" class="f1-m-3 text-uppercase cl3 hov-cl10 trans-03">
											إشترك بالقناة و فعل الجرس
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">
			<a href="https://www.ociaej.ma/">
				<img class="max-w-full" src="images/banner-4.png" alt="IMG">
			</a>
		</div>
	</div>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-20">
					<div class="how2 how2-cl5 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							آخر المقالات
						</h3>
					</div>

					<div class="row p-t-35">
					<?php
					$sth= $mag->query("SELECT * FROM post INNER JOIN categories ON post.id_cat = categories.id_cat ORDER BY date_post DESC lIMIT 0,6");
					while ($row = $sth->fetch())
		                {
						?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
									<img src="<?=$row['img_post'] ;?>" alt="">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="blog-detail-01.php" class="f1-m-3 cl2 hov-cl10 trans-03">
										<?=$row['title_post'] ;?>
										</a>
									</h5>

									<span class="cl8">
										<span class="f1-s-4 cl8 ">
										<?=$row['name_cat'] ;?> 
										</span>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
										<?=$row['date_post'] ;?>
										</span>
									</span>
								</div>
							</div>
						</div>
						<?php
						}
					?>

					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- صوت و صورة -->
						<div class="p-b-55">
							<a href="blog-grid.php" class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									صوت و صورة 
								</h3>
							</a>
                            <?php
				         	$sth= $mag->query("SELECT * FROM video ORDER BY date_video DESC lIMIT 0,1");
				        	while ($row = $sth->fetch())
		                    {
						    ?>
							<div>
								<div class="wrap-pic-w pos-relative">
									<iframe  width="320" height="180" src="https://www.youtube.com/embed/<?=$row['url_video'] ;?>" frameborder="0" allowfullscreen></iframe>	
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="https://youtu.be/<?=$row['url_video'] ;?>" class="f1-m-1 cl0 hov-cl10 trans-03">
									    	<?=$row['title_video'] ;?> 
										</a>
									</h5>

									<span class="cl15">
										<span class="f1-s-3">
										<?=$row['date_video'] ;?> 
										</span>
									</span>
								</div>
							</div>
							<?php
							}
							?>	
						</div>
							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								للإشتراك في المجلة
							</h5>
							<!-----------php/ alert---------------->
							<?php if(isset($_SESSION['message'])){ ;?>
                                <p class=" f1-m-2 cl14 "><b><?= $_SESSION['message'] ; ?></b></p>
                            <?php } unset($_SESSION['message']) ; ?>
                            <!-----------php------------------------>
							<p class="f1-m-1 cl0 p-b-25">
								توصل بجديد المقالات و النصوص القانونية و الأنشطة العلمية المعلن عنها ، و ذلك من خلال إرسال التفاصيل إلى بريدكم الإلكتروني بشكل دوري 
							</p>
							
							<form  class="size-a-9 pos-relative" action="" method="POST">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="email" name="email" placeholder="البريد الإلكتروني" required>

                                <button type="submit" name="subscribe" class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>	
							</form>
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

								<a   href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									تعليق على قرار
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									وجهة نظر
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									قانون
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									إتفاقيات
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
	<?php include 'footer.php'; ?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
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