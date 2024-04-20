<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Student;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function showstudent($id)
    {
        $student = Student::find($id);
        return view('contactstudent', compact('student'));
    }

    public function store(Request $request)
    {
        

       
    }

    public function save(Request $request)
    {
        return "sumanan"; 
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts_list', ['contacts' => $contacts]);
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit_contact', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contacts')->with('success', 'Contact form updated successfully!');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contact form deleted successfully!');
    }
}
