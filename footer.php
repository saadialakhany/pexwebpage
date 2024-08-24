<?php 
/** Footer File **/

?>
 <?php if (!is_front_page()): ?>
    <footer class="footer-page">
<?php else: ?>
  <footer class="homepage">
<?php endif; ?>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </footer>
   
    <?php wp_footer(); ?>
  </body>
</html>