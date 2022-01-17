<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoleRequest;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class RolesController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->roles()->get());
        abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all();

        $title = 'Roles';

        $buton_name = 'Add New';
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $roles =Role::paginate($pagination)->withQueryString();
        return view('admin.roles.index', compact('roles','title','buton_name'));
    }

    public function create()
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = Permission::all()->pluck('title', 'id');

        $title = ' Roles';

        return view('admin.roles.create', compact('permissions','title'));
    }

    public function store(Request $request)
    {
        $role = Role::updateOrCreate(['id'=> $request->id],$request->all());
        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route('dashboard.roles.index');

    }

    public function edit($id)
    {

        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

         $title = 'Roles';

        $role = Role::findOrFail($id);

        $role->load('permissions');

         $permissions = Permission::all()->pluck('title', 'id');

        return view('admin.roles.create', compact('role','title','permissions'));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
       

    }

    public function show(Role $role)
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role->load('permissions');

        return view('admin.roles.show', compact('role'));
    }

    public function destroy($id)
    {
       // abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role = Role::findOrFail($id);

        $role->delete();

        return back();

    }

    public function massDestroy(MassDestroyRoleRequest $request)
    {
        Role::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
