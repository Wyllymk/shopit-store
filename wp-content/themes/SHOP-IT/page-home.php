<?php get_header();?>


  <!-- main -->
  <main class="page">
    <!-- header -->
    <header class="hero">
      <div class="hero-container">
        <div class="hero-text">
          <h1>MobiMax Autoparts</h1>
          <h4>no fluff, just autoparts</h4>
        </div>
      </div>
    </header>
    <!-- end of header -->
    <section class="autoparts-container">
      <!-- tag container -->
      <?php 
      $autopart_display = new AutopartsDisplay($autopart_objects);
      $autopart_display->displayTags();
      ?>
      <!-- end of tag container -->
      <?php
        $autopart_display = new AutopartsDisplay($autopart_objects);
        $autopart_display->displayAutoparts();
        
      ?>
    </section>
  </main>
  <!-- end of main -->

<?php get_footer();?>