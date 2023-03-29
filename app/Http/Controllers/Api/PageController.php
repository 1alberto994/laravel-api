<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(){
        $response=[
            'success'=> true,
            'code'=>200,
            'message'=>'ok',
            'data'=>[
                1,2,3
            ]
            ];
    }
}
