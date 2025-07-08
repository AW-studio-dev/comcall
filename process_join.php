<?php
// process_join.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // File handling
    $cv_name = $_FILES['cv']['name'] ?? '';
    $cv_tmp = $_FILES['cv']['tmp_name'] ?? '';
    
    // Validate required fields
    if (empty($fullname) || empty($email) || empty($phone) || empty($cv_name)) {
        die("Tous les champs obligatoires doivent être remplis.");
    }
    
    // Email configuration
    $to = "aw.studio.dz@gmail.com";
    $subject = "Nouvelle candidature: $fullname";
    
    $body = "Nom complet: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Téléphone: $phone\n";
    $body .= "Message:\n$message\n";
    
    // File attachment
    $boundary = md5(time());
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    
    // Message text
    $body_message = "--$boundary\r\n";
    $body_message .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body_message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body_message .= $body . "\r\n\r\n";
    
    // Attachment
    if (!empty($cv_tmp)) {
        $file = fopen($cv_tmp, 'rb');
        $data = fread($file, filesize($cv_tmp));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        
        $body_message .= "--$boundary\r\n";
        $body_message .= "Content-Type: application/octet-stream; name=\"$cv_name\"\r\n";
        $body_message .= "Content-Disposition: attachment; filename=\"$cv_name\"\r\n";
        $body_message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body_message .= $data . "\r\n";
    }
    
    $body_message .= "--$boundary--";
    
    // Send email
    if (mail($to, $subject, $body_message, $headers)) {
        // Redirect with success parameter
        header("Location: join.php?success=1");
        exit();
    } else {
        die("Une erreur s'est produite lors de l'envoi du message.");
    }
} else {
    header("Location: join.php");
    exit();
}