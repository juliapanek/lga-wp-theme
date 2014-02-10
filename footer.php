</div>
</div>
<?php
	include 'sidebar.php'
?>
</div>
</div>

<div id="push"></div>
</div>

<footer>
	<div id="footer">
<?php /*
      $contactqry = new WP_Query("post_type=contact"); 
      if ($contactqry->have_posts() ) {
        while ( $contactqry->have_posts() ) {
          $contactqry->the_post(); 
          echo '<p class="contact">' . has_sub_field('address_line_1') . '</p>';  
        }
      }
    wp_reset_postdata();
?> */ 
	</div>
</footer>

<script type="text/javascript">
WebFontConfig = { fontdeck: { id: '40738' } };

(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
</script>

<?php wp_footer(); ?>
</body>
</html>