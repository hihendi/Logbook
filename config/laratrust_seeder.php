<?php

return [
    'role_structure' => [
        // 'superadministrator' => [
        //     'users' => 'c,r,u,d',
        //     'profile' => 'r,u'
        // ],
        'admin' => [
          'users' => 'c,r,u,d',
          // 'logbook' => 'c,r,u,d',
          'profile' => 'r,u'
      ],
      'noc' => [
          // 'users' => 'c,r,u,d',
          // 'logbook' => 'c,r,u,d',
          'profile' => 'r,u'
      ],
      'teknisi' => [
          // 'logbook' => 'c,r,u,d',
          'profile' => 'r,u'
      ],
      'marketing' => [
          // 'marketing' => 'c,r,u,d',
          'profile' => 'r,u'
      ],
      'customer' => [
          // 'marketing' => 'c,r,u,d',
          'profile' => 'u'
      ],
    ],
    'permission_structure' => [],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
