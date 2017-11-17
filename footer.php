<?php
	$contato = get_page_by_title('contato');
  $sobre = get_page_by_title('sobre');
?>
    <!-- Footer -->

		<?php
			if (is_page('desenvolvimento')):
				include(TEMPLATEPATH . '/inc/footer-dev.php');
		 elseif(is_page('analise-do-site')):
				include(TEMPLATEPATH . '/inc/footer-analise.php');
		 elseif(is_page('formulario-feedback')):
				include(TEMPLATEPATH . '/inc/footer-analise.php');
		 else:
				include(TEMPLATEPATH . '/inc/footer-geral.php');
		 endif;
		?>

		<?php
      if(is_page('contato') || is_page('digitalizacao')) {
				echo '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSy58jX-AnCLhdZw4Msbbhwg6l_8kP0qw&callback=initMap"></script>';
       }
     ?>



    <!-- Google Analytics: change UA-104380197-3 to be your site's ID. -->
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-104380197-3', 'auto');
          ga('send', 'pageview');
        
        </script>
		
		<!-- Hotjar Tracking Code for preservtec.com.br -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:529758,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <!-- WP FOOTER -->
    <?php wp_footer(); ?>
    <!-- FIM WP FOOTER -->
</body>

</html>
