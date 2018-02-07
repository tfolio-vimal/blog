@component('mail::message')
# Introduction

Welcome to iinflow, {{$user->name}}

@component('mail::button', ['url' => 'https://townfolio.co'])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
