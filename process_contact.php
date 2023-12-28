<?php
session_start();
include('db.php'); 


function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePhoneNumber($phone_no) {
    return preg_match('/^[6789]\d{9}$/', $phone_no);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phn = $_POST['phn'];

    
    $errors = array();


    if (empty($name)) {
        $errors['name'] = "Name is required!";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required!";
    } elseif (!validateEmail($email)) {
        $errors['email'] = "Invalid email address!";
    }

    if (empty($phn)) {
        $errors['phn'] = "Phone number is required!";
    } elseif (!validatePhoneNumber($phn)) {
        $errors['phn'] = "Invalid phone number!";
    }

  
    $query = "INSERT INTO contact_messages (name, email, phn) VALUES ('$name', '$email', '$phn')";

    if ($conn->query($query) === TRUE) {

        $success_message = "Details successfully added!";
        header('Location: contact.php?message=' . urlencode($success_message)); 
        exit();
    } else {
  
        if ($conn->errno == 1062) {
            if (strpos($conn->error, 'email_UNIQUE') !== false) {
                $errors['email'] = "Email already exists!";
            } elseif (strpos($conn->error, 'phone_no_UNIQUE') !== false) {
                $errors['phone_no'] = "Phone number already exists!";
            }
        } else {
            echo "Error: " . $conn->error;
            exit();
        }
    }
}

$conn->close();
?>



