@extends('layout.bmaster')

@section('isi')

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
   
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Forms Galeri</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br />



                                    <form class="form-horizontal row-fluid" action="{{ route('galeri_store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    
                                        <div class="control-group increment">
                                            <label class="control-label" for="basicinput">File Gambar</label>
                                            <div class="controls">
                                                <input type="file" name="file[]" id="basicinput" placeholder="Upload Image..." class="span8" multiple="">
                                                <span class="help-inline">Input 1 atau lebih</span>
                                            </div>
                                        </div>
                                       

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn">Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->


@endsection