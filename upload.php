<?php
// Check if image file is selected
if(isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions = array("jpeg","jpg","png");
    
    if(in_array($file_ext, $extensions) === false){
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
        $errors[] = 'File size must be less than 2 MB';
    }
    
    if(empty($errors) == true) {
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        header('Location: index.php?image=uploads/' . $file_name);
        exit();
    } else {
        print_r($errors);
    }
}
?>
