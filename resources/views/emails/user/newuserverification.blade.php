@component('mail::message')
# {{ $content['date'] }}

![image](https://www.realcheckstubs.com/images/stublogo.png)

# {{ $content['title'] }}

{{ $content['body'] }}

@component('mail::button', ['url' => 'http://stubs.dev/profile/mystubs'])
{{ $content['button'] }}
@endcomponent

{{ $content['body2'] }}

{{ $content['body3'] }}

@component('mail::button', ['url' => 'http://stubs.dev/reviews/create'])
{{ $content['button2'] }}
@endcomponent

Thanks for your business!<br>
# {{ config('app.name') }} Support Team
@endcomponent
