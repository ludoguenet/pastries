<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pastry;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->has(Pastry::factory(3)
                ->sequence(
                    [
                        'name' => 'Pain au chocolat',
                        'image_path' => 'pain_au_chocolat.jpg',
                        'description' => 'La pâtisserie française par excellence. A déclenché de nombreux conflits internes.',
                        'price_in_cents' => 185,
                        'delivered_at' => now(),
                    ],
                    [
                        'name' => 'Croissant',
                        'image_path' => 'croissant.jpeg',
                        'description' => 'Une pâtisserie française simple à base de beurre. N\'a déclenché aucune guerre.',
                        'price_in_cents' => 175,
                        'delivered_at' => now(),
                    ],
                    [
                        'name' => 'Paris Brest',
                        'image_path' => 'paris_brest.jpeg',
                        'description' => 'Une pâtisserie française de luxe. Plus cher forcément.',
                        'price_in_cents' => 220,
                        'delivered_at' => now(),
                    ],
                )
            )
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
    }
}
