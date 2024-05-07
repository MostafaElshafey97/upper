@extends('layouts.app')

@section('title')
    Publish with us
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">Publish with us</h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <form method="POST" action="{{route('website.appointment.store',2)}}" class="st-appointment-form" id="appointment-Publish">
                        @csrf
                        <div id="st-alert1"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Full Name</label>
                                    <input type="text" id="uname" name="name" placeholder="Jhon Doe" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Email Address</label>
                                    <input type="text" id="uemail" name="email" placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Phone Number</label>
                                    <input type="text" id="unumber" name="phone" placeholder="+00 141 23 234" required>
                                </div>
                                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id=""
                                        name="submit">Send message</button>
                            </div>

                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Message</label>
                                    <textarea cols="30" rows="10" id="umsg" name="msg"
                                              placeholder="Write something here..."></textarea>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="st-height-b80 st-height-lg-b100"></div>
@endsection
@section('scripts')
    <script>
        $('#appointment-Publish').validate();
        $('#appointment-Publish').submit(function (e) {
            var validation = $("#appointment-Publish").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
