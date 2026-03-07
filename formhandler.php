
<?php

// header('Location:thx.html');
ob_start();

$name = '';
$email = '';
$gender = '';
$wines = '';
$regions = '';
$comments = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $wines = $_POST['wines'];
        $regions = $_POST['regions'];
        $comments = $_POST['comments'];

        function my_wines($wines) {
            $my_return = '';
            if(!empty($wines)) {
                $my_return = implode(', ', $wines);
            }
            return $my_return;
        }

        $to = 'myname@gmail.com';
        $subject = 'Test Email on ' .date('m/d/y, h i A');
        $body = '
Name : '.$name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Gender : '.$gender.'  '.PHP_EOL.'
Region : '.$regions.'  '.PHP_EOL.'
Wines : '.my_wines($wines).'  '.PHP_EOL.'   
Comments : '.$comments.'  '.PHP_EOL.'
';

        // Fixed headers format for mail() function
        $headers = 'From: noreply@mystudentswa.com';

        // Fixed logical condition - removed extra parentheses and used proper AND operator
        if(!empty($name) && !empty($email) && !empty($gender) && !empty($wines) && !empty($regions) && !empty($comments)) {
            mail($to, $subject, $body, $headers);
            header('Location:thx.html');
        }
    }
}

/* ?>$_POST['gender'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$wines = $_POST['wines'];
$regions = $_POST['regions'];
$comments = $_POST['comments'];

function my_wines($wines) {
$my_return = '';
if(!empty($_POST['wines'])) {
$my_return = implode(', ', $_POST['wines']);
}
return $my_return;
}


$to = 'myname@gmail.com';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '
Name : '.$name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Gender : '.$gender.'  '.PHP_EOL.'
Region : '.$regions.'  '.PHP_EOL.'
Wines : '.my_wines($wines).'  '.PHP_EOL.'   
Comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@mystudentswa.com'  
);

if(!empty($name && $email && $gender && $wines && $regions && $comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.html');

}


}



}*/