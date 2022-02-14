<?php

namespace Database\Factories;

use App\Models\{Category, User};
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $title = $this->faker->sentence();
        $slug = Str::slug($title);
        return [
            // 'category_id' => Category::factory(),
            // 'user_id' => User::factory(),
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->text(),
            'body' => '<p>' . $this->faker->text(400) . '</p>',

        ];
    }
}
