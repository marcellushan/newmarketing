<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminStatusUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $status;
    public $data;
    public $comment;
    public $view_folder;
    public $media_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($status, $data, $comment='', $view_folder, $media_name)
    {
        $this->status = $status;
        $this->data = $data;
        $this->comment = $comment;
        $this->view_folder = $view_folder;
        $this->media_name = $media_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('marcom@highlands.edu')
            ->subject('A marcom request has been updated!')
            ->view('emails.admin_status_update');
    }
}
