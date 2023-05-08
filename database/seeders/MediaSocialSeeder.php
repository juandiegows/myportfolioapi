<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMedia::insert([
            [
                "name" => "Facebook",
                "link_image" => "img/FB.svg"
            ],
            [
                "name" => "GitHub",
                "link_image" => "img/GitHub.svg"
            ],
            [
                "name" => "Instagram",
                "link_image" => "img/Instagram.svg"
            ],
            [
                "name" => "Linked",
                "link_image" => "img/Linked.svg"
            ],
            [
                "name" => "Twitter",
                "link_image" => "img/twitter.svg"
            ],
            [
                "name" => "YouTube",
                "link_image" => "img/YouTube.svg"
            ]
        ]);
    }
}