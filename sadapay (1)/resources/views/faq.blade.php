@extends('layouts.main')

@section('main-container')
    <div class="container">
        <div class="text-center text-drkblue mt-10 pb-8">
            <h1 class="fw-bold display-5">Frequently Asked Questions</h1>
            <p>Home &nbsp; <i class="fa-solid fa-chevron-right text-secondary"></i> &nbsp; <span class="text-secondary">
                    Frequently Asked Questions </span> </p>
        </div>
    </div>





    <div class="bg-silver">
        <div class="container pb-8">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="bg-white shadow-sm mt-6 text-start pt-5 ps-5 pb-5">
                        <h4 class="fw-bold text-drkblue">Quick Navigation</h4>
                        <p class="mt-5 text-orange">Features</p>
                        <p class="text-secondary">Payments & Charges</p>
                        <p class="text-secondary">Security</p>
                        <p class="text-secondary">The Basics</p>
                    </div>
                </div>


                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="ms-4 ps-3 mt-6">
                        <h4>Features</h4>
                        <h5 class="mt-4 pt-3 text-orange">Can I shop online with my card?</h5>
                        <p class="text-drkblue mt-4 ">Yes, you should be able to use your card on any website around the world that accepts Mastercard as a method of payment.</p>
                        <p class="text-silver mt-4">_________________________________________________________________________________________________________</p>

                        <h5 class="text-drkblue">Does the card work for international purchases?</h5>
                        <p class="text-silver">_________________________________________________________________________________________________________</p>

                        <h5 class="text-drkblue">Can I make purchases on AliExpress, FB, Netflix, Amazon, etc?</h5>
                        <p class="text-silver">_________________________________________________________________________________________________________</p>

                        <h5 class="text-drkblue">Do you provide virtual cards?</h5>
                        <p class="text-silver">_________________________________________________________________________________________________________</p>

                        <h5 class="text-drkblue">Is it like Payoneer or Skrill?</h5>
                        <p class="text-silver">_________________________________________________________________________________________________________</p>

                        <h5 class="text-drkblue">Do you offer a payment gateway?</h5>
                        <p class="text-silver mb-14">_________________________________________________________________________________________________________</p>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="row">


                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <img src="{{asset('images/043-headphones-70x70 (1).png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <h2 class="text-orange fw-light text-start">Still have a question? <br>
                                <span class="text-drkblue fw-bold"> We're here to help </span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="ps-5 text-center">
                        <button class="btn btn-danger fw-bold p-signup" type="submit"> <span class="fs-8"> Contact Us
                            </span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



