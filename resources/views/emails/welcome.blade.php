@component('mail::message')
# My API  mailer

I WISH TO THANK DIGIT-MONI.

@component('mail::button', ['url' => '/welcome'])
Button Text
@endcomponent

Thanks,<br>
@component('mail::panel')
WE care about you at DIGIT-MONI
@endcomponent
{{ config('app.name') }}
@endcomponent
