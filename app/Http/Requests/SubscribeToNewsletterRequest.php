<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Mailcoach\Models\EmailList;
use Spatie\Mailcoach\Rules\EmailListSubscriptionRule;

class SubscribeToNewsletterRequest extends FormRequest
{
    public function rules()
    {
        $emailList = EmailList::where('name', 'freek.dev newsletter')->first();

        return [
            'email' => ['required', 'email:rfc,dns', new EmailListSubscriptionRule($emailList)],
        ];
    }
}
