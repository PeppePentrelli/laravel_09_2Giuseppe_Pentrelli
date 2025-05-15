<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BundleController extends Controller
{

   public $bundles = [

        ['nome' => 'ROUGE SCOUT PACK',
        'item1-Bundle' => 'item1-Bundle1.png',
        'item2-Bundle' => 'item2-Bundle1.png',
        'item3-Bundle' => 'item3-Bundle1.png',
        'item4-Bundle' => 'item4-Bundle1.png',
        'guadagno' => '1.500',
        'img-bundle1' => 'pgBundle1.png',
        'bg' => ' background: linear-gradient(45deg, #e4c24d, #b4923a, #7b6a1e, #50452a, #2d2b24, #1D1D1D, rgb(11, 11, 11), black);',
        'prezzo' => '12.99 €',
        'cheat' => " max-width: 200%;",
        'h2' => 'color: var(--giallo-sole);'


    ],

    ['nome' => 'ROUGE SCOUT PACK',
    'item1-Bundle' => 'item1-Bundle2.png',
    'item2-Bundle' => 'item2-Bundle2.png',
    'item3-Bundle' => 'item3-Bundle2.png',
    'item4-Bundle' => 'item4-Bundle2.png',
    'guadagno' => '1.500',
    'img-bundle1' => 'pgBundle2.png',
    'bg' => 'background-image: url(/Media/bg-imageBubdle2.png);',
    'prezzo' => '19.99 €', 
    'cheat' => " max-width: 70%;",
    'h2' => 'color: black;'




],

['nome' => 'ROUGE SCOUT PACK',
'item1-Bundle' => 'item1-Bundle2.png',
'item2-Bundle' => 'item2-Bundle2.png',
'item3-Bundle' => 'item3-Bundle2.png',
'item4-Bundle' => 'item4-Bundle2.png',
'guadagno' => '1.500',
'img-bundle1' => 'pgBundle2.png',
'bg' => 'background-image: url(/Media/bg-imageBubdle3.png);',
'prezzo' => '19.99 €', 
'cheat' => " max-width: 70%;",
'h2' => 'color: black;'


],
['nome' => 'LAST LAUGH',
'item1-Bundle' => 'item1-Bundle4.png',
'item2-Bundle' => 'item2-Bundle4.png',
'item3-Bundle' => 'item3-Bundle4.png',
'item4-Bundle' => 'item4-Bundle4.png',
'guadagno' => '1.500',
'img-bundle1' => 'pgBundle4.png',
'bg' => 'background-image: url(/Media/wallpapersden.com_fortnite-joker_1920x1080.jpg);',
'prezzo' => '19.99 €', 
'cheat' => " max-width: 70%;",
'h2' => 'color: black;'


],

    ];
    
public function BundleFunction() { 

    return view('Bundle', ['bundles' => $this->bundles]);
}

}
