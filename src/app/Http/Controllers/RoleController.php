<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Resources\RoleResource;
use App\Http\Requests\CreateRoleRequest;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PermissionResource;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $roles = RoleResource::collection(Role::all())->resolve(); // Ensure it's an array
        $permission = PermissionResource::collection(Permission::all())->resolve(); // Ensure it's an array

        return Inertia::render('role/AddRole',[
            'roles' => $roles,
            'permission' => $permission
        ]);

        // dd($permission);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRoleRequest $request)
    {
        // $role = Validator::make($request->all(),[
        //     'roleName' => 'required|max:255'
        // ]);
        
        // if (!$role->passes()) {
        //     return response()->json([
        //         'status' => 404,
        //         'error' => $role->errors()->toArray()
        //     ]);
        // }else{
        //     try {
        //         $inputRole = $request->all();
        //         Role::create($inputRole);
        //         return response()->json([
        //             'status'=>200,
        //             'msg'=> 'Create Role '. $request['roleName'] . ' Successfully!',
        //         ]);
        //     } catch (Exception $e) {
        //         return 'error' . $e->getMessage();
        //     }
            
        // }

        Role::create($request->validated());
        return redirect()
        ->route('add-role')
        ->with('success', 'role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        $role = Role::findById($id);
        $role->load('permissions');
        return response()->json([
            'role' => new RoleResource($role),
            'permissions' => PermissionResource::collection(Permission::all())
        ]);
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateRoleRequest $request, string $id)
    {
        $role = Role::findById($id);
        $role->update([
            'name' => $request->name
        ]);
        $role->syncPermissions($request->input('permissions.*.name'));
        return to_route('add-role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        if ($role) {
            $role->delete(); // Delete the role
        }

        return redirect()->back()->with('success', 'role deleted successfully.');
    }
}
