<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Post_modelFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(5,10)),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(20,30))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(20,30)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => mt_rand(1,5),
            'kategori_id' => mt_rand(1,3)
        ];
    }
}
