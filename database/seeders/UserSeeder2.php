<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::where('user_name', 'juandiegows')->first();
        $user->phone_number = '3013354669';
        $user->address = 'Colombia, La Guajira';
        $user->portfolio_link = 'https://juandiegows.com/';
        $user->english_level = 'A2';
        $user->spanish_professional_title = 'Analistas y Desarrollador de software';
        $user->professional_title = 'Analyst and Software Developer';
        $user->spanish_professional_profile = 'Desarrollador de aplicaciones web, escritorio, servicios web (API) y aplicaciones móviles para Android.
        Con conocimientos en pruebas, creación y manipulación de bases de datos, análisis de requerimientos y
        trabajo con metodologías ágiles, control de versiones y patrones de diseño. Cuento con más de 3 años
        de experiencia en el desarrollo, de los cuales puedo certificar 2 años. Descubre mi talento y potencial
        en mi portafolio, ¡te aseguro que no te arrepentirás de conocerme mejor! ';

        $user->professional_profile = 'Web, desktop, web services (API), and mobile applications developer for Android. 
        With knowledge in testing, creation and manipulation of databases, requirements analysis, and 
        working with agile methodologies, version control, and design patterns. I have over 3 years 
        of experience in development, of which I can certify 2 years. Discover my talent and potential 
        in my portfolio, I assure you that you won\'t regret getting to know me better!';

        $user->save();

    }
}
