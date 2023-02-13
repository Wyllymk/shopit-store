<?php 
/**
 * Template Name: Shop Page
 */
get_header();?>

<!-- main -->
<main class="page">

    <section class="recipes-container">
      <!-- tag container -->
      <?php 
      $recipeDisplay = new RecipeDisplay($recipe_objects);
      $recipeDisplay->displayTags();
      ?>
      <!-- end of tag container -->
      <?php
        $recipe_display = new RecipeDisplay($recipe_objects);
        $recipe_display->displayRecipes();
        
      ?>
    </section>
  </main>
  <!-- end of main -->

<?php get_footer();?>