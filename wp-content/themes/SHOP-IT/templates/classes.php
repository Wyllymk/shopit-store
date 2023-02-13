<?php
include get_theme_file_path( '/templates/autoparts.php' );;

class Recipe {
    public $name;
    public $image_url;
    public $prep_time;
    public $cook_time;
    public $description;
	public $ingredients;
	public $cookingEquipment;

    public function __construct($name, $image_url, $prep_time, $cook_time, $description, $ingredients, $cookingEquipment) {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->prep_time = $prep_time;
        $this->cook_time = $cook_time;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->cookingEquipment = $cookingEquipment;
    }
}

class RecipeDisplay {
    /* Creating a new array called recipes */
    public $recipes;

    /**
     * It creates an array of Recipe objects and assigns it to the recipes property
     */
    public function __construct(array $objects) {
        foreach($objects as $object){
            if($object instanceof Recipe)
            $this->recipes[] = $object;
        }
    }
    /**
     * It displays a list of recipes, filtered by a search query if one is provided
     */
    public function displayRecipes() {
        // check if the form has been submitted
        if (isset($_POST['search'])) {
            $search_query = $_POST['search'];
            $filtered_recipes = $this->searchRecipes($search_query);
        } else {
            $filtered_recipes = $this->recipes;
        }

        echo '<div class="recipes-list">';
        if (count($filtered_recipes) > 0) {
            foreach ($filtered_recipes as $recipe) {
                echo '<a href="product-page?recipe=' . $recipe->name . '" class="recipe">';
                echo '<img src="' . $recipe->image_url . '" class="img recipe-img" alt="">';
                echo '<h5>' . $recipe->name . '</h5>';
                echo '<div class="prices"><p style="text-decoration:line-through;"> Ksh ' . $recipe->prep_time .'</p><h5> Ksh '. $recipe->cook_time . '</h5></div>';
                echo '</a>';
            }
        } else {
            echo '<p>No recipes found for the search query: ' . $search_query . '</p>';
        }
        echo '</div>';
    }

    public function searchRecipes($query) {
        $filtered_recipes = array();
        foreach ($this->recipes as $recipe) {
            if (stripos($recipe->name, $query) !== false) {
                $filtered_recipes[] = $recipe;
            }
        }
        return $filtered_recipes;
    }
    public function displayTags(){
        echo '<div class="tags-container">';
        echo '<h4>autoparts</h4>';
        echo '<div class="tags-list">';
        foreach ($this->recipes as $recipe) {
            echo '<a href="product-page?recipe=' . $recipe->name . '">' . $recipe->name . '</a>';
        }
        echo '</div>';
        echo '</div>';
    }
}
/* Creating a new object of the class RecipeDisplay and assigning it to the variable . It is
then assigning the value of the property recipes to the variable . */
$recipe_display = new RecipeDisplay($recipe_objects);

?>