@extends('layouts.anis')
@section('content')
<br><br><br><br><br>

<div class='row col-md-12'>
 <div class="dataTables_wrapper form-inline no-footer col-md-6" id="detailedTable_wrapper">
<h2>Boards you belong to</h2>
 	<table role="grid" class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable">
                        <thead>
                          <tr role="row">
                          	<th colspan="1" rowspan="1" class="sorting_disabled" style="width:119px">Board</th>
                          	<th colspan="1" rowspan="1" class="sorting_disabled" style="width: 119px;">members</th>
                          	<th colspan="1" rowspan="1" class="sorting_disabled" style="width: 119px;">Price</th>
                          </tr>
                        </thead>
                     

@foreach ($boards as $board)
<form action="/boards/{{$board->board_code}}">


</form>
<div class="table-responsive">
                     
                          
                             
                          
                          <tbody>
                        <tr class="odd" role="row">
                            <td class="v-align-middle semi-bold">{{$board->BoardName}}</td>
                            <td class="v-align-middle">{{$board->no_of_members}}</td>
                            <td class="v-align-middle"><a href="/boards/{{$board->board_code}}">check in</a></td>
                          </tr>

                         </tbody>
                      
@endforeach
</table>
</div>
</div>

<div class="panel panel-transparent">
              <div class="panel-heading">
                <div class="panel-title">Pages Default Tables Style
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input id="search-table" class="form-control pull-right" placeholder="Search" type="text">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="dataTables_wrapper form-inline no-footer" id="tableWithSearch_wrapper"><div class="table-responsive"><table aria-describedby="tableWithSearch_info" role="grid" class="table table-hover demo-table-search dataTable no-footer" id="tableWithSearch">
                  <thead>
                    <tr role="row"><th aria-sort="ascending" aria-label="Title: activate to sort column descending" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting_asc">Board Name</th><th aria-label="Places: activate to sort column ascending" style="width: 179px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">Admin</th><th aria-label="Activities: activate to sort column ascending" style="width: 199px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">Description</th><th aria-label="Status: activate to sort column ascending" style="width: 110px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">Status</th><th aria-label="Last Update: activate to sort column ascending" style="width: 149px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">Created</th></tr>
                  </thead>
                  <tbody>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    @foreach($boards as $board)
                    
                  <tr class="odd" role="row">
                      <td class="v-align-middle semi-bold sorting_1">
                        <p>{{$board->BoardName}}</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">admin</a>
                       
                      </td>
                      <td class="v-align-middle">
                        <p>{{$board->BoardDescription}}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>@if($board->is_closed==1)
                        	closed
                        	@else
                        	open
                        	@endif
                        </p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13
                        	@if($board->is_closed==1)
                         <button class='btn btn-primary'>Apply</button>
                         	@else
                         	<form method="post" action="board/join/{{$board->board_code}}">
                         		{{csrf_field()}}
                         	<input class='btn btn-primary' value="Join" type="submit">
                         </form>
                         	@endif
                         	@if($board->discussion_made_public==1)
                         	 <button class='btn btn-primary'>View Discussion</button>
                         	 @endif
                     </p>
                      </td>
                    </tr>

                    @endforeach
                </tbody>
                </table></div><div class="row"><div><div id="tableWithSearch_paginate" class="dataTables_paginate paging_simple_numbers"><ul class=""><li id="tableWithSearch_previous" class="paginate_button previous disabled"><a tabindex="0" data-dt-idx="0" aria-controls="tableWithSearch" href="#"><i class="pg-arrow_left"></i></a></li><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="tableWithSearch" href="#">1</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="2" aria-controls="tableWithSearch" href="#">2</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="3" aria-controls="tableWithSearch" href="#">3</a></li><li id="tableWithSearch_next" class="paginate_button next"><a tabindex="0" data-dt-idx="4" aria-controls="tableWithSearch" href="#"><i class="pg-arrow_right"></i></a></li></ul></div><div aria-live="polite" role="status" id="tableWithSearch_info" class="dataTables_info">Showing <b>1 to 5</b> of 12 entries</div></div></div></div>
              </div>
            </div>




@endsection