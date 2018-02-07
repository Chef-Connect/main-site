<?php
    session_start();
    /* VERIFICATION AND UPLOAD OF RESUME */

    $target_dir = "../../uploads/";
    $fileNameWithExtension = $_FILES["resume"]["name"];
    
    $target_file_path = $target_dir . basename($fileNameWithExtension);
    $fileType = strtolower(pathinfo($target_file_path,PATHINFO_EXTENSION));
    $fileName = str_replace("." . $fileType, "", $fileNameWithExtension);
    $fileResumeWithExtension = $fileNameWithExtension;
    // Allow certain file formats
    if($fileType != "pdf" && $fileType != "docx") {
        echo "Sorry, only PDF files are allowed.";
        exit();
    }

    // Check file size
    if ($_FILES["resume"]["size"] > 2000000) {
        echo "Sorry, your file is too large. Max 2MO";
        exit();
    }

    // Check if file already exists
    $counter = 0;
    $baseFileName = $fileName;

    while (file_exists($target_file_path) === true) {
        
        $counter++;
        $fileName = $baseFileName . $counter;
        $fileNameWithExtension = $fileName . "." . $fileType;
        $target_file_path = $target_dir . basename($fileNameWithExtension);

    }
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file_path) === false) {
        echo "Sorry, there was an error uploading your file.";
        exit();
    }

    $fileNameResume = $fileName;

    
    /* VERIFICATION AND UPLOAD OF RESUME */

    $target_dir = "../../uploads/";
    $fileCoverNameWithExtension = $_FILES["cover"]["name"];
    
    $target_file_path = $target_dir . basename($fileNameWithExtension);
    $fileType = strtolower(pathinfo($target_file_path,PATHINFO_EXTENSION));
    $fileName = str_replace("." . $fileType, "", $fileNameWithExtension);
    $fileCoverWithExtension = $fileCoverNameWithExtension;
    // Allow certain file formats
    if($fileType != "pdf" && $fileType != "docx") {
        echo "Sorry, only PDF files are allowed.";
        exit();
    }

    // Check file size
    if ($_FILES["cover"]["size"] > 2000000) {
        echo "Sorry, your file is too large. Max 2MO";
        exit();
    }

    // Check if file already exists
    $counter = 0;
    $baseFileName = $fileName;

    while (file_exists($target_file_path) === true) {
        
        $counter++;
        $fileName = $baseFileName . $counter;
        $fileNameWithExtension = $fileName . "." . $fileType;
        $target_file_path = $target_dir . basename($fileNameWithExtension);

    }


    $fileNameCover = $fileName;


    /* DATABASE UPDATE */
    include("../shared/bdd-connexion.php");

    $sql = "INSERT INTO candidates(first_last_name, nationality, working_rights, start_date, email, phone_number, resume, cover, job_id) VALUES (?,?,?,?,?,?,?,?,?)";
    $reqPrepare = $bdd->prepare($sql);
    $reqPrepare->execute(array($_POST['name'], $_POST['nationality'], $_POST['Working-rights'], $_POST['Start-date'], $_POST['email'], $_POST['phone-number'], $fileNameWithExtension, $fileCoverWithExtension, $_SESSION['ID'] ));
    header('Location: ../job-apply/job-apply.php?note=thanks');
?>