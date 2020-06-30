@component('mail::message')

# New Post Created!!

A new post is been published on your blog
   
<strong>{{ $title }}</strong>

@component('mail::button', [ 'url' =>config('app.url') . '/posts'])
View blog archive
@endcomponent

@endcomponent

