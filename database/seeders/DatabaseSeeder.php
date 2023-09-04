<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_admin' => 1,
            'award_points' => 100,
        ]);

        DB::table('collections')->insert([
            'name' => 'BLACK®',
            'slug' => 'BLACK®',
        ]);

        DB::table('collections')->insert([
            'name' => 'WR.UP®',
            'slug' => 'WR.UP®',
        ]);

        DB::table('collections')->insert([
            'name' => 'N.O.W.®',
            'slug' => 'N.O.W.®',
        ]);

        DB::table('collections')->insert([
            'name' => 'SPORT AND LEISURE',
            'slug' => 'SPORT AND LEISURE',
        ]);

        DB::table('collections')->insert([
            'name' => '100% MADE IN ITALY',
            'slug' => '100% MADE IN ITALY',
        ]);

        DB::table('collections')->insert([
            'name' => 'BUSINESS',
            'slug' => 'BUSINESS',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '2',
            'name' => 'WR.UP® (RE)MOVE',
            'slug' => 'WR.UP® (RE)MOVE',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '2',
            'name' => 'WR.UP® CLASSIC',
            'slug' => 'WR.UP® CLASSIC',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '2',
            'name' => 'WR.UP® DENIM',
            'slug' => 'WR.UP® DENIM',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '2',
            'name' => 'WR.UP® FASHION',
            'slug' => 'WR.UP® FASHION',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '2',
            'name' => 'WR.UP® ECO LEATHER',
            'slug' => 'WR.UP® ECO LEATHER',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '2',
            'name' => 'WR.UP® SHORT PANTS',
            'slug' => 'WR.UP® SHORT PANTS',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'LEISURE',
            'slug' => 'LEISURE',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'TRACKSUITS',
            'slug' => 'TRACKSUITS',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'TIGHTS',
            'slug' => 'TIGHTS',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'FITNESS',
            'slug' => 'FITNESS',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'ENERGY',
            'slug' => 'ENERGY',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'SPORTS FOOTWEAR',
            'slug' => 'SPORTS FOOTWEAR',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'MENSWEAR',
            'slug' => 'MENSWEAR',
        ]);

        DB::table('categories')->insert([
            'collection_id' => '4',
            'name' => 'T-SHIRTS AND BODYSUITS',
            'slug' => 'EXTRAS',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '7',
            'name' => 'BODY-SHIRTS',
            'slug' => 'BODY-SHIRTS',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '7',
            'name' => 'JACKETS AND SWEATERS',
            'slug' => 'EXTRAS',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '7',
            'name' => 'YOGA',
            'slug' => 'YOGA',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '7',
            'name' => 'SHORT AND LONG PANTS',
            'slug' => 'SHORT AND LONG PANTS',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '10',
            'name' => 'TOPS',
            'slug' => 'TOPS',
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '10',
            'name' => 'SHOES',
            'slug' => 'SHOES',
        ]);

        DB::table('products')->insert([
            'collection_id' => '1',
            'name' => 'BIKE SHORTS',
            'slug' => 'BIKE SHORTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '53',
            'size' => 'S',
            'color' => 'beige',
            'length' => 'short',
            'waist' => 'medium',
            'code' => '2345',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '1',
            'name' => 'JEANS',
            'slug' => 'JEANS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '99',
            'size' => 'M',
            'color' => 'blue',
            'length' => '7/8',
            'waist' => 'higher',
            'code' => '6803',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
            'popular' => '1',
        ]);
        
        DB::table('products')->insert([
            'collection_id' => '1',
            'name' => 'TIGHTS',
            'slug' => 'TIGHTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '21',
            'size' => 'XL',
            'color' => 'pink',
            'length' => 'normal',
            'waist' => 'high',
            'code' => '5468',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
            'popular' => '1',
        ]);

        DB::table('products')->insert([
            'collection_id' => '1',
            'name' => 'PANTS',
            'slug' => 'PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '65',
            'size' => 'XXS',
            'color' => 'military',
            'length' => 'bicycle length',
            'waist' => 'medium',
            'code' => '25745',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '2',
            'category_id' => '2',
            'name' => 'SKIRT',
            'slug' => 'SKIRT',
            'featuredimage' => 'placeholder.jpg',
            'price' => '43',
            'size' => 'XS',
            'color' => 'black',
            'length' => 'short',
            'waist' => 'high',
            'code' => '2567',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '2',
            'category_id' => '2',
            'name' => 'PANTS',
            'slug' => 'PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '63',
            'size' => 'L',
            'color' => 'military',
            'length' => 'short',
            'waist' => 'high',
            'code' => '2567',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '2',
            'category_id' => '2',
            'name' => 'CARGO PANTS',
            'slug' => 'CARGO PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '84',
            'size' => 'L',
            'color' => 'grey',
            'length' => 'normal',
            'waist' => 'higher',
            'code' => '2653',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);


        DB::table('products')->insert([
            'collection_id' => '3',
            'name' => 'SHORTS',
            'slug' => 'SHORTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '88',
            'size' => 'XXS',
            'color' => 'pink',
            'length' => 'normal',
            'waist' => 'medium',
            'code' => '9783',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '3',
            'name' => 'SKIRT',
            'slug' => 'SKIRT',
            'featuredimage' => 'placeholder.jpg',
            'price' => '77',
            'size' => 'L',
            'color' => 'grey',
            'length' => '7/8',
            'waist' => 'higher',
            'code' => '6974',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '3',
            'name' => 'TIGHTS',
            'slug' => 'TIGHTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '39',
            'size' => 'M',
            'color' => 'military',
            'length' => '3/4',
            'waist' => 'high',
            'code' => '2257',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '4',
            'category_id' => '10',
            'subcategory_id' => '6',
            'name' => 'SKIRT',
            'slug' => 'SKIRT',
            'featuredimage' => 'placeholder.jpg',
            'price' => '100',
            'size' => 'M',
            'color' => 'black',
            'length' => 'normal',
            'waist' => 'higher',
            'code' => '8654',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '4',
            'category_id' => '10',
            'subcategory_id' => '6',
            'name' => 'BIKE SHORTS',
            'slug' => 'BIKE SHORTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '64',
            'size' => 'L',
            'color' => 'beige',
            'length' => '3/4',
            'waist' => 'high',
            'code' => '9754',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '4',
            'category_id' => '10',
            'subcategory_id' => '6',
            'name' => 'JEANS',
            'slug' => 'JEANS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '55',
            'size' => 'XL',
            'color' => 'blue',
            'length' => 'normal',
            'waist' => 'medium',
            'code' => '9585',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '5',
            'name' => 'PANTS',
            'slug' => 'PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '99',
            'size' => 'S',
            'color' => 'pink',
            'length' => '7/8',
            'waist' => 'medium',
            'code' => '5869',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '5',
            'name' => 'SKIRT',
            'slug' => 'SKIRT',
            'featuredimage' => 'placeholder.jpg',
            'price' => '84',
            'size' => 'M',
            'color' => 'military',
            'length' => 'bicycle length',
            'waist' => 'medium',
            'code' => '7564',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '5',
            'name' => 'JEANS',
            'slug' => 'JEANS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '59',
            'size' => 'XL',
            'color' => 'grey',
            'length' => 'short',
            'waist' => 'high',
            'code' => '6785',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '5',
            'name' => 'SHORTS',
            'slug' => 'SHORTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '55',
            'size' => 'XS',
            'color' => 'military',
            'length' => '3/4',
            'waist' => 'high',
            'code' => '4567',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);


        DB::table('products')->insert([
            'collection_id' => '6',
            'name' => 'CLOAK',
            'slug' => 'CLOAK',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => '2',
            'color' => '2',
            'length' => '1',
            'waist' => '2',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);


    }
}
