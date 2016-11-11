@extends('frontend.layouts.master')

@section('content')
    <h1 class="text-success">Subscribe</h1>
    <p>To subscribe to our mailing list fill in your details below..</p>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="*Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="phone-number" placeholder="*Email Address">
        </div>
        <p class="pull-left small-print">Fields marked with * are required</p>
        <button type="submit" class="pull-right btn btn-success">Submit</button>
    </form>
@endsection

@section('after-scripts-end')

@stop