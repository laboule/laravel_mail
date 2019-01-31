<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;



class ProcessEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id = 1)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     * It is called when the job is processed by the queue
     * @return void
     */
    public function handle()
    {
        LOG::info('Mail request send at '.now());
        //$this->fail();
        
        Mail::to('john@gmail.com')->send(new OrderShipped($this->id));
        
    }

        public function failed(Exception $exception)
    {
       LOG::error('Mail request error :'.$exception->getMessage());
    }
}
