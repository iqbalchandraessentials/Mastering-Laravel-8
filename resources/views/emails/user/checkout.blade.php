@component('mail::message')
# Welcome to {{$checkout->camp->title}}

Hi {{$checkout->user->name}}!

Thank you for register on <b>{{ $checkout->camp->title }}</b>,
please see payment intruction below

@component('mail::button', ['url' => route('checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
