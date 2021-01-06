<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pizzas')->insert([
            'name' => 'Cheese Bomb',
            'description' => 'Pizza with different types of cheese coated with our special sauce, so yummy',
            'price' => 80000,
            'image' => '../img/cheese_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Bacon Egg',
            'description' => 'Pizza with the slices of bacon and egg with delicious sauce',
            'price' => 60000,
            'image' => '../img/bacon_egg.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Beef Pepper',
            'description' => 'Pizza with various beef and a little bit of pepper',
            'price' => 90000,
            'image' => '../img/beef_pepper.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Buffalo Chicken',
            'description' => 'Pizza with burnt caramel chicken with tartar dipping sauce',
            'price' => 70000,
            'image' => '../img/buffalo_chicken.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Garlic Chicken',
            'description' => 'Pizza with the tase of chicken garlic with barbeque dipping sauce',
            'price' => 85000,
            'image' => '../img/garlic_chicken.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Hawaiian Pizza',
            'description' => 'Pizza with various and extravaganza topping, will melt in your mouth',
            'price' => 80000,
            'image' => '../img/hawaiian_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Italian Meatball',
            'description' => 'Pizza with the best juicy meatball with bolognese sauce',
            'price' => 100000,
            'image' => '../img/italian_meatball.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Lamb Pizza',
            'description' => 'Pizza with the best lamb beef from turkey with curry sauce',
            'price' => 120000,
            'image' => '../img/lamb_pizza.jpeg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Mushroom Cheese',
            'description' => 'Pizza with various cheese sauce with mushroom on the top of it',
            'price' => 80000,
            'image' => '../img/mushroom_cheese.jpeg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Tuna Onion Pizza',
            'description' => 'Pizza with tuna and caramelized onion',
            'price' => 80000,
            'image' => '../img/tuna_onion_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Veggie Pizza',
            'description' => 'Pizza with various kind of vegetables but YUMMM',
            'price' => 90000,
            'image' => '../img/veggie_pizza.jpg',
        ]);
    }
}
