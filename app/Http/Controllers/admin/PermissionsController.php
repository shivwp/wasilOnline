<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PermissionsController extends Controller
{
    public function index(Request $request)
    {
       
        abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $title = 'Permissions';
        $buton_name = 'Add New';

        $permissions = Permission::all();
         $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
         $q=Permission::select('*');
            if($request->search){
                $q->where('title', 'like', "%$request->search%");  
            }
            $permissions=$q->paginate($pagination)->withQueryString();
       

        return view('admin.permissions.index', compact('permissions','title','buton_name'));
    }

    public function create()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $d['title'] = "Permissions";

        return view('admin.permissions.create',$d);
    }

    public function store(Request $request)
    {
        $permission = Permission::updateOrCreate(['id'=>$request->id],$request->all());

        return redirect()->route('dashboard.permissions.index');

    }

    public function edit($id)
    {
      
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $d['title'] = "Permissions";

        $d['permission'] = Permission::findOrFail($id);

        return view('admin.permissions.create', $d);
    }

    public function update(Request $request)
    {
       

    }

    public function show(Permission $permission)
    {
        abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permissions.show', compact('permission'));
    }

    public function destroy($id)
    {
        //abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

         $permission = Permission::findOrFail($id);

        $permission->delete();

        return back();

    }

    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        Permission::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
