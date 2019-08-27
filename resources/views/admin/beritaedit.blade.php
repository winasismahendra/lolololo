@extends('layout.bmaster')

@section('isi')

<div class="span9">
					<div class="content">

@if (session('sukses'))
    <div class="alert alert-success">
        {{ session('sukses') }}
    </div>
@endif
@if (session('gagal'))
	<div class="alert alert-danger">
        {{ session('gagal') }}
    </div>
@endif
						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">
							<form action="{{route('berita_update')}}" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="control-group">
											<label class="control-label" for="basicinput">Judul</label>
											<div class="controls">
												<input type="text" id="basicinput" name="judul" value="{{$edit->judul}}" class="span8">												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Cover</label>
											<div class="controls">
												<img width="50px" src="/wysiwyg/{{$edit->cover}}">	
												<input class="btn btn-default" type="file" id="basicinput" name="cover" value="{{$edit->cover}}" class="span8">											
											</div>
										</div>
										<div class="control-group">
										<div class="controls">
											<textarea class="form-control" name="isi" id="article-ckeditor">{{$edit->isi}}</textarea>
										</div>
										</div>	
										<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
										    <script>CKEDITOR.replace( 'article-ckeditor', {
										    	filebrowserUploadUrl: '{{ route('berita_upimage',['_token' => csrf_token() ]) }}'}
										    );</script>

										 <div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<select name="id_kategori" tabindex="1" data-placeholder="Select here.." class="span3">
													<option value="{{$b[0]->id_kategori}}">-- {{$b[0]->nama_kategori}} --</option>
													@foreach ($kategori as $kat)
													<option value="{{$kat->id_kategori}}">{{$kat->nama_kategori}}</option>
													@endforeach
												</select>
										<input type="hidden" value="{{$edit->id_berita}}" name="id_berita">
											</div>
										</div>
								<button class="btn" type="submit">Submit</button>		
							</form>

							

							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
@endsection