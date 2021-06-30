<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = [
    		[
    			'name' => "Harry Potter and Philosopher's Stone",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 21,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg/220px-Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg"
    		],
    		[
    			'name' => "Harry Potter and Chamber of Secrets",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 400,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/Harry_Potter_and_the_Chamber_of_Secrets.jpg/220px-Harry_Potter_and_the_Chamber_of_Secrets.jpg"
    		],
    		[
    			'name' => "Harry Potter and Prisoner of Azkaban",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 37,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg/220px-Harry_Potter_and_the_Prisoner_of_Azkaban.jpg"
    		],
    		[
    			'name' => "Harry Potter and Goblet of Fire",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/thumb/b/b6/Harry_Potter_and_the_Goblet_of_Fire_cover.png/220px-Harry_Potter_and_the_Goblet_of_Fire_cover.png"
			],
			[
    			'name' => "Harry Potter and Order of the Phoenix",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/220px-Harry_Potter_and_the_Order_of_the_Phoenix.jpg"
    		],
			[
    			'name' => "Harry Potter and Half-Blood Prince",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/Harry_Potter_and_the_Half-Blood_Prince_cover.png/220px-Harry_Potter_and_the_Half-Blood_Prince_cover.png"
    		],
			[
    			'name' => "Harry Potter and Deathly Hallows",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 200,
    			'image' => "https://upload.wikimedia.org/wikipedia/en/a/a9/Harry_Potter_and_the_Deathly_Hallows.jpg"
    		]
    	];

    	foreach ($products as $product) {
    		Product::create($product);
    	}

    }
}
