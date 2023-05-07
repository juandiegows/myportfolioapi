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
        // $table->id();
        // $table->foreignIdFor(User::class)->constrained();
        // $table->foreignIdFor(SocialMedia::class)->constrained();
        // $table->string('link', 200)->unique();
        // $table->tinyInteger('is_principal')->default(1);
        SocialMediaUser::insert([
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