<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send mail to all users ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $usermail=User::select('email')->get();
        $emails=[];
        foreach( $usermail as $usermails){
            $emails[]=$usermails['email'];
        }

        Mail::send('emails.pages',[],function($message) use ($emails){
            $message->to($emails)->subject('this iscorn jpbbbb');
        });
    }
}
