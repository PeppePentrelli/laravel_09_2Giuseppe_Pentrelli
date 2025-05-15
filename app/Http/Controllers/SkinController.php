<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkinController extends Controller{

    public $skins = [
        
        [
            'id' => 1,
            'nome' => 'Mida',
            'fonte' => 'Pass Battaglia',
            'costo' => 'Livello 100 Pass Battaglia',
            'check' => true,
            'set' => "Spettro dorato",
            'descrizione' => 'Tutto ciò che luccica è tuo.',
            'data' => '20 Febbraio 2020',
            'introdotto_in' => 'Capitolo 4 Stagione 2',
            'wishlist'	=> 48.780,
            'img' => '/Media/Skin/Pictures/Mida-Pictures.png',
            'img-rarity' => '/Media/Leggendario.png',
            'video' => '/Media/Skin/Video/Mida-Video.mp4',
    
            'stili' => [
                [
                    'nome' => 'Stile base',
                    'img' => '/Media/Skin/Pictures/Mida-Base.png',
                    'video' => '/Media/Skin/Video/Mida-Video.mp4',
                ],
                [
                    'nome' => 'Stile Ombra',
                    'img' => '/Media/Skin/Pictures/Mida-Ombra.png',
                    'video' => '/Media/Skin/Video/Mida-Ombra-Video.mp4',
                ],
                [
                    'nome' => 'Stile Spettro',
                    'img' => '/Media/Skin/Pictures/Mida-Spettro.png',
                    'video' => '/Media/Skin/Video/Mida-Spettro-Video.mp4',
                ],
                [
                    'nome' => 'Stile Oro Puro',
                    'img' => '/Media/Skin/Pictures/Mida-OroPuro.png',
                    'video' => '/Media/Skin/Video/Mida-OroPuro-Video.mp4',
                ],
            ]
        ],
        [
            'id' => 2,
            'nome' => 'Mida Ombra',
            'fonte' => 'Negozio',
            'costo' => '1500 V-buks',
            'check' => false,
            'set' => "Cercatori delle ombre",
            'descrizione' => 'Il tocco di Mida è appena diventato macabro.',
            'data' => '29 ottobre 2021',
            'introdotto_in' => 'Capitolo 2, Stagione 8',
            'wishlist'	=> 24.733,
            'img' => '/Media/Skin/Pictures/Mida-Ombra-Base.png',
            'img-rarity' => '/Media/Leggendario.png',
            'video' => '/Media/Skin/Video/MidaOmbra-Reattivo-Video.mp4',
            'stili' => [
                [
                    'nome' => 'Reattivo - Sì',
                    'img' => '/Media/Skin/Pictures/MidaOmbra-Reattivo.png',
                    'video' => '/Media/Skin/Video/MidaOmbra-Reattivo-Video.mp4',
                ],
                [
                    'nome' => 'Reattivo - No',
                    'img' => '/Media/Skin/Pictures/MidaOmbra-NoReattivo.png',
                    'video' => '/Media/Skin/Video/MidaOmbra-NoReattivo-Video.mp4',
                ],
            ]
        ],
        [
            'id' => 4,
            'nome' => 'Agente Bananita',
            'fonte' => 'Pass battaglia',
            'costo' => 'Livello 100 Pass Battaglia',
            'check' => true,
            'set' => "Banana Reale",
            'descrizione' => 'Una banana sotto copertura, pronta per ogni missione.',
            'data' => '20 febbraio 2020',
            'introdotto_in' => 'Capitolo 2, Stagione 2',
            'wishlist'	=> 34.138,
            'img' => '/Media/Skin/Pictures/Bananita-Pictures.png',
            'img-rarity' => '/Media/Epico.png',
            'video' => '/Media/Skin/Video/AgenteBananita-Video.mp4',
        
            'stili' => [
                [
                    'nome' => 'Stile Base',
                    'img' => '/Media/Skin/Pictures/AgenteBananita-Base.png',
                    'video' => '/Media/Skin/Video/AgenteBananita-Video.mp4',
                ],
                [
                    'nome' => 'Stile Spettro',
                    'img' => '/Media/Skin/Pictures/AgenteBananita-Spettro.png',
                    'video' => '/Media/Skin/Video/AgenteBananita-Spettro-Video.mp4',
                ],
                [
                    'nome' => 'Stile Ombra',
                    'img' => '/Media/Skin/Pictures/AgenteBananita-Ombra.png',
                    'video' => '/Media/Skin/Video/AgenteBananita-Ombra-Video.mp4',
                ],
                [
                    'nome' => 'Stile Oro',
                    'img' => '/Media/Skin/Pictures/AgenteBananita-Oro.png',
                    'video' => '/Media/Skin/Video/AgenteBananita-Oro-Video.mp4',
                ],
            ]
        ],
        [
            'id' => 5,
            'nome' => 'Miascolo',
            'fonte' => 'Pass battaglia',
            'costo' => 'Livello 60 Pass Battaglia',
            'check' => true,
            'set' => "Gatto Forzuto",
            'descrizione' => 'È un gatto davvero grosso.',
            'data' => '20 febbraio 2020',
            'introdotto_in' => 'Capitolo 2, Stagione 2',
            'wishlist'	=> 40.342,
            'img' => '/Media/Skin/Pictures/Miascolo-Pictures.png',
            'img-rarity' => '/Media/Epico.png',
            'video' => '/Media/Skin/Video/Miascolo-Base-Video.mp4',
        
            'stili' => [
                [
                    'nome' => 'Stile Base',
                    'img' => '/Media/Skin/Pictures/Miascolo-Base.png',
                    'video' => '/Media/Skin/Video/Miascolo-Base-Video.mp4',
                ],
                [
                    'nome' => 'Stile Spettro',
                    'img' => '/Media/Skin/Pictures/Miascolo-Spettro.png',
                    'video' => '/Media/Skin/Video/Miascolo-Spettro-Video.mp4',
                ],
                [
                    'nome' => 'Stile Ombra',
                    'img' => '/Media/Skin/Pictures/Miascolo-Ombra.png',
                    'video' => '/Media/Skin/Video/Miascolo-Ombra-Video.mp4',
                ],
                [
                    'nome' => 'Stile Oro',
                    'img' => '/Media/Skin/Pictures/Miascolo-Oro.png',
                    'video' => '/Media/Skin/Video/Miascolo-Oro-Video.mp4',
                ],
            ]
        ],
        [
            'id' => 6,
            'nome' => 'Skye',
            'fonte' => 'Pass battaglia',
            'costo' => 'Livello 80 Pass Battaglia',
            'check' => true,
            'set' => "Amici d'incarico",
            'descrizione' => "Un’avventuriera intraprendente sempre pronta a esplorare.",
            'data' => '20 febbraio 2020',
            'introdotto_in' => 'Capitolo 2, Stagione 2',
            'wishlist'	=> 26.926,
            'img' => '/Media/Skin/Pictures/Skye-Pictures.png',
            'img-rarity' => '/Media/Epico.png',
            'video' => '/Media/Skin/Video/Skye-Base-Video.mp4',
        
            'stili' => [
                [
                    'nome' => 'Stile Base',
                    'img' => '/Media/Skin/Pictures/Skye-Base.png',
                    'video' => '/Media/Skin/Video/Skye-Base-Video.mp4',
                ],
                [
                    'nome' => 'Stile Spettro',
                    'img' => '/Media/Skin/Pictures/Skye-Spettro.png',
                    'video' => '/Media/Skin/Video/Skye-Spettro-Video.mp4',
                ],
                [
                    'nome' => 'Stile Ombra',
                    'img' => '/Media/Skin/Pictures/Skye-Ombra.png',
                    'video' => '/Media/Skin/Video/Skye-Ombra-Video.mp4',
                ],
                [
                    'nome' => 'Stile Oro',
                    'img' => '/Media/Skin/Pictures/Skye-Oro.png',
                    'video' => '/Media/Skin/Video/Skye-Oro-Video.mp4',
                ],
            ]
        ],
        [
            'id' => 7,
            'nome' => 'TNTINA',
            'fonte' => 'Pass battaglia',
            'costo' => 'Livello 40 Pass Battaglia',
            'check' => true,
            'set' => "Miccia corta",
            'descrizione' => 'Una specialista delle demolizioni con un tocco esplosivo.',
            'data' => '20 febbraio 2020',
            'introdotto_in' => 'Capitolo 2, Stagione 2',
            'wishlist'	=> 27.893,
            'img' => '/Media/Skin/Pictures/Nitroglicerina-Pictures.png',
            'img-rarity' => '/Media/Epico.png',
            'video' => '/Media/Skin/Video/Nitroglicerina-Base-Video.mp4',
        
            'stili' => [
                [
                    'nome' => 'Stile Base',
                    'img' => '/Media/Skin/Pictures/Nitroglicerina-Base.png',
                    'video' => '/Media/Skin/Video/Nitroglicerina-Base-Video.mp4',
                ],
                [
                    'nome' => 'Stile Spettro',
                    'img' => '/Media/Skin/Pictures/Nitroglicerina-Spettro.png',
                    'video' => '/Media/Skin/Video/Nitroglicerina-Spettro-Video.mp4',
                ],
                [
                    'nome' => 'Stile Ombra',
                    'img' => '/Media/Skin/Pictures/Nitroglicerina-Ombra.png',
                    'video' => '/Media/Skin/Video/Nitroglicerina-Ombra-Video.mp4',
                ],
                [
                    'nome' => 'Stile Oro',
                    'img' => '/Media/Skin/Pictures/Nitroglicerina-Oro.png',
                    'video' => '/Media/Skin/Video/Nitroglicerina-Oro-Video.mp4',
                ],
            ]
        ],
        [
            'id' => 8,
            'nome' => 'Deadpool',
            'fonte' => 'Pass battaglia',
            'costo' => 'Sfide di Deadpool',
            'check' => true,
            'set' => "Deadpool",
            'descrizione' => 'Il mercenario chiacchierone entra in gioco con stile.',
            'data' => '20 febbraio 2020',
            'introdotto_in' => 'Capitolo 2, Stagione 2',
            'wishlist' => 45.369,
            'img' => '/Media/Skin/Pictures/Deadpool-Pictures.png',
            'img-rarity' => '/Media/Marvel.png',
            'video' => '/Media/Skin/Video/Deadpool-Maschera-Video.mp4',
        
            'stili' => [
                [
                    'nome' => 'Maschera - Sì',
                    'img' => '/Media/Skin/Pictures/Deadpool-Maschera.png',
                    'video' => '/Media/Skin/Video/Deadpool-Maschera-Video.mp4',
                ],
                [
                    'nome' => 'Maschera - No',
                    'img' => '/Media/Skin/Pictures/Deadpool-SenzaMaschera.png',
                    'video' => '/Media/Skin/Video/Deadpool-SenzaMaschera-Video.mp4',
                ],
            ],
            
        ],
        [
    'id' => 9,
    'nome' => 'Aura',
    'fonte' => 'Negozio',
    'costo' => 'Evento o V-Bucks',
    'check' => true,
    'set' => 'Aura',
    'descrizione' => 'Una ladra rapida e affascinante, sempre alla moda.',
    'data' => '8 maggio 2019',
    'introdotto_in' => 'Stagione 8',
    'ultima_visita' => '12 maggio 2025',
    'eventi' => 96,
    'wishlist' => 40.594,
    'img' => '/Media/Skin/Pictures/Aura-Pictures.png',
    'img-rarity' => '/Media/Rare.png',
    'video' => '/Media/Skin/Video/Aura-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Stile Base',
            'img' => '/Media/Skin/Pictures/Aura-Base.png',
            'video' => '/Media/Skin/Video/Aura-Base-Video.mp4',
        ],
        [
            'nome' => 'Cacciatrice d\'inverno',
            'img' => '/Media/Skin/Pictures/Aura-Cacciatrice.png',
            'video' => '/Media/Skin/Video/Aura-Cacciatrice-Video.mp4',
        ],
        [
            'nome' => 'Affascinante',
            'img' => '/Media/Skin/Pictures/Aura-Affascinante.png',
            'video' => '/Media/Skin/Video/Aura-Affascinante-Video.mp4',
        ],
    ]
    ],
    [
    'id' => 10,
    'nome' => 'Solid Snake',
    'fonte' => 'Pass battaglia',
    'costo' => 'Pass battaglia',
    'check' => true,
    'set' => 'Metal Gear',
    'descrizione' => 'Un leggendario soldato specializzato in operazioni segrete e missioni di infiltrazione.',
    'data' => '23 gennaio 2024',
    'introdotto_in' => 'Capitolo 5, Stagione 1',
    'ultima_visita' => 'N/A',
    'eventi' => 0,
    'wishlist' => 7.838,
    'img' => '/Media/Skin/Pictures/SolidSnake-Pictures.png',
    'img-rarity' => '/Media/Epic.png',
    'video' => '/Media/Skin/Video/SolidSnake-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Solid Snake',
            'img' => '/Media/Skin/Pictures/SolidSnake-Base.png',
            'video' => '/Media/Skin/Video/SolidSnake-Base-Video.mp4',
        ],
        [
            'nome' => 'Solid Snake (visore)',
            'img' => '/Media/Skin/Pictures/SolidSnake-Visore.png',
            'video' => '/Media/Skin/Video/SolidSnake-Visore-Video.mp4',
        ],
        [
            'nome' => 'Old Snake',
            'img' => '/Media/Skin/Pictures/OldSnake.png',
            'video' => '/Media/Skin/Video/OldSnake-Video.mp4',
        ],
    ]
],
[
    'id' => 11,
    'nome' => 'Raiden',
    'fonte' => 'Negozio',
    'costo' => '1500 V-Bucks',
    'check' => false,
    'set' => 'Metal Gear',
    'descrizione' => 'Una nuova recluta addestrata alla realtà virtuale per la riformata unità FOXHOUND.',
    'data' => '25 gennaio 2024',
    'introdotto_in' => 'Capitolo 5, Stagione 1',
    'ultima_visita' => '8 febbraio 2025',
    'eventi' => 16,
    'wishlist' => 8.993,
    'img' => '/Media/Skin/Pictures/Raiden-Pictures.png',
    'img-rarity' => '/Media/Epic.png',
    'video' => '/Media/Skin/Video/Raiden-MascheraSi-Video.mp4',

    'stili' => [
        [
            'nome' => 'Maschera sì',
            'img' => '/Media/Skin/Pictures/Raiden-MascheraSi.png',
            'video' => '/Media/Skin/Video/Raiden-MascheraSi-Video.mp4',
        ],
        [
            'nome' => 'Maschera no',
            'img' => '/Media/Skin/Pictures/Raiden-MascheraNo.png',
            'video' => '/Media/Skin/Video/Raiden-MascheraNo-Video.mp4',
        ],
    ]
],
[
    'id' => 12,
    'nome' => 'Pesce Secco',
    'fonte' => 'Negozio',
    'costo' => '1200 V-Bucks',
    'check' => false,
    'set' => 'Pesce Secco',
    'descrizione' => 'Un abitante degli abissi diventato una leggenda sulla terraferma.',
    'data' => '27 dicembre 2018',
    'introdotto_in' => 'Stagione 7',
    'ultima_visita' => '25 marzo 2025',
    'eventi' => 87,
    'wishlist' => 31.805,
    'img' => '/Media/Skin/Pictures/PesceSecco-Pictures.png',
    'img-rarity' => '/Media/Rare.png',
    'video' => '/Media/Skin/Video/PesceSecco-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Stile Base',
            'img' => '/Media/Skin/Pictures/PesceSecco-Base.png',
            'video' => '/Media/Skin/Video/PesceSecco-Base-Video.mp4',
        ],
        [
            'nome' => 'Pirata',
            'img' => '/Media/Skin/Pictures/PesceSecco-Pirata.png',
            'video' => '/Media/Skin/Video/PesceSecco-Pirata-Video.mp4',
        ],
        [
            'nome' => 'Realtà Virtuale',
            'img' => '/Media/Skin/Pictures/PesceSecco-VR.png',
            'video' => '/Media/Skin/Video/PesceSecco-VR-Video.mp4',
        ],
        [
            'nome' => 'Coppa del Mondo',
            'img' => '/Media/Skin/Pictures/PesceSecco-CoppaDelMondo.png',
            'video' => '/Media/Skin/Video/PesceSecco-CoppaDelMondo-Video.mp4',
        ],
    ]
],
[
    'id' => 13,
    'nome' => 'Spider-Man',
    'fonte' => 'Pass battaglia',
    'costo' => 'Pass battaglia',
    'check' => true,
    'set' => 'Marvel',
    'descrizione' => 'Il leggendario arrampicamuri della Marvel, pronto a combattere il crimine anche nel mondo di Fortnite.',
    'data' => '5 dicembre 2021',
    'introdotto_in' => 'Capitolo 3, Stagione 1',
    'ultima_visita' => 'N/A',
    'eventi' => 0,
    'wishlist' => 31.371,
    'img' => '/Media/Skin/Pictures/SpiderMan-Pictures.png',
    'img-rarity' => '/Media/Marvel.png',
    'video' => '/Media/Skin/Video/SpiderMan-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Spider-Man',
            'img' => '/Media/Skin/Pictures/SpiderMan-Base.png',
            'video' => '/Media/Skin/Video/SpiderMan-Base-Video.mp4',
        ],
        [
            'nome' => 'Venom',
            'img' => '/Media/Skin/Pictures/SpiderMan-Venom.png',
            'video' => '/Media/Skin/Video/SpiderMan-Venom-Video.mp4',
        ],
    ],

    'emote_integrata' => [
        'nome' => 'Neighborly Hang',
        'video' => '/Media/Emote/NeighborlyHang-Video.mp4',
    ]
],
[
    'id' => 14,
    'nome' => 'Renegade Lynx',
    'fonte' => 'Negozio',
    'costo' => 'Livello 40 Pass Battaglia',
    'check' => true,
    'set' => 'Renegade',
    'descrizione' => 'Una versione alternativa di Lynx, rinata sotto nuove forme elementali e temporali.',
    'data' => '3 novembre 2023',
    'introdotto_in' => '3 novembre 2023',
    'ultima_visita' => '3 novembre 2023',
    'eventi' => 0,
    'wishlist' => 44.330,
    'img' => '/Media/Skin/Pictures/RenegadeLynx-Pictures.png',
    'img-rarity' => '/Media/Legendary.png',
    'video' => '/Media/Skin/Video/RenegadeLynx-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Stile Base',
            'img' => '/Media/Skin/Pictures/RenegadeLynx-Base.png',
            'video' => '/Media/Skin/Video/RenegadeLynx-Base-Video.mp4',
        ],
        [
            'nome' => 'Tempesta Oscura',
            'img' => '/Media/Skin/Pictures/RenegadeLynx-TempestaOscura.png',
            'video' => '/Media/Skin/Video/RenegadeLynx-TempestaOscura-Video.mp4',
        ],
        [
            'nome' => 'Magmatic Renegade',
            'img' => '/Media/Skin/Pictures/RenegadeLynx-Magmatic.png',
            'video' => '/Media/Skin/Video/RenegadeLynx-Magmatic-Video.mp4',
        ],
        [
            'nome' => 'Rinnegata del Tempo',
            'img' => '/Media/Skin/Pictures/RenegadeLynx-RinnegataDelTempo.png',
            'video' => '/Media/Skin/Video/RenegadeLynx-RinnegataDelTempo-Video.mp4',
        ],
    ]
],
[
    'id' => 15,
    'nome' => 'Agente Jones',
    'fonte' => 'Pass battaglia',
    'costo' => 'Livello 100 del Pass battaglia',
    'check' => true,
    'set' => 'Agente Jones',
    'descrizione' => 'Un agente della realtà pronto a tutto per proteggere il loop, con diverse varianti sbloccate nel tempo.',
    'data' => '16 marzo 2021',
    'introdotto_in' => 'Capitolo 2, Stagione 6',
    'ultima_visita' => 'N/A',
    'eventi' => 0,
    'wishlist' => 27_547,
    'img' => '/Media/Skin/Pictures/AgenteJones-Pictures.png',
    'img-rarity' => '/Media/Iconic.png',
    'video' => '/Media/Skin/Video/AgenteJones-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Agente Jones',
            'img' => '/Media/Skin/Pictures/AgenteJones-Base.png',
            'video' => '/Media/Skin/Video/AgenteJones-Base-Video.mp4',
        ],
        [
            'nome' => 'Agente Jones (Jump 15)',
            'img' => '/Media/Skin/Pictures/AgenteJones-Jump15.png',
            'video' => '/Media/Skin/Video/AgenteJones-Jump15-Video.mp4',
        ],
        [
            'nome' => 'Agente Jones (Jump 23)',
            'img' => '/Media/Skin/Pictures/AgenteJones-Jump23.png',
            'video' => '/Media/Skin/Video/AgenteJones-Jump23-Video.mp4',
        ],
        [
            'nome' => 'Agente Jones (Jump 31)',
            'img' => '/Media/Skin/Pictures/AgenteJones-Jump31.png',
            'video' => '/Media/Skin/Video/AgenteJones-Jump31-Video.mp4',
        ],
        [
            'nome' => 'Agente Jones (Jump 42)',
            'img' => '/Media/Skin/Pictures/AgenteJones-Jump42.png',
            'video' => '/Media/Skin/Video/AgenteJones-Jump42-Video.mp4',
        ],
        [
            'nome' => 'Agente Jones (Jump 88)',
            'img' => '/Media/Skin/Pictures/AgenteJones-Jump88.png',
            'video' => '/Media/Skin/Video/AgenteJones-Jump88-Video.mp4',
        ],
    ]
],
[
    'id' => 16,
    'nome' => 'Sub-Zero',
    'fonte' => 'Pass battaglia',
    'costo' => 'Livello 20 del Pass Battaglia',
    'check' => true,
    'set' => 'Mortal Kombat',
    'descrizione' => 'Un guerriero letale del Lin Kuei, maestro del ghiaccio e della disciplina, pronto a congelare i suoi nemici.',
    'data' => '21 febbraio 2025',
    'introdotto_in' => 'Capitolo 6, Stagione 2',
    'ultima_visita' => 'N/A',
    'eventi' => 0,
    'wishlist' => 1_301,
    'img' => '/Media/Skin/Pictures/SubZero-Pictures.png',
    'img-rarity' => '/Media/Iconic.png',
    'video' => '/Media/Skin/Video/SubZero-Base-Video.mp4',

    'stili' => [
        [
            'nome' => 'Maschera Sì',
            'img' => '/Media/Skin/Pictures/SubZero-MascheraSi.png',
            'video' => '/Media/Skin/Video/SubZero-MascheraSi-Video.mp4',
        ],
        [
            'nome' => 'Maschera No',
            'img' => '/Media/Skin/Pictures/SubZero-MascheraNo.png',
            'video' => '/Media/Skin/Video/SubZero-MascheraNo-Video.mp4',
        ],
    ]
],
[
    'id' => 27,
    'nome' => 'Lara Croft',
    'fonte' => 'Pass battaglia',
    'costo' => 'Inclusa nel Pass Battaglia',
    'check' => true,
    'set' => 'Tomb Raider',
    'descrizione' => 'L’iconica archeologa e avventuriera, pronta a scoprire segreti nascosti e affrontare qualsiasi pericolo.',
    'data' => '16 marzo 2021',
    'introdotto_in' => 'Capitolo 2, Stagione 6',
    'ultima_visita' => 'N/A',
    'eventi' => 0,
    'wishlist' => 65_782,
    'img' => '/Media/Skin/Pictures/LaraCroft-Pictures.png',
    'img-rarity' => '/Media/Iconic.png',
    'video' => '/Media/Skin/Video/LaraCroft-Base.mp4',

    'stili' => [
        [
            'nome' => 'Base',
            'img' => '/Media/Skin/Pictures/LaraCroft-Base.png',
            'video' => '/Media/Skin/Video/LaraCroft-Base.mp4',
        ],
        [
            'nome' => '25° Anniversario',
            'img' => '/Media/Skin/Pictures/LaraCroft-25Anniversario.png',
            'video' => '/Media/Skin/Video/LaraCroft-25Anniversario.mp4',
        ],
        [
            'nome' => 'Classica',
            'img' => '/Media/Skin/Pictures/LaraCroft-Classica.png',
            'video' => '/Media/Skin/Video/LaraCroft-Classica.mp4',
        ],
    ]
],
[
    'id' => 28,
    'nome' => 'Sgt. Drake',
    'fonte' => 'Negozio',
    'costo' => '1.200 V-Bucks',
    'check' => false,
    'set' => 'Sergente Strillante',
    'descrizione' => "Fiero soldato della Scaramuccia dell'Uccello Infinito.",
    'data' => '4 febbraio 2024',
    'introdotto_in' => 'Capitolo 5, Stagione 1',
    'ultima_visita' => '29 aprile 2025',
    'eventi' => 48,
    'wishlist' => 8_823,
    'img' => '/Media/Skin/Pictures/SgtDrake-Base.png',
    'img-rarity' => '/Media/Rare.png',
    'video' => '/Media/Skin/Video/SgtDrake-Base.mp4',

    'stili' => [
        [
            'nome' => 'Base',
            'img' => '/Media/Skin/Pictures/SgtDrake-Base.png',
            'video' => '/Media/Skin/Video/SgtDrake-Base.mp4',
        ],
    ]
],
[
    'id' => 29,
    'nome' => 'Peter Griffin',
    'fonte' => 'Pass battaglia',
    'costo' => 'Inclusa nel Pass Battaglia',
    'check' => true,
    'set' => 'I Griffin',
    'descrizione' => 'L’improbabile eroe di Quahog è pronto a combattere… e forse a fare qualche battuta discutibile.',
    'data' => '3 dicembre 2023',
    'introdotto_in' => 'Capitolo 5, Stagione 1',
    'ultima_visita' => 'N/A',
    'eventi' => 0,
    'wishlist' => 10_569,
    'img' => '/Media/Skin/Pictures/PeterGriffin-Picture.png',
    'img-rarity' => '/Media/Iconic.png',
    'video' => '/Media/Skin/Video/PeterGriffin-Base.mp4',

    'stili' => [
        [
            'nome' => 'Peter',
            'img' => '/Media/Skin/Pictures/PeterGriffin-Base.png',
            'video' => '/Media/Skin/Video/PeterGriffin-Base.mp4',
        ],
        [
            'nome' => 'Peter il Magnifico',
            'img' => '/Media/Skin/Pictures/PeterGriffin-Magnifico.png',
            'video' => '/Media/Skin/Video/PeterGriffin-Magnifico.mp4',
        ],
    ]
],
[
    'id' => 30,
    'nome' => 'Pollo Gigante',
    'fonte' => 'Negozio',
    'costo' => '1.500 V-Bucks',
    'check' => false,
    'set' => 'I Griffin',
    'descrizione' => 'Sempre pronto per un altro combattimento.',
    'data' => '27 gennaio 2024',
    'introdotto_in' => 'Capitolo 5, Stagione 1',
    'ultima_visita' => '25 aprile 2025',
    'eventi' => 30,
    'wishlist' => 6_852,
    'img' => '/Media/Skin/Pictures/PolloGigante-Base.png',
    'img-rarity' => '/Media/Epic.png',
    'video' => '/Media/Skin/Video/PolloGigante-Base.mp4',


    'stili' => [
        [
            'nome' => 'Base',
            'img' => '/Media/Skin/Pictures/PolloGigante-Base.png',
            'video' => '/Media/Skin/Video/PolloGigante-Base.mp4',
        ],
    ]
],
[
    'id' => 31,
    'nome' => 'John Wick',
    'fonte' => 'Negozio',
    'costo' => '2.000 V-Bucks',
    'check' => false,
    'set' => 'John Wick',
    'descrizione' => 'L’assassino leggendario con un conto da saldare. Nessuno è al sicuro.',
    'data' => '16 maggio 2019',
    'introdotto_in' => 'Stagione 9',
    'ultima_visita' => '27 aprile 2025',
    'eventi' => 59,
    'wishlist' => 29_189,
    'img' => '/Media/Skin/Pictures/JohnWick-Picture.png',
    'img-rarity' => '/Media/Legendary.png',
    'video' => '/Media/Skin/Video/JohnWick-Base.mp4',
    'decorazione_posteriore' => 'Katana di Wick',

    'stili' => [
        [
            'nome' => 'Normale',
            'img' => '/Media/Skin/Pictures/JohnWick-Base.png',
            'video' => '/Media/Skin/Video/JohnWick-Base.mp4',
        ],
        [
            'nome' => 'Danneggiato',
            'img' => '/Media/Skin/Pictures/JohnWick-Danneggiato.png',
            'video' => '/Media/Skin/Video/JohnWick-Danneggiato.mp4',
        ],
    ]
],
[
    'id' => 32,
    'nome' => 'Sofia',
    'fonte' => 'Negozio',
    'costo' => '1.500 V-Bucks',
    'check' => false,
    'set' => 'John Wick',
    'descrizione' => "L'assassino dell'assassino.",
    'data' => '28 giugno 2019',
    'introdotto_in' => 'Stagione 9',
    'ultima_visita' => '25 marzo 2021',
    'eventi' => 13,
    'wishlist' => 5_944,
    'img' => '/Media/Skin/Pictures/Sofia-Base.png',
    'img-rarity' => '/Media/Epic.png',
    'video' => '/Media/Skin/Video/Sofia-Base.mp4',
    'decorazione_posteriore' => 'Borsa per pistola',

    'stili' => [
        [
            'nome' => 'Base',
            'img' => '/Media/Skin/Pictures/Sofia-Base.png',
            'video' => '/Media/Skin/Video/Sofia-Base.mp4',
        ],
    ]
],














   
    ];

    public function SkinFunction()
    {
        return view('Skin', ['skins' => $this->skins]);
    }


    public function DetailsSkinFunction($id)
    {
        foreach ($this->skins as $skin) {
            if ($skin['id'] == $id) {
                return view('DettaglioSkin', ['skin' => $skin]);
            }
        }
    
    }

}






