@component('mail::message')
# Welcome to freeCodeGram

This is a community of fellow developers and we love that you have joined.

@component('mail::button', ['url' => config('app.url')])
People to follow
@endcomponent

All the best,<br>
Esteban
@endcomponent
