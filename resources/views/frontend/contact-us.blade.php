@extends('frontend.layouts.master')

@section('content')
    <h1 class="text-success">Get in touch..</h1>
    <p>To make an enquiry fill in your details below and we’ll be in touch soon.</p>
    <form action="/contact-us/submit">
        <div class="form-group">
            <input name="name" type="text" class="form-control" id="name" placeholder="*Full Name">
        </div>
        <div class="form-group">
            <input name="company" type="text" class="form-control" id="company" placeholder="*Company Name">
        </div>
        <div class="form-group">
            <input name="phone" type="text" class="form-control" id="phone" placeholder="*Phone Number">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" id="email" placeholder="*Email Address">
        </div>
        <div class="form-group">
            <select name="method_of_contact" class="form-control" id="preferred method of contact">
                <option value="phone">Phone me</option>
                <option value="email">Email me</option>
            </select>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="body" rows="4" placeholder="*What would you like to know?"></textarea>
        </div>
        <p class="small-print pull-left">Fields marked with * are required</p>
        <button type="submit" class="btn btn-success pull-right">Submit</button>
    </form>
    <div class="row map-row">
        <div class="col-md-6 hidden-sm hidden-xs">
            <p><strong class="text-success">Address:</strong><br>
            Digital Picnic,<br>
            The Picnic Area,<br>
            1 Pink Lane,<br>
            Newcastle,<br>
            NE1 5DW</p>
            <p><strong class="text-success">Email:</strong> info@digital-picnic.email</p>
            <p><strong class="text-success">Call:</strong> 0191 235 9569</p>
        </div>
        <div class="col-md-6 google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2290.2129548372764!2d-1.6189917326446794!3d54.969364553836954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e70b4e38d44ef%3A0x226da1c83b263eff!2sDigital+Picnic!5e0!3m2!1sen!2suk!4v1478691325968" width="100%" height="345px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection

@section('after-scripts-end')
    <script>
        $('form').submit(function(){
            $(this).find('button[type=submit]').prop('disabled', true);
        });
    </script>
@stop