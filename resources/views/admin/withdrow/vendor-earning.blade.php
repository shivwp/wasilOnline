@extends('layouts.vertical-menu.master')

@section('css')

<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">

@endsection

@section('page-header')

                        <!-- PAGE-HEADER -->

                            <div>

                                <h1 class="page-title">{{$title}}</h1>

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">tax</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">List</li>

                                </ol>

                            </div>

                        

                        <!-- PAGE-HEADER END -->

@endsection

@section('content')

                        <!-- ROW-1 OPEN-->

                            <!-- ROW-1 OPEN -->

                            <div class="row">

                            <div class="col-md-12 col-lg-12">

                                <div class="card">

                                <div class="addnew-ele">

                                

                            </div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <div class="paging-section">

                                            <form method="get" class="page-number"  >

                                                    <h6 class="page-num">show</h6>

                                                      <select id="pagination" name="paginate"class="form-control select2">

                                                        <option value="10" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 10) ? 'selected':''}}>10</option>

                                                        <option value="20" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 20) ? 'selected':''}}>20</option>

                                                        <option value="30" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 30) ? 'selected':''}}>30</option>

                                                        <option value="50" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 40) ? 'selected':''}}>30</option>

                                                   @if(isset($_GET['page']))<input type="hidden" name="page" value="{{$_GET['page']}}">@endif

                                                   <input type="submit" name="" style="display:none;">

                                               </form>

                                                <form>

                                                  <div class="search_bar d-flex">  

                                                   <input type="" class="form-control" id="search" name="search" value="{{ (request()->get('search') != null) ? request()->get('search') : ''}}" placeholder="Search"></input>

                                                  <button type="submit" class="form-control src-btn" ><i class="angle fe fe-search"></i></button>

                                                   <a class="form-control src-btn" href="{{ route('dashboard.tax.index') }}"><i class="angle fe fe-rotate-ccw"></i></a>

                                              </div>

                                          </form> 

                                               </div>

                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                <thead>

                                                    <tr>

                                                        <th>id</th>

                                                        <th class="wd-15p">OrderId</th>

                                                        <th class="wd-15p">Vendor</th>

                                                        <th class="wd-15p">Product</th>
                                                        <th class="wd-15p">Vendor Earning</th>
                                                        <th class="wd-15p">Withdrawal status</th>
                                                        <th class="wd-15p">Note</th>
                                                        @can('can_withdrow')
                                                        <th class="wd-15p">Withdrow</th>
                                                        @endcan
                                                        @if(Auth::user()->roles->first()->title == 'Admin')
                                                        <th class="wd-15p">Request Approve</th>
                                                        @endif
                                                        

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                @if(count($vendor_earning)>0)

                                                    @foreach($vendor_earning as $key => $item)

                                                        <tr>

                                                            <td>{{ $item->id ?? '' }}</td>

                                                            <td>#0{{ $item->order_id ?? '' }}</td>

                                                            <td>{{ $item->vendor ?? '' }}</td>
                                                            <td>{{ $item->product ?? '' }}</td>
                                                            <td>{{ $item->amount ?? '' }}</td>
                                                            <td>
                                                                <span class="tag tag-blue">{{ $item->withdrawal_status ?? '' }}</span>
                                                            </td>
                                                            <td>
                                                                {{ $item->note ?? '' }}
                                                            </td>
                                                          
                                                            <td>
                                                                @can('can_withdrow')
                                                                {{--<a class="btn btn-sm btn-primary" href=""><i class="fa fa-eye"></i></a>--}}
                                                                @if($item->can_withdrow == true)
                                                                 <a class="btn btn-sm btn-secondary withdrow" href="{{ route('dashboard.withdrow.edit', $item->id) }}" data-toggle="modal" data-target="#exampleModal" data-attr1 = "{{$item->order_id}}" data-attr2 = "{{$item->amount}}" data-attr3 = "{{$item->id}}"><i class="fa fa-money"></i> </a>
                                                                 @else
                                                                 <button class="btn btn-sm btn-secondary" href="{{ route('dashboard.withdrow.edit', $item->id) }}" disabled><i class="fa fa-money" ></i> </button>
                                                                @endif
                                                                @endcan
                                                                @if(Auth::user()->roles->first()->title == 'Admin')
                                                                <a class="btn btn-sm btn-secondary withdrow-approve" href="{{ route('dashboard.withdrow.edit', $item->id) }}" data-toggle="modal" data-target="#exampleModal2"  data-attr3 = "{{$item->id}}">  <i class="fa fa-check"></i> </a>
                                                                <a class="btn btn-sm btn-secondary withdrow-reject" href="{{ route('dashboard.withdrow.edit', $item->id) }}" data-toggle="modal" data-target="#exampleModal3"  data-attr3 = "{{$item->id}}">   <i class="fa fa-ban"></i> </a>
                                                                @endif
                                                                
                                                               

                                                            </td>
                                                       
                                                        </tr>

                                                    @endforeach

                                                @endif

                                                </tbody>

                                            </table>

                                        </div>

                                          <div id="pagination">{{{ $vendor_earning->links() }}}</div>

                                    </div>

                                    <!-- TABLE WRAPPER -->

                                </div>

                                <!-- SECTION WRAPPER -->

                            </div>

                        </div>

                        <!-- ROW-1 CLOSED -->    
    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
    
        <div class="modal-content">
    
        <form action ="{{ route('dashboard.req-withdrow') }}" method="post"> 
            @csrf
    
            <input type="hidden" class="form-control withdroworderid"  name="withdroworderid" value="">
            <input type="hidden" class="form-control withdrawid"  name="withdrowid" value="">
    
            <div class="modal-body">
    
                <label class="form-label">Withdow Amount</label>
                <input type="number" class="form-control withdrowamount" name="amount" placeholder="amount" value="" min="500" readonly required>
    
            </div>
            <div class="modal-body">
                <label class="form-label">Payment method</label>
                <select class="form-control select2" name="method">
                    <option value="stripe">Bank</option>
                </select>
            </div>
    
            <div class="modal-footer">
    
                <button type="submit" class="btn btn-primary">Send request</button>
    
            </div>
    
            </form>
    
        </div>
    
        </div>
    
    </div> 
    
    <!-- Modal -->

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
    
        <div class="modal-content">
    
        <form action ="{{ route('dashboard.approve-request') }}"> 
    
            <input type="hidden" class="form-control withdrowid"  name="id" value="">
            <input type="hidden" class="form-control "  name="status" value="approved">
            <div class="modal-body">
                <h5>Approve</h5>
            </div>
            <div class="modal-body">
    
            <label>Add Comment</label>
    
            <textarea class="form-control" name="comment" value=""></textarea>
    
            </div>
    
            <div class="modal-footer">
    
                <button type="submit" class="btn btn-primary">Save changes</button>
    
            </div>
    
            </form>
    
        </div>
    
        </div>
    
    </div> 
  
  <!-- Modal -->
  
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog" role="document">
    
        <div class="modal-content">
    
        <form action ="{{ route('dashboard.reject-request') }}"> 
    
            <input type="hidden" class="form-control withdrowid"  name="id" value="">
            <input type="hidden" class="form-control "  name="status" value="decline">
            <div class="modal-body">
                <h5>Decline</h5>
            </div>
    
            <div class="modal-body">
    
            <label>Add Comment</label>
    
            <textarea class="form-control" name="comment" value=""></textarea>
    
            </div>
    
            <div class="modal-footer">
    
                <button type="submit" class="btn btn-primary">Save changes</button>
    
            </div>
    
            </form>
    
        </div>
    
        </div>
    
    </div>   


  @endsection

@section('js')

<script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/datatable/datatable.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<script type="text/javascript">

$(document).ready(function() {

  $('#pagination').on('change', function() {

    var $form = $(this).closest('form');

    //$form.submit();

    $form.find('input[type=submit]').click();

    console.log( $form);

  });
  $('.withdrow').on('click', function() {
        var withdrow = $(this).attr("data-attr2");
        var withdroworder = $(this).attr("data-attr1");
        var withdrowid = $(this).attr("data-attr3");
        $('.withdroworderid').val(withdroworder);
        $('.withdrowamount').val(withdrow);
        $('.withdrawid').val(withdrowid);
  }); 
  $('.withdrow-approve').on('click', function() {
        var withdrowid = $(this).attr("data-attr3");
        $('.withdrowid').val(withdrowid);
  }); 
  $('.withdrow-reject').on('click', function() {
        var withdrowid = $(this).attr("data-attr3");
        $('.withdrowid').val(withdrowid);
  });
});
  

</script>

@endsection

 