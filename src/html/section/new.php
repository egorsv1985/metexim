<?php

/**
 * The template for displaying the footer
 */
global $wp_query, $archi_option;
$hidden_footer = get_post_meta($wp_query->get_queried_object_id(), '_cmb_footer_widget', true);
?>
<?php
if (isset($archi_option['header_layout']) and $archi_option['header_layout'] != "htop_page") {
	get_template_part('framework/footers/footer-sidenav');
} else {
?>
	<!-- footer begin -->
	<footer <?php if (!is_active_sidebar('footer-area-1') && !is_active_sidebar('footer-area-2') && !is_active_sidebar('footer-area-3') && !is_active_sidebar('footer-area-4')) { ?>class="no-padding" <?php } ?>>

		<?php if ($hidden_footer != 1) { ?>
			<?php if (is_active_sidebar('footer-area-1') || is_active_sidebar('footer-area-2') || is_active_sidebar('footer-area-3') || is_active_sidebar('footer-area-4')) { ?>
				<div class="main-footer">
					<div class="<?php if ($archi_option['footer-wideboxed'] != false) {
									echo 'container-fluid';
								} else {
									echo 'container';
								} ?>">
						<div class="row">
							<?php get_sidebar('footer'); ?>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>

		<div class="subfooter <?php if (isset($archi_option['footer_layout']) and $archi_option['footer_layout'] == "footer2") {
									echo 'padtop80 padbottom80 footer-2';
								} ?>">
			<div class="<?php if ($archi_option['footer-wideboxed'] != false) {
							echo 'container-fluid';
						} else {
							echo 'container';
						} ?>">
				<div class="row">

					<?php if (isset($archi_option['footer_layout']) and $archi_option['footer_layout'] == "footer2") { ?>
						<div class="col-md-3">
							<img src="<?php echo esc_url($archi_option['logo_footer']['url']); ?>" class="logo-small" alt="primaline" width="337" height="24"><br>
						</div>
					<?php } ?>
					<div class="col-md-6">
						<?php echo wp_specialchars_decode(do_shortcode($archi_option['footer_text'])); ?>
					</div>

					<?php if ($archi_option['switch_footer_social'] != false) { ?>
						<div class="<?php if (isset($archi_option['footer_layout']) and $archi_option['footer_layout'] == 'footer2') {
										echo 'col-md-3';
									} else {
										echo 'col-md-6';
									} ?> text-right">
							<div class="social-icons">
								<ul>
									<?php if ($archi_option['facebook'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['facebook']); ?>" title="facebook"><i class="fa fa-facebook"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['twitter'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['twitter']); ?>" title="twitter"><i class="fa fa-twitter"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['google'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['google']); ?>" title="google"><i class="fa fa-google-plus"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['dribbble'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['dribbble']); ?>" title="dribbble"><i class="fa fa-dribbble"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['pinterest'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['pinterest']); ?>" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['linkedin'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['linkedin']); ?>" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['youtube'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['youtube']); ?>" title="youtube"><i class="fa fa-youtube"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['vimeo'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['vimeo']); ?>" title="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['skype'] != '') { ?>
										<li><a href="<?php echo esc_attr($archi_option['skype']); ?>" title="skype"><i class="fa fa-skype"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['instagram'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['instagram']); ?>" title="instagram"><i class="fa fa-instagram"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['github'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['github']); ?>" title="github"><i class="fa fa-github"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['tumblr'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['tumblr']); ?>" title="tumblr"><i class="fa fa-tumblr-square"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['soundcloud'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['soundcloud']); ?>" title="soundcloud"><i class="fa fa-soundcloud"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['behance'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['behance']); ?>" title="behance"><i class="fa  fa-behance"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['lastfm'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['lastfm']); ?>" title="lastfm"><i class="fa fa-lastfm"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['rss'] != '') { ?>
										<li><a target="_blank" href="<?php echo esc_url($archi_option['rss']); ?>" title="rss"><i class="fa fa-rss"></i></a></li>
									<?php } ?>
									<?php if ($archi_option['social_extend'] != '') {
										echo wp_specialchars_decode(do_shortcode($archi_option['social_extend']));
									} ?>
								</ul>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<a id="back-to-top" href="#" title="back-to-top" class="show"></a>
	</footer>

	<? if ($_SERVER['REMOTE_ADDR'] == '185.128.203.136') : ?>
		<footer class="footer">
			<div class="footer__top container container-max-width">
				<div class="footer__top--title fs-13 ttu color-white mb-3 mb-lg-4">Задайте вопрос специалисту</div>
				[!FormLister?
				&formid=`basic`
				&rules=`
				{

				"tel":{
				"required":"Обязательно введите номер телефона",
				"phone":"Введите номер правильно"
				},
				"comment":{
				"required":"Обязательно введите сообщение",

				}
				}`
				&formTpl=`@CODE:
				<form method="post" id="form_footer">
					[+form.messages+]
					<input type="hidden" name="formid" value="basic">
					<div class="row align-items-center">
						<div class="col-md-3 mb-4 mb-md-0 ">
							<input type="text" placeholder="Номер телефона *" name="tel" class="pl-0" value="[+tel.value+]" required>
						</div>
						<div class="col-md mb-4 mb-md-0 ">
							<input type="text" placeholder="Ваше сообщение" name="comment" class="pl-0" value="[+comment.value+]">
						</div>
						<div class="col-md mb-4 mb-md-0  [+g-recaptcha-response.errorClass+] [+g-recaptcha-response.requiredClass+]">
							<div class="d-flex justify-content-center">[+captcha+]</div>
							[+g-recaptcha-response.error+]
						</div>
						<div class="col-md-auto">
							<button class="button-white footer__top--button">Отправить</button>
						</div>
					</div>
				</form>`
				&to=`primalineform@yandex.ru,pavel@atib.by`
				&from=`primalineform@yandex.ru`
				&ccSender=`1`
				&ccSenderField=`email`
				&ccSenderTpl=`@CODE:Спасибо за обращение, [+name.value+]`
				&reportTpl=`@CODE:
				<p>Телефон: [+tel.value+]</p>
				<p>Сообщение: [+comment:strip_tags:nl2br+]</p>`
				&protectSubmit=`0`
				&errorClass=` has-error`
				&requiredClass=` has-warning`
				&subject=`Заявка с сайта`
				&messagesOuterTpl=`@CODE:<div class="alert alert-danger" role="alert">[+messages+]</div>`
				&errorTpl=`@CODE:<span class="help-block">[+message+]</span>`

				&captcha=`reCaptcha`
				&captchaParams=`{
				"siteKey":"6LcyHPUmAAAAAKtCxfxnG4lamTGUoqX743tV6qsO",
				"secretKey":"6LcyHPUmAAAAADRnidd6da9y4GwQXbKoIj6hdJQY",
				"errorCodeFailed":"Нажмите галочку \"Я не робот\"",
				"width":"normal",
				"size":"normal",
				"theme":"light"
				}`
				&captchaField=`g-recaptcha-response`
				!]

			</div>
			<div class="footer__bottom">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-center">
						<div class="col-lg-3 col-5 col-sm-auto mb-3">
							<a href="/" title="Логотип компании"><img src="assets/img/header__bottom-logo.svg" alt="Логотип компании" title="Логотип компании" width="176" height="29"></a>
						</div>
						<div class="col-auto mb-3">
							<div class="fs-16 mb-2 fw-bold color-white">[[DocInfo? &docid=`7` &field=`address`]]</div>
							<div class="fs-16 mb-2 fw-bold color-white">Республика Беларусь</div>
						</div>
						<div class="col-auto mb-3">
							[[multiTV? &tvName=`tel` &docid=`7` &rowTpl=`footer_tel` &display=`4`]]

						</div>
						<div class="col-auto mb-3">
							[[multiTV? &tvName=`tel` &docid=`7` &rowTpl=`footer_tel` &display=`2` &offset=`4`]]
						</div>
						<div class="col-auto mb-3">
							<a href="mailto:[[DocInfo? &docid=`7` &field=`email`]]" class="fs-16 mb-2 fw-bold color-white d-block">[[DocInfo? &docid=`7` &field=`email`]]</a>
							<div class="row mx-n2">
								<div class="col-auto px-2"><a href="[[DocInfo? &docid=`7` &field=`tw`]]" title="instagram" class="color-white fs-20"><i class="fab fa-instagram"></i></a></div>
								<div class="col-auto px-2"><a href="[[DocInfo? &docid=`7` &field=`fb`]]" title="facebook" class="color-white fs-20"><i class="fab fa-facebook-f"></i></a></div>
								<div class="col-auto px-2"><a href="[[DocInfo? &docid=`7` &field=`ld`]]" title="linkedin" class="color-white fs-20"><i class="fab fa-linkedin"></i></a></div>
								<div class="col-auto px-2"><a href="[[DocInfo? &docid=`7` &field=`vk`]]" title="В контакте" class="color-white fs-20"><i class="fab fa-vk"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__menu d-none d-md-block">
				<div class="container">
					<div class="row mx-n2">
						[!DLMenu? &outerTpl=`@CODE:[+wrap+]` &maxDepth=`1` &parents=`0` &rowTpl=`@CODE:<div class="col-auto px-2 mb-3"><a href="[+url+]" class="color-white fs-14 opacity-70 fw-300" [+classes+]>[+title+]</a></div>` !]
						<div class="col-auto px-2 mb-3 ml-auto">
							<a href="[~432~]" class="color-white fs-14 opacity-70  fw-300">Политика конфиденциальности</a>
						</div>
						<div class="col-auto px-2 mb-3 ml-auto">
							<div class="color-white fs-14 opacity-70  fw-300">ООО «ПримаЛайн» © 2021</div>
						</div>
					</div>
				</div>
			</div>
		</footer>


	<? endif; ?>


	</div><!-- #wrapper -->

<?php } ?>

<?php wp_footer(); ?>
</body>

</html>


<div class="row align-items-center">
	<div class="col-md-3 mb-4 mb-md-0">[tel* your-tel placeholder "Telefon"]</div>
	<div class="col-md mb-4 mb-md-0">[textarea* your-message placeholder "Zadaj pytanie"]</div>
	<div class="col-md mb-4 mb-md-0">
		<div class="d-flex justify-content-center">[recaptcha recaptcha-962 id:captcha]</div>
	</div>
	<div class="col-md-auto">
		[submit class:button-white class:footer__top--button "Wysłać"]
	</div>
</div>