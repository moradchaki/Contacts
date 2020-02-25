<?php

namespace App\Http\Controllers;

use App\Contact;
use Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{  
    public function __construct(){

        $this->middleware('auth');

     }    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
         
            {   if(Auth::user()->is_admin){
                $contact = Contact::all();
            }
            else
            {
                $contact = Auth::user()->contacts;
            }
        return view('contact.liste',[
            'contacts' => Contact::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'bail|min:4|required|max:100',
            'adresse' => 'required',
            'city' => 'required',

        ]);

        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->adresse = $request->input('adresse');
        $contact->city = $request->input('city');
        $contact->user_id = Auth::user()->id;


        $contact->save();

        return redirect('contacts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        $this->authorize('update', $contact);

        return view('contact.edit',['contact'=> $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $contact = Contact::findOrfail($id);

        $contact->name = $request->input('name');
        $contact->adresse = $request->input('adresse');
        $contact->city = $request->input('city');


        $contact->save();

        return redirect('contacts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        return redirect('contacts');
    }

}
