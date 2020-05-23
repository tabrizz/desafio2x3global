<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use GuzzleHttp\Client as HttpClient;
use Carbon\Carbon;
use App\Payment;
use App\DollarPrice;

class FetchDollarPrice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $client;
    private $expires_at;
    private $status;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($client, $expires_at, $status)
    {
        //
        $this->client = $client;
        $this->expires_at = $expires_at;
        $this->status = $status;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $today = Carbon::now()->format('Y-m-d');
        
        $dollarPrice = DollarPrice::where('fetch_date', $today)->first();

        if ($dollarPrice->isDirty()) {
            $httpClient = new HttpClient();
            $response = $httpClient->request('GET', 'https://mindicador.cl/api/dolar');
            $body = json_decode($response->getBody()->getContents());
            $dp = DollarPrice::create([
                'price' => $body->serie[0]->valor,
                'fetch_date' => $today
            ]);

            $dollarPrice = $dp;
            // session([$today => $body->serie[0]->valor]);
        }

        $payment = $this->client->payments()->create([
            'expires_at' => $this->expires_at,
            'payment_date' => $today,
            'status' => $this->status,
            'client_id' => $this->client->id,
            'clp_usd' => $dollarPrice->price,
        ]);
    }
}
