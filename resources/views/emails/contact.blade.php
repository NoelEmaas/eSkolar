@component('mail::message')
    # {{ $message_subject }}

    {{ $content }}

    Message from:
    {{ $name }}
    {{ $email }}
@endcomponent
