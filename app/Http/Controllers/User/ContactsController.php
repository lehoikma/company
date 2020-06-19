<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        return view('user.contacts.index');
    }

    public function sendContacts(Request $request) {
        $sendContacts = Contacts::create([
           'name' => $request['fullname'],
           'email' => $request['email'],
           'phone' => $request['phone'],
           'content' => $request['message'],
           'status' => 0
        ]);
        if ($sendContacts) {
            \Session::flash('alert-success', 'Gửi liên hệ thành công . Chúng tôi sẽ sớm liên hệ với bạn');
        } else {
            \Session::flash('alert-warning', 'Gửi liên hệ lỗi ! Vui lòng gửi lại');
        }
        return redirect()->back();
    }
}
