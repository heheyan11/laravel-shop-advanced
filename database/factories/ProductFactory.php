<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "http://img10.360buyimg.com/mobilecms/s250x250_jfs/t1/81470/15/4431/123725/5d2870a0E441ac26b/4ead68cef6a635e3.png",
        "http://img11.360buyimg.com/mobilecms/s250x250_jfs/t1/63408/3/15265/201832/5dc931f0Ee059f877/851a9967d9835d0e.png",
        "http://img12.360buyimg.com/mobilecms/s250x250_jfs/t1/98557/25/1695/553743/5dc3d2a0Eed905132/f81d548a41fa80f3.png",
        "http://img13.360buyimg.com/mobilecms/s250x250_jfs/t1/93350/32/1757/150968/5dc510d2Ef01f6195/750fb99df4f2ba74.jpg",
        "http://img14.360buyimg.com/mobilecms/s250x250_jfs/t1/36474/28/2429/517543/5cb9743aE168ee756/c70039f29f10f6b7.jpg",
        "http://img11.360buyimg.com/mobilecms/s250x250_jfs/t1/63037/14/14847/153193/5dc3e504Eea577bac/833f2fd53780113c.jpg",
        "http://img14.360buyimg.com/mobilecms/s250x250_jfs/t1/90154/15/2318/202391/5dce4f9fE5f923656/71670b1ec4e9bb20.jpg",
        "http://img10.360buyimg.com/mobilecms/s250x250_jfs/t1/54331/37/15376/115150/5dc4f03eE75850d85/79479530307950da.jpg",
        "http://img13.360buyimg.com/mobilecms/s250x250_jfs/t1/94324/15/2382/131937/5dce49beE5199b79a/1d69e0571d28e9c2.jpg",
        "http://img14.360buyimg.com/mobilecms/s250x250_jfs/t1/64551/36/15421/202064/5dce6434E1ab5c1d8/883a648e6168378e.jpg",
    ]);
    $category = \App\Models\Category::query()->where('is_directory', false)->inRandomOrder()->first();

    return [
        'title'        => $faker->word,
        'long_title'   => $faker->sentence,
        'description'  => $faker->sentence,
        'image'        => $image,
        'on_sale'      => true,
        'rating'       => $faker->numberBetween(0, 5),
        'sold_count'   => 0,
        'review_count' => 0,
        'price'        => 0,
        'category_id'  => $category ? $category->id : null,
    ];
});
