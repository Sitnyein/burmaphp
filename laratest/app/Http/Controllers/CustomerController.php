<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    //show home page
    // $post=Customer::pluck('title');
    public function customcreate( ) {



        $post = Customer::when(request('searchKey'),function ($query){
            $key = request('searchKey');
            $query->where('title','like','%'.$key.'%');
        })
        ->orderBY('created_at','desc')
        ->paginate(3);
        return view('todolist.create',compact('post'));
    }
    //create only
    public function create(Request $request) {
//        if($req->hasFile('postimage')){
//         $path = $req->hasFile('postimage')->store('myimage');
//         dd('success');
// }
     $this->validationCheck($request);
     if(($request->hasFile('postimage'))){

        $data=$this->createclone($request);
    $test=uniqid() . $request->file('postimage')->getClientOriginalName();

    $request->file('postimage')->storeAs('public',$test);
       $data['image'] = $test; }


     Customer::create($data);
     return  redirect()->route('custom')->with(['insertSuccess' => 'Blog create success']);
    }
    //read
    public function read($readid) {
        // dd("this is read page");
        $mage = Customer::where('id',$readid)->first();
        return view('todolist.read',compact('mage'));
    }

    //show update page
    public function updatepage($id) {
     $edit = Customer::where('id',$id)->first()->toArray();

    return view('todolist.update',compact('edit'));

    }
    //update only
    public function update(Request $request) {
        $id=$request->postId;
        $this->validationCheck($request);
        $data=$this->updateclone($request);
        if(($request->hasFile('postimage'))){

        $test=uniqid() . $request->file('postimage')->getClientOriginalName();

        $request->file('postimage')->storeAs('public',$test);
           $data['image'] = $test; }
       Customer::where('id',$id)->update($data);
       return redirect()->route('custom');


    }

    //delete only
    public function delete($id) {
        Customer::where('id',$id)->delete();
        return redirect()->route('custom')->with(['delete' => 'you have been deleted blog']);
    }


    //private functions
    private function createclone($req) {
        $data = [
            'title'=> $req->postTitle,
            'description' => $req->PostD];
        $data['fee'] =$req->postFee == null? 2000 : $req->postFee;
        $data['address'] = $req->postAddress == null? 'anonymous' :$req->postAddress;
        $data['rating'] = $req->postrate == null? 5 :$req->postrate;
        return $data;

    }

    private function updateclone($req) {
        $data = [
            'title'=> $req->postTitle,
            'description' => $req->PostD,];
            $data['fee'] =$req->postFee == null? 2000 : $req->postFee;
            $data['address'] = $req->postAddress == null? 'anonymous' :$req->postAddress;
            $data['rating'] = $req->postrate == null? 5 :$req->postrate;
            return $data;    }
    //post validation
private function validationCheck($request) {


    $validation=[
     'postTitle'=>'required|min:5|unique:customers,title,'. $request->postId,
     'PostD'=>'required|min:4,',
    'postimage'=>'mimes:jpg,bmp.png|file',
     // 'postFee'=>'required',
     // 'postAddress'=>'required',
     // 'postrate'=>'required',


 ];
 $validationmessage=[
     'postTitle.required'=>'You need to fill Post title',
     'postTitle.min'=>'you must be write more than five letters ',
     'postTitle.unique'=>'Title is already taken,Try another name',
     'PostD.required'=>'You need to fill Post description',
     // 'postFee.required'=>'You need to write fee',
     // 'postAddress.required'=>'location access is need',
     // 'postrate.required'=>'Plz give me comment',
     'postimage.mimes' => 'it must be image only accept'

 ];

Validator::make($request->all(),$validation,$validationmessage)->validate();

}

}

