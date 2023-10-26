<?php
if ($_POST) {
    $targetDirectory = "uploads/"; // Directory to store uploaded files
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    
    // Check if the file is an actual file
    if (isset($_POST["submit"]) && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Please use the file upload form to submit a file.";
}
?>
