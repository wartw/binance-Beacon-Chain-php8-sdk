<?php

namespace Binance\Client;

use GuzzleHttp;

class HttpClient {

    private $server;
    private $newserver;
    private $serverjsonrpc;
    
    function __construct($network) {
        if ($network == "mainnet"){
            $arr = array('https://dex.binance.org', 'https://dex-atlantic.binance.org', 'https://dex-asiapacific.binance.org', 'https://dex-european.binance.org');
            $this->server = $arr[array_rand($arr)];
            $this->newserver = 'https://api.binance.org/bc';
            $this->serverjsonrpc = 'https://dataseed1.binance.org';
        }else if($network == "testnet"){
            $this->server = 'https://'.$network.'-dex.binance.org';
            $this->newserver = 'https://'.$network.'-api.binance.org/bc';
            $this->serverjsonrpc = 'https://data-seed-pre-0-s1.binance.org';
        }else{
            throw Exception("wrong network");
        }
    }

    function SendPost($endpoint, $payload, $sync=false){

        $client = new GuzzleHttp\Client();
        
        $response = $client->postAsync($this->server.$endpoint.'?sync='.$sync, [
            'debug' => FALSE,
            'sync' => TRUE,
            'body' => $payload,
            'headers' => [
            'Content-Type' => 'text/plain',
            ]
        ])->wait(function($results){
            return $results;
        });
        
        $body = $response->getBody();
        return json_decode((string) $body);
    }

    // async function
    function GetAsync($endpoint){

        $client = new GuzzleHttp\Client();
        
        $response = $client->getAsync($this->server.$endpoint)->wait(function($results){
            return $results;
        });
        
        $body = $response->getBody();
        return json_decode((string) $body);
    }

    // sync function
    function GetSync($endpoint){

        $client = new GuzzleHttp\Client();
        
        $response = $client->getSync($this->server.$endpoint)->wait(function($results){
            return $results;
        });
        
        $body = $response->getBody();
        return json_decode((string) $body);
    }
}
?>
