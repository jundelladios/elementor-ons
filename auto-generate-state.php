<?php
/* 
Template Name: Auto-Generate-State
*/

require_once 'auto-generate-state/config.php';

require_once 'domains.php';

get_header();

?>

<script>window.slickoptions = {
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        adaptiveHeight: true
    };</script>

<div id="dev-auto-generate-state" class="dev-auto-generate-state">
	<?php
		get_template_part( 'auto-generate-state/templates/sections/section-1' );
	?>
	<?php
		get_template_part( 'globals/state-breadcrumb' );
	?>
	<?php
		get_template_part( 'auto-generate-state/templates/sections/section-2' );
	?>
	<?php
		get_template_part( 'auto-generate-state/templates/sections/section-3' );
	?>
	<?php
		get_template_part( 'auto-generate-state/templates/sections/section-4' );
	?>
	<?php
		get_template_part( 'auto-generate-state/templates/sections/domains' );
	?>
</div>

<?php

get_template_part( 'auto-generate-state/grid-script' );

get_footer();