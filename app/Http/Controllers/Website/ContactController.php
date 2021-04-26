<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Notifications\NewEmail;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("website.contact.index");
    }

    public function form(ContactFormRequest $request)
    {
        // save contact-us form in database
        $contact = Contact::create($request->all());
        
        Notification::route('mail', config('mail.from.address'))
        ->notify(new NewEmail($contact));
        
        /*
        return redirect()->route('website.contact')->with([
            'success' => true,
            'message' => 'Your message has been sent.'
        ]);
        */
        
        toastr()->success('Your message has been set');
        return back();
    }



}
