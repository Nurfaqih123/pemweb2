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
        $product = new \App\Product([
            'imagePath' => 'https://static.menutabapp.com/img/original/2015/04/02/3c7c1ccfbbd6002683b8a4ff019f4f95.jpeg',
            'title' => 'Caffè Americano',
            'description' => 'Caffè Americano is a style of coffee prepared by brewing espresso with added hot water, giving it a similar strength to, but different flavor from drip coffee.',
            'price' => 8
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/e/ed/Wet_Cappuccino_with_heart_latte_art.jpg',
            'title' => 'Cappuccino',
            'description' => 'Cappuccino is an Italian coffee drink that is traditionally prepared with double espresso, and steamed milk foam.',
            'price' => 9
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/10/5/1/FNM_110111-WN-Desserts-004_s4x3.jpg.rend.hgtvcom.616.462.suffix/1371600520701.jpeg',
            'title' => 'Affogato',
            'description' => 'Affogato is a coffee-based dessert. It usually takes the form of a scoop of vanilla gelato or ice cream topped or "drowned" with a shot of hot espresso.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://knowyourgrinder.com/wp-content/uploads/2016/02/flatwhite-coffee.jpg',
            'title' => 'Flat White',
            'description' => 'Flat White is an espresso-based coffee drink. It is prepared by pouring microfoam (steamed milk with small, fine bubbles with a glossy or velvety consistency) into a single or double shot of espresso.',
            'price' => 9
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Doppio_ristretto_Chiang_Mai.jpg/1200px-Doppio_ristretto_Chiang_Mai.jpg',
            'title' => 'Ristretto',
            'description' => 'Ristretto is traditionally a short shot of espresso coffee made with the normal amount of ground coffee but extracted with about half the amount of water in the same amount of time by using a finer grind.',
            'price' => 8
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://dessertswithbenefits.com/wp-content/uploads/2016/04/Healthy-Mocha-Mousse1.jpg',
            'title' => 'Caffè Mocha',
            'description' => 'Caffè Mocha is a chocolate-flavored variant of a caffè latte. Like a caffè latte, caffè mocha is based on espresso and hot milk, but with added chocolate, typically in the form of sweet cocoa powder, although many varieties use chocolate syrup.',
            'price' => 7
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://static1.squarespace.com/static/50e25057e4b0395512a28b45/t/50e7a422e4b0e6a1b5dfd867/1357358114906/Long+Black+or+Americano',
            'title' => 'Long Black',
            'description' => 'Long Black is a style of coffee, commonly found in Australia and New Zealand. A long black is made by pouring a double-shot of espresso or ristretto over hot water.',
            'price' => 9
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://pioneerwoman.files.wordpress.com/2013/06/iced3.jpg',
            'title' => 'Iced Coffee',
            'description' => 'Iced Coffee is cold coffee with ice. The iced latte and iced mocha are examples. There are various brewing methods, with the fundamental division being cold brew – brewing the coffee cold, yielding different flavor, but not requiring cooling.',
            'price' => 11
        ]);
        $product->save();
    }
}
