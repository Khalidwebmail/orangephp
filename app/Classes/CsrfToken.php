<?php


namespace App\Classes;


class CsrfToken
{
    /**
     * create and store token
     * @return mixed
     * @throws \Exception
     */
    public static function token()
    {
        if(!Session::has('token'))
        {
            $random_token = base64_encode(openssl_random_pseudo_bytes(32));
            Session::add('token', $random_token);
        }
        return Session::get('token');
    }

    /**
     * Verify token
     * @param $request_token
     * @return bool
     */
    public static function verifyToken($request_token)
    {
        if(Session::has('token') && Session::get('token') === $request_token){
            Session::remove('token');
            return true;
        }
        return false;
    }
}