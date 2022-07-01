@component('mail::message')
# Introduction

Thanks for contacting us , we will contact you soon

Name:{{$message->full_name}}
subject: {{$message->subject}}
Email:{{$message->email}}

your message here : <br>
{{$message->text}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
