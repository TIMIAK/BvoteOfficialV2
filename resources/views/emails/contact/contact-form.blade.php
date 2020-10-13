@component('mail::message')
#New Contact Message

<strong>Name:</strong>{{$data['fullname']}}<br>
<strong>Email:</strong>{{$data['email']}}<br>
<strong>Subject:</strong>{{$data['subject']}}<br>
<strong>Message</strong><br>
{{$data['message']}}
@endcomponent
