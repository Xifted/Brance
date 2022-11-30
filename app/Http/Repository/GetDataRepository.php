<?php

namespace App\Http\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Exception;

class GetDataRepository
{
    public function getData($params)
    {
        try {
            $client = new Client();
            $guzzleResponse = $client->get(
                    '' . $params, [
                    'headers' => [
                        'x-site'=>''
                    ],
                ]);
            if ($guzzleResponse->getStatusCode() == 200) {
                $response = json_decode($guzzleResponse->getBody(),true);
            }

        } catch (RequestException $e) {
            // you can catch here 400 response errors and 500 response errors
            // see this https://stackoverflow.com/questions/25040436/guzzle-handle-400-bad-request/25040600
        } catch(Exception $e){
            //other errors
        }

        return $response;
    }
}
