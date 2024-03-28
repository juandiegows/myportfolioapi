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
        SocialMedia::insertOrIgnore([
            [
                "name" => "Facebook",
                "link_image" => "img/SocialMedia/FB.svg"
            ],
            [
                "name" => "GitHub",
                "link_image" => "img/SocialMedia/GitHub.svg"
            ],
            [
                "name" => "Instagram",
                "link_image" => "img/SocialMedia/Instagram.svg"
            ],
            [
                "name" => "Linked",
                "link_image" => "img/SocialMedia/Linked.svg"
            ],
            [
                "name" => "Twitter",
                "link_image" => "img/SocialMedia/twitter.svg"
            ],
            [
                "name" => "YouTube",
                "link_image" => "img/SocialMedia/YouTube.svg"
            ]
        ]);
    }
}
