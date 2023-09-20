<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //show home page
    public function customcreate( ) {
        return view('todolist.create');
    }
    //create only
    public function create(Request $req) {
     $data=$this->createclone($req);

     Customer::create($data);
     return  redirect()->route('donate');
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
}

