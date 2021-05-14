<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Clients extends Controller
{
    public static function getClients($filter){

        foreach ($filter as $fil){
            $value = $fil;  
        }

        if (key($filter) == 'date'){

            $clients = Client::where("Date",">", $value)->get();
            
        } else if (key($filter) == 'domain'){
            
            $clients = Client::where("ClientEmail",'LIKE', '%'.$value.'%')->get();

        } else {

            $clients = Client::all();

        }

        return $clients;

    }
}
