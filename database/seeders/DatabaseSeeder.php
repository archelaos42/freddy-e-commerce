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
            'award_points' => 0,
            'password' => 'password',
            'is_admin' => 1,
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
            'name' => 'SHOES',
            'slug' => 'SHOES',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'XXS',
            'popular' => 1,
            'color' => 'red',
            'length' => 'bicycle length',
            'waist' => 'medium',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '2',
            'category_id' => '2',
            'name' => 'PANTS',
            'slug' => 'PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'XL',
            'color' => 'military',
            'length' => '7/8',
            'waist' => 'high',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);


        DB::table('products')->insert([
            'collection_id' => '3',
            'name' => 'SHIRT',
            'slug' => 'SHIRT',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'popular' => 1,
            'size' => 'M',
            'color' => 'pink',
            'length' => '3/4',
            'waist' => 'higher',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '4',
            'category_id' => '10',
            'subcategory_id' => '6',
            'name' => 'PANTS',
            'slug' => 'PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'S',
            'color' => 'black',
            'length' => 'normal',
            'waist' => 'medium',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '5',
            'name' => 'SHOES',
            'slug' => 'SHOES',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'XL',
            'color' => 'grey',
            'length' => 'short',
            'popular' => 1,
            'waist' => 'high',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);


        DB::table('products')->insert([
            'collection_id' => '6',
            'name' => 'PANTS',
            'slug' => 'PANTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'L',
            'color' => 'beige',
            'length' => 'normal',
            'waist' => 'medium',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '2',
            'name' => 'TIGHTS',
            'slug' => 'TIGHTS',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'M',
            'popular' => 1,
            'color' => 'blue',
            'length' => 'short',
            'waist' => 'higher',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '4',
            'name' => 'JACKET',
            'slug' => 'JACKET',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'XXS',
            'color' => 'pink',
            'length' => 'bicycle length',
            'waist' => 'high',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '1',
            'name' => 'SWEATER',
            'slug' => 'SWEATER',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'XS',
            'color' => 'black',
            'popular' => 1,
            'length' => '3/4',
            'waist' => 'high',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);

        DB::table('products')->insert([
            'collection_id' => '5',
            'name' => 'SHIRT',
            'slug' => 'SHIRT',
            'featuredimage' => 'placeholder.jpg',
            'price' => '23',
            'size' => 'S',
            'color' => 'military',
            'popular' => 1,
            'length' => '7/8',
            'waist' => 'medium',
            'code' => '2',
            'description' => 'Lorem ipsum or something',
            'quantity' => '20',
        ]);


    }
}
