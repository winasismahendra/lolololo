@extends('layout.bmaster')

@section('isi')

@if (session('sukses'))
    <div class="alert alert-success">
        {{ session('sukses') }}
    </div>
@endif
<div class="message"></div>

<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Berita Controller</h3>
							</div>							
							<div class="module-body">
						<div class="form-group">	
						<div style="float: right;" class="span3">	
						   <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
    					</div>		
    					      <h3 align="center">Total Data : <span id="total_records"></span></h3>				
							<table class="table table-bordered">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Judul</th>
									  <th>Tanggal</th>
									  <th>Aksi</th>
									</tr>
								  </thead>
								  <tbody>
								  {{ csrf_field() }}
								  </tbody>
								</table>

							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
				
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>	



$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('berita_search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
   	var html ='';
   	html += '<h2>cok</h2>'
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }

  });
 }


 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
 var _token = $('input[name="_token"]').val();
$(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('berita_del') }}",
    method:"POST",
    data:{id:id, _token:_token},
    success:function(data)
    {
     window.location.reload();
    }
   });
  }
 });
});


</script>
@endsection
