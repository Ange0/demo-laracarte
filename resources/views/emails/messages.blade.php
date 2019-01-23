@component('mail::message')
# Hey Admin

The body of your message.
- {{ $name }}
- {{ $email }}
- {{ $msg }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
