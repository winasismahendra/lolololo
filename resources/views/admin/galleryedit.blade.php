@extends('layout.bmaster')

@section('isi')

	 <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Forms</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br />

                                    <form class="form-horizontal row-fluid" action="/admin/gallery/{{$tes[0]->id}}/proses" method="post" enctype="multipart/form-data" >
                                    {{ csrf_field() }}

                                        <div class="control-group">
                                            <label class="control-label"  for="basicinput">Judul </label>
                                            <div class="controls">
                                               <input type="text" name="judul" value="{{$tes[0]->judul}}">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Deskripsi</label>
                                            <div class="controls">
                                                <input type="text" name="deskripsi" value="{{$tes[0]->deskripsi}}">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Cover Gallery</label>
                                            <div class="controls">
                                                <img src="{{ url('images/originals/cover/'.$tes[0]->cover) }}" width="500px">
                                                <input type="file" name="cover" >
                                                <input type="hidden" name="cov" value="{{$tes[0]->cover}}">
                                                <span class="help-inline">Jpeg | jpg | png</span>
                                            </div>
                                        </div>
                                        
                            
                                       

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-mini btn-primary">Tambahkan</button>
                                            </div>
                                        </div>
                                    </form> <br>

                                    <form class="form-horizontal row-fluid" action="/admin/gallery/{{$tes[0]->id}}/p" method="post" enctype="multipart/form-data" >
                                    {{ csrf_field() }}

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">File Gambar</label>
                                            <div class="controls">
                                                <input type="file" name="image[]" class="form-control-file" multiple="true">
                                                <span class="help-inline">Jpeg | jpg | png</span>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" name="p" value="{{$tes[0]->id}}">

                                       

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-mini btn-info">Tambahkan</button>
                                            </div>
                                        </div>
                                    </form> <br> <br>

                                    <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                       <th>Gambar</th>
                                       <th>Action</th>
                                        
                                    </tr>
                                  </thead>
                                  <tbody>
                                
                                   @foreach($p as $image)
                                    <tr>
                                       <td><img src="{{ url('images/originals/'.$image->image) }}" width="200px"> {{$image->image}}</td>
                                       <td>
                                            <a href="/admin/gallery/del2/{{$image->id}}" onclick="confirm('pepek ?')" class="btn btn-red">  <i class="fa fa-trash-o"> </i>   hapus</a>
                                            <a href="" onclick="confirm('pepek ?')">tes</a>
                                        </td>
                                        
                                        
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            

                                  

                            </div>

                        </div>
                       



                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->

        @section('js')

        <script>
    function deleletconfig() {
        var del=confirm("Are you sure you want to delete this record?");
        if (del==true){
            alert ("record deleted")
            return true
        } else {
            alert("Record Not Deleted")
            return false
        }
    }
</script>

        @endsection

@endsection