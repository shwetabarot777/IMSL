<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $is_parent= $this->faker->randomElements([true,false]);
        $parent_id=$this->faker->randomElements([Category::pluck('id')->toArray()]);
         $status=$this->faker->randomElements(['active','inactive']);
        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->unique()->slug,
            'summary' => $this->faker->sentences(3,true), 
            'photo' => $this->faker->imageUrl('100','100'),
            'is_parent'=>$is_parent[0],
            'parent_id'=> $parent_id[0],
            'status'=>$status[0]
            
        ];
    }
}
 C:\xampp\htdocs\IMSL1\vendor\laravel\framework\src\Illuminate\Database\QueryException.php:57
      Illuminate\Support\Str::replaceArray("?", "insert into `categories` (`title`, `slug`, `summary`, `photo`, `is_parent`, `parent_id`, `status`, `updated_at`, `created_at`) values (?, ?, ?, ?, ?, ?, ?, ?, ?)")