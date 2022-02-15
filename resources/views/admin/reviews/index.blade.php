@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="page-title">{{$title}}</h1>
                               
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
                                                   <a class="form-control src-btn" href="{{ route('dashboard.review.index') }}"><i class="angle fe fe-rotate-ccw"></i></a>
                                              </div>
                                          </form> 
                                               </div>
                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">Id</th>
                                                        <th class="wd-15p">Name</th>
                                                        <th class="wd-15p">Email</th>
                                                        <th class="wd-15p">Comment</th>
                                                        <th class="wd-15p">Ratings</th>
                                                        <th class="wd-15p">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($review)>0)
                                                    @foreach($review as $key => $item)
                                                    <tr>
                                                        <td>{{$item->id ?? '' }}</td>
                                                        <td>{{$item->name ?? '' }}</td>
                                                        <td>{{$item->email ?? '' }}</td>
                                                        <td>{{$item->comment ?? '' }}</td>
                                                        <td>
                                                            @for ($i = 0; $i < 5; $i++)
                                                            @if ($i < $item->rating_number )
                                                            <i class="fa fa-star " style="color:#e5df2e" aria-hidden="true"></i>
                                                            @else
                                                            <i class="fa fa-star" style="color: #979797" aria-hidden="true"></i>
                                                            @endif
                                                            @endfor
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('dashboard.review.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">

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
                                         <div id="pagination">{{{ $review->links() }}}</div>
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
 