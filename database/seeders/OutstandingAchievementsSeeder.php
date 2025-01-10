<?php

namespace Database\Seeders;

use App\Models\OutstandingAchievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OutstandingAchievementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OutstandingAchievement::insertOrIgnore([
            [
                'name' => 'champion of worldskills colombia',
                'spanish_name' => 'Campeón de worldskills colombia',
                'link'=> 'https://diariodelnorte.net/sociales/juan-diego-mejia-maestre-el-aprendiz-del-sena-guajira-que-obtuvo-medalla-de-oro-en-worldskills-colombia/',
                'date' => '2021-01-01',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'champion of worldskills chile',
                'spanish_name' => 'Campeón de worldskills chile',
                'link'=> 'https://www.elinformador.com.co/index.php/region-caribe/77-la-guajira/266430-joven-guajiro-gana-medalla-de-oro-en-el-world-skills-chile',
                'date' => '2021-11-12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'runner-up of worldskills American',
                'spanish_name' => 'SubCampeón de worldskills America',
                'link'=> 'https://wsa.al.senai.br/es/colombia-entrega-medalhas-aos-vencedores-da-competicao-worldskills-americas-guatemala-2021/',
                'date' => '2022-01-03',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'medal of excellence in worldskills special edition',
                'spanish_name' => 'Medalla de excelencia worldskills special edition',
                'link'=>'https://www.radionacional.co/actualidad/personajes/joven-de-la-guajira-gano-medalla-la-excelencia-worldskills-special-edition',
                'date' => '2022-10-26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Medal for Young Guajiro Merit',
                'spanish_name' => 'Medalla al Joven mérito guajiro',
                'link'=>'https://www.linkedin.com/posts/juandiegows_recibimiento-de-la-medalla-al-m%C3%A9rito-al-joven-activity-7002331850455031808-C3QR/',
                'date' => '2023-01-03',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Outstanding Young Person from La Guajira',
                'spanish_name' => 'Joven Sobresaliente de la Guajira',
                'link'=>'https://www.instagram.com/p/C_gm4N7uzzj/',
                'date' => '2024-09-04',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
