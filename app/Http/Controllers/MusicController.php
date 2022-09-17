<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index(){
        
        return view('welcome');
    }

    public function upload(Request $request){
        $input = $request->all();
 
        $rules = array(
            'songs.*' => 'required|mimes:mp4,mov,ogg,mp3',  //etc
        );
        
        if(!empty($input)){
            foreach ($request->files as $song){
                $filename = $request->nome;
                $filesize = $song->getSize();
                $extension = $song->getClientOriginalExtension();
                $name = $filename.'.'.$extension;
                $song->move('audio', $name);

                $path = Music::create([
                    'filename' => $name,
                    'extension' => $extension,
                    'filesize' => $filesize,
                ]);
                
        
                $paths[] = $path;
                
            }
            return redirect('/')->with('success','Uploaded successfully');
          }
    }

    public function music(){
        $audios = Music::get();
        $total = $audios->count();
        return view('music', compact('audios','total'));
    }
}
