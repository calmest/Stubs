@component('mail::message')
# Hi,

A CreateMyStubs user has sent you a message.

Name: {{ $contact['name'] }}

E-mail: {{ $contact['email'] }}

Subject: {{ $contact['subject'] }}

Message: {{ $contact['msg'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
