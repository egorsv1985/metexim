<?php
/*
Template Name: Шаблон основных страниц
*/

get_header();
?>
<main>
	<section class="promo">
		<div class="container">
			<div class="row gy-3">
				<div class="col-12 col-lg-6">
					<div class="bg-secondary py-4 px-5 rounded-3 h-100 d-flex flex-column">
						<div class="d-flex align-items-center mb-4">
							<button class="fs-14 fw-500 btn btn-transparent btn-outline-danger px-5 py-3 position-relative btn__arrow btn__arrow--back me-4" disabled title="Назад">Назад</button>
							<?php
							if (function_exists('yoast_breadcrumb')) {
								yoast_breadcrumb('<nav class="breadcrumb">', '</nav>');
							}
							?>
						</div>

						<div class="h1 fs-50 fw-900 mb-4"><?php the_title(); ?></div>
						<h2 class="fs-20 fw-600 mb-5">
							<?php
							$content = get_the_content();
							$content = preg_replace('/<img[^>]+>/', '', $content);
							echo $content;
							?>

						</h2>
						<a class="col-12 col-sm-9 col-lg-6 btn fs-20 fw-600 px-3 py-3 btn-danger mb-5" data-popup="#callback" href="#callback" role="button" title="Оставить заявку">Оставить заявку</a>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="promo__box-img h-100 rounded-3" style="
    background: url('<?=get_field('izobrazhenie'); ?>') 50% 50% no-repeat;
    background-size: cover;
