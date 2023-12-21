<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/"; // Directory where the uploaded file will be saved
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (getimagesize($_FILES["fileToUpload"]["tmp_name"])) {
        // Allow only specific image file formats (you can modify this list)
        $allowed_formats = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $allowed_formats)) {
            // Resize the image
            $new_width = 200; // Set the desired width
            list($original_width, $original_height) = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            $resize_ratio = $new_width / $original_width;
            $new_height = $original_height * $resize_ratio;

            // Create a new image with the desired dimensions
            $resized_image = imagecreatetruecolor($new_width, $new_height);
            $source_image = imagecreatefromjpeg($_FILES["fileToUpload"]["tmp_name"]); // Change this based on file type

            // Resize the image
            imagecopyresampled($resized_image, $source_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);

            // Save the resized image
            imagejpeg($resized_image, $target_file); // Change this based on file type

            // You can also move the resized image to a different location
            // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            echo "Image uploaded and resized successfully.";
        } else {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "File is not an image.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload and Resize Image</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
