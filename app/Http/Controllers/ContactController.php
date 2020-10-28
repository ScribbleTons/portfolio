<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{   /**
    * contact list 
    * @param $request
    */
    public function index(Request $request){
        
        $search = false; 
        
        if($request->has('search') && $request->input('search') != ''){
            $search = true;
        }

        $contacts = Contact::when($search, function($query) use ($request){
            $query->where('name', 'like', "%{$request->input('search')}%")
                    ->orWhere('email', 'like', "%{$request->input('search')}%");
        })->orderByDesc('id')->get();
        return Inertia::render('Contact/ContactList', ['contacts'=>$contacts]);
    }

    /**
    * contact show 
    * @param $contact, $id
    */
    public function show(Contact $contact){
        return Inertia::render('Contact/ContactView', ['contact' => $contact]);
    }

    /**
    * contact save 
    * @param $request
    */
    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required|min:4',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        Contact::create($data);
        return redirect()->back()->with('status', 'Message sent successfully!');
    }

    /**
    * contact trash
    * Contact is soft deleted.
    * @param $contact, $id
    */
    public function trash(Contact $contact){
       $contact->delete();
        return redirect()->route('contact.list');
    }

    /**
    * contact trash can
    ** @return void
    */
    public function trashBin(){
        return Inertia::render('Contact/ContactTrash', ['contacts' => Contact::onlyTrashed()->get()]);
    }

    /**
    * contact restore
    * Contact is restored to active state.
    * @param $contact, $id
    */
    public function restore($contact){
        $c = Contact::withTrashed()->where('id', $contact);
        $c->restore();
        return redirect()->route('contact.trash.list');
    }

    /**
    * contact destroy
    * Contact is permanently deleted.
    * @param $contact, $id
    */
    public function destroy($contact){
        $c = Contact::onlyTrashed()->find($contact);
        $c->forceDelete();
         return redirect()->route('contact.list');
     }
}
