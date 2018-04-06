<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        "db" => [
            "host" => "localhost",
            "dbname" => "slim3",
            "user" => "root",
            "pass" => ""
        ],
        'secret' => 'gd345$FFdFsdf2',
        'json_dummy' => "[
            {
              '_id': '5ac782d465f67f6e955c8308',
              'index': 0,
              'guid': '1f6037e7-ad66-4492-a474-a9163d5446f4',
              'isActive': true,
              'balance': '$1,001.60',
              'picture': 'http://placehold.it/32x32',
              'age': 21,
              'eyeColor': 'green',
              'name': 'Merle Mcgee',
              'gender': 'female',
              'company': 'NURALI',
              'email': 'merlemcgee@nurali.com',
              'phone': '+1 (997) 508-3336',
              'address': '925 Elm Avenue, Flintville, Delaware, 5561',
              'about': 'Mollit tempor incididunt enim adipisicing culpa ex fugiat. Ex incididunt voluptate proident esse pariatur enim. Elit minim est commodo eu.\r\n',
              'registered': '2016-01-23T03:13:32 -01:00',
              'latitude': 69.133071,
              'longitude': -75.08608,
              'tags': [
                'dolore',
                'sunt',
                'magna',
                'tempor',
                'esse',
                'dolore',
                'nulla'
              ],
              'friends': [
                {
                  'id': 0,
                  'name': 'Hubbard Dotson'
                },
                {
                  'id': 1,
                  'name': 'Griffin Osborne'
                },
                {
                  'id': 2,
                  'name': 'Schultz Giles'
                }
              ],
              'greeting': 'Hello, Merle Mcgee! You have 10 unread messages.',
              'favoriteFruit': 'banana'
            },
            {
              '_id': '5ac782d480fdb85006e1b888',
              'index': 1,
              'guid': 'fe064184-c572-4440-b2b3-3676c3c1549e',
              'isActive': true,
              'balance': '$2,170.90',
              'picture': 'http://placehold.it/32x32',
              'age': 25,
              'eyeColor': 'brown',
              'name': 'Mullen Cain',
              'gender': 'male',
              'company': 'COFINE',
              'email': 'mullencain@cofine.com',
              'phone': '+1 (867) 534-3117',
              'address': '313 Keen Court, Hillsboro, Alabama, 841',
              'about': 'Id reprehenderit ea consequat in do et dolor do nostrud sint ullamco. Nisi irure sit tempor et reprehenderit dolor est cillum sunt incididunt magna consequat fugiat deserunt. Laborum est consequat proident cupidatat anim laborum minim esse. Consequat minim tempor est incididunt laboris magna nisi. Adipisicing dolor cillum aliquip labore mollit magna occaecat quis sunt laboris.\r\n',
              'registered': '2015-10-20T08:24:57 -02:00',
              'latitude': 41.759375,
              'longitude': -174.789838,
              'tags': [
                'do',
                'laboris',
                'culpa',
                'pariatur',
                'laboris',
                'qui',
                'Lorem'
              ],
              'friends': [
                {
                  'id': 0,
                  'name': 'Penny Dean'
                },
                {
                  'id': 1,
                  'name': 'Audra Adams'
                },
                {
                  'id': 2,
                  'name': 'Martina Solis'
                }
              ],
              'greeting': 'Hello, Mullen Cain! You have 3 unread messages.',
              'favoriteFruit': 'banana'
            },
            {
              '_id': '5ac782d447b01fd6348a6e6a',
              'index': 2,
              'guid': 'f474aca7-5275-4c80-88c9-01105d97c875',
              'isActive': true,
              'balance': '$2,769.29',
              'picture': 'http://placehold.it/32x32',
              'age': 40,
              'eyeColor': 'green',
              'name': 'Snyder Clarke',
              'gender': 'male',
              'company': 'GENMEX',
              'email': 'snyderclarke@genmex.com',
              'phone': '+1 (818) 598-3897',
              'address': '311 Schenck Avenue, Allison, Montana, 4188',
              'about': 'Do sint ex velit tempor nulla. Lorem veniam eu dolore ea laborum sunt amet nulla ea deserunt cillum enim excepteur in. Ea adipisicing proident nulla reprehenderit aliqua quis id sint reprehenderit consectetur ut velit. Eu et sit officia veniam labore in adipisicing sunt exercitation in tempor reprehenderit.\r\n',
              'registered': '2014-06-21T12:16:53 -02:00',
              'latitude': -31.137519,
              'longitude': 30.721308,
              'tags': [
                'pariatur',
                'enim',
                'minim',
                'exercitation',
                'mollit',
                'cupidatat',
                'magna'
              ],
              'friends': [
                {
                  'id': 0,
                  'name': 'Wolf Lowe'
                },
                {
                  'id': 1,
                  'name': 'Cannon Beck'
                },
                {
                  'id': 2,
                  'name': 'Heath Howard'
                }
              ],
              'greeting': 'Hello, Snyder Clarke! You have 10 unread messages.',
              'favoriteFruit': 'apple'
            },
            {
              '_id': '5ac782d40ffdc3066fb51b2d',
              'index': 3,
              'guid': '87cf9c87-ebed-4133-9018-cec6b0dcf405',
              'isActive': false,
              'balance': '$1,670.49',
              'picture': 'http://placehold.it/32x32',
              'age': 37,
              'eyeColor': 'blue',
              'name': 'Althea Estes',
              'gender': 'female',
              'company': 'KATAKANA',
              'email': 'altheaestes@katakana.com',
              'phone': '+1 (819) 407-2240',
              'address': '994 Moore Place, Basye, Vermont, 9118',
              'about': 'Consectetur aliqua elit occaecat qui minim adipisicing sit anim do exercitation enim veniam mollit adipisicing. Consequat mollit ipsum commodo ad occaecat. Nisi pariatur ut cupidatat ut ullamco ea occaecat ex non magna laborum. Anim culpa quis irure minim ullamco do nisi magna in eu nostrud. Dolor Lorem aute labore proident eu ex. Proident veniam adipisicing sit enim.\r\n',
              'registered': '2014-03-01T12:29:50 -01:00',
              'latitude': -42.927105,
              'longitude': -179.262116,
              'tags': [
                'officia',
                'occaecat',
                'duis',
                'enim',
                'enim',
                'aliqua',
                'adipisicing'
              ],
              'friends': [
                {
                  'id': 0,
                  'name': 'Bauer Contreras'
                },
                {
                  'id': 1,
                  'name': 'Lang Nixon'
                },
                {
                  'id': 2,
                  'name': 'Amelia Lane'
                }
              ],
              'greeting': 'Hello, Althea Estes! You have 4 unread messages.',
              'favoriteFruit': 'banana'
            },
            {
              '_id': '5ac782d4d9639c2df2002acb',
              'index': 4,
              'guid': '22972984-ea51-4b79-b167-a96d511768f4',
              'isActive': false,
              'balance': '$1,118.88',
              'picture': 'http://placehold.it/32x32',
              'age': 40,
              'eyeColor': 'blue',
              'name': 'Koch Elliott',
              'gender': 'male',
              'company': 'ZANITY',
              'email': 'kochelliott@zanity.com',
              'phone': '+1 (821) 454-3895',
              'address': '763 Vandervoort Avenue, Bend, Ohio, 3424',
              'about': 'Excepteur eu nostrud fugiat nulla sint laborum consequat do aliqua Lorem minim. Eu sit nulla dolore est et deserunt ex eu. Minim deserunt eiusmod officia enim sint adipisicing. In aliquip non commodo labore consequat cillum tempor. Consectetur in magna et sunt ad occaecat aliqua enim. Sunt amet eu Lorem et eiusmod.\r\n',
              'registered': '2014-06-26T01:38:06 -02:00',
              'latitude': -47.796143,
              'longitude': -42.152737,
              'tags': [
                'amet',
                'in',
                'laborum',
                'ex',
                'dolor',
                'velit',
                'dolor'
              ],
              'friends': [
                {
                  'id': 0,
                  'name': 'Rosales Velasquez'
                },
                {
                  'id': 1,
                  'name': 'Davis James'
                },
                {
                  'id': 2,
                  'name': 'Jayne Mathews'
                }
              ],
              'greeting': 'Hello, Koch Elliott! You have 5 unread messages.',
              'favoriteFruit': 'strawberry'
            },
            {
              '_id': '5ac782d4b32caf0ca3fed6bd',
              'index': 5,
              'guid': '24e296b1-e5de-4b15-a59e-6ef1f68bf18e',
              'isActive': false,
              'balance': '$2,966.63',
              'picture': 'http://placehold.it/32x32',
              'age': 33,
              'eyeColor': 'blue',
              'name': 'Sears Padilla',
              'gender': 'male',
              'company': 'ZEDALIS',
              'email': 'searspadilla@zedalis.com',
              'phone': '+1 (998) 581-3812',
              'address': '392 Hanover Place, Strykersville, New Hampshire, 6368',
              'about': 'Ad elit nulla ullamco non magna pariatur sunt irure deserunt incididunt reprehenderit. Dolore qui commodo exercitation exercitation nostrud nisi et qui proident in commodo anim. Enim elit consectetur commodo duis quis velit enim do voluptate pariatur elit laboris consequat consequat. Duis quis adipisicing duis aliquip minim voluptate labore laboris minim eu irure officia aliqua dolor.\r\n',
              'registered': '2016-11-29T06:46:07 -01:00',
              'latitude': 33.824484,
              'longitude': -96.469653,
              'tags': [
                'quis',
                'proident',
                'incididunt',
                'eiusmod',
                'mollit',
                'culpa',
                'non'
              ],
              'friends': [
                {
                  'id': 0,
                  'name': 'Beth Mcguire'
                },
                {
                  'id': 1,
                  'name': 'Lesa Russo'
                },
                {
                  'id': 2,
                  'name': 'Forbes Roth'
                }
              ],
              'greeting': 'Hello, Sears Padilla! You have 4 unread messages.',
              'favoriteFruit': 'strawberry'
            }
          ]",
    ],
];