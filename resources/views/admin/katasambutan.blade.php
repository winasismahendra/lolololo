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

                                    <form class="form-horizontal row-fluid" action="{{ route('up_kata') }}" method="post" >
                                    {{ csrf_field() }}

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Judul</label>
                                            <div class="controls">
                                                <input type="text" name="judul"  id="basicinput" value="{{$katadepan->judul}}" class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>

                            
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Isi</label>
                                            <div class="controls">
                                                <textarea class="span8" placeholder="{{$katadepan->isi}}" name="keterangan" rows="5"></textarea>
                                            </div>
                                        </div>
                                        

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-mini btn-primary">Tambahkan</button>
                                            </div>
                                        </div>
                                    </form> <br><br>


                                    

                            </div>

                        </div>
                       



                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->

@endsection