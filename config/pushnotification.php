<?php

return [
  'gcm' => [
      'priority' => 'normal',
      'dry_run' => false,
      'apiKey' => 'My_ApiKey',
  ],
  'fcm' => [
        'priority' => 'high',
        'dry_run' => false,
        'apiKey' => 'AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG',
  ],
  'apn' => [
      'certificate' => __DIR__ . '/iosCertificates/apns-dev-cert.pem',
      'passPhrase' => '1234', //Optional
      'passFile' => __DIR__ . '/iosCertificates/yourKey.pem', //Optional
      'dry_run' => true
  ]
];