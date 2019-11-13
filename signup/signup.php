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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <input type="email" class="form-control form-control-sm" name="email" id="emailInput" onkeyup="emailValidate(this)">
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
                <div class="invalid-feedback" id="phoneErr">Enter valid Phone number.</div>

            </div>

            <div class="form-group">
                <label>Address <span class="required">*</span></label>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <input type="text" class="form-control form-control-sm" name="street" id="streetInput" placeholder="Street name">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control form-control-sm" name="streetno" id="streetnolInput" placeholder="Street no">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control form-control-sm" name="postalcode" id="postalcodeInput" placeholder="Postalcode">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control form-control-sm" name="city" id="cityInput" placeholder="City">
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

            <div id="shelterDivs" class="shelterDivs">
                <div class="form-group">
                    <label for="shelterName">Shelter Name <span class="required">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="shelterName" id="shelterName" placeholder="Shelter name">
                </div>
                <div class="form-group">
                    <label for="description">Description <span class="required">*</span></label>
                    <textarea class="form-control" id="Textarea" name="description" placeholder="Enter desciption"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">choose image file</label>
                    <input type="file" class="form-control-file form-control-sm" name="image" id="image">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block submit-btn">Submit</button>
        </form>
    </div>



    <!-- <script src="t.js"></script> -->
    <script src="signup.js"></script>
</body>

</html>