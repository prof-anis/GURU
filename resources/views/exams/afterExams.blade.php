@extends('layouts.anis')
<br>
<br>
<br>
<br>
<br>
<div><form action="/home" method="post">
                            {{csrf_field()}}
                              <input type="submit"  class="btn btn-success" value="End test">                           
                                </form></div>
<div class="col-md-12 sm-no-padding ">
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
                          <h3> <span class="semi-bold">Done</span>  and dusted!!!</h3>

                          <br>
                          <div>
                            <div class="col-md=12 col-md-offset-4">
                             <h1> <span   class='semi-bold' >{{$percentageScore}}</span></h1>
                              <div class="chat-status available">
                              </div>
                            </div>
                            <div class="col-md-offset-2">
                              </b>
                            
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>