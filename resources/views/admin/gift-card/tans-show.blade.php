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

                                    <li class="breadcrumb-item"><a href="#">Gift-card</a></li>

                                    

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

                                                   <a class="form-control src-btn" href="{{ route('dashboard.gift-card.index') }}"><i class="angle fe fe-rotate-ccw"></i></a>

                                              </div>

                                          </form> 

                                               </div>

                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                <thead>

                                                    <tr>

                                                        <th class="wd-10p">id</th>

                                                        <th class="wd-15p">Gift Card Code </th>

                                                        <th class="wd-15p">Purchased User </th>

                                                        <th class="wd-15p">Used By </th>

                                                        <th class="wd-15p">Remaining Amount</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                @if(count($giftcard)>0)

                                                    @foreach($giftcard as $key => $item)

                                                    <tr>

                                                        <td>{{$item->id ?? '' }}</td>

                                                        <td>{{$item->gift_card_code ?? '' }}</td>

                                                        <td>{{$item->puchased_user ?? '' }}</td>

                                                        <td>
                                                            <table>
                                                                <thead>
                                                                    <th class="wd-10p">Order </th>   
                                                                    <th class="wd-10p">User</th>   
                                                                    <th class="wd-10p">Amount Used</th>   
                                                                </thead>
                                                                @if(!empty($item->log) || count($item->log))
                                                                @foreach($item->log as $key1 => $item1)
                                                                    <tbody>
                                                                            <td>
                                                                               #{{$item1->order_id ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                    {{$item1->user ?? '' }}
                                                                            </td>
                                                                            <td>  
                                                                                ${{$item1->gift_card_amount ?? '0' }}
                                                                            </td>
                                                                    </tbody>
                                                                @endforeach
                                                                @endif
                                                                
                                                            </table>
                                                          
                                                        </td>

                                                        <td>{{$item->gift_card_amount ?? '' }}</td>

                                                        

                                                    </tr>

                                                    @endforeach

                                                @endif

                                                    

                                                </tbody>

                                            </table>

                                        </div>

                                        <div id="pagination">{{{ $giftcard->links() }}}</div>

                                    </div>

                                    <!-- TABLE WRAPPER -->

                                </div>

                                <!-- SECTION WRAPPER -->

                            </div>

                        </div>

                        <!-- ROW-1 CLOSED -->               

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

});

</script>

@endsection

 