@extends('layout.amaster')

@section('isi')

    <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class="col-lg-12">
                            <div class="col-lg-12">
                        <ul id="generalTab" class="nav nav-tabs responsive">
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Slider</a></li>
                            <li><a href="#note-tab" data-toggle="tab">Kata Depan</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">Keunggulan</a></li>
                            <li><a href="#pagination-tab" data-toggle="tab">Paginations</a></li>
                            <li><a href="#input-group-tab" data-toggle="tab">Input Groups</a></li>
                            <li><a href="#list-group-tab" data-toggle="tab">List Group</a></li>
                            <li><a href="#navbar-tab" data-toggle="tab">Navbar</a></li>
                            <li><a href="#thumbnail-tab" data-toggle="tab">Thumbnails</a></li>
                            <li><a href="#other-tab" data-toggle="tab">Others</a></li>
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="alert-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12"><h3>Basic</h3>

                                      

                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                         <div class="panel panel-violet">
                         @if (session('success'))
                         <div class="alert alert-success">
                         {{ session('success') }}
                         </div>
                         @endif
                         @if (session('gagal'))
                         <div class="alert alert-danger">
                         {{ session('gagal') }}
                         </div>
                         @endif
                                            <div class="panel-heading">
                                                Order services</div>
                                            <div class="panel-body pan">
                                                <form method="POST" action="{{ route('up_slider') }}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-user"></i>
                                                                    <input id="judul" type="text" placeholder="judul" name="judul" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                    <hr />
                                                    <div class="row">
                                                       
                                                    <div class="form-group">
                                                        <input id="inputIncludeFile" type="file" name="file" placeholder="Inlcude some file" /></div>
                                                    <div class="form-group mbn">
                                                        <textarea rows="5" placeholder="Tell us about your project" class="form-control" name="keterangan"></textarea></div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Send request</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                        
                    
                        <div class="row mbl">
                            

                            <div class="col-lg-12">
                            <div class="row">
                  
                       
                        <div class="panel panel-red">
                            <div class="panel-heading">Contextual Row</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>File</th>
                                        <th>Admin</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slider as $slider)
                                    <tr class="active">
                                        <td>{{$slider->judul}}</td>
                                        <td>{{$slider->deskripsi}}</td>
                                        <td>{{$slider->gambar}}</td>
                                        <td>{{$slider->id_admin}}</td>
                                        <td><a href="#" class="btn btn-green">  <i class="fa fa-edit"> </i>   edit</a>
                                            <a href="/admin/slider/del/{{$slider->id}}" class="btn btn-red">  <i class="fa fa-trash-o"> </i>   hapus</a>
                                        </td>
                             
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                        
                    </div>
                  
                            
                            
                            </div>
                            
                        </div>
                  </div>
               
                <!--END CONTENT-->


                    </div>
                </div>
                <!--END CONTENT-->


                                    </div>
                                </div>
                            </div>
                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                Kata-Kata Depan</div>
                                            <div class="panel-body pan">
                                                <form action="{{ route('up_kata') }}" class="form-horizontal" method="post">
                                                 {{ csrf_field() }}
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Judul</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputName" type="text" placeholder="{{$katadepan->judul}}" class="form-control" name="judul" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Isi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" type="text" placeholder="{{$katadepan->isi}}" class="form-control" name="isi" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">
                                                        <div class="col-md-offset-3 col-md-6">
                                                           
                                                            <button type="submit" class="btn btn-primary">
                                                                Tambahkan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div id="label-badge-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                Kata-Kata Depan</div>
                                            <div class="panel-body pan">
                                                <form action="{{ route('up_keunggulan') }}" class="form-horizontal" method="post">
                                                 {{ csrf_field() }}
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Judul</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputName" type="text" value="{{$master->judul}}" class="form-control" name="judul" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Deskripsi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" type="text" value="{{$master->deskripsi}}" class="form-control" name="deskripsi" /></div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Judul Label</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" type="text" placeholder="Judul Prestasi" class="form-control" name="judul_label" /></div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Isi Label</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" type="text" placeholder="Isi Prestasi" class="form-control" name="isi_label" /></div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Icon</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" type="text" placeholder="Icon" class="form-control" name="icon" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">
                                                        <div class="col-md-offset-3 col-md-6">
                                                           
                                                            <button type="submit" class="btn btn-primary">
                                                                Tambahkan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                            <div id="pagination-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4"><h3>Pagination</h3>
                                        <ul class="pagination mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <div class="mbxl"></div>
                                        <h3>Disabled and active states</h3>
                                        <ul class="pagination mtm mbm">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Size</h3>
                                        <ul class="pagination pagination-lg mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <ul class="pagination mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <ul class="pagination pagination-sm mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Pagination Align</h3>
                                        <ul data-hover="" class="pagination mtm mbm">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <div class="text-center">
                                            <ul class="pagination mtm mbm">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li class="active"><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                        <div class="text-right">
                                            <ul class="pagination mtm mbm">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li class="active"><a href="#">5</a></li>
                                                <li class="disabled"><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-lg-4"><h3>Pager</h3>
                                        <ul class="pager">
                                            <li><a href="#">Previous</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Pager Aligned Links</h3>
                                        <ul class="pager">
                                            <li class="previous"><a href="#">&larr; Older</a></li>
                                            <li class="next"><a href="#">Newer &rarr;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Pager Optional Disabled State</h3>
                                        <ul class="pager">
                                            <li class="previous disabled"><a href="#">&larr; Older</a></li>
                                            <li class="next"><a href="#">Newer &rarr;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="input-group-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4"><h4 class="box-heading">Input Group</h4>

                                        <div class="input-group"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><input type="text" class="form-control"/><span class="input-group-addon">.00</span></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><span class="input-group-addon">$</span><input type="text" class="form-control"/><span class="input-group-addon">.00</span></div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Size</h4>

                                        <div class="input-group input-group-lg"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group input-group-sm"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Checkboxes & Radio Addons</h4>

                                        <div class="input-group"><span class="input-group-addon"><input type="checkbox"/></span><input type="text" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><span class="input-group-addon"><input type="radio"/></span><input type="text" class="form-control"/></div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-lg-6"><h4 class="box-heading">Buttons with dropdowns</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action
                                                            &nbsp;<span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control"/></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group"><input type="text" class="form-control"/>

                                                    <div class="input-group-btn">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action
                                                            &nbsp;<span class="caret"></span></button>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Segmented Buttons</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" tabindex="-1" class="btn btn-default">Action</button>
                                                        <button type="button" data-toggle="dropdown" tabindex="-1" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                                        <ul role="menu" class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control"/></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group"><input type="text" class="form-control"/>

                                                    <div class="input-group-btn">
                                                        <button type="button" tabindex="-1" class="btn btn-default">Action</button>
                                                        <button type="button" data-toggle="dropdown" tabindex="-1" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6"><h4 class="box-heading">Button Addons On Both Sides</h4>

                                        <div class="input-group"><span class="input-group-btn"><button type="button" class="btn btn-default">Go!</button></span><input type="text" class="form-control"/><span class="input-group-btn"><button type="button" class="btn btn-default">Go!</button></span></div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Buttons With Dropdowns On Both Sides</h4>

                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control"/>

                                            <div class="input-group-btn">
                                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="list-group-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4"><h4 class="box-heading">Basic</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                        </ul>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Contextual classes</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Badges</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active">Cras justo odio<span class="badge badge-info pull-right">4</span></a><a href="#" class="list-group-item">Dapibus ac facilisis in<span class="badge badge-warning pull-right">2</span></a><a href="#" class="list-group-item">Morbi leo risus<span
                                                class="badge badge-danger pull-right">3</span></a><a href="#" class="list-group-item">Porta ac consectetur ac<span class="badge badge-info pull-right">8</span></a><a href="#" class="list-group-item">Vestibulum at eros<span class="badge badge-success pull-right">1</span></a><a href="#" class="list-group-item">Morbi leo risus<span
                                                class="badge badge-danger pull-right">5</span></a></div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Contextual classes with '.active'</h4>

                                        <div class="list-group"><a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a><a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a><a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a><a href="#" class="list-group-item list-group-item-danger">Vestibulum at
                                            eros</a></div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Linked Items</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active">Cras justo odio</a><a href="#" class="list-group-item">Dapibus ac facilisis in</a><a href="#" class="list-group-item">Morbi leo risus</a><a href="#" class="list-group-item">Porta ac consectetur ac</a><a href="#" class="list-group-item">Vestibulum at eros</a><a href="#"
                                                                                                                                                                                                                                                                                                                                                                                class="list-group-item">Morbi
                                            leo risus</a></div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Custom Content</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active"><h4 class="list-group-item-heading">List group item heading</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">List group item heading</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">List group item heading</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p></a></div>
                                    </div>
                                </div>
                            </div>
                            <div id="navbar-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Default Navbar</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                                    <ul class="nav navbar-nav">
                                                        <li class="active"><a href="#">Link</a></li>
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">One more separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <form role="search" class="navbar-form navbar-left">
                                                        <div class="form-group"><input type="text" placeholder="Search" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-green">Submit</button>
                                                    </form>
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Forms</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                                                    <form role="search" class="navbar-form navbar-left">
                                                        <div class="form-group"><input type="text" placeholder="Search" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-green">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Buttons</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-3" class="collapse navbar-collapse">
                                                    <button type="button" class="btn btn-green navbar-btn">Sign in</button>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Text</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-4" class="collapse navbar-collapse"><p class="navbar-text">Signed in as Mark Otto</p></div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Non-nav links</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-5" class="collapse navbar-collapse"><p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p></div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="block-heading">Navbar</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                                    <ul class="nav navbar-nav">
                                                        <li class="active"><a href="#">Link</a></li>
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">One more separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <form role="search" class="navbar-form navbar-left">
                                                        <div class="form-group"><input type="text" placeholder="Search" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                        <div class="panel">
                                            <div class="panel-body"><h4>Home</h4>

                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                                    Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="thumbnail-tab" class="tab-pane fade"><h4 class="box-heading">Default Thumbnails</h4>

                                <div class="row">
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                </div>
                                <h4 class="box-heading">Custom Content</h4>

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello"/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello"/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello"/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello" alt="..."/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="other-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6"><h4 class="box-heading">Tooltip</h4>
                                        <button type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left" class="btn btn-default">Tooltip on left</button>
                                        &nbsp;
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="btn btn-default">Tooltip on top</button>
                                        &nbsp;
                                        <button type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" class="btn btn-default">Tooltip on bottom</button>
                                        &nbsp;
                                        <button type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right" class="btn btn-default">Tooltip on right</button>
                                    </div>
                                    <div class="col-lg-6"><h4 class="box-heading">Popovers</h4>
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on left</button>
                                        &nbsp;
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on top</button>
                                        &nbsp;
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on bottom</button>
                                        &nbsp;
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on right</button>
                                    </div>
                                </div>
                                <div class="mbxl"></div>
                                <div class="row">
                                    <div class="col-lg-4"><h4 class="box-heading">Large Well</h4>

                                        <div class="well well-lg">Look, I'm in a large well!</div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Default Well</h4>

                                        <div class="well">Look, I'm in a well!</div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Small Well</h4>

                                        <div class="well well-sm">Look, I'm in a small well!</div>
                                    </div>
                                </div>
                                <div class="mbxl"></div>
                                <div class="row">
                                    <div class="col-lg-6"><h4 class="box-heading">Media object</h4>

                                        <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                            <div class="media-body"><h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                        </div>
                                        <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                            <div class="media-body"><h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                    <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6"><h4 class="box-heading">Media List</h4>
                                        <ul class="media-list">
                                            <li class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                <div class="media-body"><h4 class="media-heading">Media heading</h4>

                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                                    <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                        <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                            <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                                <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                        <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media"><a href="#" class="pull-right"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                <div class="media-body"><h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                </div>

@endsection