@component('mail::message')
# Change User Password

new password is: {{$initialPass}}

@component('mail::button', ['url' => ''])
Change Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
