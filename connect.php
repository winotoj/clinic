<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

// URL/event handlers go here


$app->get('/register', function() use($app){
    
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
//
    if (strlen($firstName) < 2 || strlen($name) > 50) {
        $values['first_name'] = '';
        array_push($errorList, "First Name must be between 2 and 50 characters long");
    }
    if (strlen($lastName) < 2 || strlen($name) > 50) {
        $values['last_name'] = '';
        array_push($errorList, "Last Name must be between 2 and 50 characters long");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        array_push($errorList, "Email must look like a valid email");
    } else {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            array_push($errorList, "Email already in use");
        }
    }
    if (strlen($street) < 4 || strlen($street) > 50) {
        $values['street'] = '';
        array_push($errorList, "Address must be between 4 and 50 characters long");
    }
    if (strlen($city) < 2 || strlen($city) > 50) {
        $values['city'] = '';
        array_push($errorList, "City must be between 2 and 50 characters long");
    }
    
    if ($pass1 != $pass2) {
        array_push($errorList, "Passwords don't match");
    } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
        if (strlen($pass1) < 6 || strlen($pass1) > 100) {
            array_push($errorList, "Password must be between 6 and 100 characters long");
        }
        if (!preg_match('/[A-Z]/', $pass1) || !preg_match('/[a-z]/', $pass1) || !preg_match('/[0-9' . preg_quote("!@#\$%^&*()_-+={}[],.<>;:'\"~`") . ']/', $pass1)) {
            array_push($errorList, "Password must include at least one character in each three categories: "
                    . "uppercase letter, lowercase letter, digit or special character");
        }
    }

    if ($errorList) { // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { // 2. successful submission
        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $passEnc));
        $app->render('register_success.html.twig');
    }
});

//--------------------------------------------------GET IS EMAIL REGISTERED-------
$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
});

