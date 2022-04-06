<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://matchilling-chuck-norris-jokes-v1.p.rapidapi.com/jokes/random",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: matchilling-chuck-norris-jokes-v1.p.rapidapi.com",
                    "X-RapidAPI-Key: 71be960f06msh887d16889105647p189daajsn7e0182a348c4",
                    "accept: application/json"
                ],
            ]);
            $response = json_decode(curl_exec($curl));
            $this->view->data = $response;
            /* echo '<pre>';
            print_r($response);
            die; */
    }
}
