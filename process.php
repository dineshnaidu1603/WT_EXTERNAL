<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle GET request
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
    $phone = $_GET['phone'] ?? '';
    
    // Process the form data
    // ...
    
    // Redirect or display a success message
    // ...
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle POST request
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    // Process the form data
    // ...
    
    // Redirect or display a success message
    // ...
} else {
    // Handle other request methods
    $name = $_REQUEST['name'] ?? '';
    $email = $_REQUEST['email'] ?? '';
    $phone = $_REQUEST['phone'] ?? '';
    
    // Process the form data
    // ...
    
    // Redirect or display a success message
    // ...
}
?>