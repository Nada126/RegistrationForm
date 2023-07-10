
@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<article>
    <div class="container">
		<form id="myForm" method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
                    <label for="full_name">{{ __("index.fullname")}}</label>
                    <input type="text" class="form-control" id="full_name" name="FullName" required>
                </div>
                <div class="form-group">

                    <label for="user_name">{{ __("index.username")}}</label>
                    <input type="text" class="form-control" id="user_name" name="Username"
                         required>
                    
                </div>


                <div class="form-group">

                    <label for="user_name">{{ __("index.birthdate")}}</label>
                    <input type="date" class="form-control" id="dateInput" name="birthdate" min="1900-01-01"
                        max="2023-12-31" required>
                        <br>
                    <button type="button" id="actorsBtn" name="submit" class="IIR">{{ __("index.actor")}}</button>
                    <p>{{ __("index.actor")}}: <span class="actors__list"></span></p>
                </div>



                <div class="form-group">
                    <label for="phone">{{ __("index.phone")}}</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">{{ __("index.address")}}</label>
                    <input type="text" class="form-control" id="address" name="Address" required>
                </div>
                <div class="form-group">
                    <label for="password">{{ __("index.password")}}</label>
                    <input type="password" class="form-control" id="password" name="password" required minlength="8">
                </div>
                <div class="form-group">
                    <label for="confirm_password">{{ __("index.cofpassword")}}</label>
                    <input type="password" class="form-control" id="confirm_password" name="passwordcheck" required
                        minlength="8">
                </div>
               
                <div class="form-group">
                    <label for="email">{{ __("index.email")}}</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" name="submit" class="btn-btn-primary">{{ __("index.submit")}}</button>
                <br>	
		</form>
    </div>
</article>  



<script>
    function validateForm() {
        // Get the values of the form fields
        var fullName = document.forms["myForm"]["full_name"].value;
        var userName = document.forms["myForm"]["user_name"].value;
        var phone = document.forms["myForm"]["phone"].value;
        var address = document.forms["myForm"]["address"].value;
        var password = document.forms["myForm"]["password"].value;
        var confirmPassword = document.forms["myForm"]["confirm_password"].value;
        var email = document.forms["myForm"]["email"].value;
        var birthdate = document.forms["myForm"]["dateInput"].value;
        console.log(fullName)
        console.log(document.getElementById("full_name"))
        // Check that all fields are filled
        if (fullName == "" || userName == "" || phone == "" || birthdate == "" || address == "" || password == "" ||
            confirmPassword == "" || email == "") {
            alert("All fields are required.");
            return false;
        }

        // Check that email and birthdate are valid formats
        if (!/\S+@\S+\.\S+/.test(email)) {
            alert("Invalid email format.");
            return false;

        } else if (!/^[^\d]+$/.test(fullName)) {
            alert("PLease enter Your  real FullName");
            return false;
        }


        // Check that password meets requirements and matches confirm password
        if (!/\d/.test(password) || !/[\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:\-]/.test(password)) {
            alert("Password must be at least 8 characters and contain at least 1 number and 1 special character.");
            return false;
        } else if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }


    document.forms["myForm"].addEventListener("submit", function(event) {
        // Prevent the form from submitting if validation fails
        if (!validateForm()) {
            event.preventDefault();
        }
    });
    </script>



@endsection('content')
