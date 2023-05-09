<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class AdminContactsController extends Controller
{
    public function index()
    {
        return view('admin_dashboard.contacts.index', [
           'contacts' => Contact::all(), 
           /* 'contacts' => Contact::latest()->paginate(5), */
            /* 'contacts' => Contact::with('first_name')->orderBy('id','ASC')->paginate(5) */
        ]);
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->route('admin.contacts')->with('success', 'Xóa liên hệ thành công');
    }
}
