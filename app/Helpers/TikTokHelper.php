<?php

namespace App\Helpers;

class TikTokHelper {

    protected $curl, $api;
    public function __construct() {
        $this->curl = \Config\Services::curlrequest();
        $this->api  = 'https://tiktok.com/oembed';
    }

    public function getVideo($url) {
        $response =  $this->curl->request('GET', $this->api, [
            'query'   => [
                'url' => $url
            ]
        ]);

        return $response->getBody();
    }

}