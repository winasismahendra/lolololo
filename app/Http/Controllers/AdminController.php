<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\slider;
use App\katadepan;
use App\keunggulan;
<<<<<<< HEAD
use App\kepala;
use App\gallery;
use App\album;
use File;

class AdminController extends Controller
{
    

=======
use App\album;
use App\kategori;
use App\berita;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function berita_add(){
        $kategori = kategori::all();
        return view ('admin/beritaadd',['kategori' => $kategori]);
    }
    public function berita_store(Request $request){
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'cover' => 'required',
            'isi' => 'required',
            'id_kategori' => 'required'
            ]);
        if ($validator->fails()) {
            return redirect()->back()->with('gagal','gagal post berita!');
        }
        else {
            $uploadfile = $request->file('cover');
            $name = time().'.'.$uploadfile->getClientOriginalName();
            $path = $uploadfile->move('wysiwyg',$name);
            $berita = new berita;
            $berita->cover = $name;
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->id_kategori = $request->id_kategori;
            $berita->tanggal = now();
            $berita->save();
            return redirect()->back()->with('sukses','sukses post berita!');
        }
        
    }
    public function berita_controller(){
    //     $berita = berita::orderBy('id_berita', 'DESC')->get();
    return view ('admin/beritacontrol');
    }
    public function berita_del(Request $request){
        // $del = berita::find($id);
        // $del->forceDelete();
        // return redirect()->back()->with('sukses','Berhasil menghapus data!');

        if($request->ajax())
        {
            DB::table('berita')
                ->where('id_berita', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    

    }
    public function berita_edit(Request $request,$id){
        $edit = berita::find($id);
        $kategori = kategori::all();  
        $idkat = $edit->id_kategori;
        $b = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->where('kategori.id_kategori', '=', $idkat)
        ->select('*')
        ->get();
        return view('admin/beritaedit', ['edit' => $edit, 'b' => $b, 'kategori' => $kategori]);
    }
    public function berita_update(Request $request){
        if($request->cover == NULL){
            $id = $request->id_berita;
            $berita = berita::find($id);
            $berita->judul = $request->judul;
            $berita->cover = $request->p;
            $berita->isi = $request->isi;
            $berita->id_kategori = $request->id_kategori;
            $berita->save();
        return redirect()->back()->with('sukses','sukses edit!');
        } else {    
        $uploadfile = $request->file('cover');
        $name = time().'.'.$uploadfile->getClientOriginalName();
        $path = $uploadfile->move('wysiwyg',$name);    
        $id = $request->id_berita;
        $berita = berita::find($id);
        $berita->judul = $request->judul;
        $berita->cover = $name;
        $berita->isi = $request->isi;
        $berita->id_kategori = $request->id_kategori;
        $berita->save();
        return redirect()->back()->with('sukses','sukses edit!');
        }
       

    }
    public function berita_search(Request $request){
    //     if($request->ajax()){
    //         $output="";
    //         $berita=DB::table('berita')->where('judul','LIKE','%'.$request->search."%")->get();
    //         if($berita){
    //             foreach ($berita as $key => $products) {
    //             $output.='<tr>'.
    //             '<td>'.$loop->iteration.'</td>'.
    //             '<td>'.$products->judul.'</td>'.
    //             '<td>'.$products->tanggal.'</td>'.
    //             '<td><a href="/admin/berita/edit/{{$row->id_berita}}"><input type="button" class="btn btn-primary" Value="Edit" name=""></a> <a href="/admin/berita/del/{{$row->id_berita}}"><input type="button" class="btn btn-danger" Value="Delete" onclick="return confirm());" name=""></a></td>'.
    //             '</tr>';
    //         }
    //         return Response($output);
    //         }
    //     }
    // }
       
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('berita')
                ->where('judul', 'like', '%'.$query.'%')
                ->orderBy('id_berita', 'desc')
                ->get();
            }
            else {
                $data = DB::table('berita')
                ->orderBy('id_berita', 'desc')
                ->get();
            }
            $total_row=$data->count();
            if($total_row > 0){
                $i=1;
                foreach ($data as $row) {
                  
                   $output .= '<tr>
                    <td>'.$i++.'</td>
                    <td>'.$row->judul.'</td>
                    <td>'.$row->tanggal.'</td>
                    <td><a href="/admin/berita/edit/'.$row->id_berita.'"><input type="button" class="btn btn-primary" Value="Edit" name=""></a> <button type="button" class="btn btn-danger delete"  id="'.$row->id_berita.'">Delete</button></td>
                    </tr>
                   ';
                }
            }
            else {
                $output = '
                <tr>
                    <td align="center">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row

            );
            echo json_encode($data);
        }
    
    }
    public  function    ppdb(){


        return  view    ('master/ppdb');
    }

