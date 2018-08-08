<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
class video extends Controller
{
    public function video(Request $req){
    	$search = $req->search?$req->search:' ';
    	$data['json'] = json_decode(file_get_contents('https://s3-ap-southeast-1.amazonaws.com/ysetter/media/video-search.json'), true);
    	$data['video'] = [];
    	foreach ($data['json']['items'] as $v) {
    		if(isset($v['id']['videoId'])){
				if( preg_match("/($search)/", $v['snippet']['title'])){
					$data['video'][] = $v; 
				}
			}
    		
    	}
    	// return Response::json($json);
    	return view('index',compact('data'));
    }
}
