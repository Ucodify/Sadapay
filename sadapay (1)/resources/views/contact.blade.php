@extends('layouts.main')

@section('main-container')
    <div class="container">
        <div class="text-drkbluemt mt-10 ms-5 ps-5">
            <h4 class="fw-normal">Hello! 👋 What's your name? </h4>

            <form>
                <input class="form-control w-75 border-top-0 border-start-0 border-end-0 p-2" type="search"
                    aria-label="Search">
            </form>
        </div>
        <div class="text-center mt-12">
            <button class="border-0 bg-white text-orange"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="border-0 text-white bg-orange rounded-pill ps-4 pe-4 pt-2 pb-2 ms-2"><i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
@endsection