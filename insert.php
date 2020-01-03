<?php

require 'connection.php';
require 'sanitize.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>insert</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <a class="navbar-brand" href="#">SQL excercise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Registration <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="profile.php">profiles</a>
    </div>
  </div>
</nav>
    <div class="container m-4">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="firstName" class="form-control" id="first_name"  placeholder="Enter first name">
            <p class="error"><?php echo $firstNameErr;?></p>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="lastName" class="form-control" id="last_name"  placeholder="Enter last name">
            <p class="error"><?php echo $lastNameErr;?></p>
        </div>
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control" id="username"  placeholder="Enter username">
            <p class="error"><?php echo $usrErr;?></p>
        </div>
        <div class="form-group">
            <label>Pick your Gender</label><br>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <p class="error"><?php echo $gndrErr;?></p>
        </div>
        <div class="form-group">
            <label for="linkedIn">linkedIn</label>
            <input type="text" name="linkedIn" class="form-control" id="linkedIn"  placeholder="Enter linkedIn">
        </div>
        <div class="form-group">
            <label for="github">github</label>
            <input type="text" name="github" class="form-control" id="github"  placeholder="Enter your github">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" id="email"  placeholder="Enter email">
            <p class="error"><?php echo $emailErr;?></p>
        </div>
        <div class="form-group">
            <label for="preferred_language">Language</label>
            <select id="preferred_language" name="language" data-placeholder="Choose a Language...">
                <option value="AF">Afrikaans</option>
                <option value="SQ">Albanian</option>
                <option value="AR">Arabic</option>
                <option value="HY">Armenian</option>
                <option value="EU">Basque</option>
                <option value="BN">Bengali</option>
                <option value="BG">Bulgarian</option>
                <option value="CA">Catalan</option>
                <option value="KM">Cambodian</option>
                <option value="ZH">Chinese (Mandarin)</option>
                <option value="HR">Croation</option>
                <option value="CS">Czech</option>
                <option value="DA">Danish</option>
                <option value="NL">Dutch</option>
                <option value="EN">English</option>
                <option value="ET">Estonian</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finnish</option>
                <option value="FR">French</option>
                <option value="KA">Georgian</option>
                <option value="DE">German</option>
                <option value="EL">Greek</option>
                <option value="GU">Gujarati</option>
                <option value="HE">Hebrew</option>
                <option value="HI">Hindi</option>
                <option value="HU">Hungarian</option>
                <option value="IS">Icelandic</option>
                <option value="ID">Indonesian</option>
                <option value="GA">Irish</option>
                <option value="IT">Italian</option>
                <option value="JA">Japanese</option>
                <option value="JW">Javanese</option>
                <option value="KO">Korean</option>
                <option value="LA">Latin</option>
                <option value="LV">Latvian</option>
                <option value="LT">Lithuanian</option>
                <option value="MK">Macedonian</option>
                <option value="MS">Malay</option>
                <option value="ML">Malayalam</option>
                <option value="MT">Maltese</option>
                <option value="MI">Maori</option>
                <option value="MR">Marathi</option>
                <option value="MN">Mongolian</option>
                <option value="NE">Nepali</option>
                <option value="NO">Norwegian</option>
                <option value="FA">Persian</option>
                <option value="PL">Polish</option>
                <option value="PT">Portuguese</option>
                <option value="PA">Punjabi</option>
                <option value="QU">Quechua</option>
                <option value="RO">Romanian</option>
                <option value="RU">Russian</option>
                <option value="SM">Samoan</option>
                <option value="SR">Serbian</option>
                <option value="SK">Slovak</option>
                <option value="SL">Slovenian</option>
                <option value="ES">Spanish</option>
                <option value="SW">Swahili</option>
                <option value="SV">Swedish </option>
                <option value="TA">Tamil</option>
                <option value="TT">Tatar</option>
                <option value="TE">Telugu</option>
                <option value="TH">Thai</option>
                <option value="BO">Tibetan</option>
                <option value="TO">Tonga</option>
                <option value="TR">Turkish</option>
                <option value="UK">Ukranian</option>
                <option value="UR">Urdu</option>
                <option value="UZ">Uzbek</option>
                <option value="VI">Vietnamese</option>
                <option value="CY">Welsh</option>
                <option value="XH">Xhosa</option>
            </select> 
            <p class="error"><?php echo $langErr;?></p>
        </div>
        <div class="form-group">
            <label for="avatar">Select an image (max 1Mb)  as your avatar:</label><br>
            <input id="avatar" type="file" name="avatar">
            <p class="alert"><?php echo $avatarErr;?></p>
        </div>
        <div class="form-group">
            <label for="video">enter a link to your fav youtube video</label>
            <input type="text" name="youtubeLink" class="form-control" id="video"  placeholder="Enter video">
            <p class="error"><?php echo $videoErr;?></p>
        </div>
        <div class="form-group">
            <label for="quote">Favorite quote</label>
            <input type="text" name="quote" class="form-control" id="quote"  placeholder="Enter quote">
            <p class="error"><?php echo $quoteErr;?></p>
        </div>
        <div class="form-group">
            <label for="quote_author">Quote Author</label>
            <input type="text" name="quoteAuth" class="form-control" id="quote_author"  placeholder="Enter quote_author">
            <p class="error"><?php echo $quoteAuthErr;?></p>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>