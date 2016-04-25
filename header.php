<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/css/stonebriar_print.css" media="print" />
	<!--[if IE]>
		<link rel="stylesheet" href='<? bloginfo('template_url'); ?>/css/ie_fixes.css' type="text/css" media="screen, projection" />
	<![endif]-->

	<script type="text/javascript">
		document.write('<link rel="stylesheet" href="<? bloginfo('template_url'); ?>/css/preset.css" type="text/css" media="screen, projection" />');
	</script>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body>
<p id="skip_links">
	<a href="#content">Skip to main content</a>
</p>

<?
// ministry_index
	// $temp_dir = get_bloginfo('template_directory');
	// $nav = curl_init($temp_dir.'/header_info_dropdown.html');
	$nav = curl_init('http://www.stonebriar.org/?blogheadermenu&type=11');
	
	curl_exec($nav);
	
	curl_close($nav);
?>
<div id="header_wrap">

	<div id="header">
		<h1>
			<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
		</h1>
		<span>
			<a href="http://www.stonebriar.org/index.php?id=2472&amp;tx_pilmailform_pi1[text][refpage]=<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">Contact Us</a>
		</span>
		<a href="#ministry_index" id="ministry_tab" class="off">Ministry Index</a>
		<form method="get" action="#">
			<p>
				<label for="search_field">
					Search
				</label>
				<input type="text" id="search_field" name="search_field" />
				<input type="image" id="search_button" src="<? bloginfo('template_url'); ?>/images/search_button.gif" alt="Search" />

			</p>
			<div class="clear">&nbsp;</div>
		</form>
	</div>
	<!-- end #header -->
</div>

<!-- end #header_wrap -->
<?
	// main nav
	$temp_dir = get_bloginfo('template_directory');
	$nav = curl_init($temp_dir.'/header_info.html');
	
	curl_exec($nav);
	
	curl_close($nav);
?>
<div id="content_wrap">
	<div id="content" class="blog">
		<table width="98%">
		<tr>
		<td>
		<p id="breadcrumbs">
			<a href="http://stonebriar.org/home/"  >Home</a>&nbsp;&raquo;&nbsp;
			<a href="http://stonebriar.org/get-connected/"  >Get Connected</a>&nbsp;&raquo;&nbsp;
			<a href="http://www.stonebriar.org/get-connected/fellowship-groups/"  >Fellowship Groups</a>&nbsp;&raquo;&nbsp;
			<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>&nbsp;&raquo;&nbsp;
			<!-- Need to change this so that it displays home when at the home page -->
			<?php if (is_page(home) ) { echo 'Home'; } else { the_title(); } ?>
			
				
		</p>
		</td>
		<td align="right">
		<p id="breadcrumbs">
		<? global $user_ID;
		   if ( $user_ID ) {
		?>
		<span style="font: 10px Verdana, sans-serif;color: #92866a;font-weight: normal;">
			Logged in as [<a href="<?=get_option('siteurl');?>/wp-admin/profile.php">
				<?php global $user_identity;
				get_currentuserinfo();
				echo($user_identity);
				?>
			</a>] <a href="<?php echo wp_logout_url(); ?>" title="Log out of this account">Logout</a>
		</span>
		<? } else { ?>
			<a href="<?php bloginfo('url'); ?>/wp-login.php">Login</a>
		<? } ?>
		</p>
		</td>
		</table>