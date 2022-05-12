@component('mail::message')

{{$liker->username}} Has liked your post

@component('mail::button', ['url' => route('posts.show',$post)])
View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
