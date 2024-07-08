<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Array di categorie con le relative chiavi di traduzione
        $categories = [
            ['name' => 'Abbigliamento', 'translation_key' => 'clothing'],
            ['name' => 'Motori', 'translation_key' => 'motors'],
            ['name' => 'Elettronica', 'translation_key' => 'electronics'],
            ['name' => 'Libri e fumetti', 'translation_key' => 'books_and_comics'],
            ['name' => 'Cucina', 'translation_key' => 'kitchen'],
            ['name' => 'Immobili', 'translation_key' => 'properties'],
            ['name' => 'Arredamento', 'translation_key' => 'furniture'],
            ['name' => 'Videogiochi', 'translation_key' => 'videogames'],
            ['name' => 'Musica', 'translation_key' => 'music'],
            ['name' => 'Salute e bellezza', 'translation_key' => 'health_and_beauty'],
        ];

        // Creazione delle categorie nel database
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'translation_key' => $category['translation_key']
            ]);
        }
    }
}
