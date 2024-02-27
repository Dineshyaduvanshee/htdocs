<?php

namespace App\Http\Controllers\app\Http\Controllers\Api;
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        $admin = admin::all();

        if ($admin->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $admin
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => 'No Records Found'
            ], 404);
        }
    }

    public function storeAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'course' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ], 422);
        } else {
            $admin = admin::create([
                'name' => $request->name,
                'course' => $request->course, // corrected typo from $request->courses
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            if ($admin) {
                return response()->json([
                    'status' => 200,
                    'message' => "Admin Created Successfully."
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong."
                ], 500);
            }
        }
    }
    public function showAdmin($id){
        $admin = admin::find($id);
        if($admin){
            return response()->json([
                'status' => 200,
                'data' => $admin
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Admin' => "No Such Admin Record Found."
            ], 404);
        }
    }
    public function editAdmin($id){
        $admin = admin::find($id);
        if($admin){
            return response()->json([
                'status' => 200,
                'data' => $admin
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Admin' => "No Such Admin Record Found."
            ], 404);
        }
    }
    
    public function updateAdmin(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:191',
        'course' => 'required|string|max:191',
        'email' => 'required|email|max:191',
        'phone' => 'required|digits:10',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->messages(),
        ], 422);
    } else {
        $admin = admin::find($id);

        if ($admin) {
            $admin->update([
                'name' => $request->name,
                'course' => $request->course,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            return response()->json([
                'status' => 200,
                'message' => "Admin Updated Successfully."
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No Such Admin Found."
            ], 404);
        }
    }
}
    public function destroyAdmin($id){
        $admin = admin::find($id);
        if($admin){
            $admin->delete();
            return response()->json([
                'status' => 200,
                'message' => "Admin Deleted Successfully."
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Such admin Found."
            ]);
        }
    }
    
}
