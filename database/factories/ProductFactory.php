<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->word($nd = 2, $asText = true);
        $slug = Str::slug($product_name);
        return [
            //
            'name'=>$product_name,
            'slug'=>$slug,
            'short_description'=>$this->faker->text(200),
            'desription'=>$this->faker->text(500),
            'regular_price'=>$this->faker->numberBetween(500,1500),
            'SKU'=>'DIGI'.$this->faker->numberBetween(100,300),
            'stock_status'=>'instock',
            'quentity'=>$this->faker->numberBetween(10,100),
            'image'=>'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg',
            'category_id'=>$this->faker->numberBetween(1,6),
        ];
    }
}
