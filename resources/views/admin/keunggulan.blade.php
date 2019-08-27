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

                                    <form class="form-horizontal row-fluid" action="{{ route('up_keunggulan') }}" method="post" >
                                    {{ csrf_field() }}

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Judul Utama</label>
                                            <div class="controls">
                                                <input type="text" name="judul" id="basicinput" value="{{$master->judul}}" class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Deskripsi</label>
                                            <div class="controls">
                                                <input type="text" name="deskripsi" id="basicinput" value="{{$master->deskripsi}}" class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Bidang</label>
                                            <div class="controls">
                                                <input type="text" name="judul_label" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Prestasi</label>
                                            <div class="controls">
                                                <input type="text" name="isi_label" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Icon</label>
                                            <div class="controls">
                                                <input type="text" name="icon" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                            
                                       

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-mini btn-primary">Tambahkan</button>
                                            </div>
                                        </div>
                                    </form> <br><br>


                                    <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                       <th>Judul</th>
                                        <th>Isi</th>
                                        <th>icon</th>
                                        <th>Admin</th>
                                        <th>action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   @foreach($ungguls as $ungguls)
                                    @continue($ungguls->id == 1)
                                    <tr>
                                       <td>{{$ungguls->subjudul}}</td>
                                        <td>{{$ungguls->isi}}</td>
                                        <td>{{$ungguls->icon}}</td>
                                        <td>{{$ungguls->id_admin}}</td>
                                        <td><a href="#" class="btn btn-green">  <i class="fa fa-edit"> </i>   edit</a>
                                            <a href="/admin/ungguls/del/{{$ungguls->id}}" class="btn btn-red">  <i class="fa fa-trash-o"> </i>   hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>


                                  

                            </div>

                        </div>
                       



                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->

@endsection