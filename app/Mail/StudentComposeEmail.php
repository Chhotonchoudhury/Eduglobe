<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentComposeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $mail = $this->view('email.CustomSendMail')
                ->subject($this->data['subject'])
                ->with(['data' =>  $this->data]);

         // Attach files if available
         if (isset($this->data['attachments'])) {
            foreach ($this->data['attachments'] as $attachment) {
                $filePath = $attachment;
                info('Attachment Path: ' . $filePath);
        
                if (file_exists($filePath)) {
                    info('File Exists');
                    $mail->attach($filePath, [
                        'as' => basename($filePath), // Set the file name
                    ]);
                } else {
                    info('File Does Not Exist');
                }
            }
        }
        // Add CC recipients if available
        if (isset($this->data['cc'])) {
            $mail->cc($this->data['cc']);
        }

        return $mail;
    }
}
