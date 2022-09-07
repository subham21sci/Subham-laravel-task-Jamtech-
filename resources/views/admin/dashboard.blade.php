@extends('layout')
@section('title_section')
@stop
@section('css_section')

@stop
@section('content_section')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head text-center">
                                                        <h1>Welcome {{Auth::user()->name}}</h1>
													</div>
													</div>
												</div>
												
											</div>
                                            <div class="col-md-12">
                                            <div class="card card-box">
													<div class="card-head text-center">
                                                    <div class="table-scrollable">
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th>SL/No</th>
																		<th>photo</th>
																		<th> Name </th>
																		<th> Mobile</th>
																		<th> Email </th>
																	</tr>
																</thead>
																<tbody>
																    
																  @foreach($register as $r)
																	<tr class="odd gradeX">
																		<td>{{$r->id}}</td>
																		<td>
                                                                            <div class="">
                                                                                <img width="50" height="50" src="{{$r->photo}}" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>{{$r->name}}</td>
                                                                        <td>{{$r->mobile}}</td>
                                                                        <td>{{$r->email}}</td>
																		
																	</tr>
															@endforeach
																
																	
															</table>
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
			</div>
			<!-- end page content -->
@stop
@section('js_section')
@stop