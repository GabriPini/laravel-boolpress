@component('mail::message')
# Introduction

Hai ricevuto un nuovo messaggio da {{$message->full_name}}

Subject: {{$message->subject}}

Message:
{{$message->text}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
