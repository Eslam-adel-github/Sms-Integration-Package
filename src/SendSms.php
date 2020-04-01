<?php


namespace Sms\Integration\Package;


class SendSms
{
    public static function SendSms($mobile,$message,$delay){

        $url = config('sms_config.sms.base_url').'?username='.config('sms_config.sms.username').'&password='.config('sms_config.sms.password').'&language=1&sender='.config('sms_config.sms.sender').'&mobile='.$mobile.'&message='.$message.'&DelayUntil='.$delay;
        $client = new \GuzzleHttp\Client();
        $res = $client->post($url);
        return $res;
    }

}
