<?php

require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errorcheck = 0;

    //first section 
    $title = trim($_POST['title']);
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $zip = trim($_POST['zip']);
    $cellphone_p = trim($_POST['cellphone_p']);
    $homephone = trim($_POST['homephone']);
    $mobilephone = trim($_POST['mobilephone']);

    $maritial = trim($_POST['maritial']);
    $social = trim($_POST['social']);
    $birth = trim($_POST['birth']);
    $parents = trim($_POST['parents']);
    $referred = trim($_POST['referred']);
    $occupation = trim($_POST['occupation']);
    $cellphone_s = trim($_POST['cellphone_s']);
    $employer = trim($_POST['employer']);
    $email = trim($_POST['email']);
    $sql = " SELECT * FROM `user` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    //second section 
    $medication_p = trim($_POST['medication_p']);
    $familydoctor = trim($_POST['familydoctor']);
    $smoke = trim($_POST['smoke']);
    $medication_list = trim($_POST['medication_list']);
    $lastexam = trim($_POST['lastexam']);
    $glasses = trim($_POST['glasses']);
    if ($glasses == 'Yes') {
        $old = trim($_POST['old']);
        if (empty($old)) {
            echo     "Can't be blank";
            $errorcheck = 1;
        }
    }
    $familyhistory = trim($_POST['familyhistory']);

    // profile pic validation
    // $target_dir = "assets/images/";
    // $profile = $_FILES['profile']['name'];
    // $target_file = $target_dir . basename($_FILES["profile"]["name"]);
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // $check = getimagesize($_FILES["profile"]["tmp_name"]);
    // $allowed_image_extension = array("png", "jpg", "jpeg");

    // // written by me
    // $profile = $name . '.' . $imageFileType;
    // $target_file = $target_dir . basename($profile);

    // Third section
    $insurance_p = trim($_POST['insurance_p']);
    $employer_p = trim($_POST['employer_p']);
    $insured_p = trim($_POST['insured_p']);
    $birth_p = trim($_POST['birth_p']);
    $insured_ss_p = trim($_POST['insured_ss_p']);

    $insurance_s = trim($_POST['insurance_s']);
    $employer_s = trim($_POST['employer_s']);
    $insured_s = trim($_POST['insured_s']);
    $birth_s = trim($_POST['birth_s']);
    $insured_ss_s = trim($_POST['insured_ss_s']);

    // PHP validation
    // First section
    if (empty($title)) {
        echo "Select Title";
        $errorcheck = 1;
    }
    if (empty($name)) {
        echo "Can't be blank";
        $errorcheck = 1;
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        echo "Please enter character only";
        $errorcheck = 1;
    }
    if (empty($address)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($city)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($state)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($zip)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($cellphone_p)) {
        echo "Can't be blank";
        $errorcheck = 1;
    } elseif (!is_numeric($cellphone_p)) {
        echo "Enter numeric only";
        $errorcheck = 1;
    } elseif (strlen($cellphone_p) != 10) {
        echo "Enter 10 digit only";
        $errorcheck = 1;
    }
    if (empty($homephone)) {
        echo "Can't be blank";
        $errorcheck = 1;
    } elseif (!is_numeric($homephone)) {
        echo "Enter numeric only";
        $errorcheck = 1;
    } elseif (strlen($homephone) != 10) {
        echo "Enter 10 digit only";
        $errorcheck = 1;
    }
    if (empty($mobilephone)) {
        echo "Can't be blank";
        $errorcheck = 1;
    } elseif (!is_numeric($mobilephone)) {
        echo "Enter numeric only";
        $errorcheck = 1;
    } elseif (strlen($mobilephone) != 10) {
        echo "Enter 10 digit only";
        $errorcheck = 1;
    }
    if (empty($maritial)) {
        echo "Select Maritial Status";
        $errorcheck = 1;
    }
    if (empty($social)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($birth)) {
        echo "Select birth date";
        $errorcheck = 1;
    }
    if (empty($parents)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($referred)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($occupation)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($cellphone_s)) {
        echo "Can't be blank";
        $errorcheck = 1;
    } elseif (!is_numeric($cellphone_s)) {
        echo "Enter numeric only";
        $errorcheck = 1;
    } elseif (strlen($cellphone_s) != 10) {
        echo "Enter 10 digit only";
        $errorcheck = 1;
    }
    if (empty($employer)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($email)) {
        echo "Can't be blank";
        $errorcheck = 1;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        $errorcheck = 1;
    } elseif ($num == 1) {
        echo "Email already exist";
        $errorcheck = 1;
    }

    // second section
    if (empty($medication_p)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($familydoctor)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($smoke)) {
        echo "Select smoke prefrence";
        $errorcheck = 1;
    }
    if (empty($medication_list)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($lastexam)) {
        echo "Select last exam date";
        $errorcheck = 1;
    }
    if (empty($glasses)) {
        echo "Select lences prefrence";
        $errorcheck = 1;
    }
    if (empty($familyhistory)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    // if (empty($_FILES["profile"]["name"])) {
    //     $profile_Err = 'Please select image';
    //     $errorcheck = 1;
    // }
    // // Check file size
    // elseif ($_FILES["profile"]["size"] > 50000) {
    //     $profile_Err = 'Sorry, your file is greater than 50kb.';
    //     $errorcheck = 1;
    // } elseif (!in_array($imageFileType, $allowed_image_extension)) {
    //     $profile_Err = 'Sorry, only JPG, JPEG & PNG files are allowed.';
    //     $errorcheck = 1;
    // }

    //third section
    if (empty($insurance_p)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($employer_p)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($insured_p)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($birth_p)) {
        echo "Select birth date";
        $errorcheck = 1;
    }
    if (empty($insured_ss_p)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($insurance_s)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($employer_s)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($insured_s)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }
    if (empty($birth_s)) {
        echo "Select birth date";
        $errorcheck = 1;
    }
    if (empty($insured_ss_s)) {
        echo "Can't be blank";
        $errorcheck = 1;
    }

    if ($errorcheck == 0) {

        // $sql = "INSERT INTO user (name, email, city) 
        // $sql = "INSERT INTO user ( title, name, address, city, state, zip, cellphone_p, homephone, mobilephone, maritial, social, birth, parents, referred, occupation, cellphone_s, employer, email, medication_p, familydoctor, smoke, medication_list, lastexam, glasses, old, familyhistory, insurance_p, employer_p, insured_p, birth_p, insured_ss_p, insurance_s, employer_s, insured_s, birth_s, insured_ss_s ) 
        // VALUES ('$title', '$name', '$address', '$city', '$state', '$zip', '$cellphone_p', '$homephone', '$mobilephone', '$maritial', '$social', '$birth', '$parents', '$referred', '$occupation', '$cellphone_s', '$employer', '$email', '$medication_p', '$familydoctor', '$smoke', '$medication_list', '$lastexam', '$glasses', '$old', '$familyhistory', '$insurance_p', '$employer_p', '$insured_p', '$birth_p', '$insured_ss_p', '$insurance_s', '$employer_s', '$insured_s', '$birth_s', '$insured_ss_s') ";
        // $result = mysqli_query($conn, $sql);

        // if ($result) {
            echo '
            <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    Title: <span id="your_title" class="output"> ' . $title . ' </span> <br>
                    Name: <span id="your_name" class="output"> ' . $name . ' </span> <br>
                    Address: <span id="your_address" class="output"> ' . $address . ' </span> <br>
                    City: <span id="your_city" class="output"> ' . $city . ' </span> <br>
                    State: <span id="your_state" class="output"> ' . $state . ' </span> <br>
                    Zip: <span id="your_zip" class="output"> ' . $zip . ' </span> <br>
                    Cell Phone: <span id="your_cellphone_p" class="output"> ' . $cellphone_p . ' </span> <br>
                    Home Phone: <span id="your_homephone" class="output"> ' . $homephone . ' </span> <br>
                    Mobile Phone: <span id="your_mobilephone" class="output"> ' . $mobilephone . ' </span> <br>
                </div>
                <div class="col-md-6">
                    Maritial Status: <span id="your_maritial" class="output"> ' . $maritial . ' </span> <br>
                    Social Security: <span id="your_social" class="output"> ' . $social . ' </span> <br>
                    Birth Date: <span id="your_birth" class="output"> ' . $birth . ' </span> <br>
                    Parents/Guardian: <span id="your_parents" class="output"> ' . $parents . ' </span> <br>
                    Referred By: <span id="your_referred" class="output"> ' . $referred . ' </span> <br>
                    Occupation: <span id="your_occupation" class="output"> ' . $occupation . ' </span> <br>
                    Cell phone: <span id="your_cellphone_s" class="output"> ' . $cellphone_s . ' </span> <br>
                    Employers Name: <span id="your_employer" class="output"> ' . $employer . ' </span> <br>
                    Employers Email: <span id="your_email" class="output"> ' . $email . ' </span> <br>
                </div>
            </div>
            </div>
            <hr>
            <div class="container mt-4">
                <span style="font-weight: bold">Other Condition(s) ' . $title . ' </span><br>
                Medication are you presen taking: <span id="your_medication_p" class="output"> ' . $medication_p . ' </span> <br>
                Name of family doctor: <span id="your_familydoctor" class="output"> ' . $familydoctor . ' </span> <br>
                Do you smoke?: <span id="your_smoke" class="output"> ' . $smoke . ' </span> <br>
                List any allergies to medications: <span id="your_medication_list" class="output"> ' . $medication_list . ' </span> <br>
                Date of last exam: <span id="your_lastexam" class="output"> ' . $lastexam . ' </span> <br>
                Did you ever where glasses or contact lenses?: <span id="your_glasses" class="output"> ' . $glasses . ' </span>
                <span id="your_old" class="old"> ' . $old . ' </span> <br>
                Family history of eye disorders: <span id="your_familyhistory" class="output"> ' . $familyhistory . ' </span> <br>
                Profile Pic: <span id="your_profile" class="output"> ' . $profile . ' </span> <br>
            </div>
            <hr>
            <div class="container mt-4 mb-2">
                <div class="row">
                    <div class="col-md-6">
                        Insurance Name: <span id="your_insurance_p" class="output"> ' . $insurance_p . ' </span> <br>
                        Employer: <span id="your_employer_p" class="output"> ' . $employer_p . ' </span> <br>
                        Insureds Name: <span id="your_insured_p" class="output"> ' . $insured_p . ' </span> <br>
                        Birth Date: <span id="your_birth_p" class="output"> ' . $birth_p . ' </span> <br>
                        Insureds SS#: <span id="your_insured_ss_p" class="output"> ' . $insured_ss_p . ' </span> <br>
                    </div>
                    <div class="col-md-6">
                        Insurance Name: <span id="your_insurance_s" class="output"> ' . $insurance_s . ' </span> <br>
                        Employer: <span id="your_employer_s" class="output"> ' . $employer_s . ' </span> <br>
                        Insureds Name: <span id="your_insured_s" class="output"> ' . $insured_s . ' </span> <br>
                        Birth Date: <span id="your_birth_s" class="output"> ' . $birth_s . ' </span> <br>
                        Insureds SS#: <span id="your_insured_ss_s" class="output"> ' . $insured_ss_s . ' </span> <br>
                    </div>
                </div>
            </div>
            ';
        // } else {
        //     echo mysqli_error($conn);
        // }
    }
}
