<?php

/* Creating the objects*/
$Autopart1=new Autopart(
    "Headlights", 
    get_template_directory_uri()."/assets/img/headlight.jpg", 
    15, 
    5,
    "The beef has a lot to offer: Iron for blood formation, protein for strong muscles and important B vitamins for energy metabolism. In addition, compared to typical grilled foods such as sausages, it has significantly less fat and in return, the fat it contains consists partly of omega-3 fatty acids. The proportion of these anti-inflammatory fatty acids is higher in free-range farming and organic meat because the animals are fed on grass.",
	"3 tablespoons soy sauce,1/4 cup dark brown sugar,2 tablespoons olive oil,3 teaspoons garlic paste,1 teaspoon ginger paste,2 Certified Angus Beef® brand strip steaks (about 1 pound 8 ounces total)",
);

$Autopart2=new Autopart(
    "Steering Wheel", 
    get_template_directory_uri()."/assets/img/steering.jpg", 
    20, 
    10,
    "The ribs have a lot to offer: Iron for blood formation, protein for strong muscles and important B vitamins for energy metabolism.",
	"3 pounds baby back ribs,<br><hr> membranes removed, <br><hr> ½ cup finely chopped onion <br><hr> ¼ cup olive oil, <br><hr> ¼ cup fresh lemon juice, <br><hr>¼ cup chopped fresh oregano, <br><hr> 1 tablespoon liquid honey, <br><hr> 5 cloves garlic",
);

$Autopart3=new Autopart(
    "Gear Box", 
    get_template_directory_uri()."/assets/img/gear.png", 
    30, 
    15,
	"Delicious Air Fryed Eggs for Breakfast",
	"Eggs, Garlic, Rosemary",
	);

$Autopart4=new Autopart(
    "Brake Pads", 
    get_template_directory_uri()."/assets/img/brake.png", 
    15, 
    5,
	"Whether you're eating victory pizza after a sports game or scarfing down slices on movie night-pizza is one of life's greatest pleasures that no one should be without. It's a crying shame the number of people going pizza-less these days, all in an effort to cut down on carbs. Because the truth is, you don't have to. We have options.",
	"1 Lb Chicken Thighs (boneless + skinless),2 Eggs,1 Teaspoon Kosher Salt,2 Cloves Garlic,1 Teaspoon Onion Powder,2 Teaspoon Oregano,1/4 Teaspoon Pepper,Low Carb Pizza Sauce,2 Cups Mozzarella",
);

$Autopart5=new Autopart(
    "Batteries", 
    get_template_directory_uri()."/assets/img/battery.jpg", 
    30, 
    30,
    "Fire Roasted Pizza Sauce is spread on refrigerated biscuit dough and topped with mozzarella cheese for a delicious and quick dinner.",
	"1 (15 oz.) can Dei Fratelli Fire Roasted Pizza Sauce,1 (16.3 oz.) tube Refrigerated Biscuit Dough,2 (8 oz.) Mozzarella Balls, thinly sliced",
);

$Autopart6=new Autopart(
    "Suspension", 
    get_template_directory_uri()."/assets/img/suspension.jpg", 
    5, 
    10,
    "Delicious Dish made from cornmeal or maize flour and is often served with a variety of stews, soups, or vegetables. ",
	"Flour, Water",
	
);

$Autopart7=new Autopart(
    "Tires $ Wheels", 
    get_template_directory_uri()."/assets/img/tire.jpg", 
    20, 
    30,
	"Delicious beef soup",
	"onions, potatoes, tomatoes,Olive oil or butter,Salt and pepper,thyme, rosemary, beef",
);

$Autopart8=new Autopart(
    "Service Kit", 
    get_template_directory_uri()."/assets/img/kit.jpg",
    15, 
    20,
	"pancakes that include mashed ripe bananas as one of the main ingredients. They are often considered a healthier alternative to traditional pancakes as they use less sugar and butter",
	"1 cup all-purpose flour,1 teaspoon baking powder,1/4 teaspoon baking soda,1/4 teaspoon salt,1/4 cup sugar,1 cup milk,1 egg,1 teaspoon vanilla extract,1 ripe banana, mashed",
);

$Autopart9=new Autopart(
    "Oil Filter", 
    get_template_directory_uri()."/assets/img/filter.jpg", 
    15, 
    30,
	"These Cheesy Stuffed Pizza Sticks with just 3-ingredients come together so quickly and easily without any fuss. They’re a super fun snack and perfect for your next tailgating party, happy hour, or after school snack.",
	"6 slices soft fresh white bread,Shredded mozzarella,Pizza Sauce (homemade preferred)",
);

$Autopart10=new Autopart(
    "Oil & Lubricants", 
    get_template_directory_uri()."/assets/img/oil.jpg", 
    10, 
    10,
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
);

$Autopart11=new Autopart(
    "Camshaft", 
    get_template_directory_uri()."/assets/img/camshaft.jpg", 
    15, 
    60,
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
);

$Autopart12=new Autopart(
    "Black Oil Cap", 
    get_template_directory_uri()."/assets/img/cap.jpg", 
    10, 
    35,
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
);


$autopart_objects = [$Autopart1, $Autopart2, $Autopart3, $Autopart4, $Autopart5, $Autopart6, 
                   $Autopart7, $Autopart8, $Autopart9, $Autopart10, $Autopart11, $Autopart12];
if(isset($_POST['search'])){
    $search_query = $_POST['search'];
    $autopart_display = new AutopartsDisplay($autopart_objects, $search_query);
}else{
    $autopart_display = new AutopartsDisplay($autopart_objects);
}

?>