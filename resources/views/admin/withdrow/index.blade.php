@extends('layouts.vertical-menu.master')

@section('css')

<style>

.paging-section{

    display: flex!important;

     margin: 13px 5px;

     justify-content: space-between;

}

.get-filter{

    margin:0px 20px

}

</style>

<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">

@endsection

@section('page-header')

                        <!-- PAGE-HEADER -->

                            <div>

                                <h1 class="page-title">{{$title}}</h1>

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">Withdrowl</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">List</li>

                                </ol>

                            </div>

                        

                        <!-- PAGE-HEADER END -->

@endsection

@section('content')

                        <!-- ROW-1 OPEN-->

                          @if(Auth::user()->roles->first()->title == 'Vendor')

           

                         <div class="card">

                            <form  method="post" action="{{route('dashboard.withdrow.store')}}" enctype="multipart/form-data">



                                    @csrf



                                    <div class="card-body">

                                        <div class="row mb-2">

                                            <div class="col-md-12">

                                            <span>Your Current Balance: <strong>{{$vendor_earning ?? ''}}</strong></span>



                                                <br>

                                                <span>Minimum Withdrow Amount: <strong>{{$max_withdrwal_limit->value ?? ''}}</strong></span>

                                                <br>

                                                <span>Minimum Withdrow Amount: <strong>{{$min_withdrwal_limit->value ?? ''}}</strong></span>

                                                <br>

                                                <span>Withdrow Threshold: <strong>{{$withdrwal_threshould->value ?? ''}} Days</strong></span>

                                            </div>

                                        </div>





                                        <div class="row">



                                            <input type="hidden" name="id" value="{{ isset($tax) ? $tax->id : '' }}">



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                    <label class="form-label">Withdow Amount</label>



                                                    <input type="number" class="form-control" name="amount" placeholder="amount" value="" min="500" required>



                                                </div>



                                            </div>



                                            <div class="col-md-6">



                                                <div class="form-group">



                                                    <label class="form-label">Payment method</label>



                                                <select class="form-control select2" name="method">

                                                    <option value="stripe">Bank</option>

                                                    <option value="paypal">PayPal</option>

                                                </select>



                                                </div>



                                            </div>







                                        </div>



                                       



                                         @if(isset($tax->id))

                                                <button class="btn btn-success-light mt-3 " type="submit">Update</button>

                                            @else

                                                <button class="btn btn-success-light mt-3 " type="submit">Request</button>

                                            @endif

                                    </div>







                                </form>



                                    



                                </div> 

                     @endif

                            <!-- ROW-1 OPEN -->

                            <div class="row">

                            <div class="col-md-12 col-lg-12">

                                <div class="card">

                                <div class="addnew-ele">

                             {{--  <a href="{{ route('dashboard.tax.create') }}" class="btn btn-info-light ">

                                    {{$buton_name}}

                                </a>--}} 

                            </div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <div class="paging-section">

                                            <form method="get"  >

                                                    <h6>show</h6>

                                                    <select id="pagination" name="paginate" class="form-control select2">

                                                        <option value="10" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 10) ? 'selected':''}}>10</option>

                                                        <option value="20" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 20) ? 'selected':''}}>20</option>

                                                        <option value="30" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 30) ? 'selected':''}}>30</option>

                                                        <option value="50" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 40) ? 'selected':''}}>30</option>

                                                   @if(isset($_GET['page']))<input type="hidden" name="page" value="{{$_GET['page']}}">@endif

                                                   <input type="submit" name="" style="display:none;">

                                               </form>

                                            <form method="get" class="get-filter page-number" id="filter-submit">

                                                    <h6 class="page-num"> Filter</h6>

                                                    <select id="filter-status" name="status" class="form-control select2">

                                                    <option value="">all</option>

                                                        <option value="1" {{ (request()->get('status') == '1') ? 'selected' : '' }}>Approved</option>

                                                        <option value="2"{{ (request()->get('status') == '2') ? 'selected' : '' }}>Rejected</option>

                                                        <option value="0" {{ (request()->get('status') == '0') ? 'selected' : '' }}>Pending</option>

                                                    </select>

                                            </form>

                                                

                                               </div>

                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                <thead>

                                                    <tr>

                                                        <th class="wd-15p">Id</th>

                                                        <th class="wd-15p">Vendor</th>

                                                        <th class="wd-15p">Amount</th>

                                                        <th class="wd-15p">Status</th>

                                                        <th class="wd-15p">Method</th>

                                                        <th class="wd-15p">Note</th>

                                                        @if(Auth::user()->roles->first()->title == "Admin")

                                                        <th class="wd-15p">Action</th>

                                                        @endif

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                @if(count($withdrow)>0)

                                                    @foreach($withdrow as $key => $item)

                                                        <tr>

                                                            <td>{{ $item->id ?? '' }}</td>

                                                            <td>{{ $item->vendor->first_name ?? '' }}</td>

                                                            <td>{{ $item->amount ?? '' }}</td>

                                                            <td>

                                                            @if($item->status == 0)

                                                         <span class="tag tag-blue">pending</span>

                                                         @elseif($item->status == 1)

                                                         <span class="tag tag-azure">approved</span>

                                                         @else

                                                         <span class="tag tag-indigo">rejected</span>

                                                         @endif

                                                            </td>

                                                            <td>{{ $item->method ?? '' }}</td>

                                                            <td>{{ $item->note ?? '' }}</td>

                                                            @if(Auth::user()->roles->first()->title == "Admin")

                                                            <td>

                                                            <button  type="button" class="btn btn-sm btn-secondary accept" data-toggle="modal" data-target="#exampleModal" value="{{$item->id}}" >

                                                            <i class="fa fa-check"></i>

                                                            </button>

                                                            <button  type="button" class="btn btn-sm btn-secondary reject" data-toggle="modal" data-target="#exampleModal1" value="{{$item->id}}" >

                                                            <i class="fa fa-ban"></i>

                                                            </button>

                                                                

                                                                 @can('coupon_delete')

                                                                    <form action="{{ route('dashboard.tax.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">

                                                                        <input type="hidden" name="_method" value="DELETE">

                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                                        <button type="submit" class="btn btn-sm btn-danger" value=""><i class="fa fa-trash"></i></button>

                                                                    </form>

                                                                    @endcan

                                                                   

                                                               

                                                            </td>

                                                            @endif

                                                        </tr>

                                                    @endforeach

                                                @endif

                                                </tbody>

                                            </table>

                                        </div>

                                          <div id="pagination">{{{ $withdrow->links() }}}</div>

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

    <form action ="{{ route('dashboard.approve-request') }}"> 

        <input type="hidden" class="form-control withdrowid"  name="id" value="">

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

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

    <form action ="{{ route('dashboard.reject-request') }}"> 

        <input type="hidden" class="form-control withdrowrejectid"  name="id" value="">

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

  $('.accept').on('click', function() {

      var accept = $(this).val();



      $('.withdrowid').val(accept);



  }); 

  $('.reject').on('click', function() {

      var reject = $(this).val();



      $('.withdrowrejectid').val(reject);



  });

  $('#filter-status').on('change', function() {

        $('#filter-submit').submit();

    });       

});

</script>

@endsection





 