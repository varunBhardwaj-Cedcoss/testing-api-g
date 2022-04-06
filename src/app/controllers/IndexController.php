<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        if ($this->request->isPost()) {
            $curl = curl_init();
            $data = ['name' => 'varun'];
            curl_setopt_array($curl, [
                CURLOPT_URL => "http://httpbin.org/post",
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => [
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
}
