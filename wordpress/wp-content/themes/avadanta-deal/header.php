<?php
/**
* Header file for the Avadanta WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 * @subpackage Avadanta
 */
?>
<!doctype html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		
	<?php wp_head();?>	
	</head>
	<body <?php body_class(); ?>>
	<?php
	if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() 
		{
			do_action( 'wp_body_open' );
		}
	} 
	?>
<div class="wrapper-area">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'avadanta-deal' ); ?></a>
		<?php 
	$avadanta_sticky_thumb = get_theme_mod('avadanta_sticky_thumb',0);
	 if($avadanta_sticky_thumb==0){
	?>
	<header class="is-sticky is-shrink is-boxed header-s1 <?php if(  is_user_logged_in() ) { ?> avndta-admn <?php } ?>" id="header">
	<?php } else { ?>
	<header class=" is-shrink is-boxed header-s1" id="header">
		<?php } 
	$avadanta_top_header_enable = get_theme_mod('avadanta_top_header_enable',1);

	if($avadanta_top_header_enable==1) {
		?>
		<div class="topbar tb-border-design visible-on-mobile">
			<div class="container">
				<div class="topbar-left-content ">
					<div class="topbar-socials">
						<?php 
						$avadanta_header_social_url = get_theme_mod('avadanta_header_social_url','');
						$avadanta_header_twitter_social_url = get_theme_mod('avadanta_header_twitter_social_url','');
						$avadanta_header_insta_social_url = get_theme_mod('avadanta_header_insta_social_url','');
						 ?>
						<ul class="redux-social-media-list clearfix">
							<?php if($avadanta_header_social_url!=='') { ?>
							<li><a target="_blank" href="<?php echo esc_url($avadanta_header_social_url); ?>"><i class="fa fa-facebook"></i></a></li>
						<?php }  if($avadanta_header_insta_social_url!=='') { ?>
							<li><a target="_blank" href="<?php echo esc_url($avadanta_header_insta_social_url); ?>"><i class="fa fa-instagram"></i></a></li>
							<?php }  if($avadanta_header_twitter_social_url!=='') { ?>
							<li><a target="_blank" href="<?php echo esc_url($avadanta_header_twitter_social_url); ?>"><i class="fa fa-twitter"></i></a></li>
						<?php }  ?>
						</ul>
					</div>
				</div>
				<div class="topbar-right-content ">
					<div class="topbar-contact">
						<?php 
						$avadanta_header_phone = get_theme_mod('avadanta_header_phone','');
						$avadanta_header_email = get_theme_mod('avadanta_header_email','');
						$avadanta_header_address = get_theme_mod('avadanta_header_address','');
						 
							
							 if($avadanta_header_address!=='') { ?>
							<span class="topbar-opening-hours"><span><?php echo esc_html($avadanta_header_address); ?></span>
							</span>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<div class="header-box">
		<div class="header-main">
			<div class="header-wrap">
				<div class="logo-wrap">
					<div class="logo">
						  <?php
							if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
							the_custom_logo();
							} 
							if (display_header_text()==true){ 
							?>
							 <h1 class="avadanta-title">
								 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								 <?php esc_html(bloginfo( 'title' )); ?>
								 </a>
							 </h1>
						<?php } ?>
					</div>
			</div>
				<div class="header-navbar deal">
					<?php 
					$avadanta_header_phone = get_theme_mod('avadanta_header_phone','+91-9999955555');
					$avadanta_header_email = get_theme_mod('avadanta_header_email','');
					$avadanta_header_address = get_theme_mod('avadanta_header_address','')
						; ?>
						<ul class="info-list clearfix"> 
                               	 <?php if($avadanta_header_phone!=='') { ?>
 
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <h5><?php echo esc_html__('Contact Us','avadanta-deal'); ?></h5>
                                    <p><a><?php echo esc_html($avadanta_header_phone); ?></a></p>
                                </li>
						 
						<?php } if($avadanta_header_email!=='') { ?>
							<li>
                                    <i class="fa fa-envelope"></i>
                                    <h5><?php echo esc_html__('Email','avadanta-deal'); ?></h5>
                                    <p><a><?php echo esc_html($avadanta_header_email); ?></a></p>
                                </li>
							<?php } if($avadanta_header_address!=='') {?>
							<li>
                                    <i class="fa fa-home
                                    "></i>
                                    <h5><?php echo esc_html__('Address','avadanta-deal'); ?></h5>
                                    <p><a><?php echo esc_html($avadanta_header_address); ?></a></p>
                                </li>
                            <?php } ?>
				</div> 
				  
			</div>
		</div>
	</div>
		<div class="avadanta-box deal">
		<div class="header-main">
			<div class="header-deal">
			  <div class="row">
				<div class="col-md-9">
				<div class="header-navbar">
					<nav class="avadanta-navigate" id="site-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
						 <?php
						 if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
							) );
						}
						else
						{ ?>

								<ul class="add-child-header">
                                    <li class="header-menus">
                                        <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ));  ?>"><?php echo esc_html__( 'Add Main Menu', 'avadanta-deal' ); ?>
                                        </a>
                                    </li>
                                </ul>

                                <?php
						} ?>
						</nav>					
				</div> 
			</div>
			<div class="col-md-3 avdnta-deal">
				<div class="deal-btn">
						<?php
						
						$avadanta_navigation_text = get_theme_mod('avadanta_navigation_text','Get A Quote');
						$avadanta_navigation_url = get_theme_mod('avadanta_navigation_url','#'); ?>							
							
							<?php  if(!empty($avadanta_navigation_url)) { ?>
							<a href="<?php echo esc_url($avadanta_navigation_url); ?>" class="btn btn-sm"><?php echo esc_html($avadanta_navigation_text); ?></a>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</header>