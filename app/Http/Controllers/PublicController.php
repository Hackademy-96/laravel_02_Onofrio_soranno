<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
    return view('welcome');
}

    public function servizi(){
        $articoli = [
            [
                'name' => 'GIN',
                'description' => 'l gin è una bevanda alcolica, solitamente incolore, ottenuta per distillazione di un fermentato ricavato solitamente da cereali in cui viene messa a macerare una miscela di varie botaniche.',
                'price' => '$20',
                'img' => 'https://picsum.photos/200'

            ],
            
            [
                'name' => 'VODKA',
                'description' => 'La vodka, o wódka in polacco, è un tipo di acquavite ottenuta dalla distillazione di cereali o patate. È originaria di Polonia e Russia e successivamente si è diffusa in Svezia.',
                'price' => '$13',
                'img' => 'https://picsum.photos/200'

            ],
            
            [
                'name' => 'APEROL',
                'description' => "L'Aperol è un aperitivo alcolico italiano, inventato dalla famiglia Barbieri che aveva fondato la ditta nel 1880 a Padova in via Tommaseo." ,
                'price' => '$11',
                'img' => 'https://picsum.photos/200'

            ],
            
        ];
     
        return view('servizi', ['articoli' => $articoli] );

        
            
    }
    
    public function chiSiamo(){
        return view('chiSiamo');
    }
}

    
    



