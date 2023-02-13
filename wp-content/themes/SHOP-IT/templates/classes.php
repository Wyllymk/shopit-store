<?php
include get_theme_file_path( '/templates/autoparts.php' );;

class Autopart {
    public $name;
    public $image_url;
    public $initial_price;
    public $current_price;
    public $description;
	public $categories;

    public function __construct($name, $image_url, $initial_price, $current_price, $description, $categories) {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->initial_price = $initial_price;
        $this->current_price = $current_price;
        $this->description = $description;
        $this->categories = $categories;
    }
}

class AutopartsDisplay {
    /* Creating a new array called autoparts */
    public $autoparts;

    /**
     * It creates an array of Autopart objects and assigns it to the autoparts property
     */
    public function __construct(array $objects) {
        foreach($objects as $object){
            if($object instanceof Autopart)
            $this->autoparts[] = $object;
        }
    }
    /**
     * It displays a list of autoparts, filtered by a search query if one is provided
     */
    public function displayAutoparts() {
        // check if the form has been submitted
        if (isset($_POST['search'])) {
            $search_query = $_POST['search'];
            $filtered_autoparts = $this->searchAutoparts($search_query);
        } else {
            $filtered_autoparts = $this->autoparts;
        }

        echo '<div class="autoparts-list">';
        if (count($filtered_autoparts) > 0) {
            foreach ($filtered_autoparts as $autopart) {
                echo '<a href="product-page?autopart=' . $autopart->name . '" class="autopart">';
                echo '<img src="' . $autopart->image_url . '" class="img autopart-img" alt="">';
                echo '<h5>' . $autopart->name . '</h5>';
                echo '<div class="prices"><p style="text-decoration:line-through;"> Ksh ' . $autopart->initial_price .'</p><h5> Ksh'. $autopart->current_price . '</h5></div>';
                echo '</a>';
            }
        } else {
            echo '<p>No autoparts found for the search query: ' . $search_query . '</p>';
        }
        echo '</div>';
    }

    public function searchAutoparts($query) {
        $filtered_autoparts = array();
        foreach ($this->autoparts as $autopart) {
            if (stripos($autopart->name, $query) !== false) {
                $filtered_autoparts[] = $autopart;
            }
        }
        return $filtered_autoparts;
    }
    public function displayTags(){
        echo '<div class="tags-container">';
        echo '<h4>autoparts</h4>';
        echo '<div class="tags-list">';
        foreach ($this->autoparts as $autopart) {
            echo '<a href="product-page?autopart=' . $autopart->name . '">' . $autopart->name . '</a>';
        }
        echo '</div>';
        echo '</div>';
    }
}
/* Creating a new object of the class AutopartsDisplay and assigning it to the variable . It is
then assigning the value of the property autoparts to the variable . */
$autopart_display = new AutopartsDisplay($autopart_objects);

?>