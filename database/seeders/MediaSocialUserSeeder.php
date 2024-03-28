<?php

namespace Database\Seeders;

use App\Models\SocialMediaUser;
use Illuminate\Database\Seeder;

class MediaSocialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMediaUser::insertOrIgnore([
            [
                'user_id' => 1,
                'social_media_id' => 1,
                "link" => "https://web.facebook.com/juandiego.wsc/",
                "is_principal" => true
            ],
            [
                'user_id' => 1,
                'social_media_id' => 2,
                "link" => "https://github.com/juandiegows",
                "is_principal" => true
            ],
            [
                'user_id' => 1,
                'social_media_id' => 3,
                "link" => "https://www.instagram.com/juandiego.ws/",
                "is_principal" => true
            ],
            [
                'user_id' => 1,
                'social_media_id' => 4,
                "link" => "https://www.linkedin.com/in/juandiegows/",
                "is_principal" => true
            ],
            [
                'user_id' => 1,
                'social_media_id' => 5,
                "link" => "https://twitter.com/juandiegows",
                "is_principal" => true
            ],
            [
                'user_id' => 1,
                'social_media_id' => 6,
                "link" => "https://www.youtube.com/channel/UCBruvsN18FvqNHSHe7E6WWg",
                "is_principal" => true
            ],
        ]);
    }
}
