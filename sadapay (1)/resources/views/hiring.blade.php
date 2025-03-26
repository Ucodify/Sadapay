@extends('layouts.main')

@section('main-container')
    <div class="container">
        <div class="text-center text-drkblue mt-10 pb-8">
            <h1 class="fw-bold display-3">The adventure of a lifetime</h1>
            <p class="display-6">Check out what seats are available on the rocket ship</p>
            <a href="signup.html" class="btn btn-danger fw-bold p-signup mt-2" type="submit"> <span class="fs-8"><i
                        class="fa-solid fa-magnifying-glass me-2"></i> Explore Our Open Roles
                </span></a>
        </div>
    </div>



    <div class="container mt-10">
        <h2 class="text-drkblue fw-bold ms-5 ps-5">Our Mission:</h2>
        <p class="text-secondary display-6 ms-5 ps-5">To make money so simple (“sada”) that <br> any other way becomes
            unthinkable.</p>
        <p class="text-secondary ms-5 ps-5">Banking in Pakistan is notoriously complex and intimidating, and because of
            this, more than 80% <br> of 225 million people don’t have a bank account.</p>
        <p class="text-secondary ms-5 ps-5">We’re built on the idea that if we eliminate all of this unnecessary
            complexity and focus only on <br> what really matters, we can deliver a banking experience that <br> is so
            elegant and simple that absolutely anyone can use it. </p>
        <p class="text-secondary ms-5 ps-5">Better access to modern financial services will have a far-reaching impact
            that touches every <br> industry and every part of our lives. We are a relentless group of individuals, who
            genuinely <br> believe they can build a financially happier Pakistan. Our story is one of empowerment and
            <br> inclusivity for over a hundred million people, and we want you to be a part of it!
        </p>
    </div>


    <div class="container text-center">
        <h1 class="text-drkblue display-3 fw-bold mt-5 pt-5">Why join the rocket ship?</h1>
        <h3 class="text-secondary fw-normal">Our approach to our work is centered around becoming the best versions of
            <br> ourselves. Here’s how we help make that happen:
        </h3>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <img src="{{asset('images/lhr-1024x771-1.jpeg')}}" class="img-fluid rounded-3 mt-6" width="450px" alt="">
                <h5 class="text-drkblue fw-bold mt-4 pt-2 mb-4">Make A Difference, Every Day</h5>
                <p class="text-secondary lh-base">You solve challenging problems for our users. We give you <br> the
                    space you need to succeed. We’re growing fast and no <br> two days at SadaPay are ever the same. We
                    care about a <br> better future and our culture is deliberately entrepreneurial. <br> Your ideas
                    here will go a long way! 🚀</p>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <img src="{{asset('images/work-from-anywhere-anytime.png.webp')}}" class="img-fluid rounded-3 mt-6"
                    width="450px" alt="">
                <h5 class="text-drkblue fw-bold mt-4 pt-2 mb-4">Work From Anywhere, Any Time</h5>
                <p class="text-secondary lh-base">We’re big believers in working hard but also understand that <br>
                    everyone’s schedules or preferences can look different. That's <br> why we built remote work into
                    the DNA of how we do <br> business. We do have spectacular offices in all major <br> Pakistani
                    cities but you decide how you want to do your best work 💪</p>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <img src="{{asset('images/crrtv-1024x771-1.jpeg')}}" class="img-fluid rounded-3 mt-5" width="450px" alt="">
                <h5 class="text-drkblue fw-bold mt-4 pt-2 mb-4">Real Ownership Through Stock Options</h5>
                <p class="text-secondary lh-base">SadaPay is one of the rare companies in Pakistan that has <br> had an
                    Employee Stock Ownership Plan (ESOP) since its <br> inception. Our employees have ownership in the
                    company <br> through ‘stock options’ and become stakeholders in the <br> company’s success as they
                    continue to contribute towards <br> our growth 📈</p>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <img src="{{asset('images/top-of-market-pay.jpg')}}" class="img-fluid rounded-3 mt-5" width="450px" alt="">
                <h5 class="text-drkblue fw-bold mt-4 pt-2 mb-4">Top of Market Pay and Benefits</h5>
                <p class="text-secondary lh-base">To help us attract and retain stunning colleagues, we pay <br>
                    employees at the top of their personal market. Beyond <br> compensation, we have ESOP, voluntary
                    pension fund, <br> comprehensive family medical insurance and unlimited <br> holidays 🏝 Oh and you
                    also get a personal Macbook when <br> you join 💻</p>
            </div>

        </div>
        <div class="text-center mt-5 pt-3">
            <a href="signup.html" class="btn btn-danger fw-bold p-signup mt-2" type="submit"> <span class="fs-8"><i
                        class="fa-solid fa-magnifying-glass me-2"></i> Explore Our Open Roles
                </span></a>
        </div>
    </div>


    <div class="container text-center">
        <h1 class="text-drkblue display-3 fw-bold mt-5 pt-5">This is how we work</h1>
        <h3 class="text-secondary fw-normal">Our vision brings us together. Our mission drives us. Our values guide us.
        </h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-6">
                    <img src="{{asset('images/Hear.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="text-drkblue fw-bold mt-4">Power to our people</h5>
                    <p class="mt-3 text-secondary lh-base">We claim ownership of our work. We <br> have a shared
                        commitment to <br> accomplish great things. We seek <br> what is best for SadaPay and take <br>
                        responsibility when we fall short.</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-6">
                    <img src="{{asset('images/icon2.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="text-drkblue fw-bold mt-4">Embracing diversity</h5>
                    <p class="mt-3 text-secondary lh-base">We believe that diversity fosters <br> true innovation. From
                        experienced <br> bankers to fresh graduates, the <br> team works together from more <br> than 10
                        countries, bringing our <br> unique strengths to the table.</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-6">
                    <img src="{{asset('images/Impact-1.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="text-drkblue fw-bold mt-4">Raising the bar</h5>
                    <p class="mt-3 text-secondary lh-base">Solving hard problems requires <br> relentless innovation. We
                        constantly <br> challenge ourselves to higher <br> standards because our work is <br> going to
                        have incredible impact.</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-6">
                    <img src="{{asset('images/icon4-1.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="text-drkblue fw-bold mt-4">Working with grit</h5>
                    <p class="mt-3 text-secondary lh-base">We strive for 10x excellence in our <br> work. We look for
                        those who are <br> better than us, as we accomplish <br> amazing amounts of important <br> work.
                    </p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-6">
                    <img src="{{asset('images/icon5.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="text-drkblue fw-bold mt-4">Pushing ourselves</h5>
                    <p class="mt-3 text-secondary lh-base">We are curious as a team. We <br> challenge each other and
                        ask <br> questions to get to the root of <br> problems. And we learn and relearn <br> with an
                        open mind in these ever <br> evolving times.</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-6">
                    <img src="{{asset('images/Icon6.png')}}" class="img-fluid" width="70px" alt="">
                    <h5 class="text-drkblue fw-bold mt-4">We question, learn and relearn</h5>
                    <p class="mt-3 text-secondary lh-base">We’re helping to build a wallet we’d <br> love to use
                        ourselves. We’re focused <br> on solving difficult problems. We <br> aren’t afraid to push the
                        <br> boundaries and challenge the <br> status quo.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center mt-6">
            <a href="signup.html" class="btn btn-danger fw-bold p-signup mt-2" type="submit"> <span class="fs-8"><i
                        class="fa-solid fa-magnifying-glass me-2"></i> Explore Our Open Roles
                </span></a>
        </div>
    </div>


    <div class="container">
        <div class="text-drkblue mt-10 pb-8">
            <h1 class="fw-bold display-4">Why joining <br> SadaPay is a lot <br> more than just a <br> new job</h1>

            <a href="signup.html" class="btn btn-danger fw-bold p-signup mt-3" type="submit"> <span class="fs-8"><i
                        class="fa-regular fa-message me-2"></i> Learn about Culture at SadaPay
                </span></a>
        </div>
    </div>


    <div class="container text-center">
        <h1 class="text-drkblue display-3 fw-bold mt-6 pt-5">Stories from the SadaBlog</h1>
        <h2 class="text-secondary fw-normal lh-base pb-5">Read about our culture, our Sadanauts and <br> learn our
            different
            departments
        </h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-5 shadow-lg">
                    <img src="{{asset('images/growth-for-engineers-300x157.png')}}" class="img-fluid rounded-3" width="357px"
                        alt="">
                    <h4 class="mt-4 pt-3 ps-4">Growth for Engineers at SadaPay</h4>
                    <p class="text-secondary mt-4 ps-4">During the interview process, many <br> candidates are
                        interested in
                        <br> understanding more about the <br> expectations we have for our engineers, <br> how
                    </p>
                    <p class="small fw-bold ps-4 pb-4 mt-4">READ MORE »</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-5 shadow-lg">
                    <img src="{{asset('images/cover-sadafam-community-article-300x157.jpg')}}" class="img-fluid rounded-3"
                        width="357px" alt="">
                    <h4 class="mt-4 pt-3 ps-4">Why did we create the <br> SadaFam community?</h4>
                    <p class="text-secondary mt-4 ps-4">At SadaPay, we’ve always believed in <br> building strong
                        connections
                        with our <br> customers 🤝 One of the reasons we <br> launched a
                    </p>
                    <p class="small fw-bold ps-4 pb-5 mt-4">READ MORE »</p>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <div class="mt-5 shadow-lg">
                    <img src="{{asset('images/Product-Breaker-300x157.jpg.webp')}}" class="img-fluid rounded-3" width="357px"
                        alt="">
                    <h4 class="mt-4 pt-3 ps-4">Becoming a Product <br> Designer: What you REALLY need to succeed</h4>
                    <p class="text-secondary mt-4 ps-4">“Product designers and graphic designers <br> are basically the
                        same,
                        right?” We hear <br> that a lot. There are loads of <br> misconceptions</p>
                    <p class="small fw-bold ps-4 pb-4  mt-4">READ MORE »</p>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center mt-5">
        <a href="signup.html" class="btn btn-outline-danger fw-bold p-signup mt-2 me-3" type="submit"> <span class="fs-8"><i
                    class="fa-solid fa-magnifying-glass me-2"></i> Read more on our blog
            </span></a>

        <a href="signup.html" class="btn btn-danger fw-bold p-signup mt-2" type="submit"> <span class="fs-8"><i
                    class="fa-solid fa-magnifying-glass me-2"></i> Explore Our Open Roles
            </span></a>
    </div>


    <div class="bg-silver">
        <div class="container text-center">
            <h1 class="text-drkblue display-3 fw-bold mt-6 pt-6">See what our users are saying</h1>
            <h2 class="text-secondary fw-normal lh-base">Don’t take it from us. Our earliest users have a lot <br> to
                say about their sada experience.
            </h2>
            <div class="text-center mt-5 pt-4">
                <a href="signup.html" class="btn btn-outline-danger fw-bold p-signup mt-2 me-3" type="submit"> <span
                        class="fs-8"><i class="fa-brands fa-twitter me-2"></i> Follow us on Twitter
                    </span></a>

                <a href="signup.html" class="btn btn-danger fw-bold p-signup mt-2" type="submit"> <span class="fs-8"><i
                            class="fa-solid fa-magnifying-glass me-2"></i> Explore Our Open Roles
                    </span></a>
            </div>
            <h3 class="text-drkblue display-6 fw-bold mt-6 pt-5">We're a top rated employer</h3>
            <h2 class="text-secondary fw-normal lh-base pb-4">Check out authentic reviews about SadaPay as <br> an
                employer on <a class="text-black text-decoration-none" href="#"> Glassdoor.com.</a>
            </h2>
            <img src="{{asset('images/horizontalStarRating.png')}}" class="img-fluid pb-8" alt="">
        </div>
    </div>



    <div class="container text-center">
        <h1 class="text-drkblue display-3 fw-bold mt-6 pt-5">Board the rocketship!</h1>
        <h2 class="text-secondary fw-normal lh-base pb-5">Join us in building an organization that will <br> make
            tomorrow simpler
        </h2>
    </div>



    <div class="bg-silver">
        <div class="container pt-8 pb-8">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="row">


                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <img src="{{asset('images/Resourceful-Idea-1-150x150.png')}}" class="img-fluid" width="120px" alt="">
                        </div>

                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <h2 class="text-orange fw-light text-start pt-3">Curious to learn more?<br>
                                <span class="text-drkblue fw-bold">Check out our socials!</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="ps-5 pt-4 text-center">
                        <button class="btn btn-danger fw-bold p-signup" type="submit"> <span class="fs-8"> <i class="fa-brands fa-linkedin me-2"></i> Follow us on LinkedIn
                            </span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection