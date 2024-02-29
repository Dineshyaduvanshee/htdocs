<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    
    public function indexTaskLogin()
    {
        $Task = Task::all();

        if ($Task->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $Task
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => 'No Records Found'
            ], 404);
        }
    }

    public function storeTaskLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:191',
            'password' => 'required|string|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ], 422);
        } else {
            $Task = Task::create([
                'username' => $request->username,
               'password'=>$request->password,
            ]);

            if ($Task) {
                return response()->json([
                    'status' => 200,
                    'message' => "Login Created Successfully."
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong."
                ], 500);
            }
        }
    }
    public function showTaskLogin($id){
        $Task = Task::find($id);
        if($Task){
            return response()->json([
                'status' => 200,
                'data' => $Task
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Task' => "No Such Login Record Found."
            ], 404);
        }
    }
    public function editTaskLogin($id){
        $Task = Task::find($id);
        if($Task){
            return response()->json([
                'status' => 200,
                'data' => $Task
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Task' => "No Such Task Record Found."
            ], 404);
        }
    }
   
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:191',
    //         'course' => 'required|string|max:191',
    //         'email' => 'required|email|max:191',
    //         'phone' => 'required|digits:10',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => $validator->messages(),
    //         ], 422);
    //     } else {
    //         $student = Student::find($id);
           

    //         if ($student) {
    //             $student->update([
    //                 'name' => $request->name,
    //                 'course' => $request->course, // corrected typo from $request->courses
    //                 'email' => $request->email,
    //                 'phone' => $request->phone
    //             ]);
    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Student Updated Successfully."
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 404,
    //                 'message' => "No Such Student Found."
    //             ], 404);
    //         }
    //     }

    // }
//     public function updateTaskLogin(Request $request, $id)
// {
//     $validator = Validator::make($request->all(), [
//         'username' => 'required|string|max:191',
//         'password' => 'required|string|max:191',
//     ]);

//     if ($validator->fails()) {
//         return response()->json([
//             'status' => 422,
//             'errors' => $validator->messages(),
//         ], 422);
//     } else {
//         $Task = Task::find($id);

//         if ($Task) {
//             $Task->updateTaskLogin([
//                 'username' => $request->username,
//                 'password' => $request->password
//             ]);

//             return response()->json([
//                 'status' => 200,
//                 'message' => "Login Updated Successfully."
//             ], 200);
//         } else {
//             return response()->json([
//                 'status' => 404,
//                 'message' => "No Such Student Found."
//             ], 404);
//         }
//     }
// }
    public function destroyTaskLogin($id){
        $Task = Task::find($id);
        if($Task){
            $Task->delete();
            return response()->json([
                'status' => 200,
                'message' => "Login Deleted Successfully."
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Such Login Found."
            ]);
        }
    }
    public function updateTaskLogin(Request $request, $taskId)
    {
        $task = Task::findOrFail($taskId);
        $task->updateTaskLogin($request->all());

        return response()->json(['message' => 'Task updated successfully']);
    }
}
