<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $images = Storage::files('images/products');
        foreach ($images as $image) {
            factory(App\Product::class)->create([
                'image' => $image
            ]);
        }
    }
}
