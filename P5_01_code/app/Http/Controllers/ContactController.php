<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('front.contact');
    }

    /**
     * @param ContactRequest $request
     * @return Factory|View
     */
    public function store(ContactRequest $request)
    {
        Mail::to('from@example.com')
            ->send(new Contact($request->except('_token')));

        return view('front.confirm');
    }
}
