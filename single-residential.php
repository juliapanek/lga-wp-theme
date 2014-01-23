<?php
  global $pageTitle;
  $pageTitle = get_field('name') . ' Project';
  get_header();
?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-6 col-lg-push-6">
  <div class="column-container">
  	 <div id="info">
  		<p class="title"><?php the_field('name'); ?></p>
  		<p class="location"><?php the_field('location'); ?></p>
      <p class="tagline"><?php the_field('tagline'); ?></p>
  		<p class="intro"><?php the_field('intro_paragraph_1'); ?></p>
  		<p class="normal"><?php the_field('intro_paragraph_2'); ?></p>

  		<table class="credit">
<?php
  			if (get_field('credits')) {
  				//echo '<tr>';
  				 
  				while (has_sub_field('credits')) {
  					echo '<tr><td class="credit_left credit">' . get_sub_field('role') . '</td><td class="credit_right credit">' . get_sub_field('credit') . '</td></tr>';
  					// echo '<li class="credit">role = ' . get_sub_field('role') . ', name = ' . get_sub_field('credit') . '</li>';
  			   }
  			   
  				//echo '</tr>';
  			}
?>
  		</table>
  	</div>
  </div>
</div>

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-6 col-lg-pull-6">
  <div class="column-container">
<?php
        $galleryId = get_field('gallery_id');
        if ($galleryId && ($galleryId != 0)) {
           echo do_shortcode( '[ngg_images gallery_ids="' . $galleryId . '" display_type="ds-nextgen_royalslider"]' );
        }
?>
  </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    var slider = jQuery(".royalSlider").data('royalSlider');
    if (!slider)
      return;

    slider.ev.on('rsAfterSlideChange',
      function(event) {
        if ((slider.currSlideId == 0) ||
            (jQuery("#info").parents(".content").outerWidth() ==
             jQuery("#header").outerWidth())) {
          removeOverlayDiv("info");
          return;
        }
        var pid = slider.currSlide.content.attr('data-image_id');
        $.ajax({
              type: "GET",
              url: "<?php echo admin_url('admin-ajax.php') ?>",
              dataType: "html",
              data: ({ action: "get_image_details", pid: pid}),
              success: function(html) {
                replaceOverlayDiv("info", html);
              }
          }
        )
      }
    )
  });
</script>

<?php
    if (!isset($expandSubMenu))
       $expandSubMenu = "residential";
    include 'footer.php'
?>