">
						<img src="<?php echo get_field('izobrazhenie'); ?>" alt="foto" width="540" class="promo__img w-100 rounded-3 opacity-0">
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<section class="content py-5">
		<div class="container">
			<nav class="menu col-12 position-relative">
				<?php
				$menu_items = wp_get_nav_menu_items('Дополнительное меню');
				if ($menu_items) {
					echo '<ul class="menu__list d-none d-lg-flex h-100 align-items-center justify-content-between text-nowrap ps-0 gap-3 border-bottom border-secondary">';
					foreach ($menu_items as $item) {
						echo '<li class="menu__item d-flex justify-content-center pb-4">';
						echo '<a href="' . $item->url . '" class="menu__link d-inline-block">' . $item->title . '</a>';
						echo '</li>';
					}
					echo '</ul>';
				}
				?>
			</nav>

			<div class="row" data-sticky data-sticky-header>
				<div class="col-12 col-md-8">
					<div class="mb-5" id="description">
						<div class="col-4 col-lg-2">
							<div class="bg-secondary text-danger text-center px-3 py-2 fs-16 fw-500 mb-4 rounded-2">
								<span>Описание</span>
							</div>
						</div>
						<h2 class="fs-30 fw-800 mb-3"> <?php echo get_field('zagolovok-opisanija'); ?></h2>
						<p class="fs-16 fw-500 mb-4">
							<?php echo get_field('opisanie-nad-izobrazheniem'); ?>
						</p>
						<div class="d-none rounded-3">
							<img src="<?php echo get_field('izobrazhenie-opisanija'); ?>" alt="Описание" width="730" class="w-100">

						</div>
						<p class="fs-16 fw-500 mb-4 d-none">
							<?php echo get_field('opisanie-pod-izobrazheniem'); ?>
						</p>
					</div>
					<div class="mb-5" id="price">
						<div class="col-4 col-lg-2">
							<div class="bg-secondary text-danger text-center px-3 py-2 fs-16 fw-500 mb-4 rounded-2">
								<span>Цены</span>
							</div>
						</div>
						<h2 class="fs-30 fw-800 mb-3">
							<?php echo get_field('zagolovok-ceny'); ?>
						</h2>
						<p class="fs-16 fw-500 mb-4">
							<?php echo get_field('opisanie-ceny'); ?>
						</p>

						<?php echo do_shortcode('[table id=1 /]'); ?>
					</div>
					<div class="mb-5" id="steps">
						<div class="col-5 col-lg-3">
							<div class="bg-secondary text-danger text-center px-3 py-2 fs-16 fw-500 mb-4 rounded-2">
								<span>Этапы работы</span>
							</div>
						</div>
						<h2 class="fs-30 fw-800 mb-3"><?php echo get_field('zagolovok-jetapov-raboty'); ?></h2>
						<div class="row mb-4">
							<div class="col-12 col-lg-6 h-100">
								<div class="swiper contentSwiper">
									<div class="swiper-control position-absolute d-flex">
										<div class="swiper-button-prev position-relative end-0"></div>
										<div class="swiper-pagination"></div>
										<div class="swiper-button-next position-relative end-0"></div>
									</div>
									<div class="swiper-wrapper">
										<div class="swiper-slide border border-success rounded-3 p-5">
											<h3 class="fs-20 fw-600 mb-2">Оставляете заявку</h3>
											<p class="fs-16 fw-500 text-info">
												Свяжитесь с нами по средства формы на сайте или позвоните
												по телефону
												<a href="tel:+89213200011">8(921) 320 00 11</a>
											</p>
										</div>
										<div class="swiper-slide border border-success rounded-3 p-5">
											<h3 class="fs-20 fw-600 mb-2">Оставляете заявку</h3>
											<p class="fs-16 fw-500 text-info">
												Свяжитесь с нами по средства формы на сайте или позвоните
												по телефону
												<a href="tel:+89213200011">8(921) 320 00 11</a>
											</p>
										</div>
										<div class="swiper-slide border border-success rounded-3 p-5">
											<h3 class="fs-20 fw-600 mb-2">Оставляете заявку</h3>
											<p class="fs-16 fw-500 text-info">
												Свяжитесь с нами по средства формы на сайте или позвоните
												по телефону
												<a href="tel:+89213200011">8(921) 320 00 11</a>
											</p>
										</div>
										<div class="swiper-slide border border-success rounded-3 p-5">
											<h3 class="fs-20 fw-600 mb-2">Оставляете заявку</h3>
											<p class="fs-16 fw-500 text-info">
												Свяжитесь с нами по средства формы на сайте или позвоните
												по телефону
												<a href="tel:+89213200011">8(921) 320 00 11</a>
											</p>
										</div>
										<div class="swiper-slide border border-success rounded-3 p-5">
											<h3 class="fs-20 fw-600 mb-2">Оставляете заявку</h3>
											<p class="fs-16 fw-500 text-info">
												Свяжитесь с нами по средства формы на сайте или позвоните
												по телефону
												<a href="tel:+89213200011">8(921) 320 00 11</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="rounded-3">
									<img src="<?php echo get_field('izobrazhenie-jetapov-raboty'); ?>" alt="steps" width="350" class="w-100">
								</div>
							</div>
						</div>
						<?php echo get_field('opisanie-jetapov-raboty'); ?>
					</div>
					<div class="mb-5" id="advantages">
						<div class="col-5 col-lg-3">
							<div class="bg-secondary text-danger text-center px-3 py-2 fs-16 fw-500 mb-4 rounded-2">
								<span>Преимущества</span>
							</div>
						</div>
						<h2 class="fs-30 fw-800 mb-3"><?php echo get_field('zagolovok-dlja-preimushhestv'); ?></h2>
						<div class="row mb-4 overflow-hidden">
							<div class="col-12 col-lg-6 content__item position-relative">
								<div class="py-2 d-flex flex-column">
									<div class="d-flex align-items-center mb-4">
										<div class="advantages__box-svg rounded-circle me-4 d-flex bg-secondary justify-content-center align-items-center">
											<img src="<?php echo get_theme_file_uri('img/icons/assessment.svg'); ?>" alt="assessment" class="advantages__svg" width="40" height="25">
										</div>
										<span class="fs-20 fw-600"> Выгодные цены</span>
									</div>
									<p class="fs-16 fw-500 text-info">
										Расчет стоимости осуществляется в зависимости от качества,
										типа примесей в материале и объема поставляемого лома.
									</p>
								</div>
							</div>
							<div class="col-12 col-lg-6 content__item position-relative">
								<div class="py-2 d-flex flex-column">
									<div class="d-flex align-items-center mb-4">
										<div class="advantages__box-svg rounded-circle me-4 d-flex bg-secondary justify-content-center align-items-center">
											<img src="<?php echo get_theme_file_uri('img/icons/priems.svg'); ?>" alt="priems" class="advantages__svg" width="21" height="28">

										</div>
										<span class="fs-20 fw-600"> Несколько пунктов приема</span>
									</div>
									<p class="fs-16 fw-500 text-info">
										Расчет стоимости осуществляется в зависимости от качества,
										типа примесей в материале и объема поставляемого лома.
									</p>
								</div>
							</div>
							<div class="col-12 col-lg-6 content__item position-relative">
								<div class="py-2 d-flex flex-column">
									<div class="d-flex align-items-center mb-4">
										<div class="advantages__box-svg rounded-circle me-4 d-flex bg-secondary justify-content-center align-items-center">
											<img src="<?php echo get_theme_file_uri('img/icons/logistics.svg'); ?>" alt="logistics" class="advantages__svg" width="30" height="30">

										</div>
										<span class="fs-20 fw-600"> Налаженая логистика</span>
									</div>
									<p class="fs-16 fw-500 text-info">
										Расчет стоимости осуществляется в зависимости от качества,
										типа примесей в материале и объема поставляемого лома.
									</p>
								</div>
							</div>
							<div class="col-12 col-lg-6 content__item position-relative">
								<div class="py-2 d-flex flex-column">
									<div class="d-flex align-items-center mb-4">
										<div class="advantages__box-svg rounded-circle me-4 d-flex bg-secondary justify-content-center align-items-center">
											<img src="<?php echo get_theme_file_uri('img/icons/buy.svg'); ?>" alt="buy" class="advantages__svg" width="30" height="28">
										</div>
										<span class="fs-20 fw-600"> Своевременная оплата</span>
									</div>
									<p class="fs-16 fw-500 text-info">
										Расчет стоимости осуществляется в зависимости от качества,
										типа примесей в материале и объема поставляемого лома.
									</p>
								</div>
							</div>
						</div>
						<p class="fs-16 fw-500 mb-4">
							<?php echo get_field('opisanie-dlja-preimushhestv'); ?>
						</p>

						<div class="row">
							<?php
							// Получаем контент текущей страницы
							$page_content = get_post_field('post_content', get_queried_object_id());

							// Используем регулярное выражение для извлечения картинок из контента
							$pattern = '/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i';
							preg_match_all($pattern, $page_content, $matches);

							// Перебираем найденные картинки и выводим их в структуру
							foreach ($matches[1] as $image_src) {
							?>
								<div class="col-12 col-lg-6">
									<img src="<?php echo $image_src; ?>" alt="document" class="w-100" width="350">
								</div>
							<?php
							}
							?>
						</div>

					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="content__sticky rounded-3 border p-4 bg-secondary" data-sticky-item>
						<p class="fs-24 fw-800 text-center mb-1">Остались вопросы?</p>
						<p class="fs-16 text-center mb-4">Проконсультируем вас!</p>
						<?php echo do_shortcode('[contact-form-7 id="102" title="Консультация"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="valuation py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="border rounded-3 py-5 ps-5 h-100">
						<div class="row">
							<div class="col">
								<a class="fs-16 fw-500 btn btn-secondary px-3 py-2 mb-3" data-popup="#callback" href="#callback" role="button" title="Оценка стоимости">Оценка стоимости</a>
							</div>
							<div class="col-12">
								<h2 class="fs-30 fw-800 mb-4">
									Узнайте сколько вы получите денег от сдачи металлолома
								</h2>
							</div>
							<div class="col-10">
								<div class="fs-18 fw-500">
									Заполните форму и мы вам индивидуально выполнем расчет и перезвоним
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">

					<?php echo do_shortcode('[contact-form-7 id="61" title="Форма оценки стоимости"]'); ?>




				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>