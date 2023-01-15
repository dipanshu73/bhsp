<?php /* Template Name: Contact Us Page */ ?>
<?php
	get_header();the_post();
	$page_id = get_the_ID();
	
	$codes = Theme::countryCodes();


?>
<?php include(__DIR__.'/menu.php'); ?>
<div class="pb-60"></div>


<?php
get_footer();
?>