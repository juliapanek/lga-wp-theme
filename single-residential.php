<?php
  global $pageTitle;
  $pageTitle = get_field('name') . ' Project';
  get_header();
?>

<div class="content col-xs-12 col-sm-5 col-sm-push-7 col-lg-5 col-lg-push-7">
  <div class="column-container">
  	 <div id="info">
  		<h1 class="title"><?php the_field('name'); ?></h1>
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

<div class="content col-xs-12 col-sm-7 col-sm-pull-5 col-lg-7 col-lg-pull-5">
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

    function shouldDisplayProcessInfo() {
      return (jQuery("#info").parents(".content").outerWidth() !=
              jQuery("#header").outerWidth());
		}

    var rotator = new OverlayRotator("info");

    slider.ev.on('rsBeforeMove',
      function(event, type, userAction) {
        var nextSlideId = slider.currSlideId;
        if (type == "prev")
          nextSlideId -= 1;
        else
          nextSlideId += 1;

        if ((nextSlideId == 0) || !shouldDisplayProcessInfo()) {
          rotator.removeOverlay(nextSlideId);
          return;
        }
        else if (nextSlideId > 0)
          rotator.beginTransition(nextSlideId);
      }
    );

    slider.ev.on('rsAfterSlideChange',
      function(event) {
        var slideId = slider.currSlideId;

        if ((slideId == 0) || !shouldDisplayProcessInfo())
          return;

        var title = '<p class="title">' + slider.currSlide.content.attr('data-image_title') + '</p>';
        rotator.replaceOverlay(slideId, title, true);

        var imageId = slider.currSlide.content.attr('data-image_id');
        jQuery.ajax({
              type: "GET",
              url: "<?php echo admin_url('admin-ajax.php') ?>",
              dataType: "html",
              data: ({ action: "get_image_details", pid: imageId}),
              success: function(html) {
                if (html.length)
                  rotator.replaceOverlay(slideId, title + html, false);
              }
          }
        );
      }
    );
  });
</script>

<?php
    if (!isset($expandSubMenu))
       $expandSubMenu = "residential";
    include 'footer.php'
?>