>>>>>>> 58f65a385a7a62ef6e6a42b71226c880dfc84bf2
    public  function    coba(){


        return  view    ('admin/index');
    }


	public function index()
    {
    	$slider = slider::all();
    	$katadepan = katadepan::find(3);

    	return view('admin/slidebar',['slider' => $slider, 'katadepan' => $katadepan]);  
    
    }


    public function slidebar()
    {
    	$slider = slider::all();

    	return view('admin/slidebar',['slider' => $slider]); 
    
    }

     public function slider_up(Request $request)
    {
    	$validation = Validator::make($request->all(),[
    		'judul' => 'required',
    		'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    		'keterangan' => 'required|max:300'
    		]);

    	$uploadedFile = $request->file('file'); 

    	if ($uploadedFile == NULL){

    		return redirect()->back()->with('gagal','gambar belom diisi');
    	}

    	else{

    	$name = time().'.'.$uploadedFile->getClientOriginalName();

        $path = $uploadedFile->move('gambar/slider',$name);

    	}


       
        

        	$slider= new slider;

        	$slider->judul = $request->judul;
        	
           
            $slider->gambar = $name;
			$slider->deskripsi = $request->keterangan;
            

			$slider->save();
			return redirect()->back()->with('success','sukses!');
			
    	 // $check->$slider->save();  

  //   	 if ($validation->fails() && $uploadedFile == NULL) {
  			
  // 			return redirect()->back()->with('gagal','gagal upload');
		// }else {
		// 	return redirect()->back()->with('success','sukses!');
		// 	$slider->save();
		// }

    	// if(!$check){
    	// 	return redirect()->back()->with('gagal','gagal!');
    	// }
    	// else {
    	// 	return redirect()->back()->with('success','data berhasil ditambah!');
    	// }
    
    }

    public function slider_del(Request $request,$id){

    	$hapus = slider::find($id);

    	$path = public_path()."/gambar/slider/".$hapus->gambar;
		unlink($path);
    	$hapus -> forceDelete();

    	return redirect('/admin');

    }

    public function slider_edit($id){


    	$edit = slider::find($id);

        return view('admin/slidebar',['slider' => $slider, 'katadepan' => $katadepan]); 
    }

    public function katasambutan(){

        $katadepan = katadepan::find(3);

        return view('admin/katasambutan',['katadepan' => $katadepan]);
    }


     public function kata_up(Request $request)
    {
    	$validation = Validator::make($request->all(),[
    		'judul' => 'required',
    		'isi' => 'required|max:300'
    		]);



        $kata=  katadepan::find(3) ;

        	$kata->judul = $request->judul;
        	    
            $kata->isi = $request->keterangan;
			
           			$kata->save();
           			return redirect()->back()->with('success','sukses!');
             
    }

    public function keunggulan()
    {
        $master = keunggulan::find(1);
        $unggul = keunggulan::select('subjudul','isi','icon');
        $ungguls = keunggulan::all();

        return view('admin/keunggulan',['master' => $master , 'unggul' => $unggul, 'ungguls' => $ungguls]); 
    
    }

      public function keunggulan_up(Request $request)
    {
    	$validation = Validator::make($request->all(),[
    		'judul' => 'required',
    		'deskripsi' => 'required',
    		'judul_label' => 'required',
    		'isi_label' => 'required',
    		
    		]);

        $master = keunggulan::find(1);

            $master->judul = $request->judul;
            $master->deskripsi = $request->deskripsi;

        $unggul= new keunggulan ;

        	
        	$unggul->subjudul = $request->judul_label;
        	$unggul->isi = $request->isi_label;
        	$unggul->icon = $request->icon;
		
        $master->save();	
        $unggul->save();

           			return redirect()->back()->with('success','sukses!');
             
    }
    public function galeri_add(){
        return view('/admin/galeriadd');
    }

    public function galeri_store(Request $request){
        $this->validate($request, [

<<<<<<< HEAD
    public function kepala()
    {
       

        return view('admin/kepala'); 
    
    }

    public function kepala_up(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'judul' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'pesan' => 'required|max:300'
            ]);

        $uploadedFile = $request->file('file'); 

        if ($uploadedFile == NULL){

            return redirect()->back()->with('gagal','gambar belom diisi');
        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalName();

        $path = $uploadedFile->move('gambar/kepala_sekolah',$name);

        }


         

            $kepala= new kepala;

            $kepala->judul = $request->judul;
            
           
            $kepala->gambar = $name;
            $kepala->isi = $request->pesan;
            

            $kepala->save();
            return redirect()->back()->with('success','sukses!');
            
         
    
    }

    public function kepala_up2(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'judul' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'pesan' => 'required|max:300'
            ]);

        $uploadedFile = $request->file('file'); 

        if ($uploadedFile == NULL){

            return redirect()->back()->with('gagal','gambar belom diisi');
        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalName();

        $path = $uploadedFile->move('gambar/kepala_sekolah',$name);

        }


         

            $kepala= kepala::find(3);

            $kepala->judul = $request->judul;
            
           
            $kepala->gambar = $name;
            $kepala->isi = $request->pesan;
            

            $kepala->save();
            return redirect()->back()->with('success','sukses!');
            
         
    
    }
   /* protected $gallery;

    public function __construct(
        Gallery $gallery )
    {
        $this->gallery = $gallery;
    }*/

    public function gallery(){
        /*$users =gallery::all();*/
        $cok = album::all();
        foreach ($cok as $cokk){
          for($i=0; $i<count($cok); $i++)
        $k = $cokk->id;
         }
        $asu = db::table('galleries')->join('album', 'galleries.id_album', '=', 'album.id')->select('galleries.*', 'galleries.image')->get();

  
        
        $users = db::table('album')->join('galleries', 'album.id', '=', 'galleries.id_album')->select('album.*', 'galleries.id_album' , 'galleries.image')->get();
        
        
        $album =album::all();


       // return dd($users);
        return  view('admin/gallery',compact('users','album','asu','cokk','cok','k'));

    }

    public function gallery_edit( $id){

        $users =album::find($id);     
        $p = gallery::where('id_album' ,'=' ,$id)->get();
        $tes = album::where('id' ,'=' ,$id)->get();

       return view('admin/galleryedit',compact('users','p','tes'));
    }

    public function gallery_del2(Request $request,$id){
        
        $hapus = gallery::find($id);

        $path = public_path()."/images/originals/".$hapus->image;
        unlink($path);
        $hapus -> forceDelete();

         return back();

    }
    
    public function gallery_editpros(Request $request,$id){
        
        $uploadedFile = $request->file('cover'); 
            $edit = album::find($id);

        
        if ($uploadedFile == NULL){

            $p1 = $request->judul;
            $p2 = $request->deskripsi;
            $p = $request->cov;

            $edit->judul = $p1;
            $edit->deskripsi = $p2;
            $edit->cover = $p;

        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalExtension();

        $path = $uploadedFile->move('images/originals/cover/',$name);

        $edit = album::find($id);
        $edit->judul = $request->judul;
        $edit->deskripsi = $request->deskripsi;
        $edit->cover = $name;
       }

        $edit->save();

         
         return back();
    }

     protected $gallery,$album  ;

     public function __construct(
        gallery $gallery, album $album   )
    {
        $this->gallery = $gallery;
        $this->album   = $album ;
    }



    public function gallery_up2(Request $request,$id){



        //check if image exist
        if ($request->hasFile('image')) {
            $images = $request->file('image');
 
            //setting flag for condition
            $org_img = $thm_img = true;
 
            // create new directory for uploading image if doesn't exist
            if( ! File::exists('images/originals/')) {
                $org_img = File::makeDirectory('images/originals/', 0777, true);
            }/*
            if ( ! File::exists('images/thumbnails/')) {
                $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
            }*/
 
            // loop through each image to save and upload
            foreach($images as $key => $image) {
                //create new instance of Photo class
                $newPhoto = new $this->gallery;
                $album   = $this->album->find($id);

                $albums = $album->id;



                

                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                /*$thm_path = 'images/thumbnails/' . $filename;*/
             
                
                $newPhoto->id_album  = $albums;
                $newPhoto->image     = $filename;
                /*$newPhoto->thumbnail = 'images/thumbnails/'.$filename;*/
 
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
 
                // upload image to server
                if (($org_img && $thm_img) == true) {
                   Image::make($image)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   /*Image::make($image)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);*/
                }
            }
        }           
                    return redirect()->back()->with('success','sukses!');

    }

     public function gallery_up(Request $request)
    {

          
       /* 
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }

         $form= new gallery();
         $form->judul = $request->judul;
         $form->deskripsi = $request->deskripsi;
         $form->image=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');



        $validation = Validator::make($request->all(),[
            'judul' => 'required',
            'isi' => 'required|max:300'
            ]);*/

        $uploadedFile = $request->file('cover'); 

        if ($uploadedFile == NULL){

            return redirect()->back()->with('gagal','gambar belom diisi');
        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalExtension();

        $path = $uploadedFile->move('images/originals/cover/',$name);

       }
                $newAlbum = new album;

                $newAlbum->judul     = $request->judul;
                $newAlbum->deskripsi = $request->deskripsi;
                $newAlbum->cover     = $name;
                $newAlbum   ->save  ();

                $id = $newAlbum->id;

               


         //check if image exist
        if ($request->hasFile('image')) {
            $images = $request->file('image');
 
            //setting flag for condition
            $org_img = $thm_img = true;
 
            // create new directory for uploading image if doesn't exist
            if( ! File::exists('images/originals/')) {
                $org_img = File::makeDirectory('images/originals/', 0777, true);
            }/*
            if ( ! File::exists('images/thumbnails/')) {
                $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
            }*/
 
            // loop through each image to save and upload
            foreach($images as $key => $image) {
                //create new instance of Photo class
                $newPhoto = new $this->gallery;
                $album   = $this->album->find($id);

                $albums = $album->id;



                

                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                /*$thm_path = 'images/thumbnails/' . $filename;*/
             
                
                $newPhoto->id_album  = $albums;
                $newPhoto->image     = $filename;
                /*$newPhoto->thumbnail = 'images/thumbnails/'.$filename;*/
 
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
 
                // upload image to server
                if (($org_img && $thm_img) == true) {
                   Image::make($image)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   /*Image::make($image)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);*/
                }
            }
        }
                    return redirect()->back()->with('success','sukses!');
             
    }
=======
                'file' =>  'required',
                'file*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
>>>>>>> 58f65a385a7a62ef6e6a42b71226c880dfc84bf2

        ]);
       
         {

            foreach($request->file('file') as $image)
            {
                $name= 'galeri-'.time().'-'.$image->getClientOriginalName();
                $image->move(public_path().'/images/gallery', $name);  
                $data[] = $name;  
            }
         }

         $form = new album();
         $form->foto=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
    }
    public function berita_upimage(Request $request){
        $CKEditor = $request->input('CKEditor');
        $funcNum  = $request->input('CKEditorFuncNum');
        $message  = $url = '';
            if (Input::hasFile('upload')) {
                $file = Input::file('upload');
                if ($file->isValid()) {
                    $filename =rand(1000,9999).$file->getClientOriginalName();
                    $file->move(public_path().'/wysiwyg/', $filename);
                    $url = url('wysiwyg/' . $filename);
        } else {
            $message = 'An error occurred while uploading the file.';
        }
    } 
    else {
        $message = 'No file uploaded.';
    }
    return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';    
    }

}
