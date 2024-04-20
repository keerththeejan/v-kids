<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
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
        $donor = new Message([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'status' => 'Unread',
        ]);
        $donor->save();
        return redirect()->back()->with('message', 'Message sent successfully');
    }

    public function smsgsave(Request $request)
    {
        $donor = new Message([
            'name' => $request->input('yname'),
            'email' => $request->input('email'),
            'student_id'=>$request->input('sid'),
            'message' => $request->input('message'),
            'status' => 'Unread',
        ]);
        $donor->save();
        return redirect()->back()->with('message', 'Message sent successfully');
    }

    public function index()
    {
        $contacts = Message::all();
        return view('contacts_list', ['contacts' => $contacts]);
    }

    public function edit($id)
    {
        $student = Message::find($id);
        return view('msgshow', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = Message::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contacts')->with('success', 'Contact form updated successfully!');
    }

    public function destroy($id)
    {
        $contact = Message::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contact form deleted successfully!');
    }
}
