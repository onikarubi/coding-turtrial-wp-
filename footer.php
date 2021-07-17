<footer class="footer">
    <div class="footer__inner">
      <nav class="footer-menu is-pc">
        <?php
          global_nav_menu('footer', 'footer');
        ?>
      </nav>

      <nav class="footer-menu is-sp">
        <?php global_nav_menu('footer-sp', 'footer'); ?>
      </nav>

      <div class="copyright">
        <p class="copyright-text">&copy; PON DESIGN</p>
      </div>
    </div>
  </footer>
  <!-- /.footer -->

  <div class="page-top" id="page-top">
    <a href="#" class="page-top__button">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>

  <?php wp_footer(); ?>
</body>

</html>