@extends('layouts.anis')
@section('title')

Gurus|Home

@endsection

@section('content')

<div class="alert alert-success" role="alert">
                      <button class="close" data-dismiss="alert"></button>
                      <strong>Success: </strong>
                      some message from the admin
                    </div>

<div class="col-md-6 sm-no-padding ">
                  <div class="panel panel-transparent">
                    <div class="panel-body no-padding">
                      <div id="portlet-advance" class="panel panel-default">
                        <div class="panel-heading ">
                          <div class="panel-title">Portlet Title
                          </div>
                          <div class="panel-controls">
                            <ul>
                              <li>
                                <div class="dropdown">
                                  <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    <i class="portlet-icon portlet-icon-settings "></i>
                                  </a>
                                  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                    <li><a href="#">API</a>
                                    </li>
                                    <li><a href="#">Preferences</a>
                                    </li>
                                    <li><a href="#">About</a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                              </li>
                              <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                              <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                              </li>
                              <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3> <span class="semi-bold">Welcome</span> {{Auth::user()->name}}</h3>
                          <br>
                          <div>
                            <div class="col-md-offset-4">
                              <img data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar_small.jpg" alt="" src="assets/img/profiles/avatar_small.jpg" height="200" width="200" style='border-radius:100%'>
                              <div class="chat-status available">
                              </div>
                            </div>
                            <div class="col-md-offset-2">
                             
                              <form method='post' action='/exam'>
                                {{csrf_field()}}
                              <button class="btn btn-success btn-cons col-md-4 col-md-offset-3">New Test</button>
                              </form>
                            
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>



<div class="col-md-6">
                <!-- START PANEL -->
                <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="panel-title">Past Records Table
                    </div>
                    <div class="tools">
                      <a class="collapse" href="javascript:;"></a>
                      <a class="config" data-toggle="modal" href="#grid-config"></a>
                      <a class="reload" href="javascript:;"></a>
                      <a class="remove" href="javascript:;"></a>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <div class="dataTables_wrapper form-inline no-footer" id="condensedTable_wrapper">
                        <table role="grid" class="table table-hover table-condensed dataTable no-footer" id="condensedTable">
                        <thead>
                          <tr role="row">
                            <th aria-label="Title: activate to sort column descending" aria-sort="ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting_asc" style="width:30%">Course</th>
                            <th aria-label="Key: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting" style="width: 117px;">Score</th>
                                                          <th aria-label="Condensed: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting" style="width: 157px;">
                                Mode</th>
                              <th aria-label="Condensed: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting" style="width: 157px;">
                                </th></tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          @if(empty($past_record))
                          @foreach($past_records as $record)
                        <tr class="odd" role="row">
                            <td class="v-align-middle semi-bold sorting_1">{{$record->course}}</td>
                            <td class="v-align-middle">{{$record->score}}</td>
                            <td class="v-align-middle semi-bold">{{$record->created_at}}
                            </td>
                            <td class="v-align-middle semi-bold"><a href='/exam/details/{{$record->id}}/{{$record->created_at}}'>View details</a>
                            </td>

                          </tr>

                          @endforeach
                          @else
                           <tr class="odd" role="row">
                            <td class="v-align-middle semi-bold sorting_1">no records yet</td>
                            <td class="v-align-middle">no records yet</td>
                            <td class="v-align-middle semi-bold">no record yet
                            </td>
                           @endif

                          </tr>


                         </tbody>
                      </table>
                      {{$past_records->links()}}
                    </div>
                    </div>
                  </div>
                </div>
                <!-- END PANEL -->
              </div>



             

@endsection
