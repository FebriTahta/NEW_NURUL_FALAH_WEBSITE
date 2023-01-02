<?php

namespace App\Console\Commands;
use App\Models\Target;
use App\Models\Broadcast;
use Illuminate\Console\Command;

class BroadcastEMinutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'broadcast:minutes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send broadcast every minutes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;

        $target = Target::where('status',"")
        ->orWhere('status', null)->with(['broadcast'])->first();

        // $target->update(['status'=>'Broadcast Terkirim']);


        if ($target) {
            # jika ada code...
            
            if ($target->broadcast->admin_broadcast == '6289523444715') {
                # luluk code...
                if ($target->broadcast->jenis_broadcast == 'image') {
                    # image code...
                    set_time_limit(0);
                    $curl = curl_init();
                    $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                    $payload = [
                        "data" => [
                            [
                                'phone' => $target->telp_target,
                                'image' => $target->broadcast->url_img,
                                'caption' => $target->broadcast->desc_broadcast,
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
        
                    $target->update([
                        'status' => 'Broadcast Terkirim'
                    ]);
        
                    $this->info('Successfully sent broadcast.');

                }elseif($target->broadcast->jenis_broadcast == 'dokumen'){
                    # dokumen code...
                    set_time_limit(0);
                    $curl = curl_init();
                    $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                    $data = [
                        'phone' => $target->telp_target,
                        'document' => $target->broadcast->url_img,
                        'caption' => $target->broadcast->desc_broadcast,
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
        
                    $target->update([
                        'status' => 'Broadcast Terkirim'
                    ]);
        
                    $this->info('Successfully sent broadcast.');

                }else {
                    # text code...
                    set_time_limit(0);
                    $curl = curl_init();
                    $token = "ErPMCdWGNfhhYPrrGsTdTb1vLwUbIt35CQ2KlhffDobwUw8pgYX4TN5rDT4smiIc";
                    $payload = [
                        "data" => [
                            [
                                'phone' => $target->telp_target,
                                'message' => $target->broadcast->desc_broadcast,
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
        
                    $target->update([
                        'status' => 'Broadcast Terkirim'
                    ]);
        
                    $this->info('Successfully sent broadcast.');
                }
                
            }else {
                # all bidang code...
                if ($target->broadcast->jenis_broadcast == 'image') {
    
                    set_time_limit(0);
                    $curl = curl_init();
                    $token = "eIKm5nTO7bVZqA9K3IlpPLoZT05u4GoYex8fEWwDlgpZQwK3N7DUEBkBOKOKw00f";
                    $payload = [
                        "data" => [
                            [
                                'phone' => $target->telp_target,
                                'image' => $target->broadcast->url_img,
                                'caption' => $target->broadcast->desc_broadcast,
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
        
                    $target->update([
                        'status' => 'Broadcast Terkirim'
                    ]);
        
                    $this->info('Successfully sent broadcast.');

                }elseif($target->broadcast->jenis_broadcast == 'dokumen'){
                    set_time_limit(0);
                    $curl = curl_init();
                    $token = "eIKm5nTO7bVZqA9K3IlpPLoZT05u4GoYex8fEWwDlgpZQwK3N7DUEBkBOKOKw00f";
                    $data = [
                        'phone' => $target->telp_target,
                        'document' => $target->broadcast->url_img,
                        'caption' => $target->broadcast->desc_broadcast,
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
        
                    $target->update([
                        'status' => 'Broadcast Terkirim'
                    ]);
        
                    $this->info('Successfully sent broadcast.');
                }else {
                    set_time_limit(0);
                    $curl = curl_init();
                    $token = "eIKm5nTO7bVZqA9K3IlpPLoZT05u4GoYex8fEWwDlgpZQwK3N7DUEBkBOKOKw00f";
                    $payload = [
                        "data" => [
                            [
                                'phone' => $target->telp_target,
                                'message' => $target->broadcast->desc_broadcast,
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
        
                    $target->update([
                        'status' => 'Broadcast Terkirim'
                    ]);
        
                    $this->info('Successfully sent broadcast.');
                }
            }
        }

    }
}
