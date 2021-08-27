<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
 
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="../project/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../project/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../project/assets/bootstrap/css/bootstrap-reboot.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="" class="navbar brand text-warning font-weight-bold">GET CASADO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse text-center menu" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item"><a href="index.html" class=" nav-link text-white"> Home </a></li>
                        <li class="nav-item"><a href="service.html" class="nav-link text-white"> Services </a></li>
                        <li class="nav-item"><a href="" class="nav-link text-white"> Work</a></li>
                        <li class="nav-item"><a href="maboutus.html" class="nav-link text-white"> About Us </a></li>
                        <li class="nav-item"><a href="contect.html" class="nav-link text-white"> Contact </a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a></li>
                    </ul>
                </div>
        </div>
    </nav>
 <form action="reg.php" method="POST" class="register">
        <h1>Registration</h1>
        <fieldset class="row1">
            <legend>Account Details</legend>
            <p>
                <label>Email *</label><input type="text"/>
                <label>Repeat email *</label><input type="text"/>
            </p>
            <p>
                <label>Password*</label><input type="text"/>
                <label>Repeat Password</label><input type="text"/>
                <label class="obinfo">more info</label>
            </p>
        </fieldset>
        <fieldset class="row2">
            <legend>Personal Details</legend>
            <p>
                <label>Name *</label>
                <input type="text" class="long"/>
            </p>
            <p>
                <label>Phone *</label><input type="text" maxlength="10"/>
            </p>
            <p>
                <label class="optional">Address</label><input type="text" class="long"/>
            </p>
            <p>
                <label class="optional">Website</label>
                <input class="long" type="text" value="http://"/>
            </p>
        </fieldset>
        <fieldset class="roLogin">
            <legend>Further Information</legend>
            <p>
                <label>Gender *</label>
                <input type="radio" value="radio"/>
                <label class="gender">Male</label>
                <input type="radio" value="radio"/>
                <label class="gender">Female</label>
            </p>
            <p>
                <label>Birthdate *</label>
                <select class="date">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <input class="year" type="text" size="4" maxlength="4"/>e.g 1976
            </p>
            <p>
                <label>Nationality *</label>
                <select>
                    <option value="0">Choose Nationality</option>
                    <option value="1">India</option>
                    <option value="2">Japan</option>
                    <option value="3">Russia</option>
                    <option value="4">Australia</option>
                    <option value="5">England</option>
                </select>
            </p>
            <p>
                <label>Self *</label>
                <input type="checkbox" value="" />
            </p>
            <div class="infobox"><h4>Helpful Information</h4>
                <p></p>
            </div>
        </fieldset>
        <fieldset class="row4">
            <legend>Terms and Mailing</legend>
            <p class="agreement">
                <input type="checkbox" value=""/>
                <label>*  I accept the <a href="#">Terms and Conditions</a></label>
            </p>
            <p class="agreement">
                <input type="checkbox" value=""/>
                <label>I want to receive personalized offers by your site</label>
            </p>
            <p class="agreement">
                <input type="checkbox" value=""/>
                <label>Allow partners to send me personalized offers and related services</label>
            </p>
        </fieldset>
        <div><button class="button">Register &raquo;</button></div>
    </form>
    </div>		
</body>
</html>