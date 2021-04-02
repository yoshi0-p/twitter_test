<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOauth;


class TwitterController extends Controller
{
    public function index()
    {
        //ツイートを5件取得
        $result = \Twitter::get('lists/statuses',['list_id' => '1353633813784453121'], array("count" => 200));

        //api twitter
        return
        response()->json([
            'message' => 'OK',
            'data' => $result
        ], 200);
    }
}
