@extends('layouts.app')

@section('title')
    Patient Form
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">Patient Form</h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <form method="POST" action="{{route('website.appointment.store',0)}}" class="st-appointment-form" id="appointment-contact">
                        @csrf
                        <div id="st-alert1"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Full Name <b style="color:red">*</b></label>
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
                                    <label>Phone Number <b style="color:red">*</b></label>
                                    <input type="text" id="unumber" name="phone" placeholder="+20 104 2314 234" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Clinic <b style="color:red">*</b></label>
                                    <div class="st-custom-select-wrap">
                                        <select name="clinic" id="" required class="st_select1 clinic"
                                                data-placeholder="Select clinic">
                                            <option>select</option>
                                            <option value="0">Main Clinic - Dokki</option>
                                            <option value="1">Zayed Clinic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Booking Date <b style="color:red">*</b></label>
                                    <input name="date" required type="text" id="datePicker" placeholder="Please Select Day" autocomplete="OFF" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Message</label>
                                    <textarea cols="30" rows="10" id="umsg" name="msg"
                                              placeholder="Write something here..."></textarea>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id=""
                                        name="submit">Book an appointment</button><br><br><br>
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

        window.onload = function () {
            function updateStars($starsContainer, rating) {
                $starsContainer.empty(); // Clear existing stars
                for (let i = 0; i < 5; i++) {
                    const $star = $('<span class="m-1">').addClass('fa');
                    if (i < rating) {
                        $star.addClass('fa-star');
                    } else {
                        $star.addClass('fa-star-o');
                    }
                    $starsContainer.append($star);
                }
            }

            $('.slick-slide-in').each(function() {
                const $starsContainer = $(this).find('.starRating');
                const rating = $(this).find('.review').val(); // Assuming you have a data attribute for rating
                updateStars($starsContainer, rating);
            });


            const $starsContainer = $('.the-last').find('.starRating');
            const rating = $('.the-last').find('.review').val(); // Assuming you have a data attribute for rating
            updateStars($starsContainer, rating);
            // Example usage:
        }

        $('#appointment-contact').validate();
        $('#appointment-contact').submit(function (e) {
            var validation = $("#appointment-contact").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });

        $("#datePicker").datepicker({
            beforeShowDay: function(date) {
                // By default, disable all days
                return [false, ''];
            }
        });
        $('.clinic').on('change',function () {
            if($(this).val() == 1) {
                // $( function() {
                $('#datePicker').val('');
                    $("#datePicker").datepicker("option", "beforeShowDay", function(date) {
                        return [date.getDay() === 3, ''];
                    });
                // } );
            } else {
                $('#datePicker').val('');
                // $( function() {
                    $("#datePicker").datepicker("option", "beforeShowDay", function(date) {
                        return [(date.getDay() === 6 || date.getDay() === 4), ''];
                    });
                // } );
            }
        })



    </script>
@endsection