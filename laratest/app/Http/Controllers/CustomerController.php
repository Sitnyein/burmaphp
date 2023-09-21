<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //show home page
    public function customcreate( ) {
        $post= Customer::all();
        return view('todolist.create',compact('post'));
    }
    //create only
    public function create(Request $req) {
     $data=$this->createclone($req);

     Customer::create($data);
     return  redirect()->route('donate');
    }

    //read
    public function read($readid) {
        // dd("this is read page");
        $mage = Customer::where('id',$readid)->first()->toArray();
        return view('todolist.read',compact('mage'));
    }

    //show update page
    public function updatepage($id) {
     $edit = Customer::where('id',$id)->first()->toArray();

    return view('todolist.update',compact('edit'));

    }
    //update only
    public function update(Request $req) {
        $id=$req->postId;
       $data=$this->updateclone($req);
       Customer::where('id',$id)->update($data);
       return redirect()->route('custom');


    }

    //delete only
    public function delete($id) {
        Customer::where('id',$id)->delete();
        return redirect()->route('custom');
    }


    //private functions
    private function createclone($req) {
        $data = [
            'title'=> $req->postTitle,
            'description' => $req->PostD,

        ];
        $data['fee'] =$req->postFee == null? 2000 : $req->postFee;
        $data['address'] = $req->postAddress == null? 'anonymous' :$req->postAddress;
        $data['rating'] = $req->postrate == null? 5 :$req->postrate;
        return $data;

    }

    private function updateclone($req) {
        $data = [
            'title'=> $req->postTitle,
            'description' => $req->PostD,
            'fee' => $req->postFee,
            'address' => $req->postAddress,
            'rating' => $req->postrate

        ];
       return $data;
    }
}

