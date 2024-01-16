<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function goHome () {
        return view('welcome');
    }

    public function goAboutUs () {
        return view('aboutUs');
    }

    public function goService () {

        $services = [
            ['id'=>'1', 'name'=>'lavaggio', 'description'=>'lavaggio auto completo', 'cost'=>'30$'],
            ['id'=>'2', 'name'=>'gomme', 'description'=>'cambio gomme invernali', 'cost'=>'50$'],
            ['id'=>'3', 'name'=>'gomme', 'description'=>'cambio gomme estive', 'cost'=>'50$'],
            ['id'=>'4', 'name'=>'interni', 'description'=>'sostituzione tappezzeria', 'cost'=>'120$'],
        ];

        return view('service', ['servizi'=>$services]);
    }

    public function goServiceDetail ($id) {

        $services = [
            ['id'=>'1', 'name'=>'lavaggio', 'description'=>'lavaggio auto completo', 'cost'=>'30$', 'img'=>'/img/fit_center_800x400_ambientazione-casuale.jpg'],
            ['id'=>'2', 'name'=>'gomme', 'description'=>'cambio gomme invernali', 'cost'=>'50$', 'img'=>'/img/fit_center_800x400_ambientazione-casuale.jpg'],
            ['id'=>'3', 'name'=>'gomme', 'description'=>'cambio gomme estive', 'cost'=>'50$', 'img'=>'/img/fit_center_800x400_ambientazione-casuale.jpg'],
            ['id'=>'4', 'name'=>'interni', 'description'=>'sostituzione tappezzeria', 'cost'=>'120$', 'img'=>'/img/fit_center_800x400_ambientazione-casuale.jpg'],
        ];

        foreach ($services as $service) {
            if ($id == $service['id']) {
                return view('serviceDetail', ['servizio' => $service]);
            }
        }
    }
}
