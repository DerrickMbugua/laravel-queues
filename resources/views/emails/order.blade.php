@component('mail::message')
# Welcome

Welcome Client
@component('mail::button', ['url' => ''])
Visit our website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
