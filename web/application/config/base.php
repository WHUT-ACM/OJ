<?php
/**
 * @author: freefcw
 * Date: 12/29/13
 * Time: 10:46 PM
 */

return array(
    'name'                => 'WHUTOJ',
    'team'                => 'WHUT ACM',
    'desc'                => 'Onlinejudge',
    'keyword'             => 'Onlinejudge',
    'domain'              => '127.0.0.1',
    'base_url'            => '/', // should ends with /, for example '/oj/'
    'salt'                => 'whutoj',
    'oi_mode'             => false,
    'submit_time'         => 5, // in second
    'captcha_mode'        => false, // false, 'local', 'recaptcha'
    'captcha_public_key'  => 'YOUR-RECAPTCHA-PUBLIC-KEY',
    'captcha_private_key' => 'YOUR-RECAPTCHA-PRIVATE-KEY',

    'data_dir'            => '/home/judge/data',
);
