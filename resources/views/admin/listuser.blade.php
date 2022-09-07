@extends('layout')
@section('title_section')
user List
@stop
@section('css_section')
@stop
@section('content_section')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">User List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="/admin">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">user</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">user List</li>
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
													<div class="card-head">
														<header>All user List</header>
														<div class="tools">
															<a class="btn-color btn-success"
																href="/add-user-admin" style="padding: 3px 20px 3px 20px;"> Add</a>
														</div>
													</div>
													
														<div class="table-scrollable">
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th>SL/No</th>
																		<th> Name </th>
																		<th> Mobile</th>
																		<th> Email </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																    
																  @foreach($register as $r)
																	<tr class="odd gradeX">
																		<td>{{$r->id}}</td>
                                                                        <td>{{$r->name}}</td>
                                                                        <td>{{$r->mobile}}</td>
                                                                        <td>{{$r->email}}</td>
																		<td>
                                                                            @if($r->active == "yes")
                                                                           <span class="text-success"> Active Profile </span> 
                                                                            @else
                                                                            <form method="post" action="/user-active/{{$r->id}}">
																		  @csrf
                                                                         
																			<button  onclick="return confirm('Are you sure to Active?')" class="btn btn-danger btn-xs">
																				Active
																			</button>
																			</form>
                                                                            @endif
																		
																		</td>
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
			<!-- end page content -->
@stop
@section('js_section')
@stop