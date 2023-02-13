<?php
get_header();
get_theme_file_path('/templates/classes.php');
/**
 * Template Name: Products Page
 */
/* Creating a new instance of the AutoParts class. */
$autopart_display = new AutopartsDisplay($autopart_objects);

// var_dump($autopart_display);
// echo json_encode($autopart_display);


if(isset($_GET['autopart']) && !(empty(trim($_GET['autopart'])))) {
    $slug = $_GET['autopart'];
    /* Searching for a autopart whose title matches the slug. */
    foreach ($autopart_objects as $autopart) {/* Looping through the array of autoparts and assigning each autopart to the variable . */
      $result = stripos($autopart->name, $slug) !== false; /*Searching for a autopart whose title matches the slug*/
      if ($result){ /*Fetching the details of the autopart found*/
          $image=$autopart->image_url;
          $name=$autopart->name;
          $initial_price=$autopart->initial_price;
          $current_price=$autopart->current_price;
          $description=$autopart->description;
          $categories=$autopart->categories;
      }
  }
} 
?>


    <main class="page">
      <div class="autopart-page">
        <section class="autopart-hero">
          <img
            src="<?php echo $image?>"
            class="img autopart-hero-img"
          />
          <article class="autopart-info">
            <h2><?php echo $name;?></h2>
            <p><?php echo $description;?></p>
            <div class="autopart-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h4 style="text-decoration: line-through;"><?php echo 'Ksh ' . $initial_price;?></h4>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h4><?php echo 'Ksh ' . $current_price;?></h4>
              </article>
            </div>
            <div class="cart-button">
              <a href="cart?autopart=' <?php $name;?> '"><input class="btn btn-outline-primary"type="button" value="Add to Cart" name='cart'></a>
            </div>
            
          </article>
        </section>
        <!-- content -->
        <section class="autopart-content">
          <article>
            <h4>instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
              Combine your dry categories (flour, sugar, salt, baking powder) 
              in one bowl and your wet categories (egg, milk, vegetable oil, 
              mashed bananas) in another bowl. Add the dry categories to the 
              bowl with the wet categories, then stir until they're incorporated. 
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
              <h4>categories</h4>
              <p class="single-ingredient"><?php echo $categories;?></p>
            </div>
          </article>
        </section>
      </div>
    </main>
    <?php get_footer();?>
