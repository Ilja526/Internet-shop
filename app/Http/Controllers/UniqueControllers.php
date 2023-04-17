<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class UniqueControllers extends Controller
{
    public function unique(Request $request){
        $contact_unique=new Contact();
        $contact_unique->first_name=$request->input('first_name');
        $contact_unique->username=$request->input('username');
        $contact_unique->email=$request->input('email');
        $contact_unique->unique_offers=$request->input('unique_offers');
        $contact_unique->name_card=$request->input('name_card');

        $contact_unique->save();

    }
}
