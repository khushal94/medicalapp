<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function dummy()
    {
        return 'dummy';
    }

    protected function Send_SMS($msgPass, $noPass)
    {
        $APIKey = "mUB6lcY3xUGUIeAeuRdmBg";
        $SenderId = "CLOUDW";

        $message = urlencode($msgPass);
        $mobile = urlencode($noPass);
        $url = "http://cloud.smsindiahub.in/api/mt/SendSMS?APIKey=".$APIKey."&senderid=".$SenderId."&channel=Trans&DCS=0&flashsms=0&number=".$mobile."&text=".$message."&route=0";
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
