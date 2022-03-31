@component('mail::message')
# {{ $firstname }},
## Your message has been received!
We will be in contact ASAP!

{{ $name }} ({{ $email }}) submitted a message.<br>

Phone: {{ $phone  ? $phone : 'Not Provided'}}


@component('mail::panel')
{{ $name }} says:<br>
{{ $message }}
@endcomponent

{{-- @component('mail::button', ['url' => route('contactus')]) --}}
@component('mail::button', ['url' => \URL::to('/contactus'), 'color' => 'primary'])
Leave Another Message
@endcomponent

Thanks,<br>
Graphics + Design Support Team
@endcomponent
