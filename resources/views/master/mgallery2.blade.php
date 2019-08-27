@extends('layout.master')


@section('isi')

	 <section class="module bg-dark-60 gallery-page-header parallax-bg" data-background="{{ url('images/originals/cover/'.$tes[0]->cover) }}">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">{{$tes[0]->judul}}</h2>
                <div class="module-subtitle font-serif">{{$tes[0]->deskripsi}}</div>
              </div>
            </div>
          </div>
        </section>

        
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">

                


      @foreach($p as $image)
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="gallery-item"> 
                  <div class="gallery-image"><a class="gallery" href="{{ url('images/originals/'.$image->image) }}" ><img src="{{ url('images/originals/'.$image->image) }}" />
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
      @endforeach
 
 
            

            </div>
          </div>
        </section>

        
@endsection