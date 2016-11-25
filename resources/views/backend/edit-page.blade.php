@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>Pages</small>
    </h1>
@endsection

@section('content')
    <form action="/admin/pages/save" method="post">
        <input type="hidden" name="id" value="post_id">
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input id="titleInput" name="post_title" class="form-control" value="{{ $post->post_title }}">
        </div>
        <div class="form-group">
            <strong>permalinks:</strong> {{ 'http://digital-picnic.co.uk/' }}<input id="permalinkInput" name="guid" value="{{ $post->guid }}">
        </div>
        <div class="checkbox">
            <label>
                <input name="hide_header" type="checkbox"
                @if($post->hide_title)
                        checked
                        @endif
                > Hide site header
            </label>
        </div>
        <div class="form-group">
            <textarea id="contentInput" name="post_content" class="form-control" rows="30">
                {{ $post->post_content }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection