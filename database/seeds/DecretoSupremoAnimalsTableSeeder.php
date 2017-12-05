<?php

use App\Animal;
use Illuminate\Database\Seeder;
use App\LibreTeQuiero\WikimediaImageFinder;

class DecretoSupremoAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Animales no encontrados en la UICN
        // Tingomaria hydrophila
        // Peltocephalus dumeriliana
        // Altinote rubrocellulata
        // Bostryx aguilari
        // Caloctenus oxapampa
        // Charinus koepckei
        // Dynastes neptunus
        // Megalobulimus lichtensteini
        // Orobothriurus atiquipa
        // Bryophryne abramalagae
        // Centrolene fernandoi
        // Melanophryne carpish
        // Oreobates machiguenga
        // Phyllomedusa baltea
        // Poospiza alticola
        // Thalassarche melanophrys
        // Thripophaga berlepschi
        // Alouatta palliata aequatorialis
        // Artibeus ravus
        // Chaetophractus nationi
        // Leopardus jacobitus
        // Marmosa phaeus
        // Oxymycterus juliacae
        // Boa constrictor ortonii
        // Bothrops roedingeri
        // Chelonia mydas agassizzii
        // Petracola waka
        // Phyllodactilus angustidigitus
        // Proctoporus pachyurus
        // Sternocercus modestus
        // Bostryx scalariformis
        // Dynastes hercules
        // Macrodontia itayensis
        // Megasoma actaeon
        // Oroperipatus koepckei
        // Oroperipatus omeyrus
        // Oroperipatus peruvianus
        // Pamphobeteus antinous
        // Pycnotropis unapi
        // Thrinoxethus junini
        // Titanus giganteus
        // Melanophryne barbatula
        // Pristimantis leucorrhynus
        // Buthraupis aureodorsalis
        // Buthraupis wetmorei
        // Dendroica cerulea
        // Hemispingus rufosuperciliaris
        // Hylocryptus erythrocephalus
        // Myrmeciza griseiceps
        // Oceanodroma markhami
        // Onychorhynchus coronatus occidentalis
        // Primolius coulonii
        // Puffinus creatopus
        // Siptornopsis hypochondriaca
        // Sporagra siemiradzkii
        // Alouatta seniculus
        // Dynomis branickii
        // Marmosa simonsi
        // Myrmecophaga trydactila
        // Otaria flavescens
        // Bothrops andianus
        // Bothrops barnetti
        // Bothrops pictus
        // Ctenoblepharis adspersa
        // Chelonoidis carbonaria
        // Dicrodon holmbergi
        // Liolaemus tacnae
        // Liolaemus poconchiloensis
        // Mesoclemmys heliostemma
        // Microlophus quadivittatus
        // Petracola ventrimaculatus
        // Ameerega yoshina
        // Aratinga erythrogenys
        // Campylorhamphus pucherani
        // Leptasthenura yanacensis
        // Oreomanes fraseri
        // Phalacrocorax bougainvillii
        // Tumbezia salvini
        // Cuniculus taczanowski
        // Amphisbaena slateri
        // Callopistes flavipunctatus
        // Sibynomorphus williamsi
        // Liophis problematicus
        // Altigius alios

        // Categoria CR

        $animals = [
            'Tingomaria hydrophila “opilión”',
            'Sulcophanaeus actaeon “pelotero verde”, “acatanka”',
            'Ameerega planipaleae “rana venenosa de Oxapampa”',
            'Atelopus andinus',
            'Atelopus dimorphus',
            'Atelopus epikeisthos',
            'Atelopus erythropus “sapo de talones Carabaya”',
            'Atelopus eusebiodiazi',
            'Atelopus pachydermus “sapo de talones de Schmidt”',
            'Atelopus patazensis',
            'Atelopus peruensis “sapo de talones Perú”',
            'Atelopus pyrodactylus',
            'Atelopus reticulatus',
            'Cochranella euhystrix',
            'Gastrotheca ochoai “rana marsupial de Chilca”',
            'Gastrotheca zeugocystis',
            'Hypodactylus lucida “rana andina de Cannatella”',
            'Oreobates pereger “rana andina de Ayacucho”',
            'Phrynopus dagmarae',
            'Phrynopus heimorum',
            'Phrynopus juninensis “rana andina de Junín”',
            'Phrynopus kauneorum',
            'Phrynopus tautzorum',
            'Pristimantis chimu',
            'Pristimantis pinguis',
            'Pristimantis simonsii “rana”',
            'Rhinella chavin',
            'Telmatobius arequipensis “rana de Arequipa”',
            'Telmatobius brevirostris “rana altoandina acuática”',
            'Telmatobius culeus “rana del Titicaca”',
            'Telmatobius mayoloi',
            'Telmatobius mendelsoni “rana altoandina acuática”',
            'Telmatobius punctatus “rana altoandina acuática”',
            'Telmatobius sanborni',
            'Telmatobius timens “rana altoandina acuática”',
            'Cinclodes aricomae “churrete real”',
            'Cinclodes palliatus “churrete de vientre blanco”',
            'Crax globulosa “paujil carunculado”',
            'Grallaria ridgelyi “tororoi jocotoco”',
            'Laterallus jamaicensis “gallineta negra”',
            'Pauxi koepckeae “paujil del Sira”',
            'Penelope albipennis “pava de ala blanca”',
            'Phoebastria irrorata “albatros de las Galápagos”',
            'Podiceps taczanowskii “zambullidor de Junín”',
            'Polioptila guianensis “perlita de Iquitos”',
            'Pterodroma phaeopygia “petrel de las Galápagos”',
            'Rhea pennata “suri”, “ñandú petizo“',
            'Taphrolesbia griseiventris “cometa de vientre gris”',
            'Thalassarche eremita “albatros de Chatham”',
            'Sterna hirundinacea “gaviotín sudamericano”',
            'Callicebus oenanthe “tocón”',
            'Cryptotis peruviensis “musaraña de orejas cortas peruana”',
            'Ctenomys leucodon “tuco - tuco de dientes blancos”',
            'Lama guanicoe “guanaco”',
            'Melanomys zunigae “ratón arrocero de Zuñiga”',
            'Mimon koepckeae “murciélago de hoja nasal peluda de Koepcke”',
            'Mormopterus phrudus “murciélago de cola libre incaico”',
            'Oreonax flavicauda “mono choro cola amarilla”',
            'Rhipidomys ochrogaster “rata trepadora de vientre ocre”',
            'Tapirus pinchaque “pinchaque”',
            'Eretmochelys imbricata “tortuga carey”',
            'Crocodylus acutus “cocodrilo de Tumbes”',
            'Peltocephalus dumeriliana “guacamayo charapa”',
            'Phyllodactylus sentosus “saltojo”',
        ];

        $this->updateAnimals($animals, 'CR');

        // Categoria EN

        $animals = [
            'Altinote rubrocellulata “mariposa”',
            'Bostryx aguilari',
            'Caloctenus oxapampa “araña”',
            'Charinus koepckei “araña látigo”',
            'Dynastes neptunus “escarabajo torito”',
            'Megalobulimus lichtensteini “congompe”',
            'Orobothriurus atiquipa “alacrán”',
            'Ameerega silverstonei “rana venenosa de Silverstone”',
            'Atelopus oxapampae',
            'Atelopus pulcher',
            'Atelopus seminiferus “sapo del Alto Amazonas”',
            'Atelopus tricolor “sapo arlequín de tres colores”',
            'Bryophryne abramalagae',
            'Bryophryne bustamantei',
            'Bryophryne cophites “rana andina de Cusco”',
            'Bryophryne zonalis “rana de cristal”',
            'Centrolene azulae “rana de cristal”',
            'Centrolene fernandoi “rana de cristal”',
            'Centrolene hesperium “rana gigante de cristal de campamento base”',
            'Excidobates mysteriosus “rana venenosa de Marañón”',
            'Gastrotheca stictopleura',
            'Hyloxalus azureiventris “rana venenosa azul cielo”',
            'Hyloxalus elachyhistus “rana cohete Loja”',
            'Lynchius parkeri “rana altoandina de Parker”',
            'Melanophryne carpish',
            'Nymphargus mariae “rana gigante de cristal de María”',
            'Oreobates amarakaeri',
            'Oreobates lehri',
            'Oreobates machiguenga',
            'Phrynopus bracki “rana andina de Brack”',
            'Phrynopus montium “rana andina de Cascas”',
            'Phyllomedusa baltea “rana de hojas de cara púrpura”',
            'Pristimantis coronatus',
            'Pristimantis cosnipatae “rana ladrona del Río Cosnipata”',
            'Pristimantis cryptomelas “rana ladrona críptica”',
            'Pristimantis proserpens “rana ladrona sapote”',
            'Pristimantis rhodoplichus “rana ladrona Canchaque”',
            'Psychrophrynella boettgeri',
            'Psychrophrynella usurpator',
            'Ranitomeya summersi',
            'Rhinella nesiotes “sapo Laguna”',
            'Rhinella vellardi “sapo del Alto Marañon”',
            'Rulyrana saxiscandens “rana de Tarapoto”',
            'Telmatobius brachydactylus “rana María amable”',
            'Telmatobius brevipes “rana acuática de Huamachuco”',
            'Telmatobius ignavus “rana acuática de Piura”',
            'Telmatobius latirostris “rana acuática de Cajamarca”',
            'Telmatobius macrostomus “rana del Lago de Junín”',
            'Telmatobius truebae “rana acuática de Trueb”',
            'Anairetes alpinus “torito de pecho cenizo”',
            'Atlapetes melanopsis “matorralero de anteojos negros”',
            'Aulacorhynchus huallagae “tucancillo de Ceja Amarilla”',
            'Brotogeris pyrrhoptera “perico de mejilla gris”',
            'Euchrepomis sharpei “hormiguerito de lomo amarillo”',
            'Grallaricula ochraceifrons “tororoi de frente ocrácea”',
            'Herpsilochmus parkeri “hormiguerito de garganta ceniza”',
            'Leptasthenura xenothorax “tijeral de ceja blanca”',
            'Lipaugus uropygialis “piha ala de cimatarra”',
            'Loddigesia mirabilis “colibrí cola de espátula”',
            'Netta erythrophthalma “pato morado”',
            'Pachyramphus spodiurus “cabezón pizarroso”',
            'Pelecanus thagus “pelícano Peruano”',
            'Phalacrocorax gaimardi “cormorán de pata roja”',
            'Phytotoma raimondii “cortarrama Peruana”',
            'Poospiza alticola “monterita de cola simple”',
            'Poospiza rubecula “monterita de pecho rufo”',
            'Pseudastur occidentalis “gavilán de Dorso Gris”',
            'Rollandia microptera “zambullidor del Titicaca”',
            'Spheniscus humboldti “pingüino de Humboldt”',
            'Sternula lorata “gaviotín Peruano”',
            'Sula granti “piquero de Nazca”',
            'Sula variegata “piquero Peruano”',
            'Synallaxis tithys “cola espina de cabeza negruzca”',
            'Synallaxis zimmeri “cola-espina de vientre rojizo”',
            'Thalassarche melanophrys “albatros de ceja negra”',
            'Thripophaga berlepschi “cola-suave de manto rojizo”',
            'Vultur gryphus “cóndor andino”',
            'Xenoglaux loweryi “lechucita bigotona”',
            'Akodon fumeus “ratón campestre ahumado”',
            'Alouatta palliata aequatorialis “mono coto negro”',
            'Amorphochilus schnablii “murciélago ahumado”',
            'Arctocephalus australis “lobo marino fino”',
            'Artibeus ravus “murcielaguito frugívoro occidental”',
            'Ateles belzebuth “mono araña de vientre amarillo”',
            'Ateles chamek “maquisapa”',
            'Ctenomys peruanus “tuco - tuco peruano”',
            'Cuscomys oblativa “rata chinchilla arborícola de Machu Picchu”',
            'Chaetophractus nationi “quirquincho andino”',
            'Cynomops greenhalli “murciélago cara de perro de Greenhall”',
            'Galenomys garleppi “ratón orejón de Gerlepp”',
            'Lagothrix cana “mono lanudo gris”',
            'Lagothrix lagotricha “mono choro común”',
            'Leopardus jacobitus “gato montés”, “gato andino”',
            'Lontra felina “gato marino”, “chingungo”, “huallaque”',
            'Marmosa andersoni “comadrejita marsupial de Anderson”',
            'Marmosops juninensis “comadrejita marsupial de Junín”',
            'Marmosa phaeus “raposa chica lanuda”',
            'Mazama rufina “venado enano ecuatoriano”',
            'Mesomys leniceps “rata espinosa áspera peruana”',
            'Monodelphis osgoodi “colicorto marsupial de Osgood”',
            'Oxymycterus juliacae “ratón hocicudo de Puno”',
            'Phyllotis definitus “raton orejón definido”',
            'Platalina genovensium “murciélago longirostro peruano”',
            'Platyrrhinus angustirostris “murciélago esbelto de hocico ancho”',
            'Platyrrhinus matapalensis “murciélago de nariz ancha de Matapalo”',
            'Pteronura brasiliensis “lobo de río”',
            'Rhogeessa velilla “murciélago amarillo pequeño de alas negras”',
            'Saguinus labiatus “pichico de barriga anaranjada”',
            'Sturnira nana “murciélago frugívoro enano”',
            'Thomasomys rosalinda “ratón montaraz rosalinda”',
            'Boa constrictor ortonii “boa de costa”',
            'Bothrops roedingeri “sancarranca”',
            'Caretta caretta “tortuga boba”',
            'Chelonia mydas agassizzii “tortuga verde”',
            'Dermochelys coriacea “tortuga de mar gigante”',
            'Liolaemus insolitus “lagartija”',
            'Paleosuchus palpebrosus “lagarto”',
            'Petracola waka',
            'Podocnemis expansa “charapa”',
            'Phyllodactilus angustidigitus “salamanqueja”',
            'Proctoporus pachyurus “llaullicanchu”',
            'Sternocercus modestus “lagartija”',
        ];

        $this->updateAnimals($animals, 'EN');

        $animals = [
            'Argia inculta “caballito del diablo”',
            'Bostryx scalariformis',
            'Dynastes hercules “escarabajo hércules”, “mao”',
            'Erythrodiplax cleopatra “libélula”',
            'Macrodontia cervicornis “escarabajo longicornio”',
            'Macrodontia itayensis “escarabajo longicornio”',
            'Megasoma actaeon “escarabajo torito”, “tomboso”',
            'Oroperipatus koepckei “gusano aterciopelado”, “onicóforo”',
            'Oroperipatus omeyrus “gusano aterciopelado”, “onicóforo”',
            'Oroperipatus peruvianus “gusano aterciopelado”, “onicóforo”',
            'Pamphobeteus antinous “tarántula”',
            'Pycnotropis unapi “milpiés”',
            'Thrinoxethus junini “milpiés”',
            'Titanus giganteus “escarabajo gigante”',
            'Bryophryne gymnotis',
            'Centrolene buckleyi “rana gigante de cristal de Buckley”',
            'Centrolene muelleri “rana gigante de cristal de Muller”',
            'Ceratophrys stolzmanni “rana cornuda de Stolzmann”',
            'Excidobates captivus “rana venenosa del Río Santiago”',
            'Hyloscirtus armatus “rana de árbol armada”',
            'Hyloscirtus phyllognathus “rana de quebrada”',
            'Leptodactylus pascoensis',
            'Lithobates bwana “rana del Río Chipillico”',
            'Lynchius flavomaculatus “rana andina amarillo punteada”',
            'Melanophryne barbatula',
            'Nannophryne corynetes “sapo del Abra Málaga”',
            'Nymphargus pluvialis',
            'Phrynopus barthlenae',
            'Phrynopus horstpauli',
            'Phrynopus miroslawae',
            'Phrynopus nicoleae',
            'Pristimantis bromeliaceus “rana ladrona de bromelias”',
            'Pristimantis ceuthospilus “rana ladrona de Wild”',
            'Pristimantis colodactylus “rana ladrona de Piura”',
            'Pristimantis condor “rana ladrona Cóndor”',
            'Pristimantis cordovae',
            'Pristimantis incomptus “rana ladrona Santa Rosa”',
            'Pristimantis leucorrhynus',
            'Pristimantis nephophilus',
            'Pristimantis pataikos',
            'Pristimantis rhodostichus',
            'Pristimantis schultei “rana ladrona de Schulte”',
            'Pristimantis serendipitus',
            'Pristimantis sternothylax “rana ladrona de Huancabamba”',
            'Pristimantis ventriguttatus',
            'Pristimantis versicolor “rana ladrona Loja”',
            'Pristimantis wiensi “rana ladrona de Wiens”',
            'Psychrophrynella bagrecito “rana andina bagrecito”',
            'Psychrophrynella wettsteini “rana andina de Wettstein”',
            'Ranitomeya benedicta',
            'Rhinella festae “sapo hocicudo Río Santiago”',
            'Rhinella manu',
            'Rhinella veraguensis “sapo Veragua”',
            'Rhinella yanachaga',
            'Telmatobius degener “rana acuática de Ancash”',
            'Telmatobius jelskii “rana acuática Acancocha”',
            'Telmatobius marmoratus “rana acuática jaspeada”',
            'Telmatobius peruvianus “rana acuática Perú”',
            'Telmatobius thompsoni “rana acuática de Thompson”',
            'Aburria aburri “pava carunculada”',
            'Accipiter collaris “gavilán semiacollarado”',
            'Aglaeactis aliciae “rayo de sol de dorso púrpura”',
            'Agriornis albicauda “arriero de cola blanca”',
            'Ara militaris “guacamayo militar”',
            'Attila torridus “atila ocráceo”',
            'Atlapetes terborghi “matorralero de Vilcabamba”',
            'Buteogallus anthracinus “gavilán cangrejero”',
            'Buthraupis aureodorsalis “tangara de montaña de dorso dorado”',
            'Buthraupis wetmorei “tangara-de-Montaña Enmascarada”',
            'Capito wallacei “barbudo de franja escarlata”',
            'Conirostrum tamarugense “pico de cono de los tamarugales”',
            'Coryphaspiza melanotis “pinzón enmascarado”',
            'Crypturellus casiquiare “perdiz barrada”',
            'Crypturellus duidae “perdiz de Pata Gris”',
            'Dendroica cerulea “reinita cerúlea”',
            'Diomedea epomophora “albatros real”',
            'Doliornis sclateri “cotinga de subcaudales bayas”',
            'Forpus xanthops “periquito de cara amarilla”',
            'Fulica rufifrons “gallareta de frente roja”',
            'Galbula pastazae “jacamar de pecho cobrizo”',
            'Hapalopsittaca melanotis “loro de ala negra”',
            'Hapalopsittaca pyrrhops “loro de cara roja”',
            'Harpia harpyja “águila harpía”',
            'Heliangelus regalis “ángel del sol real”',
            'Hemispingus rufosuperciliaris “hemispingo de ceja rufa”',
            'Hylocryptus erythrocephalus “hoja-rasquero de capucha rufa”',
            'Incaspiza ortizi “fringilo-Inca de ala gris”',
            'Incaspiza watkinsi “fringilo Inca chico”',
            'Larosterna inca “gaviotín zarcillo”',
            'Lathrotriccus griseipectus “mosquerito de pecho gris”',
            'Leptosittaca branickii “perico de mejilla dorada”',
            'Leptotila ochraceiventris “paloma de vientre ocráceo”',
            'Morphnus guianensis “águila crestada”',
            'Mitu salvini “paujil de Salvin”',
            'Myrmeciza griseiceps “hormiguero de cabeza gris”',
            'Myiarchus semirufus “copetón rufo”',
            'Neochen jubata “ganso del Orinoco”',
            'Neopelma chrysocephalum “saltarín tirano de cresta azafrán”',
            'Nothoprocta taczanowskii “perdiz de Taczanowski”',
            'Nyctibius leucopterus “nictibio de ala blanca”',
            'Oceanodroma markhami “golondrina de Mar de Markham”',
            'Ochthoeca piurae “pitajo de Piura”',
            'Onychorhynchus coronatus occidentalis “mosquero real”',
            'Ortalis erythroptera “chachalaca de cabeza rufa”',
            'Patagioenas oenops “paloma Peruana”',
            'Pelecanoides garnotii “potoyunco Peruano”',
            'Penelope barbata “pava barbada”',
            'Percnostola arenarum “hormiguero de Allpahuayo”',
            'Phacellodomus dorsalis “espinero de dorso castaño”',
            'Phoenicoparrus andinus “parina grande”',
            'Phoenicoparrus jamesi “parina chica”',
            'Picumnus steindachneri “carpinterito de pecho jaspeado”',
            'Pithys castaneus “hormiguero de máscara blanca”',
            'Primolius coulonii “guacamayo de cabeza azúl”',
            'Procellaria aequinoctialis “petrel de mentón blanco”',
            'Procellaria parkinsoni “petrel de Parkinson”',
            'Procellaria westlandica “petrel de Westland”',
            'Progne murphyi “martín Peruano”',
            'Puffinus creatopus “pardela de pata rosada”',
            'Pyrrhura albipectus “perico de cuello blanco”',
            'Siptornopsis hypochondriaca “cola-espina grande”',
            'Spizaetus isidori “águila negra y castaña”',
            'Sporagra siemiradzkii “jilguero azafranado”',
            'Synallaxis courseni “cola espina de Apurímac”',
            'Synallaxis maranonica “cola-espina del Marañón”',
            'Syndactyla ruficollis “limpia-follaje de cuello rufo”',
            'Tangara meyerdeschauenseei “tangara de gorro verde”',
            'Thalassarche chrysostoma “albatros de cabeza gris”',
            'Thalassarche salvini “albatros de Salvin”',
            'Theristicus melanopis “bandurria de cara negra”',
            'Tinamus osgoodi “perdiz negra”',
            'Touit stictopterus “periquito de ala punteada”',
            'Wetmorethraupis sterrhopteron “tangara de garganta naranja”',
            'Xenospingus concolor “fringilo apizarrado”',
            'Xipholena punicea “cotinga pomposa”',
            'Zaratornis stresemanni “cotinga de mejilla blanca”',
            'Zimmerius villarejoi “moscareta de Mishana”',
            'Akodon kofordi “ratón campestre de Koford”',
            'Akodon mimus “ratón campestre colilargo”',
            'Akodon orophilus “ratón campestre montañés”',
            'Akodon surdus “ratón campestre de vientre pizarra”',
            'Alouatta seniculus “mono aullador rojo”, “mono coto”',
            'Aotus miconax “mono nocturno andino”, “tutacho”',
            'Atelocynus microtis “perro de orejas cortas”',
            'Blastocerus dichotomus “ciervo de los pantanos”',
            'Cacajao calvus “huapo colorado”',
            'Caenolestes caniventer “musaraña marsupial de vientre gris”',
            'Callicebus lucifer “tocón de collar”',
            'Callimico goeldii “pichico falso de Goeldi”',
            'Cryptotis equatoris “musaraña de orejas cortas ecuatoriana”',
            'Ctenomys opimus “tuco - tuco andino”',
            'Dasypus pilosus “armadillo peludo”',
            'Dynomis branickii “pacarana”',
            'Eremoryzomys polius “ratón arrozalero de Osgood”',
            'Hippocamelus antisensis “taruka”',
            'Histiotus velatus “murciélago orejón del trópico”',
            'Lagothrix poeppigii “Mono lanudo de Pöppig”',
            'Lonchophylla hesperia “murcielaguito frugívoro occidental”',
            'Lophostoma occidentalis “murciélago orejón del occidente”',
            'Marmosa simonsi “pudú”',
            'Mazama chunyi “ciervo enano peruano”',
            'Myrmecophaga trydactila “hormiguero gigante”',
            'Nasuella olivacea “coatí andino”',
            'Neusticomys peruviensis “rata acuática peruana”',
            'Otaria flavescens “lobo chusco”',
            'Priodontes maximus “rmadillo gigante”',
            'Promops nasutus “murciélago mastín narigón”',
            'Pudu mephistophiles “sachacabra”',
            'Punomys kofordi “ratón puneño”',
            'Punomys lemminus “ratón puneño”',
            'Rhipidomys modicus “rata trepadora peruana”',
            'Saguinus tripartitus “pichico de manto dorado”',
            'Thomasomys apeco “ratón montaraz de Apeco”',
            'Thomasomys caudivarius “ratón montaraz de cola variada”',
            'Thomasomys eleusis “ratón montaraz peruano”',
            'Thomasomys incanus “ratón montaraz incaico”',
            'Thomasomys ischyrus “ratón montaraz de Amazonas”',
            'Thomasomys kalinowskii “ratón montaraz de kalinowski”',
            'Thomasomys macrotis “ratón montaraz orejón”',
            'Thomasomys onkiro “ratón montaraz ashaninka”',
            'Thomasomys praetor “ratón montaraz de Cajamarca”',
            'Thomasomys pyrrhonotus “ratón montaraz de dorso rojizo”',
            'Thylamys tatei “marmosa coligruesa de Tate”',
            'Tomopeas ravus “murciélago de orejas romas”',
            'Tremarctos ornatus “oso andino”',
            'Trichechus inunguis “manatí”',
            'Vampyressa melissa “murciélago de orejas amarillas de Melissa”',
            'Bothrops andianus “jergón”',
            'Bothrops barnetti “macanche”',
            'Bothrops pictus “jergón de costa”',
            'Ctenoblepharis adspersa “lagartija”',
            'Chelonoidis carbonaria “Tortuga de patas rojas”',
            'Dicrodon holmbergi “cañan”',
            'Lepidochelys olivacea “tortuga golfina”',
            'Liolaemus tacnae “lagartija”',
            'Liolaemus poconchiloensis “lagartija”',
            'Mesoclemmys heliostemma “ashnacharapa”',
            'Microlophus quadivittatus “lagartija”',
            'Petracola ventrimaculatus “Lagartija de paja”',
            'Phyllodactylus lepidopygus “salamanqueja”',
            'Podocnemis sextuberculata “cupiso”',
            'Podocnemis unifilis “taricaya”',
            'Polychrus femoralis “camaleoncito verde”',
        ];

        $this->updateAnimals($animals, 'VU');

        $animals = [
            'Ameerega cainarachi “rana venenosa de Cainarachi”',
            'Ameerega bassleri “rana venenosa agradable”',
            'Ameerega yoshina',
            'Atelopus spumarius “sapo de talones de Pebas”',
            'Epipedobates anthonyi “rana dardo venenosa”',
            'Hemiphractus bubalus “rana arborícola cornuda de Ecuados”',
            'Noblella lochites “rana de hoja de Ecuador”',
            'Nymphargus ocellatus “rana punteada Cochran”',
            'Nymphargus siren “sapo Cochrane Río Coca”',
            'Pristimantis galdi “rana ladrona de espada”',
            'Pristimantis percnopterus',
            'Ranitomeya fantastica “rana dardo venenosa”',
            'Rulyrana spiculata “rana de cristal de Cochran Cusco”',
            'Scinax oreites “rana arborícola hocicuda Balzapata”',
            'Amazona festiva “loro de lomo rojo”',
            'Andigena hypoglauca “tucan andino de pecho gris”',
            'Ara chloropterus “guacamayo rojo verde”',
            'Ara macao “guacamayo escarlata”',
            'Aratinga erythrogenys “cotorra de cabeza roja”',
            'Asthenes urubambensis “canastero de frente listada”',
            'Atlapetes rufigenis “matorralero de oreja rufa”',
            'Cacicus koepckeae “cacique de Koepcke”',
            'Campephilus gayaquilensis “carpintero Guayaquileño”',
            'Campylopterus villaviscensio “ala de sable del Napo”',
            'Campylorhamphus pucherani “pico-guadaña grande”',
            'Conothraupis speculigera “tangara negra y blanca”',
            'Cypseloides rothschildi',
            'Crypturellus transfasciatus “perdiz de ceja pálida”',
            'Chaetocercus bombus “estrellita chica”',
            'Deroptyus accipitrinus “loro de abanico”',
            'Falco deiroleucus “halcón de pecho naranja”',
            'Falco peregrinus “halcón peregrino”',
            'Formicarius rufifrons “gallito hormiguero de frente rufa”',
            'Fulica gigantea “gallareta gigante”',
            'Gallinago imperialis “becasina imperial”',
            'Grallaria blakei “tororoi castaño”',
            'Grallaria carrikeri “tororoi de pico pálido”',
            'Grallaria eludens “tororoi evasivo”',
            'Grallaricula peruviana “tororoi Peruano”',
            'Hemitriccus cinnamomeipectus “tirano-todi de pecho canela”',
            'Hemitriccus minimus “tirano todi de Zimmer”',
            'Hemitriccus rufigularis “tirano-todi de garganta anteada”',
            'Henicorhina leucoptera “cucarachero-montés de ala barrada”',
            'Herpsilochmus gentryi “hormiguerito antiguo”',
            'Jabiru mycteria “jabirú”, “tuyuyo”',
            'Leptasthenura yanacensis “hijeral leonado”',
            'Macronectes giganteus “petrel gigante sureño”',
            'Macronectes halli “petrel gigante norteño”',
            'Megascops marshalli “lechuza de bosque de neblina”',
            'Melanopareia maranonica “pecho de luna del Marañón”',
            'Metallura odomae “colibrí de neblina”',
            'Mitu tuberosum “paujil común”',
            'Mycteria americana “cigüeña Gabán”',
            'Myrmoborus melanurus “hormiguero de cola negra”',
            'Nannopsittaca dachilleae “periquito amazónico”',
            'Nephelomyias lintoni “mosquerito de franja naranja”',
            'Oreomanes fraseri “pico de cono gigante”',
            'Phaethornis koepckeae “ermitaño de Koepcke”',
            'Phalacrocorax bougainvillii “cormorán Guanay”',
            'Phegornis mitchellii “chorlo cordillerano”',
            'Phlogophilus hemileucurus “colibrí colipinto Ecuatoriano”',
            'Phlogophilus harterti “colibrí colipinto Peruano”',
            'Phoenicopterus chilensis “flamenco Chileno”',
            'Pionus chalcopterus “loro de ala bronceada”',
            'Pipile cumanensis “pava de garganta azul”',
            'Pipreola chlorolepidota “frutero garganta de fuego”',
            'Platalea ajaja “espátula rosada”',
            'Podiceps occipitalis “zambullidor Plateado”',
            'Poecilotriccus luluae “espatulilla de Johnson”',
            'Procellaria cinerea “petrel gris”',
            'Pteroglossus beauharnaesii “arasari encrespado”',
            'Ramphastos ambiguus “tucán de mandibula negra”',
            'Ramphastos toco “tucán toco”',
            'Saltator cinctus “saltador enmascarado”',
            'Synallaxis cherriei “cola-espina de garganta castaña”',
            'Syndactyla ucayalae “pico-recurvo peruano”',
            'Tachycineta stolzmanni “golondrina de Tumbes”',
            'Tangara phillipsi “tangara del Sira”',
            'Thalassarche bulleri “albatros de Buller”',
            'Tinamotis pentlandii “perdiz de la puna”',
            'Tumbezia salvini “pitajo de Tumbes”',
            'Xenerpestes singularis “cola-gris ecuatorial”',
            'Carollia manu “murciélago frutero del Manu”',
            'Cuniculus taczanowski “majaz de montaña”',
            'Eptesicus innoxius',
            'Lycalopex sechurae “zorro de Sechura”, “juancito”',
            'Myotis atacamensis “murcielaguito de Atacama”',
            'Panthera onca “jaguar”, “otorongo”, “uturuncu”, “puágkat”',
            'Puma concolor “puma”',
            'Tapirus terrestris “tapir del llano amazónico”, “sachavaca”',
            'Tayassu pecari “pecarí boquiblanco”, “huangana”',
            'Thomasomys cinereus “ratón montaraz ceniciento”',
            'Thomasomys daphne “ratón montaraz de Dafne”',
            'Thomasomys gracilis “ratón montaraz delicado”',
            'Thomasomys taczanowskii “ratón montaraz de Taczanowski”',
            'Vicugna vicugna “vicuña”',
            'Amphisbaena slateri',
            'Callopistes flavipunctatus “iguana marrón”',
            'Dicrodon heterolepis “lagartija de cabeza colorada”',
            'Melanosuchus niger “caimán negro”',
            'Microlophus tigris “lagartija”',
            'Paleosuchus trigonatus “lagarto enano”',
            'Sibynomorphus williamsi “serpiente arborícola de Williams”',
        ];

        $this->updateAnimals($animals, 'NT');

        $animals = [
            'Chibchanomys trichotis “rata chibcha de oreja peluda”',
            'Chinchilla chinchilla “chinchilla”',
            'Dasyprocta kalinowskii “sihuro”, “añuje”',
            'Inia geoffrensis “bufeo colorado”',
            'Leopardus colocolo “gato andino”',
            'Leopardus tigrinus “gato tigre común” “tigrino”',
            'Leopardus wiedii “margay”',
            'Lycalopex griseus “zorro gris”',
            'Mazama americana “venado colorado”',
            'Micronycteris matses “murciélago orejudo matsés”',
            'Microsciurus flaviventer “ardillita de vientre amarillo”',
            'Sciurillus pusillus “ardillita neotropical de Buffon”',
            'Sciurus ignitus “ardilla ígnia”',
            'Sciurus pyrrhinus “ardilla rojiza”',
            'Sciurus sanborni “ardilla de Sanborn”',
            'Sotalia fluviatilis “bufeo gris”',
            'Sphaeronycteris toxophyllum “murciélago apache”',
            'Sturnira aratathomasi “murciélago de hombros amarillos de Aratathomas”',
            'Atractus pauciscutatus',
            'Amphisbaena polygrammica “lagarto gusano”',
            'Bachia trisanale',
            'Crocodilurus amazonicus “cocodrilo Tegu”',
            'Epictia melanurus “serpiente ciega”',
            'Liolaemus williamsi',
            'Liophis problematicus “Serpiente problema”',
            'Phyllodactylus clinatus “Gecko del Cerro Illescas”',
            'Polychrus peruvianus',
            'Stenocercus melanopygus',
            'Stenocercus nigromaculatus',
            'Stenocercus praeornatus',
            'Tropidurus arenarius',
            'Altigius alios',
            'Ameerega smaragdina “rana dardo amazónica”',
            'Ameerega rubriventris “rana venenosa”',
            'Atelopus podocarpus',
            'Atelopus siranus',
            'Oscaecilia koepckeorum',
            'Caecilia attenuata',
            'Caecilia inca',
            'Telmatobius colanensis “rana acuática de Colán”',
            'Telmatobius intermedius',
            'Telmatobius necopinus “rana acuática de Wiens”',
            'Telmatobius hockingi',
        ];

        $this->updateAnimals($animals, 'DD');
    }

    private function updateAnimals($animals, $category)
    {
        foreach ($animals as $dsAnimal) {
            // Encontrar nombre cientifico del animal
            $scientificName = strpos($dsAnimal, '“') ? substr($dsAnimal, 0, strpos($dsAnimal, '“')) : $dsAnimal;

            // Encontrar el nombre comun del animal
            $commonName = strpos($dsAnimal, '“') ? str_replace('”', '', (str_replace('“', '', substr($dsAnimal, strpos($dsAnimal, '“'))))) : null;

            $animal = Animal::where('scientific_name', $scientificName)->first();

            if (! empty($animal)) {
                $animal->in_decreto_supremo = 1;
                $animal->common_name = $commonName;
                $animal->category = $category;
                $animal->save();
            } else {
                try {
                    $client = new GuzzleHttp\Client();
                    $url = 'http://apiv3.iucnredlist.org/api/v3/species/'.rawurlencode($scientificName).'?token='.env('UICN_TOKEN');

                    $response = $client->request('GET', $url);
                    $response = $response->getBody();
                    $response = json_decode($response);

                    if (! empty($response->result)) {
                        $animalDetails = $response->result[0];

                        $animal = Animal::create([
                            'taxonid' => $animalDetails->taxonid,
                            'scientific_name' => $animalDetails->scientific_name,
                            'category' => $animalDetails->category,
                            'kingdom' => $animalDetails->kingdom,
                            'class' => $animalDetails->class,
                            'order' => $animalDetails->order,
                            'family' => $animalDetails->family,
                            'genus' => $animalDetails->genus,
                            'published_year' => $animalDetails->published_year,
                            'marine_system' => $animalDetails->marine_system,
                            'freshwater_system' => $animalDetails->freshwater_system,
                            'terrestrial_system' => $animalDetails->terrestrial_system,
                            'depth_upper' => $animalDetails->depth_upper,
                            'depth_lower' => $animalDetails->depth_lower,
                            'common_name' => $commonName,
                            'in_decreto_supremo' => 1,
                        ]);

                        $finder = new WikimediaImageFinder();
                        $finder->find($animal);
                    } else {
                        echo $scientificName."\n";
                    }
                } catch (\Exception $e) {
                    echo $scientificName."\n";
                }
            }
        }
    }
}
