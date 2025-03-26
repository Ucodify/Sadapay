@extends('layouts.main')

@section('main-container')
    <div class="container">
        <div class="text-center text-drkblue mt-10 pb-8">
            <h1 class="fw-bold display-5">Blog</h1>
            <p>Home &nbsp; <i class="fa-solid fa-chevron-right text-secondary"></i> &nbsp; <span class="text-secondary">
                    Blog </span> </p>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                <div class="row">


                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-6">
                            <img src="{{asset('images/how-to-redline-a-contract-header-blog.jpg')}}"
                                class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">Contract negotiation 101: How to redline a contract?</h4>
                            <p class="mt-3 text-secondary">Contract review and negotiation take up most of an in-house
                                counsel’s time. And can be
                                particularly overwhelming for start-ups or small businesses contracting with large
                                organizations
                                due to a resource bias, almost always working against the former. A strong redlining
                                ethic makes
                                this process efficient, effective, and professional. Redlining is an exchange of
                                proposed edits
                                […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-6">
                            <img src="{{asset('images/how-to-create-loveable-products-1.jpg')}}" class="img-fluid rounded-3"
                                alt="">
                            <h4 class="fw-bold mt-4">Why Making Products That People Love is the Best Marketing Strategy
                            </h4>
                            <p class="mt-3 text-secondary">SadaPay has arrived at a milestone. Our app has now been
                                downloaded more than one million times 🙂 This has been done with negligible marketing
                                spend. We get asked quite a lot about how we’ve been able to do this, especially in a
                                commoditized industry like fintech. If I had to summarize our customer acquisition […]
                            </p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/cover-sadafam-community-article.jpg')}}" class="img-fluid rounded-3"
                                alt="">
                            <h4 class="fw-bold mt-4">Why did we create the SadaFam community?</h4>
                            <p class="mt-3 text-secondary">At SadaPay, we’ve always believed in building strong
                                connections with our customers 🤝 One of the reasons we launched a waitlist was so that
                                we could speak to our earliest users and learn more about the problems they face with
                                their banking lives. When we started rolling out the SadaPay account to beta-testers, we
                                were […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/growth-for-engineers.png')}}" class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">Growth for Engineers at SadaPay</h4>
                            <p class="mt-3 text-secondary">During the interview process, many candidates are interested
                                in understanding more about the expectations we have for our engineers, how their
                                performance is measured and how their growth is recognised. We want to share some of our
                                own internal material here, so you’ll have the inside scoop. We call it our Growth
                                Framework. Principles We […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/flood-relief-cover-image.jpg')}}" class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">The flood crisis in Pakistan is far from over. Here’s what we’re
                                doing to help</h4>
                            <p class="mt-3 text-secondary">No words can describe the mass devastation Pakistan has faced
                                because of the floods. The people affected by this disaster cannot recover without help
                                from every single person in the nation who is able to contribute. At SadaPay, we’ve been
                                continuously reflecting on how we can help. All our efforts in this situation come down
                                […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/Product-Breaker.jpg.webp')}}" class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">Becoming a Product Designer: What you REALLY need to succeed</h4>
                            <p class="mt-3 text-secondary">“Product designers and graphic designers are basically the
                                same, right?” We hear that a lot. There are loads of misconceptions about the product
                                design role Most of these assumptions come from the fact that a lot of people don’t
                                really understand what the Product Designer role entails. Unlike graphic designers whose
                                main focus is aesthetics, […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/og.jpeg.webp')}}" class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">The Golden Ticket origin story</h4>
                            <p class="mt-3 text-secondary">The Golden Ticket origin story Back in the good old days,
                                (we’re talking about Dino Munchies, Courage the Cowardly Dog, flip phone era) there was
                                a famous story. A story of a boy whose life changed forever – all because of a Golden
                                Ticket. You know the one. An unsuspecting Charlie finds a Golden Ticket […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/Scaling-our-Team-Cover-Photo.jpg.webp')}}" class="img-fluid rounded-3"
                                alt="">
                            <h4 class="fw-bold mt-4">Scaling our Team at SadaPay</h4>
                            <p class="mt-3 text-secondary">When people learn about our way of working at SadaPay, they
                                sometimes tell us it won’t work “at scale”. At scale – they say – we will need
                                estimation. Deadlines, sprints, detailed road maps, project managers, engineering
                                managers and so on. But what do they mean by “at scale”? They’re not talking about the
                                number […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/World-Emoji-Day-GIF-800px.gif')}}" class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">Six ways emojis make our work lives Sada</h4>
                            <p class="mt-3 text-secondary">“Language exists to communicate whatever it can communicate.
                                Some things it communicates so badly that we never attempt to communicate them by words
                                if any other medium is available.” – C.S. Lewis It is no secret that at SadaPay we
                                embrace the informality of emojis in our relationship with our SadaFam. But did you know
                                […]</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5">
                            <img src="{{asset('images/Relay-Mobbing.png.webp')}}" class="img-fluid rounded-3" alt="">
                            <h4 class="fw-bold mt-4">Relay Mobbing at SadaPay</h4>
                            <p class="mt-3 text-secondary">We want to share how our engineering team has managed to be
                                remote-first and distributed, while still being super collaborative.</p>
                            <p class="small mt-4">READ MORE &nbsp; <i class="fa-solid fa-arrow-right-long"></i></p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mt-5 mb-5 pb-5">
                            <button class="btn btn-info rounded-circle me-1">1</button>
                            <button class="btn btn-secondary rounded-circle me-1">2</button>
                            <button class="btn btn-secondary rounded-circle me-1">...</button>
                            <button class="btn btn-secondary rounded-circle me-1">6</button>
                            <button class="btn btn-secondary rounded-circle"><i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="ms-4 ps-3">
                    <form>
                        <input class="form-control p-3 mt-6" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <h5 class="fw-bold mt-5">Recent Posts</h5>

                    <div class="row">

                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <img src="{{asset('images/how-to-redline-a-contract-header-blog-85x70.jpg')}}" class="mt-4"
                                alt="">
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <h6 class="ms-5 mt-4 fw-bold">
                                Contract negotiation 101: <br> How to redline a contract?</h6>
                            <p class="text-secondary ms-5">December 14, 2022</p>
                        </div>

                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <img src="{{asset('images/how-to-create-loveable-products-1-85x70.jpg')}}" class="mt-3" alt="">
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <h6 class="ms-5 mt-3 fw-bold">
                                Why Making Products That People Love is the Best Marketing Strategy</h6>
                            <p class="text-secondary ms-5">December 7, 2022</p>
                        </div>

                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <img src="{{asset('images/growth-for-engineers-85x70.png')}}" class="mt-3" alt="">
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <h6 class="ms-5 mt-3 fw-bold">
                                Growth for Engineers at SadaPay</h6>
                            <p class="text-secondary ms-5">November 28, 2022</p>
                        </div>

                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <img src="{{asset('images/cover-sadafam-community-article-85x70.jpg')}}" class="mt-3" alt="">
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <h6 class="ms-5 mt-3 fw-bold">
                                Why did we create the SadaFam community?</h6>
                            <p class="text-secondary ms-5"> November 3, 2022</p>
                        </div>

                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <img src="{{asset('images/flood-relief-cover-image-85x70.jpg')}}" class="mt-3" alt="">
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                            <h6 class="ms-5 mt-3 fw-bold">
                                The flood crisis in Pakistan is far from over. Here’s what we’re doing to help</h6>
                            <p class="text-secondary ms-5">October 12, 2022</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mt-4 pt-2">Archives</h5>
                    <p class="mt-4 pt-2 small">December 2022</p>
                    <p class="small">December 2022</p>
                    <p class="small">November 2022</p>
                    <p class="small">October 2022</p>
                    <p class="small">December 2022</p>
                    <p class="small">September 2022</p>
                    <p class="small">August 2022</p>
                    <p class="small">July 2022</p>
                    <p class="small">June 2022</p>
                    <p class="small">April 2022</p>
                    <p class="small">March 2022</p>
                    <p class="small">December 2021</p>
                    <p class="small">November 2021</p>
                    <p class="small">October 2021</p>
                    <p class="small">September 2021</p>
                    <p class="small">August 2021</p>
                    <p class="small">June 2021</p>
                    <p class="small">May 2021</p>
                    <p class="small">April 2021</p>
                    <p class="small">March 2021</p>
                    <p class="small">February 2021</p>
                    <p class="small">December 2020</p>
                    <p class="small">October 2020</p>
                    <p class="small">August 2020</p>
                    <p class="small">July 2020</p>
                    <p class="small">June 2020</p>
                    <p class="small">May 2020</p>
                    <p class="small">April 2020</p>
                    <p class="small">March 2020</p>

                    <h5 class="fw-bold mt-5 pt-2">Categories</h5>
                    <p class="mt-4 pt-2 small">Announcements</p>
                    <p class="small">Engineering</p>
                    <p class="small">Featured</p>
                    <p class="small">Finance 101</p>
                    <p class="small">Food for thought</p>
                    <p class="small">Going Cashless</p>
                    <p class="small">Life at SadaPay</p>
                </div>
            </div>

        </div>

    </div>  
    @endsection