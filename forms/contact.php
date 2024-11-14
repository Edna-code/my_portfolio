<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Configuração do e-mail
    $to = "ednadsalmeida@gmail.com"; // Substitua pelo seu e-mail
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";

    $email_subject = "Contact Form: " . $subject;
    $email_body = "Your Name: " . $name . "\n" .
                  "Your Email: " . $email . "\n" .
                  "Subject: " . $subject . "\n" .
                  "Message:\n" . $message;

    // Envia o e-mail
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Success";
    } else {
        echo "Error";
    }
} else {
    echo "Invalid request";
}
?>
