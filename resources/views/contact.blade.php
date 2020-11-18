@extends('layouts.base', ['title' => 'Contact'])
@section('content')
    <div id="main" class="site-main">
        <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">
                <div class="page-title">
                    <h1>Contact</h1>
                    <div class="page-subtitle">
                        <h4> Get in Touch</h4>
                    </div>
                </div>
                <div id="content" class="page-content site-content single-post" role="main">
                    <div class="row">
                        <div class=" col-xs-12 col-sm-4 ">
                            <div id="info_list_1" class="info-list-w-icon">
                                <div class="info-block-w-icon">
                                    <div class="ci-icon">
                                        @svg('solid.phone', ['class' => 'inline-block'])
                                    </div>
                                    <div class="ci-text">
                                        <h4>Call Me</h4>
                                        <p>+62 812-8273-xxxx</p>
                                    </div>
                                </div>
                                <div class="info-block-w-icon">
                                    <div class="ci-icon">
                                        @svg('solid.map', ['class' => 'inline-block'])
                                    </div>
                                    <div class="ci-text">
                                        <h4>Location</h4>
                                        <p>Jakarta, Indonesia</p>
                                    </div>
                                </div>
                                <div class="info-block-w-icon">
                                    <div class="ci-icon">
                                        @svg('solid.envelope', ['class' => 'inline-block'])
                                    </div>
                                    <div class="ci-text">
                                        <h4>Email</h4>
                                        <p>hello@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-12 col-sm-8 ">
                            <div class="block-title">
                                <h2>How Can I Help You?</h2>
                            </div>
                            <form id="contact_form" class="contact-form">
                                <div class="controls two-columns">
                                    <div class="fields clearfix">
                                        <div class="left-column">
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name">
                                            </div>
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address">
                                            </div>
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_name" type="text" name="subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="right-column">
                                            <div class="form-group form-group-with-icon">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Send message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
