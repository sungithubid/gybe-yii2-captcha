<?php

//return [
//    // level 1
//    '1' => [
//        'gybe\captcha\equations\AddSub',
//        'gybe\captcha\equations\Multiply',
//        'gybe\captcha\equations\Division',
//    ],
//    // level 2
//    '2'=>[
//        'gybe\captcha\equations\Polynom2',
//        'gybe\captcha\equations\Fraction',
//    ],
//    // level 3
//    '3'=>[
//        'gybe\captcha\equations\LimitFnt',
//        'gybe\captcha\equations\LimitIfnt1',
//        'gybe\captcha\equations\LimitIfnt2',
//        'gybe\captcha\equations\Integrate1',
//    ],
//];

return [
    // level 1
    '1' => [
        'gybe\captcha\equations\SimpleAdd',
        'gybe\captcha\equations\SimpleSub',
    ],
    // level 2
    '2' => [
        'gybe\captcha\equations\SimpleAddSub',
    ],
    // level 3
    '3' => [
        'gybe\captcha\equations\AddSub',
        'gybe\captcha\equations\Multiply',
        'gybe\captcha\equations\Division',
    ],
];