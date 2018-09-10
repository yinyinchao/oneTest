<?php namespace App\Http\Controllers;
use DB;
//use App\Http\Controllers\Controller;/
class goodsController extends Controller
{
    public function index(){
      return view("goods.index");
    }
    public function add(){
        $data=$_POST;
        unset($data['_token']);
        $data['hobby']=implode(' ',$data['hobby']);
        $model=DB::table("user")->insert($data);
        var_dump($model);
        die;
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $hobby=implode(" ",$_POST['hobby']);
        $age=$_POST['age'];
        $phone=$_POST['phone'];

        $model=DB::table("user")->insert(['name'=>$name,'sex'=>$sex,'hobby'=>$hobby,'age'=>$age,'phone'=>$phone]);
        var_dump($model);
//        $names = DB::table('user')
//  ->lists('name','id');

//        var_dump($names);
    }
    public function show(){
        $db=DB::table("user")->get();
        return view("goods.show",['data'=>$db]);
    }


}