@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
your views
@endcomponent
{{-- <img src="{{ asset(public_path('/img/image.jpg')) }}"> --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
