<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Sign-UP</title>
</head>
<body>
    <div class="main-container">
        <form action="userdetail.php" method="post" >
            <fieldset>
                <legend>SignUp To Access Full Content</legend>
                <div class="f-name">
                    <input type="text" name="fname" class="fname" required >
                    <span>First name</span>
                </div>
                <div class="l-name">
                    <input type="text" name="lname" class="lname" required >
                    <span>Last name</span>
                </div>
                <div class="phone-no">
                    <input type="tel" name="pno" class="pno" required >
                    <span>Enter Phone Number</span>
                </div>
                <div class="e-mail">
                    <input type="email" name="email" class="email" required >
                    <span>Enter Email</span>
                </div>
                <div class="pass">
                    <input type="password" name="password" class="password" required >
                    <span>Enter Password</span>
                </div>
                <div class="DOB">
                    <label>Select DOB</label>
                    <input type="date" name="DOB" class="date" required >
                </div>
                <select name="country" id="country" required >
                    <option value="Not selected Yet">Select Country</option>
                    <option value="india">India</option>
                    <option value="australia">australia</option>
                    <option value="pakistan">pakistan</option>
                    <option value="nepal">Nepal</option>
                    <option value="sriLanka">Sri Lanka</option>
                    <option value="netherland">Netherland</option>
                    <option value="newZeeland">NewZeeland</option>
                    <option value="america">America</option>
                </select>
                <div class="hobbies">
                    <label for="">Select Hobbies</label><br>
                    <input type="checkbox" name="sports" class="sports" value="sports" id="sports" >
                    <label for="sports">Sports</label>
                    <input type="checkbox" name="movie" class="movie" value="movie" id="movie" >
                    <label for="movie">Movie</label> <br>
                    <input type="checkbox" name="webSeries" class="webSeries" value="webSeries" id="webSeries" >
                    <label for="webSeries">Web Series</label>
                    <input type="checkbox" name="comedy" class="comedy" value="comedy" id="comedy" >
                    <label for="comedy">Comedy</label> <br>
                    <input type="checkbox" name="action" class="action" value="action" id="action" >
                    <label for="action">Action</label> <br>
                </div>
                <div class="gender">
                    <label for="">Select Gender</label><br>
                    <label for="gender" class="male">Male</label>
                    <input type="radio" name="gender" value="male" class="male" required >
                    <label for="gender" class="female">Female</label>
                    <input type="radio" name="gender" value="female" class="Female" required >
                </div>
                <input type="submit" value="submit" class="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>