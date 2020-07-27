<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeToNewsletterRequest;
use Spatie\Mailcoach\Models\EmailList;
use Spatie\Mailcoach\Models\Subscriber;

class NewsletterSubscriptionController
{
    public function subscribe(SubscribeToNewsletterRequest $request)
    {
        $emailList = EmailList::where('name', 'freek.dev newsletter')->first();

        Subscriber::createWithEmail($request->email)
            ->redirectAfterSubscribed(action([static::class, 'confirmed']))
            ->subscribeTo($emailList);

        return redirect()->action([static::class, 'confirm']);
    }

    public function confirm()
    {
        return view('front.newsletter.confirm');
    }

    public function confirmed()
    {
        return view('front.newsletter.confirmed');
    }
}
