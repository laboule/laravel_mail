@messagemail
# Introduction

The body of your message. {{ $id }}


@component('mail::button', ['url' => 'https://www.9gag.com/'.$id])
Button Text
@endcomponent

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

![alt wow][logo]
[logo]: {{ asset('storage/img1.jpg') }}

Thanks,<br>
{{ config('app.name') }}
@endmessagemail
