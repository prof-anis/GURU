<div>
<div id="counter__">{{$counter}} students are currently writing the exam</div>
<div class="col-md-6">
                <!-- START PANEL -->
                <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="panel-title">Pages condensed Table
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
                      <div class="dataTables_wrapper form-inline no-footer" id="condensedTable_wrapper"><table role="grid" class="table table-hover table-condensed dataTable no-footer" id="condensedTable">
                        <thead>
                          <tr role="row"><th aria-label="Title: activate to sort column descending" aria-sort="ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting_asc" style="width:30%">student name</th><th aria-label="Key: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting" style="width: 171px;">status</th><th aria-label="Condensed: activate to sort column ascending" colspan="1" rowspan="1" aria-controls="condensedTable" tabindex="0" class="sorting" style="width: 228px;">score</th></tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          @php
                          $i=0;
                          @endphp
                         @foreach($details as $detail) 

                        <tr class="odd" role="row">
                            <td class="v-align-middle semi-bold sorting_1">{{$users[$i]->name}}</td>
                            <td class="v-align-middle">Finished</td>
                            <td class="v-align-middle semi-bold">{{$detail->score}}
                            </td>
                          </tr>
                          @php
                          $i++;
                          @endphp
                          @endforeach
                        </tbody>
                      </table></div>
                    </div>
                  </div>
                </div>
                <!-- END PANEL -->
              </div>
            </div>