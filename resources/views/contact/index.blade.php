@extends ('layouts.master')

@section('assets')
<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
body{
	width:100%;
	height:100%;
}

h1,h2,h3 {
    margin:0 0 0.6em 0;
	text-transform: uppercase;
	letter-spacing:1px;
}

p{
	margin:0 0 25px;
	line-height:1.6em;
}

a:hover,a:focus{
	text-decoration:none;
	color:white;
}

#contact{	
	color:#f4f4f4;
	padding-bottom:3em;
}

textarea.form-control{
    height:7em;
}
</style>
@endsection

@section('content')

<section id="contact" class="content-section text-center mt-4">
    <div class="contact-section">
        <div class="container">
            <h2 class="stroke">Contact Us</h2>
            <p class="col-md-8 offset-md-2 mb-3 text-left">Please feel free to contact us via this form if you have any questions about our products or how to acquire them.</p>
            <div class="mb-3">
                <span class="text-warning">* </span><small class="mb-3">Denotes a required field</small>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                @if (session('status'))
                    <h4 class="alert alert-success py-5">
                        {{ session('status') }}
                    </h4>
                @endif
                    @include('layouts.errors')
                    <form action="/contact" method="POST" id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label><span class="text-warning"> *</span>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Jane Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><span class="text-warning"> *</span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="jane.doe@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your honey is delicious!">
                        </div>
                        <div class="form-group ">
                            <label for="message">Your Message</label><span class="text-warning"> *</span>
                            <textarea class="form-control" name="message" id="message" placeholder="Description" required></textarea> 
                        </div>
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </form>
                    <p class="mt-4">Or click the link below to use your email client</p>
                    <a href="mailto:info@beekeepingitreal.ca?Subject=beekeepingitreal.ca%20Website%20Question" target="_top">Send Email</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection