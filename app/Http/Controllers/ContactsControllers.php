<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsControllers extends Controller
{
    public function submit(Request $req){
        $contact=new Contact();
        $contact->firstName=$req->input('firstName');
        $contact->lastName=$req->input('lastName');
        $contact->username=$req->input('username');
        $contact->email=$req->input('email');
        $contact->name_products=$req->input('name_products');
        $contact->address=$req->input('address');
        $contact->cc_name=$req->input('cc_name');
        $contact->cc_number=$req->input('cc_number');

        $contact->save();
    }

}
