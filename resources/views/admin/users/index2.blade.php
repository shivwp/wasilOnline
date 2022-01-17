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
                                            <form method="get"  >
                                                    <h6>show</h6>
                                                    <select id="pagination" name="paginate">
                                                        <option value="10" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 10) ? 'selected':''}}>10</option>
                                                        <option value="20" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 20) ? 'selected':''}}>20</option>
                                                        <option value="30" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 30) ? 'selected':''}}>30</option>
                                                        <option value="50" {{ isset($_GET['paginate']) && ($_GET['paginate'] == 40) ? 'selected':''}}>30</option>
                                                   @if(isset($_GET['page']))<input type="hidden" name="page" value="{{$_GET['page']}}">@endif
                                                   <input type="submit" name="" style="display:none;">
                                               </form>
                                                <div id="pagination">{{{ $users->links() }}}</div>
                                               </div>
                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="wd-15p">Name</th>
                                                        <th class="wd-15p">Email</th>
                                                        <th class="wd-15p">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @if(count($users)>0)
                                                    @foreach($users as $key => $item)
                                                        <tr>
                                                            <td>{{ $item->id ?? '' }}</td>
                                                            <td>{{ $item->first_name ?? '' }}</td>
                                                            <td>{{ $item->email ?? '' }}</td>
                                                            <td>{{ $item->address ?? '' }} , 
                                                            {{ $item->address2 ?? '' }} , 
                                                            {{ $item->city ?? '' }} , 
                                                            {{ $item->country ?? '' }} , 
                                                            {{ $item->state ?? '' }} , 
                                                            {{ $item->zip_code ?? '' }} , 
                                                            {{ $item->landmark ?? '' }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                         <div id="pagination">{{{ $users->links() }}}</div>
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
 