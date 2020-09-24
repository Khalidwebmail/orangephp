<?php


namespace App\Classes;


use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
    }

    public function setup()
    {
        $this->mail->isSMTP();
        $this->mail->Mailer = getenv('MAIL_DRIVER');
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = getenv('MAIL_ENCRYPTION');

        $this->mail->Host = getenv('SMTP_HOST');
        $this->mail->Port = getenv('SMTP_PORT');

        $enviornment = getenv('APP_NAME');

        if($enviornment == 'local')
        {
            $this->mail->SMTPDebug = 2;

            $this->mail->Username = getenv('EMAIL_USERNAME');
            $this->mail->Password = getenv('EMAIL_PASSWORD');

            $this->mail->isHTML(true);
            //$this->mail->SingleTo = true;

            $this->mail->From = getenv('ADMIN_EMAIL');
            $this->mail->FromName = getenv('OrangePHP');
        }
    }

    public function send($data)
    {
        $this->mail->addAddress($data['to'], $data['name']);
        $this->mail->Subject = $data['subject'];
        $this->mail->Body = make($data['view'], array('data' => $data['body']));;
        return $this->mail->send();
    }
}