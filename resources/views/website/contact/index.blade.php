@extends('layouts.website')

@section('title', 'Contact us')

@section('content')
<!-- ==== Breadcrumbs ==== -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Contact us</h2>
        <p>Do you have any questions? Please do not hesitate to contact us directly.</p>
    </div>
</div><!-- End Breadcrumbs -->

<!-- ==== Contact us Section ==== -->
<section id="contact" class="contact">
    <!-- Google Maps -->
    <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7678.164931829471!2d-47.862328206309854!3d-15.79960510991473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7c45a6f5981ca10!2sPal%C3%A1cio%20do%20Planalto!5e0!3m2!1spt-BR!2sus!4v1618083554676!5m2!1spt-BR!2sus" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">

                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Street, City, State, Country</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>email@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+0 0000 12345 67</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
                <form class="contact-form" action="{{route('website.contact.form')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>

</section><!-- End Contact us Section -->
@endsection