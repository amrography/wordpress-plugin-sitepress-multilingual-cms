<?php
	global $axisConfig;
	global $axis_template_url;
	$axis_template_url = plugins_url()."/axis/template";
?>

<!DOCTYPE html>
<html lang="en-US">

	<head>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Title -->
		<title><?php echo $axisConfig['site_title']; ?></title>

		<?php if(!empty($axisConfig['site_description'])){?><meta name="description" content="<?php echo $axisConfig['site_description']; ?>"><?php } ?>
		<?php if(!empty($axisConfig['site_keywords'])){?><meta name="keywords" content="<?php echo $axisConfig['site_keywords']; ?>"><?php } ?>

		<?php if ($axisConfig['webmaster_tools']) { ?>
			<?php if(!empty($axisConfig['google_verify'])){?><meta name="google-site-verification" content="<?php echo $axisConfig['google_verify']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['ms_verify'])){?><meta name="msvalidate.01" content="<?php echo $axisConfig['ms_verify']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['pin_verify'])){?><meta name="p:domain_verify" content="<?php echo $axisConfig['pin_verify']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['yandex_verify'])){?><meta name="yandex-verification" content="<?php echo $axisConfig['yandex_verify']; ?>"><?php } ?>
		<?php } ?>

		<?php if ($axisConfig['social_tools']) { ?>
			<?php if(!empty($axisConfig['site_publisher'])){?><link rel="publisher" href="<?php echo $axisConfig['site_publisher']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['site_author'])){?><link rel="author" href="<?php echo $axisConfig['site_author']; ?>"><?php } ?>

			<meta property="og:type" content="website">
			<meta property="og:url" content="<?php echo bloginfo('url');?>">
			<meta property="og:locale" content="<?php echo bloginfo('language');?>">
			<?php if(!empty($axisConfig['fb_url'])){?><meta property="article:publisher" content="<?php echo $axisConfig['fb_url']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['fb_title'])){?><meta property="og:title" content="<?php echo $axisConfig['fb_title']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['fb_description'])){?><meta property="og:description" content="<?php echo $axisConfig['fb_description']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['fb_image']['url'])){?><meta property="og:image" content="<?php echo $axisConfig['fb_image']['url']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['site_title'])){?><meta property="og:site_name" content="<?php echo $axisConfig['site_title']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['fb_url'])){?><meta property="fb:admins" content="<?php echo $axisConfig['fb_url']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['fb_app'])){?><meta property="fb:app_id" content="<?php echo $axisConfig['fb_app']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['fb_page'])){?><meta property="fb:page_id" content="<?php echo $axisConfig['fb_page']; ?>"><?php } ?>

			<meta name="twitter:card" content="summary">
			<meta name="twitter:url" content="<?php echo bloginfo('url');?>">
			<?php if(!empty($axisConfig['tw_title'])){?><meta name="twitter:title" content="<?php echo $axisConfig['tw_title']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['tw_description'])){?><meta name="twitter:description" content="<?php echo $axisConfig['tw_description']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['tw_name'])){?><meta name="twitter:site" content="@<?php echo $axisConfig['tw_name']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['site_title'])){?><meta name="twitter:domain" content="<?php echo $axisConfig['site_title']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['tw_name'])){?><meta name="twitter:creator" content="@<?php echo $axisConfig['tw_name']; ?>"><?php } ?>
			<?php if(!empty($axisConfig['tw_image']['url'])){?><meta name="twitter:image:src" content="<?php echo $axisConfig['tw_image']['url']; ?>"><?php } ?>
		<?php } ?>

		<?php if(!empty($axisConfig['favicon']['url'])){ ?>
			<!-- Favicon -->
			<link rel="shortcut icon" href="<?php echo $axisConfig['favicon']['url']; ?>">
		<?php } ?>

		<!-- Google web fonts -->
      	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="<?php echo $axis_template_url; ?>/layout/plugins/fontawesome/css/font-awesome.min.css" />

		<!-- Stylesheet -->
		<link rel="stylesheet" href="<?php echo $axis_template_url; ?>/layout/style.css" type="text/css">
		<link rel="stylesheet" href="<?php echo $axis_template_url; ?>/layout/media.css" type="text/css">

		<!-- Color schema -->
		<link class="colors" rel="stylesheet" href="<?php echo $axis_template_url; ?>/layout/colors/<?php echo $axisConfig['color']; ?>.css" type="text/css">

		<!-- Animate -->
    	<link rel="stylesheet" href="<?php echo $axis_template_url; ?>/layout/plugins/cssanimation/animate.css" type="text/css">

      	<!-- Bootstrap -->
    	<link rel="stylesheet" href="<?php echo $axis_template_url; ?>/layout/plugins/bootstrap/css/bootstrap.min.css">

		<script type="text/javascript">
			var launchDay, days_label, hours_label, minutes_label, seconds_label;

			<?php $launchDay = !empty($axisConfig['countdown_date']) ? date("M d, Y 00:00:00", strtotime($axisConfig['countdown_date'])) : "Dec 25, 2017 20:30:00";?>

			launchDay = "<?php echo $launchDay; ?>";
			days_label = "<?php echo $axisConfig['countdown_days_label']; ?>";
			hours_label = "<?php echo $axisConfig['countdown_hours_label']; ?>";
			minutes_label = "<?php echo $axisConfig['countdown_minutes_label']; ?>";
			seconds_label = "<?php echo $axisConfig['countdown_seconds_label']; ?>";
		</script>

	</head>

	<body>

		<!-- Loader -->
		<div class="page-loader">
			<div class="progress"><?php echo $axisConfig['loading_text']; ?></div>
		</div>

		<?php if ((int)$axisConfig['bg_type']==3) { ?>
			<!-- Youtube player -->
			<div id="BackgroundVideo" class="player"
				data-property="{videoURL:'https://www.youtube.com/watch?v=<?php echo $axisConfig['youtube_video_id']; ?>', containment:'header', autoPlay:true, showControls:false, mute:false, startAt:0, opacity:1, showYTLogo:false, vol:25}">
			</div>
		<?php } ?>

		<!-- Header -->
		<header id="#top">

			<div class="table">
				<div class="table-cell">

					<?php if($axisConfig['logo']['url']!="") { ?>
						<!-- Logo -->
						<div class="logo">
							<img src="<?php echo $axisConfig['logo']['url']; ?>" alt="" />
						</div>
					<?php } ?>

					<?php if($axisConfig['title']!="") { ?>
						<h1><?php echo $axisConfig['title']; ?></h1>
					<?php } ?>

					<!-- Countdown -->
					<?php if ($axisConfig['countdown_visibility']) { ?>
						<div class="countdown"></div>
					<?php } ?>


					<!-- Subscribe -->
					<div class="subscribe" id="newsletter">
						<p><?php echo $axisConfig['subscribe_title']; ?></p>

						<?php
							$form_action = plugins_url()."/axis/template/subscribe.php";

							if ($axisConfig['subscribe_use_mailchimp']) {
								$form_action =  '//'.$axisConfig['mailchimp_your_name'].
												'.us'.$axisConfig['mailchimp_server'].
												'.list-manage.com/subscribe/post-json?u='.$axisConfig['mailchimp_your_id'].
												'&amp;id='.$axisConfig['mailchimp_form_id'].
												'&amp;c=?';
							}
						?>

						<form id="newsletter-form" action="<?php echo $form_action; ?>" method="post">
							<p class="form-field">
								<input type="text" name="EMAIL" id="EMAIL" placeholder="<?php echo $axisConfig['subscribe_email_field_label']; ?>">
							</p>

							<button type="submit"><?php echo $axisConfig['subscribe_button_label']; ?></button>
						</form>
					</div>

					<!-- Mouse icon -->
					<div class="mouse">
						<div class="wheel"></div>
					</div>

				</div>
			</div>

		</header>

		<?php if ($axisConfig['service_visibility']) { ?>
			<!-- Services -->
			<section class="services" id="services">
				<div class="container">

					<div class="row">

						<?php if($axisConfig['service_title']!="") { ?>
							<h2 class="section-title">
								<?php echo $axisConfig['service_title']; ?>
							</h2>
						<?php } ?>

						<?php if($axisConfig['service_info']!="") { ?>
							<div class="section-info">
								<?php echo $axisConfig['service_info']; ?>
							</div>
						<?php } ?>

					</div>

					<div class="row">

						<div class="col-md-12">

							<div class="col-md-4">
								<div class="icon">
									<i class="fa fa-fw <?php echo $axisConfig['box_1_icon']; ?>"></i>
								</div>
								<h3><?php echo $axisConfig['box_1_title']; ?></h3>
								<p><?php echo $axisConfig['box_1_desc']; ?></p>
							</div>

							<div class="col-md-4">
								<div class="icon">
									<i class="fa fa-fw <?php echo $axisConfig['box_2_icon']; ?>"></i>
								</div>
								<h3><?php echo $axisConfig['box_2_title']; ?></h3>
								<p><?php echo $axisConfig['box_2_desc']; ?></p>
							</div>

							<div class="col-md-4">
								<div class="icon">
									<i class="fa fa-fw <?php echo $axisConfig['box_3_icon']; ?>"></i>
								</div>
								<h3><?php echo $axisConfig['box_3_title']; ?></h3>
								<p><?php echo $axisConfig['box_3_desc']; ?></p>
							</div>

						</div>

				   </div>
				</div>
			</section>
		<?php } ?>

		<?php if ($axisConfig['contact_visibility']) { ?>
			<!-- Contact info -->
			<section class="contact-info" style="background-image:url('<?php echo $axisConfig['contact_image']['url']; ?>')">
				<div class="container">

					<?php if($axisConfig['contact_phone_text']!="") { ?>
						<!-- Phone -->
						<div class="row text-center">
							<div class="col-md-12">
								<div class="large-info">
									<i class="fa <?php echo $axisConfig['contact_phone_icon']; ?>"></i>
									<?php echo $axisConfig['contact_phone_text']; ?>
								</div>
							</div>
						</div>
					<?php } ?>

					<?php if($axisConfig['contact_email_text']!="") { ?>
						<!-- E-Mail -->
						<div class="row text-center offsetTopS">
							<div class="col-md-12">
								<i class="fa <?php echo $axisConfig['contact_email_icon']; ?> contact-icon"></i>
								<p>
									<a href="mailto:<?php echo $axisConfig['contact_email_text']; ?>" class="contact-link"><?php echo $axisConfig['contact_email_text']; ?></a>
								</p>
							</div>
						</div>
					<?php } ?>

					<?php if($axisConfig['contact_address_text']!="") { ?>
						<!-- Address -->
						<div class="row text-center">
							<div class="col-md-12">
								<i class="fa <?php echo $axisConfig['contact_address_icon']; ?> contact-icon"></i>
								<p class="contact-address">
									<?php echo $axisConfig['contact_address_text']; ?>
								</p>
							</div>
						</div>
					<?php } ?>

				</div>
			</section>
		<?php } ?>

		<?php if ($axisConfig['contact_form_visibility']) { ?>
			<!-- Contact form -->
			<section class="contact">
				<div class="container">

					<div class="row">

						<?php if($axisConfig['contact_form_title']!="") { ?>
							<h2 class="section-title">
								<?php echo $axisConfig['contact_form_title']; ?>
							</h2>
						<?php } ?>

						<?php if($axisConfig['contact_form_info']!="") { ?>
							<div class="section-info">
								<?php echo $axisConfig['contact_form_info']; ?>
							</div>
						<?php } ?>

						<div class="col-md-12">
							<div id="note"></div>
						</div>

					</div>

					<form id="ajax-contact-form" action="<?php echo plugins_url()."/axis/template/contact.php"; ?>" method="post">
						<div class="row">

							<div class="col-md-6">
								<div id="fields">
									<input type="text" name="name" id="name" placeholder="<?php echo $axisConfig['contact_form_name_field_label']; ?>" value="" />
									<input type="text" name="email" id="email" placeholder="<?php echo $axisConfig['contact_form_email_field_label']; ?>" value="" />
									<input type="text" name="phone" id="phone" placeholder="<?php echo $axisConfig['contact_form_phone_field_label']; ?>" value="" />
								</div>
							</div>

							<div class="col-md-6">
								<textarea name="message" id="message" placeholder="<?php echo $axisConfig['contact_form_message_field_label']; ?>"></textarea>
							</div>

						</div>

						<!-- Submit Button -->
						<div class="row">
							<div class="col-md-12 text-center">
								<input type="submit" name="submit" id="submit" value="<?php echo $axisConfig['contact_form_button_label']; ?>" />
							</div>
						</div>
					</form>

				</div>
			</section>
		<?php } ?>

		<?php if ($axisConfig['map_visibility']) { ?>
			<!-- Google Maps -->
			<section class="google-map">
				<div id="google-container"></div>
				<div id="zoom-in"></div>
				<div id="zoom-out"></div>
			</section>
		<?php } ?>

		<!-- Footer -->
		<footer>
		  	<div class="container">
			 	<div class="row">

					<!-- Up button -->
					<a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>

		  			<!-- Copyright -->
					<div class="copyright">
				 		<?php echo $axisConfig['copyright_text']; ?>
					</div>

					<?php
						if(!empty($axisConfig['social_link']) && count($axisConfig['social_link']) >= 1) {
							$arr_social = array_values($axisConfig['social_link']);
					?>
						<!-- Social links -->
						<div class="social-icon">

							<?php
								for ($i=0, $cnt = count($arr_social); $i < $cnt; $i++) {
									$item = $arr_social[$i];
							?>
								<a href="<?php echo $item['url']; ?>" title="<?php echo htmlspecialchars($item['title']); ?>">
									<i class="fa fa-fw <?php echo $item['select']; ?>"></i>
								</a>
							<?php } ?>

						</div>
					<?php } ?>

			 	</div>
		  	</div>
		</footer>

		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo $axis_template_url; ?>/layout/plugins/jquery/jquery.js"></script>

		<!-- Plugins -->
		<script src="<?php echo $axis_template_url; ?>/layout/plugins/backstretch/jquery.backstretch.min.js"></script>
		<script src="<?php echo $axis_template_url; ?>/layout/plugins/countdown/jquery.countdown.min.js"></script>
		<script src="<?php echo $axis_template_url; ?>/layout/plugins/validate/jquery.validate.min.js"></script>
		<script src="<?php echo $axis_template_url; ?>/layout/plugins/ytplayer/jquery.mb.ytplayer.js"></script>
		<script src="<?php echo $axis_template_url; ?>/layout/plugins/scrollto/jquery.scrollto.min.js"></script>
		<script src="<?php echo $axis_template_url; ?>/layout/plugins/smoothscroll/smoothscroll.js"></script>

		<?php if ($axisConfig['map_visibility']) { ?>
			<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $axisConfig['map_google_api']; ?>"></script>
		<?php } ?>

		<!-- Main -->
		<script src="<?php echo $axis_template_url; ?>/layout/js/main.js"></script>

		<script type="text/javascript">
			<?php
				if ($axisConfig['map_visibility']) {
					$marker = $axisConfig['map_marker']['url'];

					if ($marker=="") {
						$marker = $axis_template_url."/layout/images/map-marker-orange.png";
					}
			?>
				//Google Maps
				var arrMap = {
					"title":"<?php echo $axisConfig['map_marker_popup_title']; ?>",
					"latitude":<?php echo $axisConfig['map_latitude']; ?>,
					"longitude":<?php echo $axisConfig['map_longitude']; ?>,
					"zoom":<?php echo $axisConfig['map_zoom_level']; ?>,
					"marker":"<?php echo $marker; ?>",
					"color":"<?php echo $axisConfig['map_color']; ?>"
				}
			<?php } ?>

			jQuery(document).ready(function() {

				<?php
					switch ((int)$axisConfig['bg_type']) {
						case 1:	//Single image
							$img = $axisConfig['single_image']['url'];
						?>
							jQuery("header").backstretch("<?php echo $img; ?>");

						<?php
							break;
						case 2:	//Image slideshow
							$img = "";
							$gallery_id = explode(',', $axisConfig['image_slideshow']);

							foreach($gallery_id as $photo_id) {
								$img .= "'". wp_get_attachment_url($photo_id) . "', ";
							}

							//Remove empty comma
							$sub = ", ";

							if (substr($img, strlen($img)-strlen($sub))===$sub) {
								$img = substr($img, 0, strlen($img)-2);
							}
						?>
							jQuery("header").backstretch([
								<?php echo $img; ?>
								], {
									fade:<?php echo $axisConfig['fade']; ?>,
									duration:<?php echo $axisConfig['duration']; ?>
							});

						<?php break; ?>
				<?php } ?>

			});
		</script>

	</body>

</html>
