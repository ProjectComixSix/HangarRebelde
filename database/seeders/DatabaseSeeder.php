<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Product::factory()->create([
            'title'  => 'EL IMPARABLE SPIDERMAN 01 (Serie bimestral)',
            'price'  => '3.33',
            'author'  => 'Chris Bachalo, Joe Kelly',
            'editorial'  => 'Panini Comics',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9770005619002',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic Marvel',
            'description' => '¡Un cómic no apto para cardiacos! Prepárate para la serie arácnida con mayores dosis de acción que nunca hayas leído. Como indica el título, una vez que leas la primera página, nada detendrá a Spiderman. Un misterio en la Universidad Empire State le llevará a lo largo del mundo, a pelear contra nuevos y viejos villanos del Universo Marvel.',
            'rating' => '3.5',
            'image1' => 'img/spiderman.jpg',
            'image2' => 'storage/img/spiderman.jpg',
            'image3' => 'storage/img/spiderman.jpg',
            'dateSale' => '1/7/2021',
            'format' => 'Tapa blanda',
            'pages' => '32',
            'tag' => ''
        ]);

        Product::factory()->create([
            'title'  => 'INVENCIBLE IRON MAN 02: INTERNACIONAL (Marvel Now! Deluxe)',
            'price'  => '22.80',
            'author'  => 'Alex Maleev, Brian Michael Bendis, Mike Deodato',
            'editorial'  => 'Panini Comics',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788411010184',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic Marvel',
            'description' => '¿Quién es en realidad Tony Stark? Después de que descubriera que fue adoptado, esta cuestión ha perseguido al hombre dentro de la armadura de Iron Man. Ahora, ha llegado el momento de descubrir cuál es su verdadero legado, en un viaje que llevará tanto al héroe como al hombre en insospechadas direcciones.',
            'rating' => '3.5',
            'image1' => 'storage/img/iron-man.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '19/8/2021',
            'format' => 'Tapa dura',
            'pages' => '240',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'STAR WARS: OBJETIVO VADER',
            'price'  => '16.10',
            'author'  => 'Varios autores',
            'editorial'  => 'Planeta Cómic',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788413416908',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic Marvel',
            'description' => 'El Señor Oscuro de los Sith pretende dar caza a un misterioso sindicato del crimen que opera más allá del alcance del Imperio. Lo que no sabe es que es objetivo, a su vez, de una serie de cazadores de recompensas, los más peligrosos de la galaxia, contratados por dicho sindicato para que se deshagan de él de una vez por todas.

            En este volumen se incluyen los números 1 a 6 de Star Wars: Objetivo: Vader, obra de Robbie Thompson, Stefano Landini, Cris Bolson, Marc Laming, Neeraj Menon, Andres Mossa, Erick Arciniega, Federico Blee y Jordan Boyd.',
            'rating' => '3.5',
            'image1' => 'storage/img/vader.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '6/7/2021',
            'format' => 'Tapa dura',
            'pages' => '144',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'LA SALVAJE HULKA 02: LA SAGA TERMINA (Marvel Limited Edition)',
            'price'  => '37.95',
            'author'  => 'John Buscema, Mike Vosburg, Stan Lee, Varios autores',
            'editorial'  => 'Panini Comics',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788416986965',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic Marvel',
            'description' => 'Después de que la abogada Jennifer Walters sea víctima de un tiroteo, su primo Bruce Banner salva su vida con una transfusión de sangre. ¡Será entonces cuando se transforme en la Salvaje Hulka!',
            'rating' => '3.5',
            'image1' => 'storage/img/hulka.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '12/8/2021',
            'format' => 'Tapa dura',
            'pages' => '320',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'EL INMORTAL HULK 02 (Marvel premiere)',
            'price'  => '9.50',
            'author'  => 'Al Ewing, Joe Bennett, Lee Garbett, Rafa Fonteriz',
            'editorial'  => 'Panini Comics',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788413349411',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic Marvel',
            'description' => 'El terror ha vuelto y ahora todo el mundo lo sabe. Bruce Banner trata de controlar el monstruo interior, mientras viejos amigos y enemigos lo persiguen, desde Los Vengadores a los misteriosos científicos de La Base Sombra, quienes tienen sus propios planes para Hulk... lo único que se interpone entre el mundo de los vivos y los terrores que esperan al otro lado de la Puerta Verde.',
            'rating' => '3.5',
            'image1' => 'storage/img/hulk.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '15/4/2021',
            'format' => 'Tapa dura',
            'pages' => '120',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'SUPERMAN 110 / 31',
            'price'  => '2.80',
            'author'  => 'Dave Wielgosz, Kenny Porter, Michael Moreci, Riley Rossmo, Scott Kolins, Thony Silas',
            'editorial'  => 'ECC Ediciones',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788418784392',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic DC',
            'description' => 'Dos historias autoconclusivas protagonizadas por el Último Hijo de Krypton. En la primera, Superman se enfrenta a Darkseid. El dictador loco de Apokolips está dispuesto a usar la ecuación de la Antivida en el corazón de Metropolis. En el segundo relato, el Hombre de Acero acaba peleando por su vida en una brutal arena de gladiadores, ¡con el mismísimo Lobo como invitado especial!',
            'rating' => '3.5',
            'image1' => 'storage/img/superman_110.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '3/8/2021',
            'format' => 'Grapa',
            'pages' => '32',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'WONDER WOMAN: SANGRE (Edición integral)',
            'price'  => '57.00',
            'author'  => 'Amilcar Pinna, Brian Azzarello, Cliff Chiang, Goran Sudzuka, Tony Akins',
            'editorial'  => 'ECC Ediciones',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788418475504',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic DC',
            'description' => 'Zeus ha desaparecido, el trono del Olimpo ha quedado vacante... y ha ocurrido lo inevitable. Sus posibles sucesores, empezando por su esposa Hera y su hermano Poseidón, se enzarzan en un conflicto repleto de conspiraciones, rencores, traiciones, venganza y celos. Y en medio de todo, se encuentra un bebé inocente que cuenta con una sola protectora: ¡Wonder Woman, la princesa de las amazonas! ¿Será capaz Diana de impedir que el mundo entero sucumba a los tejemanejes de los dioses?',
            'rating' => '3.5',
            'image1' => 'storage/img/wonder_woman.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '26/1/2021',
            'format' => 'Tapa dura',
            'pages' => '816',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'BATMAN / CATWOMAN 01 (De 12)',
            'price'  => '2.80',
            'author'  => 'Clay Mann, Tom King',
            'editorial'  => 'ECC Ediciones',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788418784101',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic DC',
            'description' => '¡La espera ha terminado! El guionista Tom King (Rorschach) y el dibujante Clay Mann (Héroes en Crisis) retoman la saga romántica de Batman y Catwoman en una de las miniseries del año. Tras los sucesos de la etapa de King en la serie Batman, este nuevo capítulo se desarrolla a lo largo de tres líneas temporales diferentes. El pasado, el presente y el futuro de la pareja se entremezcla en una trama en la que participan tres invitados de excepción: Helena Wayne, la Batwoman del futuro; el Joker y Andrea Beaumont, un antiguo amor de Bruce Wayne, más conocida como el Fantasma.',
            'rating' => '3.5',
            'image1' => 'storage/img/batman_catwoman.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '27/7/2021',
            'format' => 'Grapa',
            'pages' => '32',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'BATMAN DE TOM KING 11: DÍAS FRÍOS (Héroes en crisis parte 1)',
            'price'  => '18.95',
            'author'  => 'Joelle Jones, Mikel Janín, Tom King',
            'editorial'  => 'ECC Ediciones',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788418784491',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic DC',
            'description' => 'Con lo sucedido el día de su boda aún en la cabeza, Bruce Wayne se enfrenta a una situación atípica. Lo han elegido para que forme parte del jurado de un proceso cuyo acusado es nada menos que Mr. Frío. Su viejo enemigo afirma que debe salir en libertad porque Batman empleó un exceso de violencia cuando lo arrestó, pero solo hay un miembro de ese jurado que se plantea que sea verdad lo que dice el villano. Por su parte, Dick Grayson, el Robin original y actual Nightwing, ha regresado a Gotham City para retomar el contacto con su mentor. Y no podía ser en mejor momento...',
            'rating' => '3.5',
            'image1' => 'storage/img/batman.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '3/8/2021',
            'format' => 'Tapa dura',
            'pages' => '176',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'SUPERMAN: AÑO UNO (Edición integral)',
            'price'  => '24.70',
            'author'  => 'Frank Miller, John Romita Jr.',
            'editorial'  => 'ECC Ediciones',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788418382451',
            'categoryMain' => 'Comic Americano',
            'categorySecondary' => 'Comic DC',
            'description' => 'El superhombre que cayó en la Tierra.

            Mientras aprende a equilibrar las inmensas responsabilidades que conllevan sus poderes con sus ilimitadas posibilidades, Clark también debe cimentar su humanidad como todo el mundo: de relación en relación. Mejor que una aventura sobre superpoderes y más intenso que un relato sobre el paso a la vida adulta, Superman: Año uno es una exploración visceral de la importancia fundamental que tienen las decisiones tomadas en el viaje hacia el heroísmo de este icono estadounidense.',
            'rating' => '3.5',
            'image1' => 'storage/img/superman.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '27/10/2020',
            'format' => 'Tapa dura',
            'pages' => '224',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'MAGOS DEL HUMOR 207: LOS INFLUYENTES INFLUENCERS (SUPER LOPEZ)',
            'price'  => '14.16',
            'author'  => 'Jan',
            'editorial'  => 'Ediciones B',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788402424570',
            'categoryMain' => 'Comic Europeo',
            'categorySecondary' => 'Comic Español',
            'description' => 'Las aventuras de Superlópez y las influencers! Un par de chicas influencers viajan a la selva de Tanganika, región del Congo, a rodar películas para YouTube entre fieras y serpientes, pero desgraciadamente caerán en manos de una sociedad secreta de culto a las serpientes. Por suerte para ellas, Superlópez acudirá en su rescate. JAN es uno de los mejores autores del país, con una larga trayectoria editorial desde hace más de cuarenta y cinco años. Su serie más importante y popular es Superlópez, desde su primera aparición en 1973.',
            'rating' => '3.5',
            'image1' => 'storage/img/super_lopez_207.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '19/6/2021',
            'format' => 'Tapa dura',
            'pages' => '48',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'MAGOS DEL HUMOR 203: VIENTO EN LOS DEDOS (SUPERLOPEZ)',
            'price'  => '14.16',
            'author'  => 'Jan',
            'editorial'  => 'Ediciones B',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788402423337',
            'categoryMain' => 'Comic Europeo',
            'categorySecondary' => 'Comic Español',
            'description' => 'uperlópez y sus amigos intentan pasar unos días de vacaciones en Andorra coincidiendo con los planes de Boris I, que intenta erigirse en Rey de Andorra ayudado por un grupo de ninjas capitaneados por Lucas I, su nieto y por tanto sucesor directo. Pero un viejo y terrible enemigo se oculta todavía en las entrañas subterráneas de la isla y busca venganza...',
            'rating' => '3.5',
            'image1' => 'storage/img/super_lopez_203.jpg',
            'image2' => 'storage/img/super_lopez_203.jpg',
            'image3' => '',
            'dateSale' => '9/3/2020',
            'format' => 'Tapa dura',
            'pages' => '48',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'MAGOS DEL HUMOR 14: EL TONEL DEL TIEMPO (ZIPI Y ZAPE)',
            'price'  => '14.16',
            'author'  => 'Josep Escobar',
            'editorial'  => 'Bruguera',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788402422521',
            'categoryMain' => 'Comic Europeo',
            'categorySecondary' => 'Comic Español',
            'description' => 'En esta ocasión los hermanos Zipi y Zape crearán una máquina del tiempo, gracias a la cual podrán viajar a diferentes épocas de la historia, lo que les hará vivir situaciones muy diversas, en la Prehistoria, el antiguo Egipto, la Grecia clásica, la Roma de los césares, la Edad Media, el Renacimiento, la Francia de Luis XIII, el siglo XVIII, el tiempo presente y el futuro, en la más dinámica de sus aventuras.',
            'rating' => '3.5',
            'image1' => 'storage/img/zipi_zape_14.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '4/4/2019',
            'format' => 'Tapa dura',
            'pages' => '48',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'MAGOS DEL HUMOR 27: APRENDICES AL TUN TUN (ZIPI Y ZAPE)',
            'price'  => '14.16',
            'author'  => 'Josep Escobar',
            'editorial'  => 'Bruguera',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788402423634',
            'categoryMain' => 'Comic Europeo',
            'categorySecondary' => 'Comic Español',
            'description' => 'Al ver que Zipi y Zape suspenden en todas las asignaturas, don Pantuflo se desespera y les manda a aprender los oficios de barbero, camarero, peón de albañil, agricultor, dependiente de grandes almacenes, pintor, electricista, fotógrafo, bombero y fontanero. Pero, aunque su intención siempre es buena, les puede su carácter travieso e inconformista, por lo que todos sus esfuerzos acaban en desastre.',
            'rating' => '3.5',
            'image1' => 'storage/img/zipi_zape_27.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '14/12/2020',
            'format' => 'Tapa dura',
            'pages' => '48',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'MAGOS DEL HUMOR 18: EL GRAN SAFARI (ZIPI Y ZAPE)',
            'price'  => '14.16',
            'author'  => 'Josep Escobar',
            'editorial'  => 'Bruguera',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788402423559',
            'categoryMain' => 'Comic Europeo',
            'categorySecondary' => 'Comic Español',
            'description' => 'En la aventura El gran safari, toda la familia Zapatilla viajará hacia África porque han recibido un encargo del Zoo de la ciudad para capturar animales salvajes.
            Aunque lo intentan muchas veces, no logran su objetivo porque los animales se escapan o se les resisten. Pero al final resolverán la situación con mucha imaginación, entregando varios animales al Zoo.',
            'rating' => '3.5',
            'image1' => 'storage/img/zipi_zape_18.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '30/6/2020',
            'format' => 'Tapa dura',
            'pages' => '48',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'DRAGON BALL SUPER 57 (SERIE ROJA Nº 268)',
            'price'  => '2.80',
            'author'  => 'Akira Toriyama',
            'editorial'  => 'Planeta Cómic',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788413416601',
            'categoryMain' => 'Comic Manga',
            'categorySecondary' => '',
            'description' => 'La llegada de Gohan pone a Seven-Three contra las cuerdas, y es que el hijo de Goku, además de ser más fuerte que su maestro Piccolo, sabe contrarrestar sus técnicas, pero el rival se guarda un as en la manga: ¡también puede copiar las características de Moro!',
            'rating' => '3.5',
            'image1' => 'storage/img/dragon.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '14/7/2021',
            'format' => 'Tapa blanda',
            'pages' => '32',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'RANMA 1/2 (Edición integral) 19 (de 19)',
            'price'  => '14.20',
            'author'  => 'Rumiko Takahashi',
            'editorial'  => 'Planeta Cómic',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788416244768',
            'categoryMain' => 'Comic Manga',
            'categorySecondary' => '',
            'description' => '¡Un peligro terrible se cierne sobre los manantiales del Zhou Quan Xiang, en China, cuya historia se remonta a hace 4000 años! ¡Y es que si los manantiales se secan, Ranma y sus amigos nunca podrán librarse de la maldición que les hace transformarse! Así pues, Ranma y los demás se desplazan a China, ¡donde se enzarzan en una ardua batalla contra los hombres pájaro del monte Fénix!
            Por otra parte, Akane ha decidido seguir a Ranma... ¡y se ha convertido en una pequeña muñeca muda!',
            'rating' => '3.5',
            'image1' => 'storage/img/ranma.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '24/7/2018',
            'format' => 'Tapa blanda con sobrecubierta',
            'pages' => '360',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'POKÉMON SOL Y LUNA 01',
            'price'  => '8.55',
            'author'  => 'Hidenori Kusaka, Satoshi Yamamoto',
            'editorial'  => 'NORMA Editorial',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788467945416',
            'categoryMain' => 'Comic Manga',
            'categorySecondary' => '',
            'description' => '¡NUEVA MINISERIE DE POKÉMON, LA ADAPTACIÓN OFICIAL DE SUN & MOON!
            ¡Alola, cálido y alegre archipiélago situado en una región del sur! A este lugar, bendecido por una explosión de vivos colores gracias a una floración que nunca cesa, llega Luna, una joven farmacéutica con el cometido de entregar un Pokémon. En una playa se encontrará a Sol, un repartidor obsesionado con ahorrar cien millones...',
            'rating' => '3.5',
            'image1' => 'storage/img/pokemon.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '6/8/2021',
            'format' => 'Tapa blanda con solapas',
            'pages' => '180',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'KOMI-SAN NO PUEDE COMUNICARSE 02',
            'price'  => '13.30',
            'author'  => 'Tomohito Oda',
            'editorial'  => 'Ivréa',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788418837999',
            'categoryMain' => 'Comic Manga',
            'categorySecondary' => '',
            'description' => 'Hitohito Tadano acaba de empezar bachillerato anhelando que sea un período de paz y tranquilidad, pero sus planes se truncan cuando acaba sentado al lado de la perfecta Shoko Komi. Ella es guapa, inteligente, educada y hasta huele bien. Pero tiene 0 dotes sociales y no sabe cómo narices comunicarse con los demás. Es ahí cuando Tadano decide tomar cartas en el asunto y se propone ayudar a su compañera hasta que consiga cien amigos, y con suerte algo más.',
            'rating' => '3.5',
            'image1' => 'storage/img/komi-san.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '19/8/2021',
            'format' => 'Tapa blanda con sobrecubierta',
            'pages' => '400',
            'tag' => ''
        ]);
        Product::factory()->create([
            'title'  => 'MACBETH',
            'price'  => '17.10',
            'author'  => 'Crystal S. Chan, Julien Choy, William Shakespeare',
            'editorial'  => 'NORMA Editorial',
            'isAvailable'  => true,
            'canReserve' => true,
            'isbn' => '9788467945928',
            'categoryMain' => 'Comic Manga',
            'categorySecondary' => '',
            'description' => '¡REGRESA UNO DE LOS CLÁSICOS DE SHAKESPEARE EN FORMATO MANGA!
            Macbeth, fiel general de Duncan, comete un terrible acto de traición contra la corona y asesina a su monarca tras las maquiavélicas palabras de tres brujas que dicen prever el futuro y la instigación de su esposa. El remordimiento empieza a hacer mella en su consciencia y, paulatinamente, la línea entre la realidad y la imaginación se vuelve difusa... ¿Qué destino le depara a un reino cuyo soberano se ha alzado al trono con las manos manchadas de sangre?',
            'rating' => '3.5',
            'image1' => 'storage/img/machbeth.jpg',
            'image2' => '',
            'image3' => '',
            'dateSale' => '6/8/2021',
            'format' => 'Tapa blanda con solapas',
            'pages' => '320',
            'tag' => ''
        ]);

    }
}
