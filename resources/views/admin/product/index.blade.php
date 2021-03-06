@extends('layouts.vertical-menu.master')

@section('css')
<style>
.paging-section {
    display: flex!important;
    justify-content: flex-end;
    margin: 13px 0px;
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

                                    <li class="breadcrumb-item"><a href="#">Product</a></li>

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

                                <a href="{{ route('dashboard.product.create') }}" class="btn btn-info-light ">

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
                                            <button type="submit" class="form-control src-btn" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-upload" aria-hidden="true"></i></button>
                                            <a href="{{route('dashboard.export-product')}}"  class="form-control src-btn"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                
                                            <form>
                                                <div class="search_bar d-flex">  
                                                    <input type="" class="form-control" id="search" name="search" value="{{ (request()->get('search') != null) ? request()->get('search') : ''}}" placeholder="Search"></input>
                                                    <button type="submit" class="form-control src-btn" ><i class="angle fe fe-search"></i></button>
                                                    <a class="form-control src-btn" href="{{ route('dashboard.product.index') }}"><i class="angle fe fe-rotate-ccw"></i></a>
                                                </div>
                                            </form>
                                          
                                               </div>
                                            <table id="" class="table table-striped table-bordered text-nowrap w-100">

                                                <thead>

                                                    <tr>

                                                        <th  class="wd-10p">id</th>

                                                        <th class="wd-15p">Product Name</th>

                                                        <th class="wd-15p">Price</th>

                                                        <th class="wd-20p">Category</th>
                                                        <th class="wd-20p">Is Publish</th>

                                                        <th class="wd-20p">image</th>

                                                        <th class="wd-15p">Action</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                @if(count($product)>0)

                                                    @foreach($product as $key => $item)

                                                    <tr>

                                                        <td>{{$item->id ?? '' }}</td>

                                                        <td>{{$item->pname ?? '' }}</td>

                                                        <td> $ {{$item->s_price ?? '' }}</td>

                                                        <td>{{$item->title ?? '' }}</td>
                                                        <td> 
                                                            @if($item->is_publish == 0)
                                                                <span class="tag tag-red">Pending</span>
                                                            @else
                                                                <span class="tag tag-azure">Published</span>
                                                            @endif
                                                        </td>


                                                        <td><img src="{{url('products/feature').'/'.$item->featured_image}}" alt="" style="height:50px"></td>

                                                        <td>

                                                                @can('product_edit')

                                                                 <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.product.edit', $item->id) }}"><i class="fa fa-edit"></i> </a>

                                                                @endcan 

                                                                @if(Auth::user()->roles->first()->title == "Admin")
                                                                    @if($item->is_publish != 1)
                                                                    <a data-toggle="tooltip" title="approve" class="btn btn-sm btn-secondary" href="{{ route('dashboard.approve-product', $item->id) }}"><i class="fa fa-check"></i> </a>
                                                                    @endif
                                                                {{--<a data-toggle="tooltip" title="reject" class="btn btn-sm btn-secondary" href="{{ route('dashboard.reject-product', $item->id) }}"><i class="fa fa-ban"></i> </a>--}}
                                                                @endif

                                                                @can('product_delete')

                                                                    <form action="{{ route('dashboard.product.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">

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
                                        <div id="pagination">{{{ $product->links() }}}</div>
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

            <form action ="{{ route('dashboard.import-product') }}" method="post" enctype="multipart/form-data"> 
                @csrf

                <div class="modal-body">

                    <label class="form-label">Import product</label>
                    <input type="file" class="form-control" name="importfile" value="" required>

                </div>
               

                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Import</button>

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
});
</script>
@endsection

 