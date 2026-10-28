<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 /* @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $fakerID = \Faker\Factory::create('id_ID'); 
        $fakerEN = \Faker\Factory::create('en_US'); 
        $tittle = $fakerEN->sentence(mt_rand(5,12));
        return [
            'judul' => $tittle,
            'slug' => str::slug($tittle),
            'penulis' => $fakerID->name(),
            'konten' => $fakerEN->paragraph(mt_rand(3,6)),
        ];
    }
}
