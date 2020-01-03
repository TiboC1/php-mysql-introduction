<?php

// input validation

    // initialize input variables

        // empty error array

        $errors = [];

        // error messages

    $firstNameErr = $lastNameErr = $usrErr = $gndrErr = $langErr = $emailErr = $avatarErr = $videoErr = $quoteErr = $quoteAuthErr = "";

        // form input values

    $firstName = $lastName = $username = $gender = $linkedIn = $github = $language = $email = $avatar = $youtubeLink = $quote = $quoteAuth = "";

// Validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //first name

    if (empty($_POST["firstName"])) {
        $firstNameErr = "Missing";
        array_push($errors, $firstNameErr);
    }
    else {
        $firstName = $_POST["firstName"];
        $firstName = filter_var($firstName, FILTER_SANITIZE_STRING);
    }

    // last name

    if (empty($_POST["lastName"])) {
        $lastNameErr = "Missing";
        array_push($errors, $lastNameErr);
    }
    else {
        $lastName = $_POST["lastName"];
        $lastName = filter_var($lastName, FILTER_SANITIZE_STRING);
    }
    // username

    if (empty($_POST["username"])) {
        $usrErr = "Missing";
        array_push($errors, $usrErr);
    }
    else {
        $username = $_POST["username"];
        $username = filter_var($username, FILTER_SANITIZE_STRING);
    }

    // gender

    if (empty($_POST["gender"])) {
        $gndrErr = "Missing";
        array_push($errors, $gndrErr);
    }
    else {
        $gender = $_POST["gender"];
        $gender = filter_var($gender, FILTER_SANITIZE_STRING);
    }

    // linkedIn

    if (!empty($_POST["linkedIn"])) {
        $linkedIn = $_POST["linkedIn"];
        $linkedIn = filter_var($linkedIn, FILTER_SANITIZE_URL);
    }

    // github

    if (!empty($_POST["github"])) {
        $github = $_POST["github"];
        $github = filter_var($github, FILTER_SANITIZE_URL);
    }

    // email

    if (empty($_POST["email"])) {
        $emailErr = "Missing";
        array_push($errors, $emailErr);
    }
    else {
        $email = $_POST["email"];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    // language
    
    if (empty($_POST["language"])) {
        $langErr = "Missing";
        array_push($errors, $langErr);
    }
    else {
        $language = $_POST["language"];
        $language = filter_var($language, FILTER_SANITIZE_STRING);
    }

    // avatar

    if (!empty($_POST["avatar"])) {
        $avatar = $_POST["avatar"];
        $avatar = filter_var($avatar, FILTER_SANITIZE_STRING);
    }

    // youtube link

    if (empty($_POST["youtubeLink"])) {
        $videoErr = "Missing";
        array_push($errors, $videoErr);
    }
    else {
        $youtubeLink = $_POST["youtubeLink"];
        $youtubeLink = filter_var($youtubeLink, FILTER_SANITIZE_URL);
    }

    // quote

    if (empty($_POST["quote"])) {
        $quoteErr = "Missing";
        array_push($errors, $quoteErr);
    }
    else {
        $quote = $_POST["quote"];
        $quote = filter_var($quote, FILTER_SANITIZE_STRING);
    }

    // quote author

    if (empty($_POST["quoteAuth"])) {
        $quoteAuthErr = "Missing";
        array_push($errors, $quoteAuthErr);
    }
    else {
        $quoteAuth = $_POST["quoteAuth"];
        $quoteAuth = filter_var($quoteAuth, FILTER_SANITIZE_STRING);
    };


// submission after validation

    if (!$errors && $firstName != '') {

        $data = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'username' => $username,
            'gender' => $gender,
            'linkedIn' => $linkedIn,
            'github' => $github,
            'email' => $email,
            'preferred_language' => $language,
            'avatar' => $avatar,
            'video' => $youtubeLink,
            'quote' => $quote,
            'quote_author' => $quoteAuth,
        ];

        $sql = "INSERT INTO student (firstName, lastName, username, gender, linkedIn, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:firstName, :lastName, :username, :gender, :linkedIn, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)";

        $pdo = openConnection();
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
    };
};