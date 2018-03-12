@extends('layouts.admin')
@section('content')

<div class="panel-body">
                <div class="dataTables_wrapper form-inline no-footer" id="tableWithSearch_wrapper"><div class="table-responsive"><table aria-describedby="tableWithSearch_info" role="grid" class="table table-hover demo-table-search dataTable no-footer" id="tableWithSearch">
                  <thead>
                    <tr role="row">
                    	<th aria-sort="descending" aria-label="Title: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting_desc">Question</th>
                    	<th aria-label="Places: activate to sort column ascending" style="width: 179px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">option a</th>
                    	<th aria-label="Activities: activate to sort column ascending" style="width: 199px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">option b</th>
                    	<th aria-label="Status: activate to sort column ascending" style="width: 110px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">option c</th>
                    	<th aria-label="Last Update: activate to sort column ascending" style="width: 149px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">option d</th>
                    	<th aria-label="Last Update: activate to sort column ascending" style="width: 149px;" colspan="1" rowspan="1" aria-controls="tableWithSearch" tabindex="0" class="sorting">correct option</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  @foreach($get as $getter)  
                    
                  <tr class="odd" role="row">
                      <td class="v-align-middle semi-bold sorting_1">
                        <p>{{$getter->questions}}</p>
                      </td>
                      <td><p>{{$getter->a}}</p></td>
                      <td class="v-align-middle">
                        <p>{{$getter->b}}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{$getter->c}}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{$getter->d}}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{$getter->ans}} <br><a  class="btn btn-success" href="{{route('showeditquestion',['ques_id'=>$getter->id])}}">edit</a></p>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                </table></div><div class="row"><div><div id="tableWithSearch_paginate" class="dataTables_paginate paging_simple_numbers"><ul class=""><li id="tableWithSearch_previous" class="paginate_button previous disabled"><a tabindex="0" data-dt-idx="0" aria-controls="tableWithSearch" href="#"><i class="pg-arrow_left"></i></a></li><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="tableWithSearch" href="#">1</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="2" aria-controls="tableWithSearch" href="#">2</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="3" aria-controls="tableWithSearch" href="#">3</a></li><li id="tableWithSearch_next" class="paginate_button next"><a tabindex="0" data-dt-idx="4" aria-controls="tableWithSearch" href="#"><i class="pg-arrow_right"></i></a></li></ul></div><div aria-live="polite" role="status" id="tableWithSearch_info" class="dataTables_info">Showing <b>1 to 5</b> of 12 entries</div></div></div></div>
              </div>

<div class="col-md-12">
{{$get->links()}}
</div>

@endsection