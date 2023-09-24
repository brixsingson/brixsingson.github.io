<?php
// Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    // Validate gender
    $input_gender = trim($_POST["gender"]);
    if (empty($input_gender)) {
        $gender_err = "Please type in your gender!";
    } else {
        $gender = $input_gender;
    }

    // Validate mobile
    $input_mobile = trim($_POST["mobile"]);
    if (empty($input_mobile)) {
        $mobile_err = "Please enter an mobile number.";
    } else {
        $mobile = $input_mobile;
    }
    // Validate age
    $input_age = trim($_POST["age"]);
    if (empty($input_age)) {
        $age_err = "Please enter your age!";
    } elseif (!ctype_digit($input_age)) {
        $age_err = "Please enter a positive integer value.";
    } else {
        $age = $input_age;
    }

    // Validate body_temp
    $input_body_temp = trim($_POST["body_temp"]);
    if (empty($input_body_temp)) {
        $body_temp_err = "Please enter your body_temp.";
    } else {
        $body_temp = $input_body_temp;
    }
    
    // Validate covid_diagnosed
    $input_covid_diagnosed = trim($_POST["covid_diagnosed"]);
    if (empty($input_covid_diagnosed)) {
        $covid_diagnosed_err = "Please type in YES or NO.";
    } else {
        $covid_diagnosed = $input_covid_diagnosed;
    }

    // Validate covid_encounter
    $input_covid_encounter = trim($_POST["covid_encounter"]);
    if (empty($input_covid_encounter)) {
        $covid_encounter_err = "Please type in YES or NO.";
    } else {
        $covid_encounter = $input_covid_encounter;
    }

    // Validate vaccinated
    $input_vaccinated = trim($_POST["vaccinated"]);
    if (empty($input_vaccinated)) {
        $vaccinated_err = "Please type in YES or NO.";
    } else {
        $vaccinated = $input_vaccinated;
    }

    // Validate nationality
    $input_nationality = trim($_POST["nationality"]);
    if (empty($input_nationality)) {
        $nationality_err = "Please enter your nationality!";
    } else {
        $nationality = $input_nationality;
    }
?>