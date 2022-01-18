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
                                    <li class="breadcrumb-item"><a href="#">Order</a></li>
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
                                            <form method="get">
                                                    <h6>show</h6>
                                                    <select id="pagination" name="paginate">
                                                        <option value="10" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 10) ? 'selected':''}}>10</option>
                                                        <option value="20" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 20) ? 'selected':''}}>20</option>
                                                        <option value="30" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 30) ? 'selected':''}}>30</option>
                                                        <option value="40" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 40) ? 'selected':''}}>40</option>
                                                   @if(isset($_GET['page']))<input type="hidden" name="page" value="{{$_GET['page']}}">@endif
                                                   <input type="submit" name="" style="display:none;">
                                               </form>
                                                <div id="pagination">{{{ $order->links() }}}</div>
                                               </div>
                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">ORDER number</th>
                                                        <th class="wd-15p">status</th>
                                                        <th class="wd-15p">amount</th>
                                                        <th class="wd-15p">shipping charge</th>
                                                        <th>action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($order)>0)
                                                    @foreach($order as $key => $item)
                                                        <tr>
                                                            <td>{{ $item->id ?? '' }}</td>
                                                            @if($item->status == 'new')
                                                            <td ><span class=" tag tag-blue">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'in process')
                                                            <td ><span class=" tag tag-azure">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'shipped')
                                                            <td ><span class=" tag tag-indigo">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'packed')
                                                            <td ><span class=" tag tag-orange">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'refunded')
                                                            <td ><span class=" tag tag-gray">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'cancelled')
                                                            <td ><span class=" tag tag-red">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'delivered')
                                                            <td ><span class=" tag tag-green">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'out for delivery')
                                                            <td ><span class=" tag tag-lime">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'return')
                                                            <td ><span class=" tag tag-cyan">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'out for reach')
                                                            <td ><span class=" tag tag-gray-dark">{{ $item->status ?? '' }}</span></td>
                                                            @elseif($item->status == 'ready to ship')
                                                            <td ><span class=" tag tag-teal">{{ $item->status ?? '' }}</span></td>
                                                            @endif
                                                            <td>{{ $item->total_price ?? '' }}</td>
                                                            <td>{{ $item->shipping_price ?? '' }}</td>
                                                            <td>
                                                                @can('order_edit')
                                                                <a class="btn btn-sm btn-primary" href="{{ route('dashboard.order.edit', $item->id) }}"><i class="fa fa-eye"></i></a>
                                                                 @endcan 
                                                                 @can('order_delete')
                                                                    <form action="{{ route('dashboard.order.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}"><i class="fa fa-trash"></i></button>
                                                                    </form>
                                                               @endcan 
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                         <div id="pagination">{{{ $order->links() }}}</div>
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
 