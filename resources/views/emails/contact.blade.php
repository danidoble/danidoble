@component('mail::message')
{{ __('Hello, you has a new contact form.') }}

{{ __('Name') }}: {{ $contact->name }}

{{ __('Phone') }}: {{ $contact->phone }}

{{ __('Email') }}: {{ $contact->email }}

{{ __('Message') }}: {{ $contact->message }}


@endcomponent
