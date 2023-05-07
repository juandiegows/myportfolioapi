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
                "link_image" => "img/MediaSocial/FB.svg"
            ],
            [
                "name" => "GitHub",
                "link_image" => "img/MediaSocial/GitHub.svg"
            ],
            [
                "name" => "Instagram",
                "link_image" => "img/MediaSocial/Instagram.svg"
            ],
            [
                "name" => "Linked",
                "link_image" => "img/MediaSocial/Linked.svg"
            ],
            [
                "name" => "Twitter",
                "link_image" => "img/MediaSocial/twitter.svg"
            ],
            [
                "name" => "YouTube",
                "link_image" => "img/MediaSocial/YouTube.svg"
            ]
        ]);
    }
}