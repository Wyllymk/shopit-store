<?php

/* Creating the objects*/
$recipe1=new Recipe(
    "Headlights", 
    get_template_directory_uri()."/assets/img/headlight.jpg", 
    15, 
    5,
    "The beef has a lot to offer: Iron for blood formation, protein for strong muscles and important B vitamins for energy metabolism. In addition, compared to typical grilled foods such as sausages, it has significantly less fat and in return, the fat it contains consists partly of omega-3 fatty acids. The proportion of these anti-inflammatory fatty acids is higher in free-range farming and organic meat because the animals are fed on grass.",
	"3 tablespoons soy sauce,1/4 cup dark brown sugar,2 tablespoons olive oil,3 teaspoons garlic paste,1 teaspoon ginger paste,2 Certified Angus Beef® brand strip steaks (about 1 pound 8 ounces total)",
	"Grill,aluminum foil"
);

$recipe2=new Recipe(
    "Steering Wheel", 
    get_template_directory_uri()."/assets/img/steering.jpg", 
    20, 
    10,
    "The ribs have a lot to offer: Iron for blood formation, protein for strong muscles and important B vitamins for energy metabolism.",
	"3 pounds baby back ribs,<br><hr> membranes removed, <br><hr> ½ cup finely chopped onion <br><hr> ¼ cup olive oil, <br><hr> ¼ cup fresh lemon juice, <br><hr>¼ cup chopped fresh oregano, <br><hr> 1 tablespoon liquid honey, <br><hr> 5 cloves garlic",
	"resealable plastic bag, <br><hr>  refrigerator, <br><hr>  oven, <br><hr> baking sheet"
);

$recipe3=new Recipe(
    "Gear Box", 
    get_template_directory_uri()."/assets/img/gear.png", 
    30, 
    15,
	"Delicious Air Fryed Eggs for Breakfast",
	"Eggs, Garlic, Rosemary",
	"Air Fryer or Boiling Pan"
	);

$recipe4=new Recipe(
    "Brake Pads", 
    get_template_directory_uri()."/assets/img/brake.png", 
    15, 
    5,
	"Whether you're eating victory pizza after a sports game or scarfing down slices on movie night-pizza is one of life's greatest pleasures that no one should be without. It's a crying shame the number of people going pizza-less these days, all in an effort to cut down on carbs. Because the truth is, you don't have to. We have options.",
	"1 Lb Chicken Thighs (boneless + skinless),2 Eggs,1 Teaspoon Kosher Salt,2 Cloves Garlic,1 Teaspoon Onion Powder,2 Teaspoon Oregano,1/4 Teaspoon Pepper,Low Carb Pizza Sauce,2 Cups Mozzarella",
	"Rimmed baking sheet, Oven, Meat thermometer"
);

$recipe5=new Recipe(
    "Batteries", 
    get_template_directory_uri()."/assets/img/battery.jpg", 
    30, 
    30,
    "Fire Roasted Pizza Sauce is spread on refrigerated biscuit dough and topped with mozzarella cheese for a delicious and quick dinner.",
	"1 (15 oz.) can Dei Fratelli Fire Roasted Pizza Sauce,1 (16.3 oz.) tube Refrigerated Biscuit Dough,2 (8 oz.) Mozzarella Balls, thinly sliced",
	"Oven, Nonstick baking sheet, Dei Fratelli Fire Roasted Pizza Sauce"
);

$recipe6=new Recipe(
    "Suspension", 
    get_template_directory_uri()."/assets/img/suspension.jpg", 
    5, 
    10,
    "Delicious Dish made from cornmeal or maize flour and is often served with a variety of stews, soups, or vegetables. ",
	"Flour, Water",
	"Sufuria, Cooking Stick"
	
);

$recipe7=new Recipe(
    "Tires $ Wheels", 
    get_template_directory_uri()."/assets/img/tire.jpg", 
    20, 
    30,
	"Delicious beef soup",
	"onions, potatoes, tomatoes,Olive oil or butter,Salt and pepper,thyme, rosemary, beef",
	"Cutting board,Knife,Pot or large saucepan,Stove or hot plate"
);

$recipe8=new Recipe(
    "Service Kit", 
    get_template_directory_uri()."/assets/img/kit.jpg",
    15, 
    20,
	"pancakes that include mashed ripe bananas as one of the main ingredients. They are often considered a healthier alternative to traditional pancakes as they use less sugar and butter",
	"1 cup all-purpose flour,1 teaspoon baking powder,1/4 teaspoon baking soda,1/4 teaspoon salt,1/4 cup sugar,1 cup milk,1 egg,1 teaspoon vanilla extract,1 ripe banana, mashed",
	"Mixing bowls,Whisk or fork,Griddle or non-stick pan,Spatula"
);

$recipe9=new Recipe(
    "Oil Filter", 
    get_template_directory_uri()."/assets/img/filter.jpg", 
    15, 
    30,
	"These Cheesy Stuffed Pizza Sticks with just 3-ingredients come together so quickly and easily without any fuss. They’re a super fun snack and perfect for your next tailgating party, happy hour, or after school snack.",
	"6 slices soft fresh white bread,Shredded mozzarella,Pizza Sauce (homemade preferred)",
	"Oven, parchment paper or silpat lined cookie sheet"
);

$recipe10=new Recipe(
    "Oil & Lubricants", 
    get_template_directory_uri()."/assets/img/oil.jpg", 
    10, 
    10,
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
    "A cutting board,A knife,A skillet or griddle"
);

$recipe11=new Recipe(
    "Camshaft", 
    get_template_directory_uri()."/assets/img/camshaft.jpg", 
    15, 
    60,
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
    "A cutting board,A knife,A skillet or griddle"
);

$recipe12=new Recipe(
    "Black Oil Cap", 
    get_template_directory_uri()."/assets/img/cap.jpg", 
    10, 
    35,
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
    "A cutting board,A knife,A skillet or griddle"
);


$recipe_objects = [$recipe1, $recipe2, $recipe3, $recipe4, $recipe5, $recipe6, 
                   $recipe7, $recipe8, $recipe9, $recipe10, $recipe11, $recipe12];
if(isset($_POST['search'])){
    $search_query = $_POST['search'];
    $recipe_display = new RecipeDisplay($recipe_objects, $search_query);
}else{
    $recipe_display = new RecipeDisplay($recipe_objects);
}

?>