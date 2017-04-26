<?php

namespace App\Http\Controllers;
use App\Flight;
use Illuminate\Http\Request;
use App\Product;
use Auth,DateTime;
use App\Http\Request\ProductAddRequest;
class ProductController extends Controller
{
    public function getProduct () {
		$data = Product::select('id','name','price')->get()->toArray();
		return view('admin.product.product',['product_data' => $data]);
	}

    public function postProductAdd (Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->created_at = new DateTime();
        $product->save();
        return redirect()->route('getProduct')->with(['flash_message' => 'Thêm thành công']);
    }

    public function postProductUpdate (Request $request){
        $flight = Product::find($request->id);
        $flight->name = $request->name;
        $flight->price = $request->price;
        $flight->save();
        return redirect()->route('getProduct')->with(['flash_message' => 'Sửa thành công']);
    }

    public function postProductDelete (Request $request){
        $flight = Product::find($request->id);
        $flight->delete();
        return redirect()->route('getProduct')->with(['flash_message' => 'Xóa thành công']);
    }
}