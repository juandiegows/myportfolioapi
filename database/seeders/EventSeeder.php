<?php
namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insertOrIgnore([
            [
                "title"               => "ICFES tests",
                "spanish_title"       => "pruebas ICFES",
                'date'                => '2017-12-07',
                'spanish_description' => 'En esta fecha se llevaron a cabo las pruebas ICFES. Aunque obtuve un puntaje decente de 302 y logré posicionarme en el tercer lugar de mi colegio, no fue suficiente para alcanzar una beca. Este momento marcó el inicio de mi vida adulta, enfrentándome a la realidad de querer ingresar a la universidad sin contar con los recursos económicos para costearla. Fue entonces cuando tomé la decisión de inscribirme en el SENA, una elección que dio inicio a una nueva etapa en mi historia.',
                'description'         => 'On this date, the ICFES tests took place. Although I achieved a decent score of 302 and ranked third in my school, it was not enough to earn a scholarship. This moment marked the beginning of my adult life, as I faced the reality of wanting to enter university without the financial means to afford it. That’s when I decided to enroll in SENA, a choice that marked the start of a new chapter in my story.',
                'url'                 => null,
                'type'                => 'text',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Entry to SENA",
                "spanish_title"       => "Ingreso al SENA",
                'date'                => '2018-02-15',
                'spanish_description' => 'El 15 de febrero de 2018, ingresé al SENA para estudiar el programa de Tecnólogo en Análisis y Desarrollo de Sistemas de Información. Aunque no era el camino que inicialmente había planeado, esta decisión fue clave para mi crecimiento personal y profesional. En el SENA, adquirí valiosos conocimientos en programación y desarrollo de software, habilidades que han sido fundamentales en mi carrera. Durante mi tiempo allí, tuve la fortuna de conocer a mi instructor, Yasser Pushaina, quien no solo me enseñó profundamente sobre programación y desarrollo, sino que también se convirtió en mi guía hacia una aventura que, en ese momento, no imaginaba que estaba a punto de comenzar.',
                'description'         => 'On February 15, 2018, I joined SENA to study the Technologist program in Analysis and Development of Information Systems. Although it was not the path I had initially planned, this decision was key to my personal and professional growth. At SENA, I gained valuable knowledge in programming and software development, skills that have been fundamental in my career. During my time there, I had the fortune to meet my instructor, Yasser Pushaina, who not only taught me deeply about programming and development but also became my guide for an adventure I had no idea I was about to embark on.',
                'url'                 => 'img/events/SENA-ADSI-JuanDiegoWS.jpg',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "SENASoft Competition",
                "spanish_title"       => "Competencia de SENASoft",
                'date'                => '2019-09-23',
                'spanish_description' => 'Esta fue la primera vez que monté en avión, viajando a Medellín para participar en la competencia de SENASoft. Competí en la categoría de bases de datos. Cabe destacar que el tiempo de preparación fue corto, ya que apenas estábamos empezando a aprender qué era una base de datos. Fue también la primera vez que experimenté la derrota. No nos fue tan bien, ya que la competencia era en parejas. Recuerdo pensar que esta experiencia sería una preparación para WorldSkills, pero saber que había perdido en una competencia nacional me hizo dudar de mi nivel. Sin embargo, mis pensamientos cambiaron: decidí que WorldSkills sería mi fortaleza y me esforzaría al máximo para no volver a experimentar la derrota.',
                'description'         => 'This was the first time I boarded a plane, traveling to Medellín to participate in the SENASoft competition. I competed in the database category. It is worth noting that the preparation time was short, as we were just beginning to learn what a database was. It was also the first time I experienced defeat. We didn’t do very well, as the competition was in pairs. I remember thinking that this experience would serve as preparation for WorldSkills, but knowing that I had lost in a national competition made me doubt my skills. However, my mindset changed: I decided that WorldSkills would be my strength, and I would give my best effort to never experience defeat again.',
                'url'                 => 'img/events/SENASoft-JuanDiegoWS.jpg',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],

            [
                "title"               => "WorldSkills 2021 - National Competition",
                "spanish_title"       => "WorldSkills 2021 - Competencia Nacional",
                'date'                => '2021-08-15',
                'spanish_description' => 'Este evento marcó el comienzo de todo lo que estaba por venir. La competencia nacional de WorldSkills 2021 fue un desafío que me permitió demostrar mis habilidades y conocimientos en programación. Antes de la final, se realizó una preselección entre más de 15 regionales, donde solo los cinco primeros avanzarían. Logré quedar en el primer lugar con una amplia ventaja representando a la Guajira, y sabía que debía seguir demostrando por qué merecía ese puesto. Al final de la competencia, obtuve el primer lugar, ganándome el privilegio de representar a Colombia en la categoría de Soluciones de Software para Negocios en China 2022.',
                'description'         => 'This event marked the beginning of everything that was to come. The WorldSkills 2021 national competition was a challenge that allowed me to demonstrate my skills and knowledge in programming. Before the final, a preselection was held among more than 15 regions, where only the top five would advance. I managed to secure first place with a significant lead representing La Guajira, and I knew I had to continue proving why I deserved that position. At the end of the competition, I earned first place, gaining the privilege of representing Colombia in the IT Software Solutions for Business category in China 2022.',
                'url'                 => 'img/events/juan-diego-worldskills-campeon-guajira.webp',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],

            [
                "title"               => "WorldSkills Chile - Guests",
                "spanish_title"       => "WorldSkills Chile - Invitados",
                'date'                => '2021-06-30',
                'spanish_description' => 'Esta fue la competencia nacional de WorldSkills para Chile, a la cual Colombia fue invitada. Se realizó de forma virtual y se trabajó en parejas. Mi compañero chileno y yo ocupamos el primer puesto, ganando la medalla de oro. Este fue un gran logro que nos ayudó a enfocarnos para la próxima competencia, WorldSkills América, que se celebraría en Guatemala.',
                'description'         => 'This was the national WorldSkills competition for Chile, to which Colombia was invited. It was held virtually and worked in pairs. My Chilean partner and I secured first place, winning the gold medal. This was a great achievement that helped us focus on the upcoming competition, WorldSkills Americas, which would take place in Guatemala.',
                'url'                 => 'https://certificados.discobolo.cl/47edc71b-11fa-4d65-81a5-1119837a49e2#acc.ofCHVFdr',
                'type'                => 'web',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "WorldSkills Americas 2021",
                "spanish_title"       => "WorldSkills América 2021",
                'date'                => '2021-09-08',
                'spanish_description' => 'Esta competencia iba a celebrarse en Guatemala, pero debido al COVID-19 tuvo que realizarse de manera virtual. Me fue bien en la competencia, aunque no logramos el oro y quedamos en segundo lugar, ganando la medalla de plata. Durante la competencia enfrenté muchos problemas con mi máquina, pero logré hacer el mejor trabajo posible con los recursos disponibles.',
                'description'         => 'This competition was supposed to take place in Guatemala, but due to COVID-19, it had to be held virtually. I performed well in the competition, although we didn’t secure the gold and ended up in second place, winning the silver medal. During the competition, I faced many issues with my machine but managed to do the best possible work with what I had.',
                'url'                 => 'img/events/Worldskill-america-JuanDiegoWS.jpg',
                'type'                => 'text',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Training in South Korea",
                "spanish_title"       => "Entrenamiento en Corea del Sur",
                'date'                => '2022-07-01',
                'spanish_description' => 'El equipo de Colombia viajó a Corea del Sur para un entrenamiento. Fueron dos semanas donde intercambiamos conocimientos y cultura. Tuve la oportunidad de conocer la empresa Samsung, que parecía una mini ciudad, la ciudad de Samsung. También aprovechamos para visitar algunos lugares, entre ellos el museo de guerra y otros lugares cuyos nombres no recuerdo.',
                'description'         => 'The Colombian team traveled to South Korea for training. It was two weeks where we exchanged knowledge and culture. I had the opportunity to visit Samsung, which felt like a mini city, the Samsung City. We also took the chance to visit some places, including the War Museum and other locations whose names I can’t recall.',
                'url'                 => 'img/events/Seoul Corea del Sur-JuanDiegoWS.webp',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "WorldSkills Special Edition 2022",
                "spanish_title"       => "WorldSkills Edición Especial 2022",
                'date'                => '2022-09-01',
                'spanish_description' => 'La competencia iba a realizarse en China, pero debido a un brote de COVID-19, el evento fue cancelado. Como solución, todos los países acordaron hacer una edición especial, por lo que nos tocó viajar nuevamente a Corea del Sur, mientras que otras habilidades se llevaron a cabo en otros países. En esta competencia nos fue bien, logrando ganar la medalla de excelencia, siendo la primera vez que esta habilidad obtiene dicho reconocimiento para Colombia.',
                'description'         => 'The competition was originally planned to take place in China, but due to a COVID-19 outbreak, the event was canceled. As a solution, all countries agreed to organize a special edition, so we had to travel again to South Korea, while other skills were held in different countries. In this competition, we performed well, earning the Medal of Excellence, the first time this skill received such recognition for Colombia.',
                'url'                 => 'https://www.youtube.com/live/R3oY3WtYt-Q?si=ZVLEczSE48x1nfoh&t=3640',
                'type'                => 'video',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "My First Job - 3Didácticos",
                "spanish_title"       => "Mi Primer Trabajo - 3Didácticos",
                'date'                => '2023-06-01',
                'spanish_description' => 'Después de tantas competencias, llegó el momento de comenzar mi vida laboral. Sin embargo, no fue tan fácil como esperaba, ya que competir no es lo mismo que trabajar en un ambiente laboral. Recibí muchas ofertas, pero muchas empresas prefieren contratar ingenieros en lugar de tecnólogos, o buscan trabajo presencial en lugar de remoto. A pesar de estos obstáculos, logré conseguir mi primer empleo en una empresa de desarrollo llamada 3Didácticos.',
                'description'         => 'After many competitions, it was time to begin my professional career. However, it wasn’t as easy as I had expected because competing is not the same as working in a professional environment. I received many offers, but many companies preferred to hire engineers over technologists or sought in-person work rather than remote. Despite these challenges, I managed to secure my first job at a development company called 3Didácticos.',
                'url'                 => null,
                'type'                => 'text',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Instructor at SENA",
                "spanish_title"       => "Instructor en el SENA",
                'date'                => '2023-07-01',
                'spanish_description' => 'Se esperaba que comenzara a trabajar en el SENA desde enero, pero surgieron varios inconvenientes que retrasaron el proceso. Finalmente, a mediados de año, empecé a desempeñarme como instructor en el SENA en Fonseca, La Guajira, enseñando programación a las futuras generaciones. A través de mi ejemplo, busco motivar a mis estudiantes a superarse y salir adelante.',
                'description'         => 'It was expected that I would start working at SENA in January, but several issues delayed the process. Finally, halfway through the year, I began working as an instructor at SENA in Fonseca, La Guajira, teaching programming to future generations. Through my example, I aim to inspire my students to strive for success and move forward.',
                'url'                 => 'https://www.youtube.com/watch?v=JwJIOTwDVH8',
                'type'                => 'video',
                'is_initial'          => true,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Joven Mérito Guajira",
                "spanish_title"       => "Joven Mérito Guajira",
                'date'                => '2023-09-01',
                'spanish_description' => 'La Alcaldía de La Guajira me otorgó un reconocimiento por destacar internacionalmente y ser representante de la región. Fue un evento agradable y significativo. Aunque llegó un poco tarde, un año después de todo lo sucedido, me alegró que se tomaran el tiempo para hacerlo.',
                'description'         => 'The Mayor\'s Office of La Guajira awarded me a recognition for standing out internationally and representing the region. It was a pleasant and meaningful event. Although it came a bit late, a year after everything that had happened, I was glad they took the time to acknowledge it.',
                'url'                 => 'img/events/Joven merito guajira - juandiegows.webp',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Preselection as Expert - Mobile Development",
                "spanish_title"       => "Preselección como Experto - Móviles",
                'date'                => '2023-07-20',
                'spanish_description' => 'Era momento de pasar de ser competidor a ser el experto que guiaría a un nuevo competidor. La Guajira decidió competir en cuatro competencias, cuando antes solo participábamos en una. Me alegró saber que pude motivar a otros a competir. Solo contaba con 20 días para preparar a mi competidor, pero logramos quedar en el cuarto puesto y clasificar a la final en Cúcuta. En las otras habilidades, dos quedaron en primer lugar y una pasó directamente sin competir.',
                'description'         => 'It was time to transition from being a competitor to becoming the expert who would guide a new competitor. La Guajira decided to compete in four competitions, whereas before we only participated in one. I was glad to know I inspired others to compete. With only 20 days to prepare my competitor, we managed to secure fourth place and qualify for the final in Cúcuta. In the other skills, two ranked first place, and one qualified directly without competing.',
                'url'                 => 'img/events/Preseleccion moviles Juandiegows.jpg',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Mobile Development Competition - Expert",
                "spanish_title"       => "Competencia de Móviles - Experto",
                'date'                => '2023-10-01',
                'spanish_description' => 'Por fin llegó la competencia nacional. El ambiente se sentía un poco pesado, pero estábamos dando todo. La presión de estar en una competencia fue muy fuerte y afectó a varios chicos. Mi competidor salió de la competencia y la dejó a la mitad. Entre los expertos teníamos una idea de cómo iban los participantes; sin temor a equivocarme, mi competidor ocupaba el tercer puesto si hubiera continuado. A pesar de ese amargo sabor de derrota, los chicos se llevaron una experiencia inolvidable y mucho aprendizaje.',
                'description'         => 'The national competition finally arrived. The atmosphere felt a bit intense, but we were giving it our all. The pressure of being in a competition was overwhelming and affected many participants. My competitor left the competition halfway through. Among the experts, we had a sense of how the participants were performing; without a doubt, my competitor would have secured third place if they had continued. Despite the bitter taste of defeat, the participants gained an unforgettable experience and valuable learning.',
                'url'                 => 'img/events/competencia moviles nacional - juandiegows experto.jpg',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Joining a Big Company",
                "spanish_title"       => "Ingreso a una Gran Empresa",
                'date'                => '2023-09-27',
                'spanish_description' => 'Ingresé a MetLife a través de un proveedor llamado Fisla. Trabajo para Fisla, pero mi labor es para MetLife. Espero poder crecer profesionalmente, escalar puestos y, en el futuro, trabajar directamente para la empresa. Se me brindó la oportunidad de trabajar directamente, pero me dijeron que no porque no era ingeniero y se requería un ingeniero para el puesto.',
                'description'         => 'I joined MetLife through a provider called Fisla. I work for Fisla, but my tasks are for MetLife. I hope to grow professionally, scale positions, and eventually work directly for the company. I was given the opportunity to work directly, but they declined because I am not an engineer, and the position required one.',
                'url'                 => null,
                'type'                => 'text',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "University Admission - Systems Engineering",
                "spanish_title"       => "Ingreso a la Universidad - Ingeniería de Sistemas",
                'date'                => '2024-02-01',
                'spanish_description' => 'Al ver que para muchas empresas era necesario ser ingeniero, decidí homologar y avanzar profesionalmente. Esta decisión me permitirá fortalecer mi base académica, abrir nuevas oportunidades laborales y, a largo plazo, acceder a roles más estratégicos en el ámbito tecnológico. Mi objetivo es combinar mi experiencia práctica con una sólida formación teórica para ofrecer soluciones más robustas y escalables en el campo de la tecnología y la programación. A través de esta carrera, espero aprender más sobre las tendencias actuales de la ingeniería de sistemas y estar preparado para enfrentar desafíos más grandes en mi carrera profesional.',
                'description'         => 'Seeing that many companies required being an engineer, I decided to transfer and advance professionally. This decision will allow me to strengthen my academic foundation, open new job opportunities, and in the long run, access more strategic roles in the tech field. My goal is to combine my practical experience with solid theoretical education to offer more robust and scalable solutions in technology and programming. Through this career, I hope to learn more about current trends in systems engineering and be ready to face bigger challenges in my professional journey.',
                'url'                 => null,
                'type'                => 'text',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],

            [
                "title"               => "Outstanding Young Person of La Guajira",
                "spanish_title"       => "Joven Sobresaliente de La Guajira",
                'date'                => '2024-07-01',
                'spanish_description' => 'Me dieron este reconocimiento por haber destacado en los años 2021 y 2022. Aunque llegó un poco tarde, me alegra seguir siendo una inspiración para algunos.',
                'description'         => 'I received this recognition for standing out in 2021 and 2022. Although it came a bit late, I am glad to continue being an inspiration to some.',
                'url'                 => 'img/events/JuanDiegows - TOYP GUAJIRA 2024.jpg',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                "title"               => "Interview on Radio Nacional",
                "spanish_title"       => "Entrevista en Radio Nacional",
                'date'                => '2022-10-26',
                'spanish_description' => 'En esta entrevista, hablé sobre mi participación como aprendiz del Sena en la competencia internacional WorldSkills Special Edition, que se celebró en Corea del Sur. Fui reconocido con la Medalla a la Excelencia por mi desempeño en las competencias de las TIC. Además, intenté compartir mi experiencia para animar a otros jóvenes a seguir sus sueños y esforzarse por alcanzar sus metas.',
                'description'         => 'In this interview, I talked about my participation as a Sena apprentice in the WorldSkills Special Edition international competition, held in South Korea. I was awarded the Medal of Excellence for my performance in the ICT competitions. I also tried to share my experience to encourage other young people to follow their dreams and strive to achieve their goals.',
                'url'                 => 'img/events/Entrevista_RadioNacional_2022.jpg',
                'type'                => 'image',
                'is_initial'          => false,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],

        ]);
    }
}
