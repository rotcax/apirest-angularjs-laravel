<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class VideoController extends Controller
{
    public function index(){

    	$videos = \App\Models\Video::get();
    	return response()->json([
    		"msg"=>"Success",
    		"videos"=>$videos->toArray()
    	], 200);
    }

    public function store(Request $request){

        $videos = new \App\Models\Video();
        $videos->title = $request->title;
        $videos->sumary = $request->sumary;
        $videos->save();

        return response()->json([
            "msg"=>"Success",
            "id"=>$videos->id
        ], 200);
    }

    public function show($id){

        $video = \App\Models\Video::find($id);
        return response()->json([
            "msg"=>"Success",
            "video"=>$video
        ], 200);
    }

    public function update(Request $request, $id){

    	$video = \App\Models\Video::find($id);

        $video->title = $request->title;
        $video->sumary = $request->sumary;
        $video->save();

        return response()->json([
            "msg"=>"Success"
        ], 200);
    }

    public function destroy($id){

        $video = \App\Models\Video::find($id);
        $video->delete();
        
        return response()->json([
            "msg"=>"Success"
        ], 200);
    }
}