<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = About::create([
           'about' => 'About Text'
        ]);
        $about->addMediaFromUrl('https://fastly.picsum.photos/id/430/200/300.jpg?hmac=souGSmvwQ6KlJgthGYBGSWB22Y7MpK5xlgLYwvtbXzg')->toMediaCollection('photo');
    }
}
