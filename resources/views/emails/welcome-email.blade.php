@component('mail::message')
# Welcome to Noahtime

This is a community of fellow developers and we love that you have joined us.

@component('mail::button', ['url'=>'http://127.0.0.1:8000/profile/1'])
goto home
@endcomponent

All the best, <br>
Ted
@endcomponent