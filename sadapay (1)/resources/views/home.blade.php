@extends('layouts.main')

@section('main-container')
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="mt-10">
                    <p class="display-4 fw-bold text-drkblue">Say goodbye to <br> <span class="text-black"> long hold
                            times|. </span></p>
                    <p class="text-secondary lh-base mt-5">Sign up now for your free Mastercard debit card and digital
                        <br> wallet. Spend, send and withdraw cash without fees.
                    </p>
                    <a href="{{url('/login')}}" class="btn btn-danger fw-bold p-login" type="submit"> <span class="fs-8">login here
                    </span></a>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="mt-5">
                    <img src="{{asset('images/phone-card.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>




    <div class="bg-silver">
        <div class="container">
            <div class="pt-12 ps-5 ms-5 pb-16">
                <p class="display-big mb-0 fw-bold">Sada</p>
                <p class="display-3 mt-0 fw-bold text-blue">[sa•da] <span class="fst-italic">adjective</span> </p>
                <p class="fs-1 mb-1 text-blue"> <span class="fst-italic fw-light">Urdu:</span> simple</p>
                <p class="fs-1 mt-1 text-blue"> <span class="fst-italic fw-light">Arabic:</span> happiness</p>
                <p class="text-orange fs-2"> <span class="fst-italic">English</span>: the most <span
                        class="fw-bold">simple</span> way to manage money</p>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div>
                    <img src="{{asset('images/bilal-chair.png.webp')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <h2 class="text-drkblue fw-bold mt-10 pt-5">We have a different <br> perspective about fees</h2>
                <div class="text-blue">
                    <p class="mt-4 pt-3">SadaPay doesn’t have any costly physical branches like a traditional <br> bank,
                        which lets us pass those savings onto our customers. </p>
                    <p> <i class="fa-solid fa-check text-danger me-3 mt-4"></i> Free Mastercard debit card</p>
                    <p> <i class="fa-solid fa-check text-danger me-3"></i> No annual fees or minimum deposit</p>
                    <p> <i class="fa-solid fa-check text-danger me-3"></i> Free, instant transfers to any bank or wallet
                        in Pakistan</p>
                    <p> <i class="fa-solid fa-check text-danger me-3"></i> Free cash withdrawals at any ATM in Pakistan
                        (3x per month)</p>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="text-center mt-10 pt-5">
            <h2 class="fw-bold  text-drkblue">Security you can trust</h2>
            <p class="h5 text-secondary fw-normal mt-4 mb-5 pb-5">We savegaurd your funds and use advanced systems to
                protect your digital
                wallet.</p>
        </div>

        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div>
                    <img src="{{asset('images/019-safebox.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="fw-bold mt-4 mb-3">Serious Protection</h5>
                    <p class="text-secondary">We protect your funds <br> and sensitive personal data with <br>
                        encryption in-flight and at-rest.</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div>
                    <img src="{{asset('images/012-fingerprint-scan.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="fw-bold mt-4 mb-3">Biometric Access</h5>
                    <p class="text-secondary">Use fingerprint or Face ID for <br> quick and easy access to your <br>
                        account information.</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div>
                    <img src="{{asset('images/002-browser.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="fw-bold mt-4 mb-3">AI Fraud Detection</h5>
                    <p class="text-secondary">We've implemented best-in- <br> class fraud detection systems to <br> keep
                        your money safe.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="container">
            <div class="mt-14 pt-5">
                <img src="{{asset('images/card-render-1.jpg.webp')}}" class="img-fluid border-rds" alt="">
            </div>
        </div>

        <div
            class="container position-absolute top-100 start-50 translate-middle shadow-lg rounded-3 pt-5 ps-5 pe-5 pb-4 w-75 bg-white">
            <h2 class="text-center fw-bold text-drkblue mb-4 pb-3">Replacing complexity with simplicity</h2>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div>
                        <img src="{{asset('images/023-smartphone-1-70x70.png')}}" class="img-fluid" alt="">
                        <h5 class="text-drkblue mt-4 mb-3">2-Minute Registration</h5>
                        <p class="text-secondary">Sign up from your phone with just a <br> selfie, a photo of your CNIC,
                            and
                            some <br> basic information. No paperwork.</p>
                    </div>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div>
                        <img src="{{asset('images/009-payment-method-1-70x70.png')}}" class="img-fluid" alt="">
                        <h5 class="text-drkblue mt-4 mb-3">Biometric Access</h5>
                        <p class="text-secondary">Sending and receiving payments has <br> never been this easy. Now you
                            can
                            <br> move your money within seconds!
                        </p>
                    </div>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div>
                        <img src="{{asset('images/008-documents-1-70x70.png')}}" class="img-fluid" alt="">
                        <h5 class="text-drkblue mt-4 mb-3">AI Fraud Detection</h5>
                        <p class="text-secondary">We promise to always be upfront with <br> our customers. No unfair
                            rates,
                            no <br> hidden fees. Ever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-14">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <h2 class="mt-14 pt-5 text-drkblue mb-5 fw-bold">Connecting you to the world</h2>


                <div class="row">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                        <img src="{{asset('images/013-shipping-70x70.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                        <h5 class="text-drkblue">Shop Globally</h5>
                        <p class="text-secondary mb-5">The SadaPay Mastercard is accepted at 30 million merchants around
                            the
                            world, online and in-stores. </p>
                    </div>


                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                        <img src="{{asset('images/sms-70x70.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                        <h5 class="text-drkblue">Real-time Updates</h5>
                        <p class="text-secondary mb-5">You’ll get instant transaction alerts on your phone whenever
                            there’s activity on your account. </p>
                    </div>


                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                        <img src="{{asset('images/018-exchange3-70x70.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                        <h5 class="text-drkblue">Lowest Foreign Exchange Rate</h5>
                        <p class="text-secondary">We only pass you our cost of 1.5% for foreign exchange when you make
                            non-PKR purchases with your card.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <img src="{{asset('images/Bilal-slide.png')}}" class="img-fluid mt-10" alt="">
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div>
                    <img src="{{asset('images/phone-card.jpg')}}" class="img-fluid mt-14 pt-5" alt="">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <h2 class="mt-20 pt-5 text-drkblue mb-5 fw-bold">Complete control of your money</h2>
                <div class="row">

                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                        <img src="{{asset('images/010-smartphone-1-70x70.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                        <h5 class="text-drkblue">In-app Card Controls</h5>
                        <p class="text-secondary mb-5">Misplaced your card? Freeze it. Want to shop online? <br>
                            Activate international payments with one tap.</p>
                    </div>


                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                        <img src="{{asset('images/014-payment-1-70x70.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                        <h5 class="text-drkblue">Numberless Card</h5>
                        <p class="text-secondary mb-5">To reduce fraud risk, your card number is only visible <br>
                            securely in your app. It’s not printed on the plastic! 😁 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="text-center mt-14">
            <h2 class="fw-bold text-drkbluemt-14">Accept international transfers <br>
                from 45 countries around the world 🌏</h2>
            <p class="text-secondary mt-4">Receive money from friends, family or clients using all the top services &
                platforms.</p>
            <img src="{{asset('images/transfer-partners-1024x915.jpg')}}" class="img-fluid pb-5" alt="">
        </div>
    </div>





    <div class="bg-silver">
        <div class="container text-center pt-12 pb-8">
            <img src="{{asset('images/043-headphones-70x70 (1).png')}}" class="img-fluid" alt="">
            <h2 class="text-drkblue fw-bold mt-4">Here for you, any time</h2>
            <p class="text-secondary mt-4">Message us directly from the app for help.</p>
            <img src="{{asset('images/chat1.png')}}" class="img-fluid" width="450px" alt="">
            <br>
            <img src="{{asset('images/chat2.png')}}" class="img-fluid" width="400px" alt="">
            <br>
            <img src="{{asset('images/chat3.png')}}" class="img-fluid" width="300px" alt="">

            <div class="row pt-12 mt-5">
                <div class="col-8 col-sm-8 col-md-8 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="row">


                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <img src="{{asset('images/031-cursor-100x100.png')}}" class="img-fluid" width="80px" alt="">
                        </div>

                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <h2 class="text-orange fw-light text-start">Ready to join? <br>
                                <span class="text-drkblue fw-bold"> Sign up today </span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="ps-5">
                        <button class="btn btn-danger fw-bold p-signup" type="submit"> <span class="fs-8"> Signup Now
                            </span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    @endsection