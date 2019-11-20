<?php
if (isset($_POST['submit'])) {
    echo "form submitted";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signup/signup.css">
    <title>Document</title>
</head>

<body>
    <div class="signup-div container">
        <form method="POST" onsubmit="return validation()">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fnameInput">First Name <span class="required">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="name" id="fnameInput" onkeyup="nameValidate(this)">
                    <div class="invalid-feedback" id="nameErr">First name must be min 2 charecters.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="lnameInput">Last Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" id="lnameInput">
                    <div class=" invalid-feedback" id="lnameErr">Last name must be min 2 charecters.</div>

                </div>
            </div>
            <div class="form-group">
                <label for="emailInput">Email address <span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" name="email" id="emailInput" onkeyup="emailValidate(this)">
                <div class="invalid-feedback" id="emailErr">Enter valid email address.</div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="passowrdInput">Password <span class="required">*</span> </label>
                    <input type="password" class="form-control form-control-sm" name="password" id="passwordInput" onkeyup="passwordValidate(this)">
                    <div class="invalid-feedback" id="passwordErr">Password must be min 4 alpha numeric charecters.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="cPassInput">Confirm Password <span class="required">*</span></label>
                    <input type="password" class="form-control form-control-sm" name="cPass" id="cPassInput" onkeyup="confirmPasswordValidate(this)">
                    <div class=" invalid-feedback" id="cPassErr">Passwords do not match.</div>
                </div>
            </div>

            <div class="form-group">
                <label for="phoneInput">Phone <span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" name="phone" id="phoneInput" onkeyup="phoneValidate(this)" value="+45 ">
                <div class="invalid-feedback" id="phoneErr">Enter valid Phone number minimum 9 digits.</div>
            </div>

            <div class="form-group">
                <label>Address <span class="required">*</span></label>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <input type="text" class="form-control form-control-sm" name="street" id="streetInput" placeholder="Street name" onkeyup="streetValidate(this)">
                        <div class="invalid-feedback" id="streetErr">Enter valid street name.</div>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control form-control-sm" name="streetNo" id="streetNoInput" placeholder="Street No" onkeyup="streetNoValidate(this)">
                        <div class="invalid-feedback" id="streetNoErr">Enter valid street number.</div>

                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control form-control-sm" name="postalcode" id="postalCodeInput" placeholder="Postalcode" onkeyup="postalCodeValidate(this)">
                        <div class="invalid-feedback" id="postalCodeErr">Enter valid postal code.</div>

                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-sm" name="city" id="cityInput" placeholder="City" onkeyup="cityValidate(this)">
                        <div class="invalid-feedback" id="cityErr">Enter valid City.</div>

                    </div>
                    <div class="form-group col-md-3">
                        <input class="form-control form-control-sm" type="text" placeholder="Denmark" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="memberTypeInput">You are : <span class="required">*</span></label>
                <select class="form-control form-control-sm select-field" name="memberType" id="memberTypeInput" onchange="handleChange()">
                    <option value="user">User</option>
                    <option value="shelter">Shelter</option>
                </select>
            </div>

            <!-- <div id="shelterDivs" class="shelterDivs">
                <div class="form-group">
                    <label for="shelterNameInput">Shelter Name <span class="required">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="shelterName" id="shelterNameInput" onkeyup="shelterNameValidate(this)">
                    <div class="invalid-feedback" id="shelterNameErr">Enter valid shelter name.</div>

                </div>
                <div class="form-group">
                    <label for="description">Description <span class="required">*</span></label>
                    <textarea class="form-control" id="Textarea" name="description" onkeyup="descriptionValidate(this)"></textarea>
                    <div class="invalid-feedback" id="descriptionErr">Description min 20 charecters.</div>
                </div>
                <div class="form-group">
                    <label for="image">choose image file</label>
                    <input type="file" class="form-control-file form-control-sm" name="image" id="image">
                </div>
            </div> -->

            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block submit-btn">Sign in</button>
        </form>


    </div>
    <script src="test.js?2"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>