<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditImagesRequest;
use App\Http\Requests\SaveImageRequest;
use App\Models\CategoriesImages;
use App\Models\Contacts;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function listContacts()
    {
        $contacts = Contacts::all();
        return view('admin.contacts.listContacts',[
            'contacts' => $contacts
        ]);
    }

    public function updateStatusContacts($id) {
        if (!empty($id)) {
            $contacsEdit = Contacts::where('id', $id)->update([
                'status' => 1
            ]);
        }
        if (!empty($contacsEdit)) {
            \Session::flash('alert-success', 'Sửa Liên Hệ thành công');
        } else {
            \Session::flash('alert-warning', 'Sửa Liên Hệ lỗi');
        }
        return redirect()->back();
    }
}
