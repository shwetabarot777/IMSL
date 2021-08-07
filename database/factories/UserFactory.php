<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array'full_name',
        'username',
        'photo',
        'phone',
        'email',
        'password',
        'address',
        'role',
        'status'
     */
    public function definition()
    {
        $roles= $this->faker->randomElements(['admin','vendor','customer'])  ;
        $status=$this->faker->randomElements(['active','inactive']);
        return [
            'full_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password is password 
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'photo' => $this->faker->imageUrl('60','60'),
            'role' =>$roles[0] ,
           'status' => $status[0],
            
        ];
    }

   
}
