<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\slider;
use App\katadepan;
use App\keunggulan;
<<<<<<< HEAD
use App\kepala;
use App\gallery;
use App\album;
=======
use App\galeri;
>>>>>>> 58f65a385a7a62ef6e6a42b71226c880dfc84bf2


class MasterController extends Controller
{
    
	public function index()
    {
    	
        $slider = slider::all();
        $katadepan = katadepan::all();
        $keunggulan = keunggulan::all();
        $master = keunggulan::find(1);
        $kepala = kepala::find(3);
    	return view('master/index',['slider' => $slider, 'katadepan' => $katadepan, 'keunggulan' => $keunggulan, 'master' => $master, 'kepala' => $kepala  ]); 
    
    }

    public function tkj()
    {
    	

    	return view('master/tkj'); 
    
    }

    public function perbankan()
    {
    	

    	return view('master/perbankan'); 
    
    }

    public function multimedia()
    {
    	

    	return view('master/multimedia'); 
    
    }
<<<<<<< HEAD

    public function gallery()
    {   
         $users = db::table('album')->join('galleries', 'album.id', '=', 'galleries.id_album')->select('album.*', 'galleries.image')->get();
        
        $album =album::all();
       return view('master/mgallery',compact('users','album'));
    
    }

        public function gallery2($id_album)
    {   
        $users = db::table('album')->join('galleries', 'album.id', '=', 'galleries.id_album')->select('album.*', 'galleries.image')->get();

      
        

        
        $p = gallery::where('id_album' ,'=' ,$id_album)->get('image');
        $tes = album::where('id' ,'=' ,$id_album)->get();
     

       
        // $cok = DB::table('galleries')
        //          ->leftJoin('album', 'galleries.id_album', '=', 'album.id')
                 
        //          ->select('galleries.image')->first($id_album);

            // $cok = gallery:: where ('id', $id_album)
            //     -> leftJoin ('album', 'galleries.id_album', '=', $id_album)
            //     -> select ('galleries.id_album', 'galleries.image') -> first ();

               

        return view('master/mgallery2',compact('users','tes','p','cok')); 
    
    }



=======
    public function galeri(){
        $galeri = galeri::all();
        return view('master/galeri',['galeri' => $galeri]);
    }
>>>>>>> 58f65a385a7a62ef6e6a42b71226c880dfc84bf2
}
