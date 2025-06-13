<?php
class Mailer{
    private $email;
    private $check;
    public function __construct($email, $check){
        $this->email = $email;
        $this->check = $check;
    }
    public function Spam(){
        if(!empty($this->check)){
            if(!empty($this->email)){
                include_once('selectMessage.php');
                $content = new SelectMail();
                $mailContent = $content->select();

                $randomID = rand(0, 5000);

                $subject = $mailContent[1]."(".$randomID.")";
                $txt = wordwrap($mailContent[0], 70, "\r\n");
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                $headers[] = 'From: '.$mailContent[1].' ('.$randomID.') (nep spam, sorry ): ) <evilSpam@haha.lol>';
                mail($this->email, $subject, $txt, implode("\r\n", $headers));
            }
        }
    }
}

?>