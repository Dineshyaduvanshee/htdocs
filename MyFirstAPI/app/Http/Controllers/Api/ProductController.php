<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function indexProduct()
    {
        $products = product::all();

        if ($products->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $products
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => 'No Records Found'
            ], 404);
        }
    }

    // public function storeProduct(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //     'price' => 'required|digits:6',
    //     'weight' => 'required|string|max:191',
    //     'serioul_no' => 'required|digits:6',
    //     'description' => 'required|string|max:191',
    //     'Category' => 'required|string|max:191',
    //     'Brand' => 'required|string|max:191',
    //     'Stock' => 'required|string|max:191',
    //     'Inventory' => 'required|string|max:191',
    //     'Images' => 'required|string|max:191',
    //     'Dimensions' => 'required|string|max:191',
    //     'Colors' => 'required|string|max:191',
    //     'Rating' => 'required|string|max:191',
    //     'Reviews' => 'required|string|max:191',
    //     'Availability' => 'required|string|max:191',
    //     'SKU'=>'required|string|max:191',
    //     'Specifications'=>'required|string|max:191',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => $validator->messages(),
    //         ], 422);
    //     } else {
    //         $products = product::create([
    //             'price' => $request->price,
    //             'weight' => $request->weight,
    //             'serioul_no' => $request->serioul_no,
    //             'description' => $request->description,
    //             'Category' => $request->Category,
    //             'Brand' => $request->Brand,
    //             'Stock' =>  $request->Stock,
    //             'Inventory' =>  $request->Inventory,
    //             'Images' =>  $request->Images,
    //             'Dimensions' =>  $request->Dimensions,
    //             'Colors' =>  $request->Colors,
    //             'Rating' =>  $request->Rating,
    //             'Reviews' =>  $request->Reviews,
    //             'Availability' =>  $request->Availability,
    //             'SKU'=> $request->SKU,
    //             'Specifications'=> $request->Specifications,
        
    //         ]);

    //         if ($products) {
    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Product Added Successfully."
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "Something Went Wrong."
    //             ], 500);
    //         }
    //     }
    // }

    public function storeProduct(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:191',
        'price' => 'required|digits:6',
        'weight' => 'required|string|max:191',
        'serioul_no' => 'required|digits:6',
        'description' => 'required|string|max:191',
        'Category' => 'required|string|max:191',
        'Brand' => 'required|string|max:191',
        'Stock' => 'required|string|max:191',
        'Inventory' => 'required|string|max:191',
        'Images' => 'required|string|max:191',
        'Dimensions' => 'required|string|max:191',
        'Colors' => 'required|string|max:191',
        'Rating' => 'required|string|max:191',
        'Reviews' => 'required|string|max:191',
        'Availability' => 'required|string|max:191',
        'SKU' => 'required|string|max:191',
        'Specifications' => 'required|string|max:191',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->messages(),
        ], 422);
    }

    $productData = $request->only([
       'name', 'price', 'weight', 'serioul_no', 'description', 'Category', 'Brand',
        'Stock', 'Inventory', 'Images', 'Dimensions', 'Colors', 'Rating',
        'Reviews', 'Availability', 'SKU', 'Specifications',
    ]);

    $product = Product::create($productData);

    if ($product) {
        return response()->json([
            'status' => 200,
            'message' => 'Product Added Successfully.',
        ], 200);
    }

    return response()->json([
        'status' => 500,
        'message' => 'Something Went Wrong.',
    ], 500);
}

    public function showProduct($id){
        $products = product::find($id);
        if($products){
            return response()->json([
                'status' => 200,
                'data' => $products
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Product' => "No Such Admin Record Found."
            ], 404);
        }
    }
    public function editProduct($id){
        $products = product::find($id);
        if($products){
            return response()->json([
                'status' => 200,
                'data' => $products
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'Admin' => "No Such Admin Record Found."
            ], 404);
        }
    }
    
    public function updateProduct(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
      
        'name' => 'required|string|max:191',
        'price' => 'required|digits:6',
        'weight' => 'required|string|max:191',
        'serioul_no' => 'required|digits:6',
        'description' => 'required|string|max:191',

        'Category' => 'required|string|max:191',
        'Brand' => 'required|string|max:191',
        'Stock' => 'required|string|max:191',
        'Inventory' => 'required|string|max:191',

        'Images' => 'required|string|max:191',
        'Dimensions' => 'required|string|max:191',
        'Colors' => 'required|string|max:191',

        'Rating' => 'required|string|max:191',
        'Reviews' => 'required|string|max:191',
        'Availability' => 'required|string|max:191',
        'SKU'=>'required|string|max:191',
        'Specifications'=>'required|string|max:191',

    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->messages(),
        ], 422);
    } else {
        $products = product::find($id);

        if ($products) {
            $products->update([
                'name' =>$request->name,
                'price' => $request->price,
                'weight' => $request->weight,
                'serioul_no' => $request->serioul_no,
                'description' => $request->description,
                'Category' => $request->Category,
                'Brand' => $request->Brand,
                'Stock' => $request->Stock,
                'Inventory' => $request->Inventory,
                'Images' => $request->Images,
                'Dimensions' => $request->Dimensions,
                'Colors' => $request->Colors,
                'Rating' => $request->Rating,
                'Reviews' => $request->Reviews,
                'Availability' => $request->Stock,
                'SKU'=>$request->SKU,
                'Specifications'=>$request->Specifications,
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
    public function destroyProduct($id){
        $products = product::find($id);
        if($products){
            $products->delete();
            return response()->json([
                'status' => 200,
                'message' => "Product Deleted Successfully."
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Such Product Found."
            ]);
        }
    }
}
