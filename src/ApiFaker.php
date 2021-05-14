<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ApiFaker extends Controller
{
    public function getAll()
    {

        $filter = \Request::all();
        
        $result = Clients::getClients($filter);
        
        echo json_encode($result);
        
    }

}
