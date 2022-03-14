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
                                    <li class="breadcrumb-item"><a href="#">tickets</a></li>
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
                                <a href="{{ route('dashboard.support-tickets.create') }}" class="btn btn-info-light ">
                                    {{$buton_name}}
                                </a>
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
                                                
                                                   <a class="form-control src-btn" href="{{ route('dashboard.category.index') }}"><i class="angle fe fe-rotate-ccw"></i></a>
                                              </div>
                                          </form> 
                                                <!-- <div id="pagination">{{{ $tickets->links() }}}</div> -->
                                               </div>
                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">
                                                
                                                <thead id="t-head">
                                                    <tr>
                                                        <th class="wd-10p">id</th>
                                                        <th class="wd-15p">Support Type</th>
                                                        <th class="wd-15p">Order</th>
                                                        <th class="wd-15p">User</th>
                                                        <th class="wd-15p">Source</th>
                                                        <th class="wd-15p">Status</th>
                                                        <th class="wd-15p">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($tickets)>0)
                                                    @foreach($tickets as $key => $item)
                                                    <tr>
                                                        <td>{{$item->id ?? '' }}</td>
                                                        <td>{{$item->category->title ?? '' }}</td>
                                                        <td>#O{{$item->order->id ?? '' }}</td>
                                                       
                                                        <td>{{$item->user->first_name ?? '' }}</td>
                                                        <td>{{$item->source ?? '' }}</td>
                                                        @if($item->status == 0)
                                                        <td ><span class=" tag tag-blue">Open</span></td>
                                                        @else
                                                        <td ><span class="tag tag-red">Closed</span></td>
                                                        @endif
                                                       
                                                        <td>
                                                               
                                                                 <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.support-tickets.edit', $item->id) }}"><i class="fa fa-edit"></i> </a>


                                                                 <a class="btn btn-sm btn-primary" href="{{ route('dashboard.support-tickets.show', $item->id) }}"><i class="fa fa-eye"></i></a>
                                                                 @if($item->status == 0)
                                                                 <button  type="button" class="btn btn-sm btn-dark close-ticket" data-toggle="modal" data-target="#exampleModal" value="{{$item->id}}" >
                                                                <i class="fa fa-window-close"></i>
                                                                </button>
                                                                @endif
                                                               
                                                                    <form action="{{ route('dashboard.support-tickets.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}"><i class="fa fa-trash"></i></button>
                                                                    </form>
                                                               
                                                            </td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="pagination">{{{ $tickets->links() }}}</div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->
                        
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action ="{{ route('dashboard.close-ticket') }}" method="post"> 
            @csrf
            <input type="hidden" class="form-control ticketid"  name="id" value="">
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
  $('.close-ticket').on('click', function() {
      var close = $(this).val();
      $('.ticketid').val(close);

  }); 
});

//     $("select").change(function() {
//      var paging = this.value;
//      $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

//     $.ajax({
       
//         url: '{{ route("dashboard.category-pagination") }}', 
//         type: 'POST',
//         headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
//         data: {option : paging},
        
//         success: function(response) {
//               $('tbody').html( response.html);
//         }
//     });
// });

</script>

@endsection
 