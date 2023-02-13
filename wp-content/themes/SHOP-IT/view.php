<?php
get_header();
get_theme_file_path('/templates/classes.php');
/**
 * Template Name: Products Page
 */
/* Creating a new instance of the RecipeDisplay class. */
$recipe_display = new RecipeDisplay($recipe_objects);

// var_dump($recipe_display);
// echo json_encode($recipe_display);


if(isset($_GET['recipe']) && !(empty(trim($_GET['recipe'])))) {
    $slug = $_GET['recipe'];
    /* Searching for a recipe whose title matches the slug. */
    foreach ($recipe_objects as $recipe) {/* Looping through the array of recipes and assigning each recipe to the variable . */
      $result = stripos($recipe->name, $slug) !== false; /*Searching for a recipe whose title matches the slug*/
      if ($result){ /*Fetching the details of the recipe found*/
          $image=$recipe->image_url;
          $name=$recipe->name;
          $prep_time=$recipe->prep_time;
          $cook_time=$recipe->cook_time;
          $description=$recipe->description;
          $ingredients=$recipe->ingredients;
          $cookingEquipment=$recipe->cookingEquipment;
      }
  }
} 
?>


    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="<?php echo $image?>"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><?php echo $name;?></h2>
            <p><?php echo $description;?></p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h4 style="text-decoration: line-through;"><?php echo 'Ksh ' . $prep_time;?></h4>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h4><?php echo 'Ksh ' . $cook_time;?></h4>
              </article>
            </div>
            <div class="cart-button">
              <a href="cart?recipe=' <?php $recipe->name;?> '"><input class="btn btn-outline-primary"type="button" value="Add to Cart" name='cart'></a>
            </div>
            
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
              Combine your dry ingredients (flour, sugar, salt, baking powder) 
              in one bowl and your wet ingredients (egg, milk, vegetable oil, 
              mashed bananas) in another bowl. Add the dry ingredients to the 
              bowl with the wet ingredients, then stir until they're incorporated. 
              It's OK if your batter is slightly lumpy. 
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 2</p>
                <div></div>
              </header>
              <p>
              Pour the batter in ¼ cup portions onto a lightly oiled pan or 
              griddle over medium-high heat. Cook for a few minutes, 
              flip with a spatula, and cook for another few minutes 
              (or until each side is golden brown). 
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
              Serve your banana pancakes immediately. 
              They're delicious alone or with your favorite pancake toppings. 
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient"><?php echo $ingredients;?></p>
            </div>
            <div>
              <h4>cooking equipment</h4>
              <p class="single-tool"><?php echo $cookingEquipment;?></p>
            </div>
          </article>
        </section>
      </div>
    </main>
    <?php get_footer();?>
