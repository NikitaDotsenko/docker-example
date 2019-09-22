<?php

namespace App\Rules;

use Arcanedev\NoCaptcha\NoCaptchaV2;
use Illuminate\Contracts\Validation\Rule;

class Captcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function passes($attributes, $value): bool
    {
        $captcha = new NoCaptchaV2(config('no-captcha.secret'), config('no-captcha.sitekey'));
        $response = $captcha->verify($value ?? null);
        return $response->isSuccess() ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You are ROBOT!!!';
    }
}
