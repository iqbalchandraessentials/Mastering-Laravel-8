@component('mail::message')
# Welcome to Laracamp BWA

Hi {{ $user->name }} !
<br>

Conratulation you have register to Laracamp


@component('mail::button', ['url' => route('welcome')])
    Searc your class now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
