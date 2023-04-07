<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
public function index(){
$cats = DB::table('categories')->paginate(3);
return view('category.index',compact('cats'));
}

//phương thức craete hiện thị form nhập dữ liệu
public function create(){
return view('category.create');
}
//phương thức store lưu và nhận dữ liệu vào bảng
public function store(Request $request){
    $rule = [
        'name' => 'required|unique:categories'
    ];
    $messages = [
        'name.required' =>'ko được để trống',
        'name.unique'=> 'tên danh mục đã được sử dụng'
    ];
    $request -> validate($rule, $messages);
    // $request->only() lấy dữ liệu từ form giống với $_POST
   //Category::create(); // như lệnh INSERT INTO category
  DB::table('categories')->insert($request->only('name', 'status'));
  return redirect()->route('category.index');// chuyển hướng về danh sách
}
public function delete($id){
    DB::table('categories')->where('id', $id)->delete();
    return redirect()->route('category.index');
}

}
