<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOauth;


class TwitterController extends Controller
{
    public function index(Request $request)
    {
        //ツイートを5件取得
        $result = \Twitter::get('lists/statuses',['list_id' => '1377874159393337347'], array("count" => 200));

        //ViewのTwitter.blade.phpに渡す
        return
        response()->json([
            'message' => 'OK',
            'data' => $result
        ], 200);
    }
}
