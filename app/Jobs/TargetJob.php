<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TargetJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $item;
    public $broadc;
    public $tries = 100;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($item, $broadc)
    {
        $this->item     = $item;
        $this->broadc   = $broadc;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        set_time_limit(0);
        $curl = curl_init();
                $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                $payload = [
                "data" => [
                    [
                        'phone' => $this->item->telp_target,
                        'message' => $this->broadc->desc_broadcast,
                        'secret' => false, // or true
                        'retry' => false, // or true
                        'isGroup' => false, // or true
                    ]
                ]
                
                ];
                
                curl_setopt($curl, CURLOPT_HTTPHEADER,
                    array(
                        "Authorization: $token",
                        "Content-Type: application/json"
                    )
                );
                
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
                curl_setopt($curl, CURLOPT_URL, "https://solo.wablas.com/api/v2/send-message");
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                $result = curl_exec($curl);
                curl_close($curl);
                
                // update status setelah mengirim pesan

                $this->item->update([
                    'status' => 'Broadcast Terkirim'
                ]);
    }
}
