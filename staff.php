<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}



$app->get('/signup', function() use($app) {

    $app->render('admin/create_doctor_account.html.twig');
});

$app->post('/signup', function() use($app) {
    $firstName = $app->request()->post('first_name');
    $lastName = $app->request()->post('last_name');
    $email = $app->request()->post('email');
    $title = $app->request()->post('title');
    $speciality = $app->request()->post('speciality');
    $experience = $app->request()->post('experience');
    $description = $app->request()->post('description');
    $pathImage = $app->request()->post('pathImage');
    $pass1 = $app->request()->post('user_password');
    $pass2 = $app->request()->post('confirm_password');
//
    $values = array('first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'title' => $title,
        'speciality' => $speciality,
        'experience' => $experience,
        'description' => $description,
        'pathImage' => $pathImage
    );
    $errorList = array();
    $error = array();
//
    if (strlen($firstName) < 2 || strlen($firstName) > 50) {
        $values['first_name'] = '';
        //array_push($errorList, "First Name must be between 2 and 50 characters long");
        $error['fNameError'] = 'First name must be between 2 and 50 characters long';
    }
    if (strlen($lastName) < 2 || strlen($lastName) > 50) {
        $values['last_name'] = '';
        //array_push($errorList, "Last Name must be between 2 and 50 characters long");
        $error['lNameError'] = 'Last name must be between 2 and 50 characters long';
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        //array_push($errorList, "Email must look like a valid email");
        $error['emailError'] = 'Email must look like a valid email';
    } else {
        $row = DB::queryFirstRow("SELECT * FROM patients WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            //array_push($errorList, "Email already in use");
            $error['emailError'] = 'Email already in use';
        }
    }
    if (strlen($title) < 2 || strlen($title) > 25) {
        $values['title'] = '';
        //array_push($errorList, "Address must be between 4 and 50 characters long");
        $error['titleError'] = "Title must be between 2 and 25 characters long";
    }
    if (strlen($speciality) < 2 || strlen($speciality) > 50) {
        $values['city'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['cityError'] = "Speciality must be between 2 and 50 characters long";
    }
    if (!checkdate(1, 1, $experience)) {
        $values['experience'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['experience'] = "Enter graduated year";
    }

    if ($pass1 != $pass2) {
        //array_push($errorList, "Passwords don't match");
        $error['pass1Error'] = "Password do not match";
        $error['pass2Error'] = "Password do not match";
    } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
        if (!preg_match('/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9_!#@\$\^&\(\)\{\}\[\],\.<>;:\'\"`~%\*\-\+]{6,100}/', $pass1)) {
            //array_push($errorList, "Password must include at least one character in each three categories: "
            //        . "uppercase letter, lowercase letter, digit or special character");
            $error['pass1Error'] = "Minimum 6 chars and at least 1 Capital, 1 lower 1 number and special Char";
        }
    }
    if (strlen($description) < 10 || strlen($sin) > 1000) {
        $values['sin'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['descriptionError'] = "Description must be between 10 to 1000 chars";
    }
    $doctorImage = array();

//doesnt work if only with isset	
    if (isset($_FILES['doctorImage']) && !empty($_FILES['doctorImage']['name'])) {
        $doctorImage = $_FILES['doctorImage'];
        if ($doctorImage['error'] != 0) {
            array_push($errorList, "Error uploading file");
            $log->err("Error uploading file: " . print_r($doctorImage, true));
        } else {
            if (strstr($doctorImage['name'], '..')) {
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($doctorImage, true));
            }
// TODO: check if file already exists, check maximum size of the file, dimensions of the image etc.
            $info = getimagesize($doctorImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image");
            } else {
                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
// image type is valid - all good
                } else {
                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
                }
            }
        }
    } else { // no file uploaded
        if ($op == 'add') {
            array_push($errorList, "Image is required when creating new doctor");
        }
    }

    if ($errorList) { // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values,
            'e' => $error));
    } else {
        // 2. successful submission
        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
        DB::insert('doctors', array('firstName' => $firstName, 'lastName' => $lastName,
            'title' => $title, 'speciality' => $speciality, 'experience' => $experience, 'description' => $description,
            'pathImage' => $country, 'sin' => $sin, 'email' => $email, 'password' => $passEnc, 'phone' => $phone));
        $app->render('register_success.html.twig');
    }
});

//--------------------------------------------------GET IS EMAIL REGISTERED-------
$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM patients WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
});

//---------------------------------------------------GET SIGNIN----------------------
$app->get('/signin', function() use ($app) {
    $app->render('admin/signin.html.twig');
});

//--------------------------------------------------POST SIGNIN---------------------
$app->post('/signin', function() use($app) {
    $email = $app->request()->post('email');
    $pass = $app->request()->post('password');
    $row = DB::queryFirstRow("SELECT * FROM patients WHERE email=%s", $email);
    $error = true;
    if ($row) {
        if (password_verify($pass, $row['password'])) {
//if ($pass == $row['password']) {
            $error = false;
        }
    }
    if ($error) {
        $app->render('admin/sigin.html.twig', array('error' => true));
    } else {
        unset($row['password']);
        $_SESSION['staff'] = $row;
//$app->render('login_success.html.twig', array('userSession' => $_SESSION['user']));
    }
});

//-------------------------------------------------GET SCHEDULE--------------------

$app->get('/schedule', function() use($app){
    $app->render('admin/schedule.html.twig');
    
});
