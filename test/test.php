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
    <link rel="stylesheet" href="test.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="main container">
        <form id="form" method="POST" onsubmit="return validation()">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fnameInput">First Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" id="fnameInput" placeholder="First Name" onkeyup="nameValidaton(this)">
                    <div class="invalid-feedback" id="nameErr">First name must be min 3 charecters.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="nameInput">Last Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" id="nameInput" placeholder="Enter Name">
                </div>
            </div>
            <div class="form-group">
                <label for="emailInput">Email address</label>
                <input type="email" class="form-control form-control-sm" name="email" id="emailInput" placeholder="Enter email" onkeyup="emailValidaton(this)">
                <div class="invalid-feedback" id="emailErr">Enter valid email address.</div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="passowrdInput">Password</label>
                    <input type="password" class="form-control form-control-sm" name="password" id="passwordInput" placeholder="Password" onkeyup="passValidation(this)">
                    <div class="invalid-feedback" id="passwordErr">Password must be min 4 alpha numeric charecters.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmPassowrdInput">Password</label>
                    <input type="password" class="form-control form-control-sm" name="password" id="confirmPassowrdInput" placeholder="Password" onkeyup="confirmPassValidation(this)">
                    <div class="invalid-feedback" id="confirmPasswordErr">Passwords do not match.</div>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneInput">Phone</label>
                <input type="text" class="form-control form-control-sm" name="phone" id="phoneInput" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="streetInput">Street</label>
                <input type="text" class="form-control form-control-sm" name="street" id="streetInput" placeholder="Enter street">
            </div>
            <div class="form-group">
                <label for="streetnolInput">Street No</label>
                <input type="text" class="form-control form-control-sm" name="streetno" id="streetnolInput" placeholder="Enter street no">
            </div>
            <div class="form-group">
                <label for="postalcodeInput">Postal Code</label>
                <input type="text" class="form-control form-control-sm" name="postalcode" id="postalcodeInput" placeholder="Postalcode">
            </div>
            <div class="form-group">
                <label for="cityInput">City</label>
                <input type="text" class="form-control form-control-sm" name="city" id="cityInput" placeholder="City">
            </div>
            <div class="form-group">
                <label for="memberTypeInput">You are :</label>
                <select class="form-control form-control-sm" name="memberType" id="memberTypeInput" onchange="handleChange()">
                    <option value="user">User</option>
                    <option value="shelter">Shelter</option>
                </select>
            </div>

            <div id="shelterDivs" class="shelterDivs">

                <div class="form-group">
                    <label for="shelterName">Shelter Name</label>
                    <input type="text" class="form-control form-control-sm" name="shelterName" id="shelterName" placeholder="Shelter name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="Textarea" name="description" placeholder="Enter desciption"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">choose image file</label>
                    <input type="file" class="form-control-file form-control-sm" name="image" id="image">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="test.js"></script>

</body>

</html>