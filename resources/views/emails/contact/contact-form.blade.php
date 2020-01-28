@component('mail::message')

# Evan you have a new contact form submission

## The contact's information
<strong>Name</strong> {{ $data['firstname'] }} {{ $data['lastname'] }}

<strong>Email</strong> {{ $data['email'] }}

## The contact's message
{{ $data['message'] }}

@endcomponent
