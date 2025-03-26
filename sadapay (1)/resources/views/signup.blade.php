@extends('layouts.main')

@section('main-container')
    <script>
        function signupFunction() {
            // Get form input values
            var full_name = document.getElementById('full_name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Validate form inputs using HTML5 validation attributes
            var isFormValid = document.getElementById('signupForm').checkValidity();

            if (!isFormValid) {
                alert("Please fill in all fields correctly.");
                return;
            }

            // Perform signup logic (replace with your actual signup code)
            alert("Signup successful!\n\nName: " + full_name + "\nEmail: " + email);
        }
    </script>
    </head>

    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form id="signupForm" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required />
                            @error('full_name')
                                <small class="text-danger">{{ $errors->first('full_name') }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>

                            @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" pattern=".{8,}"
                                title="Minimum 8 characters" required>
                            @error('password')
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            @enderror
                            <!-- The 'pattern' attribute enforces a minimum length of 8 characters -->
                        </div>
                        <button type="submit" class="btn btn-danger fw-bold p-signup">Signup
                            Now</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>

    </html>
@endsection
