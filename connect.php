<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

// URL/event handlers go here


$app->get('/register', function() use($app) {

    $app->render('register.html.twig');
});

$app->post('/register', function() use($app) {
    $firstName = $app->request()->post('first_name');
    $lastName = $app->request()->post('last_name');
    $email = $app->request()->post('email');
    $street = $app->request()->post('street');
    $city = $app->request()->post('city');
    $province = $app->request()->post('province');
    $postal = $app->request()->post('postal');
    $country = $app->request()->post('country');
    $sin = $app->request()->post('sin');
    $pass1 = $app->request()->post('user_password');
    $pass2 = $app->request()->post('confirm_password');
    $phone = $app->request()->post('contact_no');
//
    $values = array('first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'street' => $street,
        'city' => $city,
        'province' => $province,
        'postal' => $postal,
        'sin' => $sin,
        'contact_no' => $phone
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
    if (strlen($street) < 4 || strlen($street) > 50) {
        $values['street'] = '';
        //array_push($errorList, "Address must be between 4 and 50 characters long");
        $error['addressError'] = "Address must be between 4 and 50 characters long";
    }
    if (strlen($city) < 2 || strlen($city) > 50) {
        $values['city'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['cityError'] = "City must be between 4 and 50 characters long";
    }
    if ($province != 'AB' || $province != 'BC' || $province != 'MB' || $province != 'NB' ||
            $province != 'NL' || $province != 'NS' || $province != 'NU' || $province != 'ON' ||
            $province != 'PE' || $province != 'QC' || $province != 'SK' || $province != 'YT') {
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['provinceError'] = "Choose province from the list";
    }
    if (strlen($postal) < 6 || strlen($postal) > 7) {
        $values['postal'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['postalError'] = "Postal code format H0H 0H0";
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
    if (strlen($sin) < 9 || strlen($sin) > 11) {
        $values['sin'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['sinError'] = "SIN must be 9 numeric character";
    }
    if (strlen($postal) < 6 || strlen($postal) > 7) {
        $values['postal'] = '';
        //array_push($errorList, "City must be between 2 and 50 characters long");
        $error['phoneError'] = "Phone (514) 123-4567";
    }

    if ($errorList) { // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values,
            'e' => $error));
    } else { // 2. successful submission
        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
        DB::insert('patients', array('firstName' => $firstName, 'lastName' => $lastName,
            'street' => $street, 'city' => $city, 'province' => $province, 'postal' => $postal,
            'country' => $country, 'sin' => $sin, 'email' => $email, 'password' => $passEnc, 'phone' => $phone));
        $app->render('register_success.html.twig');
    }
});

//--------------------------------------------------GET IS EMAIL REGISTERED-------
$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM patients WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
});

//--------------------------------------------------GET LOGIN----------------------
$app->get('/login', function() use ($app) {
    $app->render('login.html.twig');
});

//--------------------------------------------------POST LOGIN---------------------
$app->post('/login', function() use($app) {
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
        $app->render('login.html.twig', array('error' => true));
    } else {
        unset($row['password']);
        $_SESSION['user'] = $row;
        $app->render('login_success.html.twig', array('userSession' => $_SESSION['user']));
    }
});
