<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $this->call(UsersTableSeeder::class);
        $product = new \App\Product([
            'imagePath' => 'images/img2.jpg',
            'title' => 'Advanced Networking',
            'description' => 'The ultimage beginners guide to computer networking',
            'price' => 15
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/img1.jpg',
            'title' => 'Head First Networking',
            'description' => 'The ultimage beginners guide to computer networking',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/img3.jpg',
            'title' => 'Computer Networking',
            'description' => 'The ultimage beginners guide to computer networking',
            'price' => 20
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/img4.jpg',
            'title' => 'Systems Approach to Networking',
            'description' => 'The ultimage beginners guide to computer networking',
            'price' => 15
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/img5.jpg',
            'title' => 'TCP/IP',
            'description' => 'The ultimage beginners guide to computer networking',
            'price' => 25
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/img1.jpg',
            'title' => 'Head First Networking',
            'description' => 'The ultimage beginners guide to computer networking',
            'price' => 10
        ]);
        $product->save();
    }
}
