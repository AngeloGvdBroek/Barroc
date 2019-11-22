@component('mail::message')
# Offerte aangemaakt

Hallo,

{{ $name }} van Sales heeft een offerte aangemaakt.

@component('mail::button', ['url' => ''])
Klik hier om de offerte te bekijken
@endcomponent

{{ config('app.name') }}
@endcomponent
