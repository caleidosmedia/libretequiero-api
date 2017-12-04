<?php

use App\Animal;
use Illuminate\Database\Seeder;

class WSCAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Loros grandes y guacamayos
        $bird = Animal::where('scientific_name', 'Amazona amazonica')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Loro alinaranja, loro mejilla amarilla';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Amazona festiva')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Loro lomo rojo, loro vincha roja';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Amazona farinosa')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Ushpa loro, loro harinoso';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara militaris')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo militar, guacamayo verde';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara ararauna')->first();
        $bird->color = 'amarillo';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo azul y amarillo';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara chloropterus')->first();
        $bird->color = 'rojo';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo púrpura, guacamayo rojo y verde';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara macao')->first();
        $bird->color = 'rojo';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo escarlata, guacamayo rojo ';
        $bird->save();

        // Loros medianos y pequeños

        $bird = Animal::where('scientific_name', 'Pionus menstruus')->first();
        $bird->color = 'azul';
        $bird->grupo = 'loros-medianos-y-pequenos';
        $bird->common_name = 'Loro cabeza azul';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Aratinga weddellii')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-medianos-y-pequenos';
        $bird->common_name = 'Loro cabeza gris, loro cabeza negra, cotorra de cabeza oscura, “Pedrito”';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Brotogeris versicolurus')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-medianos-y-pequenos';
        $bird->common_name = 'Pihuicho ala amarilla, pihuicho ala blanca';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Brotogeris cyanoptera')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-medianos-y-pequenos';
        $bird->common_name = 'Pihuicho ala azul';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Brotogeris sanctithomae')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-medianos-y-pequenos';
        $bird->common_name = 'Pihuicho frente amarilla, perico tui';
        $bird->save();

        // Rapaces

        $bird = Animal::where('scientific_name', 'Parabuteo unicinctus')->first();
        $bird->color = 'cafe-oscuro';
        $bird->grupo = 'rapaces';
        $bird->common_name = 'Gavilán acanelado';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Falco peregrinus')->first();
        $bird->color = 'claro';
        $bird->grupo = 'rapaces';
        $bird->common_name = 'Halcón peregrino';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Falco femoralis')->first();
        $bird->color = 'claro';
        $bird->grupo = 'rapaces';
        $bird->common_name = 'Halcón perdiguero, halcón aplomado';
        $bird->save();

        //MAMIFEROS

        // Perezosos
        $mammal = Animal::where('scientific_name', 'Bradypus variegatus')->first();
        $mammal->grupo = 'perezosos';
        $mammal->common_name = 'Perezoso de tres dedos, pelejo';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Choloepus hoffmanni')->first();
        $mammal->grupo = 'perezosos';
        $mammal->common_name = 'Perezoso de dos dedos';
        $mammal->save();

        // Primates grandes y medianos
        $mammal = Animal::where('scientific_name', 'Ateles chamek')->first();
        $mammal->grupo = 'primtes-grandes-y-medianos';
        $mammal->common_name = 'Maquisapa, mono araña';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Ateles belzebuth')->first();
        $mammal->grupo = 'primtes-grandes-y-medianos';
        $mammal->common_name = 'Mono maquisapa de vientre amarillo o blanco';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Sapajus macrocephalus')->first();
        $mammal->grupo = 'primtes-grandes-y-medianos';
        $mammal->common_name = 'Mono machín negro';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Cebus albifrons')->first();
        $mammal->grupo = 'primtes-grandes-y-medianos';
        $mammal->common_name = 'Capuchino de frente blanca';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Lagothrix lagotricha')->first();
        $mammal->grupo = 'primtes-grandes-y-medianos';
        $mammal->common_name = 'Mono choro común, mono lanudo común';
        $mammal->save();

        // Primates pequeños
        $mammal = Animal::where('scientific_name', 'Aotus nigriceps')->first();
        $mammal->grupo = 'primates-pequenos';
        $mammal->common_name = 'Musmuqui, mono nocturno';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Saguinus mystax')->first();
        $mammal->grupo = 'primates-pequenos';
        $mammal->common_name = 'Mono tití bigotudo de pecho negro, mono pichico de bigote blanco';
        $mammal->save();

        // Felinos menores
        $mammal = Animal::where('scientific_name', 'Leopardus wiedii')->first();
        $mammal->grupo = 'felinos-menores';
        $mammal->common_name = 'Margay, Gato Montés';
        $mammal->save();

        $mammal = Animal::where('scientific_name', 'Leopardus pardalis')->first();
        $mammal->grupo = 'felinos-menores';
        $mammal->common_name = 'Tigrillo, ocelote';
        $mammal->save();

        // Coaties
        $mammal = Animal::where('scientific_name', 'Nasua nasua')->first();
        $mammal->grupo = 'coaties';
        $mammal->common_name = 'Achuni, coatí de cola anillada ';
        $mammal->save();

        //REPTILES REPTILIA
        // Serpientes

        // Iguanas

        //Caimanes
        $reptile = Animal::where('scientific_name', 'Caiman crocodilus')->first();
        $reptile->grupo = 'caimanes';
        $reptile->common_name = 'Caimán blanco, caimán de anteojos, lagarto blanco';
        $reptile->save();

        $reptile = Animal::where('scientific_name', 'Melanosuchus niger')->first();
        $reptile->grupo = 'caimanes';
        $reptile->common_name = 'Caimán negro';
        $reptile->save();

        // Tortugas terrestres
        $reptile = Animal::where('scientific_name', 'Chelonoidis denticulata')->first();
        $reptile->grupo = 'tortugas-terrestres';
        $reptile->common_name = 'Motelo de patas amarillas';
        $reptile->save();

        //Tortugas de río
        $reptile = Animal::where('scientific_name', 'Podocnemis expansa')->first();
        $reptile->grupo = 'tortugas-de-rio';
        $reptile->common_name = 'Charapa';
        $reptile->save();

        $reptile = Animal::where('scientific_name', 'Podocnemis unifilis')->first();
        $reptile->grupo = 'tortugas-de-rio';
        $reptile->common_name = 'Taricaya';
        $reptile->save();

        // AMPHIBIA
        $amphibia = Animal::where('scientific_name', 'Telmatobius culeus')->first();
        $amphibia->grupo = 'ranas';
        $amphibia->common_name = 'Rana del Titicaca';
        $amphibia->save();
    }
}
