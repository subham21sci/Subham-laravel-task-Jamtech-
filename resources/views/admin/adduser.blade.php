@extends('layout')
@section('title_section')
add user
@stop
@section('css_section')
@stop
@section('content_section')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add user</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add user</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
                            @if(Session::has('flash_message'))      
              <div class="alert {{ Session::get('alert-class', 'alert-danger') }}"> {{ Session::get('flash_message') }} <i class='bx bx-close'></i>
                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a> 
              </div>
            @endif
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head text-center">
                                                        <form  enctype="multipart/form-data"  method="post" id="form_sample_1" class="form-horizontal pt-5">
                                                            @csrf

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Name</label>
                                                                    <div class="col-md-5">
                                                                        <input type="text" name="name" 
                                                                            class="form-control input-height" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Profile Photo</label>
                                                                    <div class="col-md-5">
                                                                        <input type="file" name="photo" 
                                                                            class="form-control input-height" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Mobile number</label>
                                                                    <div class="col-md-5">
                                                                        <input type="number" name="mobile" 
                                                                            class="form-control input-height" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Email Id</label>
                                                                    <div class="col-md-5">
                                                                        <input type="email" name="email" 
                                                                            class="form-control input-height" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Gender</label>
                                                                    <div class="col-md-5">
                                                                       <select name="gender" class="form-control" id="">
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                        <option value="other">Other</option>
                                                                       </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Address</label>
                                                                    <div class="col-md-5">
                                                                    <textarea class="form-control" name="address" rows="3"></textarea>
                                                                    </div>
                                                                </div>

                                                                

                                                                
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="offset-md-3 col-md-9 text-right">
                                                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
@stop
@section('js_section')
@stop