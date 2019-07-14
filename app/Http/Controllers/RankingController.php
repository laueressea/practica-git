<?php

namespace Contrareloj\Http\Controllers;

use Illuminate\Http\Request;
use Contrareloj\User;
use Contrareloj\Levels;
use Contrareloj\Auth;



class rankingController extends Controller
{
  //funcion index para pasarle a la vista de ranking los datos del usuario
    public function index(){

      $datosRanking = User::orderBy('score', 'desc')
      ->paginate(3);
      $posicion=1;
      $niveles  = Levels::all();
      $usuarioLogueado = Auth::user();
      $vac = compact('datosRanking','posicion','niveles');

      return view("front.ranking", $vac);

    }

    public function levels(){
      $levels  = Levels::all();
      $userScore =  Auth::user();

        if(user->score > 100 ){
          $levelID2 = levels-> id[2];
          $vac = compact('$levelID2');
          return view("front.ranking",$vac );
      }elseif(user->score > 100 ){
          $levelID3 = levels-> id[3]
          $vac = compact('$levelID3');
          return view("front.ranking",$vac );
      }else {
        $levelID1 = levels-> id[1];
        $vac = compact('$levelID1');
        return view("front.ranking",$vac);
      }
    }
}
