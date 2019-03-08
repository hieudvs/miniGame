<?php
namespace App\Http\Controllers\Web\Package_purchase;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;
use Session;
use Validator;

use App\User;
use App\Game;
use App\Purchase_package;
use App\Purchase_detail;
use App\Purchase_package_detail;
use App\User_game_manager;


class indexController extends BaseController
{
    public function index(){
        // $Purchase = Purchase_package::find(1)->Game()->get();
        $dataPurchase = Purchase_package::with(array('Game' => function($query) {
             $query->get();
        }))->get();
        return view('Package_purchase.index',compact('dataPurchase') );
    }

    public function packagePurchase(request $req){
        if (!empty($req->id_purchase)) {
            $id_user = Auth::id();
            $idPurchase = $req->id_purchase;
            $expiry_date = $req->expiry_date_purchase;
            // Get: games in Purchase_package
            $games = Purchase_package::find($idPurchase)->Game()->get();
            if (!empty($games)) {
                // Save to BD:  Purchase_details table
                $purchase_detail = new Purchase_detail();
                $purchase_detail->id_purchase_package = $idPurchase;
                $purchase_detail->id_user = $id_user;
                $purchase_detail->expiry_date = $expiry_date;
                $purchase_detail->save();

                // Save to BD: User_game_managers table
                foreach ($games as  $game) {   
                    $user_game_manager = new User_game_manager();
                    $user_game_manager->id_user = $id_user;
                    $user_game_manager->id_game = $game->id;
                    $result = $user_game_manager->save(); 
                }
            }
        }
    }
}
