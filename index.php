<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Ajax Form</title>
</head>
<body>

    <div class="container" id="hideAfterFormSubmit">
        <h2 class="form-head">PATIENT REGISTRATION FORM</h2>
        <div class="container mt-4">
            <form action="" method="post" enctype="multipart/form-data" id="form">
                <div class="row ms-3 me-3">
                    <div class="col-md-2 c-border cell-blue">Title</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="title1" name="title" <?php echo ($title == 'Dr.') ? 'checked' : '' ?> value="Dr.">
                            <label class="form-check-label" for="title">Dr.</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="title2" name="title" <?php echo ($title == 'Mr.') ? 'checked' : '' ?> value="Mr.">
                            <label class="form-check-label" for="title">Mr.</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="title3" name="title" <?php echo ($title == 'Ms.') ? 'checked' : '' ?> value="Ms.">
                            <label class="form-check-label" for="title">Ms.</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="title4" name="title" <?php echo ($title == 'Mrs.') ? 'checked' : '' ?> value="Mrs.">
                            <label class="form-check-label" for="title">Mrs.</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="title5" name="title" <?php echo ($title == 'Miss.') ? 'checked' : '' ?> value="Miss">
                            <label class="form-check-label" for="title">Miss</label>
                        </div>
                        <span id="titleErr" class="error" name="error"> <?php echo $title_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Marital Status</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="maritial" id="maritial1" <?php echo ($maritial == 'Single') ? 'checked' : '' ?> value="Single">
                            <label class="form-check-label" for="maritial">Single</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="maritial" id="maritial2" <?php echo ($maritial == 'Married') ? 'checked' : '' ?> value="Married">
                            <label class="form-check-label" for="maritial">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="maritial" id="maritial3" <?php echo ($maritial == 'Widowed') ? 'checked' : '' ?> value="Widowed">
                            <label class="form-check-label" for="maritial">Widowed</label>
                        </div>
                        <span id="maritialErr" class="error" name="error"> <?php echo $maritial_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">Name</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $name; ?>" value="<?php echo $name; ?>" id="name" name="name" class="input" placeholder="Enter your Name" value="">
                        <span id="nameErr" class="error" name="error"> <?php echo $name_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Social Security#</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $social; ?>" id="social" name="social" class="input" placeholder="Enter Social Security">
                        <span id="socialErr" class="error" name="error"> <?php echo $social_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">Address</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $address; ?>" id="address" name="address" class="input" placeholder="Enter your address">
                        <span id="addressErr" class="error" name="error"> <?php echo $address_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Birth Date</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="date" value="<?php echo $birth; ?>" id="birth" name="birth" class="input" max="2022-11-11">
                        <span id="birthErr" class="error" name="error"> <?php echo $birth_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">City</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $city; ?>" id="city" name="city" class="input" placeholder="Enter your city">
                        <span id="cityErr" class="error" name="error"> <?php echo $city_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Parents/Guardian</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $parents; ?>" id="parents" name="parents" class="input" placeholder="Enter parents/guardian">
                        <span id="parentsErr" class="error" name="error"> <?php echo $parents_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">State </div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $state; ?>" id="state" name="state" class="input" placeholder="Enter your state">
                        <span id="stateErr" class="error" name="error"> <?php echo $state_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Referred By</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $referred; ?>" id="referred" name="referred" class="input" placeholder="Enter your reference">
                        <span id="referredErr" class="error" name="error"> <?php echo $referred_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">Zip</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $zip; ?>" id="zip" name="zip" class="input" placeholder="Enter your zipcode">
                        <span id="zipErr" class="error" name="error"> <?php echo $zip_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Occupation</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $occupation; ?>" id="occupation" name="occupation" class="input" placeholder="Enter your occupation">
                        <span id="occupationErr" class="error" name="error"> <?php echo $occupation_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">Cell Phone</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $cellphone_p; ?>" id="cellphone_p" name="cellphone_p" class="input" placeholder="Enter cell phone">
                        <span id="cellphone_pErr" class="error" name="error"> <?php echo $cellphone_p_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Cell Phone</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $cellphone_s; ?>" id="cellphone_s" name="cellphone_s" class="input" placeholder="Enter cell phone">
                        <span id="cellphone_sErr" class="error" name="error"> <?php echo $cellphone_s_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">Home Phone </div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $homephone; ?>" id="homephone" name="homephone" class="input" placeholder="Enter home phone">
                        <span id="homephoneErr" class="error" name="error"> <?php echo $homephone_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Employer's Name</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $employer; ?>" id="employer" name="employer" class="input" placeholder="Enter employer name">
                        <span id="employerErr" class="error" name="error"> <?php echo $employer_Err; ?> </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-2 c-border cell-blue">Mobile Phone</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $mobilephone; ?>" id="mobilephone" name="mobilephone" class="input" placeholder="Enter mobile phone">
                        <span id="mobilephoneErr" class="error" name="error"> <?php echo $mobilephone_Err; ?> </span>
                    </div>
                    <div class="col-md-2 c-border cell-blue">Employer's Email</div>
                    <div class="col-md-4 c-border cell-l-blue">
                        <input type="text" value="<?php echo $email; ?>" id="email" name="email" class="input" placeholder="Enter Employer email">
                        <span id="emailErr" class="error" name="error"> <?php echo $email_Err; ?> </span>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row ms-1 me-1">
                        <div class="col-md-4 c-border cell-blue">Other Condition(s)</div>
                        <div class="col-md-8 c-border cell-l-blue">
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">Medications are you presently taking</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <textarea value="" id="medication_p" name="medication_p" cols="30" rows="1" class="input" placeholder="Enter your present medications"><?php echo $medication_p; ?></textarea>
                            <span id="medication_pErr" class="error" name="error"> <?php echo $medication_p_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">Name of family docter</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <input type="text" value="<?php echo $familydoctor; ?>" id="familydoctor" name="familydoctor" class="input" placeholder="Enter your family doctor name">
                            <span id="familydoctorErr" class="error" name="error"> <?php echo $familydoctor_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">Do you smoke?</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="smoke1" <?php echo ($smoke == 'Yes') ? 'checked' : '' ?> name="smoke" value="Yes">
                                <label class="form-check-label" for="smoke">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="smoke2" <?php echo ($smoke == 'No') ? 'checked' : '' ?> name="smoke" value="No">
                                <label class="form-check-label" for="smoke">No</label>
                            </div>
                            <span id="smokeErr" class="error" name="error"> <?php echo $smoke_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">List any allergies to medications</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <textarea value="" id="medication_list" name="medication_list" cols="30" rows="1" class="input" placeholder="Enter allergies Medication list"><?php echo $medication_list; ?></textarea>
                            <span id="medication_listErr" class="error" name="error"> <?php echo $medication_list_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">Date of last exam</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <input type="date" value="<?php echo $lastexam; ?>" id="lastexam" name="lastexam" class="input" max="">
                            <span id="lastexamErr" class="error" name="error"> <?php echo $lastexam_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">Did you ever where glasses or contact lenses?</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="glasses1" <?php echo ($glasses == 'Yes') ? 'checked' : '' ?> name="glasses" value="Yes">
                                <label class="form-check-label" for="glasses">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="glasses2" <?php echo ($glasses == 'No') ? 'checked' : '' ?> name="glasses" value="No">
                                <label class="form-check-label" for="glasses">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input value="<?php echo $old; ?>" style="display: none;" type="text" name="old" id="old" placeholder="How old are they?">
                            </div>
                            <span id="glassesErr" class="error" name="error"> <?php echo $glasses_Err; ?> </span>
                            <span id="oldErr" class="error" name="error"> <?php echo $old_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-4 c-border cell-blue">Family history of eye disorders</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <textarea value="" id="familyhistory" name="familyhistory" cols="30" rows="1" class="input" placeholder="Enter family history of eye disorders"><?php echo $familyhistory; ?></textarea>
                            <span id="familyhistoryErr" class="error" name="error"> <?php echo $familyhistory_Err; ?> </span>
                        </div>
                        <div class="col-md-4 c-border cell-blue">Profile Pic</div>
                        <div class="col-md-8 c-border cell-l-blue">
                            <input type="file" id="profile" name="profile" class="input" accept="image/png, image/jpg, image/jpeg" placeholder="Select profile pic">
                            <span id="profileErr" class="error" name="error"> <?php echo $profile_Err; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="container mt-5 mb-5">
                    <div class="row ms-1 me-1">
                        <div class="col-md-6 c-border cell-blue center">Primary Insurance</div>
                        <div class="col-md-6 c-border cell-blue center">Secondary Insurance</div>
                        <div class="w-100"></div>
                        <div class="col-md-2 c-border cell-blue">Insurance Name</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $insurance_p; ?>" id="insurance_p" name="insurance_p" class="input" placeholder="Enter insurance name">
                            <span id="insurance_pErr" class="error" name="error"> <?php echo $insurance_p_Err; ?> </span>
                        </div>
                        <div class="col-md-2 c-border cell-blue">Insurance Name</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $insurance_s; ?>" id="insurance_s" name="insurance_s" class="input" placeholder="Enter insurance name">
                            <span id="insurance_sErr" class="error" name="error"> <?php echo $insurance_s_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-2 c-border cell-blue">Employer</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $employer_p; ?>" id="employer_p" name="employer_p" class="input" placeholder="Enter employer name">
                            <span id="employer_pErr" class="error" name="error"> <?php echo $employer_p_Err; ?> </span>
                        </div>
                        <div class="col-md-2 c-border cell-blue">Employer</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $employer_s; ?>" id="employer_s" name="employer_s" class="input" placeholder="Enter employer name">
                            <span id="employer_sErr" class="error" name="error"> <?php echo $employer_s_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-2 c-border cell-blue">Insured's Name</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $insured_p; ?>" id="insured_p" name="insured_p" class="input" placeholder="Enter insured name">
                            <span id="insured_pErr" class="error" name="error"> <?php echo $insured_p_Err; ?> </span>
                        </div>
                        <div class="col-md-2 c-border cell-blue">Insured's Name</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $insured_s; ?>" id="insured_s" name="insured_s" class="input" placeholder="Enter insured name">
                            <span id="insured_sErr" class="error" name="error"> <?php echo $insured_s_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-2 c-border cell-blue">Birth Date</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="date" value="<?php echo $birth_p; ?>" id="birth_p" name="birth_p" class="input" max="2022-11-29">
                            <span id="birth_pErr" class="error" name="error"> <?php echo $birth_p_Err; ?> </span>
                        </div>
                        <div class="col-md-2 c-border cell-blue">Birth Date</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="date" value="<?php echo $birth_s; ?>" id="birth_s" name="birth_s" class="input" max="2022-11-29">
                            <span id="birth_sErr" class="error" name="error"> <?php echo $birth_s_Err; ?> </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-2 c-border cell-blue">Insured's SS#</div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $insured_ss_p; ?>" id="insured_ss_p" name="insured_ss_p" class="input" placeholder="Enter insured ss">
                            <span id="insured_ss_pErr" class="error" name="error"> <?php echo $insured_ss_p_Err; ?> </span>
                        </div>
                        <div class="col-md-2 c-border cell-blue">Insured's SS# </div>
                        <div class="col-md-4 c-border cell-l-blue">
                            <input type="text" value="<?php echo $insured_ss_s; ?>" id="insured_ss_s" name="insured_ss_s" class="input" placeholder="Enter insured ss">
                            <span id="insured_ss_sErr" class="error" name="error"> <?php echo $insured_ss_s_Err; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="container btn-div mb-2">
                    <input type="text" class="mysubmit" name="mysubmit" id="mysubmit" value="mysubmit" style="display: none;">
                    <button type="submit" class="btn" name="submit" id="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container mt-4" id="mydata">
        <div class="test"></div>
    </div>
</body>

</html>