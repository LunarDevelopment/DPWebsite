@extends('frontend.layouts.'.$content->post_layout)
@section('content')
    <h1 class="text-success
    @if($content->hide_title)
            hidden
            @endif
            ">{{ $content->post_title }}</h1>
    {!! $content->post_content !!}
@endsection
@section('after-scripts-end')
@stop