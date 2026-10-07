<?php

return [
    'title' => 'CV | Andrej Kotov',

    'seo' => [
        'title' => 'CV | Andrej Kotov | PHP / Laravel Backend programuotojas',
        'description' => 'Andrej Kotov CV. PHP / Laravel backend programuotojas, turintis profesinės patirties logistikos sistemose, duomenų bazių optimizavime, integracijose, automatiniame testavime, WebSocket technologijose ir produkcinėse aplikacijose.',
    ],

    'hero' => [
        'eyebrow' => 'Gyvenimo aprašymas',
        'name' => 'Andrej Kotov',
        'role' => 'PHP / Laravel Backend programuotojas',
        'summary' => 'Backend programuotojas, turintis profesinės patirties dirbant su logistikos sistemomis, moderniomis Laravel aplikacijomis ir legacy PHP kodu. Kuriu ir analizuoju procesus, kuriuose svarbų vaidmenį atlieka duomenų bazės, integracijos, foninės užduotys ir operaciniai įrankiai, daug dėmesio skirdamas patikimam veikimui, išmatuojamiems rezultatams ir prižiūrimiems pakeitimams esamose sistemose.',
        'github' => 'GitHub',
        'linkedin' => 'LinkedIn',
        'email' => 'El. paštas',
    ],

    'experience' => [
        'eyebrow' => 'Profesinė patirtis',
        'title' => 'Patirtis',

        'items' => [
            [
                'company' => 'UAB Vlantana',
                'role' => 'PHP / Laravel Backend programuotojas',
                'location' => 'Klaipėda, Lietuva',
                'period' => '2023 m. lapkritis - dabar',
                'description' => 'Backend kūrimas ir produkcinių logistikos sistemų priežiūra, apimanti modernias Laravel aplikacijas, legacy PHP kodą ir intensyviai duomenis naudojančius operacinius procesus.',
                'responsibilities' => [
                    'Kuriu ir prižiūriu backend funkcionalumą Laravel ir legacy PHP aplikacijose, naudojamose kasdienėse logistikos operacijose.',
                    'Analizuoju produkcinius incidentus, seku klaidas per aplikacijos logiką, automatines užduotis, integracijas ir duomenų bazes bei šalinu jų pagrindines priežastis.',
                    'Optimizuoju MySQL ir Microsoft SQL Server užklausas naudodamas indeksus, EXPLAIN, vykdymo planų analizę ir užklausų pertvarkymą.',
                    'Kuriu REST integracijas, automatines ir fonines užduotis, Redis pagrindu veikiančius procesus bei el. pašto / SMS pranešimus.',
                    'Prižiūriu ataskaitų, duomenų eksporto ir dokumentų generavimo procesus operaciniams naudotojams.',
                    'Rašau automatinius testus ir kasdien dirbu su Docker, Laravel Sail, Git, code review, Sentry bei produkcijos stebėjimo įrankiais.',
                ],
            ],

            [
                'company' => 'AndersenLab',
                'role' => 'PHP / Symfony programuotojas',
                'location' => null,
                'period' => '2023 m. birželis - 2023 m. rugsėjis',
                'description' => 'Backend kūrimo patirtis bankininkystės projekte naudojant PHP ir Symfony.',
                'responsibilities' => [
                    'Dirbau su esama Symfony kodo baze ir duomenimis paremta aplikacijos logika.',
                    'Kūriau ir prižiūrėjau backend funkcionalumą.',
                    'Naudojau Git pagrindu veikiantį kūrimo procesą ir komandinio darbo praktikas.',
                ],
            ],

            [
                'company' => 'CodeAcademy',
                'role' => 'PHP / Laravel programuotojas',
                'location' => null,
                'period' => '2023 m. sausis - 2023 m. kovas',
                'description' => 'Praktinis PHP / Laravel programavimas kuriant elektroninės prekybos projektą.',
                'responsibilities' => [
                    'Kūriau backend funkcionalumą naudodamas Laravel, Eloquent ORM ir validaciją.',
                    'Dirbau su reliacinėmis duomenų bazėmis ir aplikacijos verslo logika.',
                    'Kūriau funkcionalumą nuo reikalavimų iki realizacijos naudodamas Git.',
                ],
            ],
        ],
    ],

    'projects' => [
        'eyebrow' => 'Atrinkti darbai',
        'title' => 'Atrinkti projektai',

        'items' => [
            'service_desk' => [
                'name' => 'Service Desk',
                'status' => 'Paruoštas produkcijai',
                'description' => 'Pilnai paruošta Laravel Service Desk aplikacija, sukurta kaip išsamus į backend orientuotas portfolio projektas.',
                'highlights' => [
                    'Užklausų darbo eiga, RBAC ir Policies, auditavimo istorija, eilėse vykdomi pranešimai ir REST API autentifikacija.',
                    'Jira ir GitHub integracijos su webhook pagrindu veikiančiais procesais.',
                    'Nuo tiekėjo nepriklausoma AI pagalba su human-in-the-loop kontrole, automatiniais testais, CI ir produkciniu diegimu.',
                ],
                'case_study' => 'Projekto aprašymas',
                'github' => 'GitHub',
                'live' => 'Veikianti aplikacija',
            ],

            'voice_translator' => [
                'name' => 'Voice Translator',
                'status' => 'v1.0.0',
                'description' => 'Produkcinis RU ↔ EN push-to-talk balso vertėjas, išaugęs į matavimais ir palyginimais pagrįstą kalbos technologijų projektą.',
                'highlights' => [
                    'Realaus laiko WebSocket pipeline su Google Speech-to-Text, DeepL vertimu ir OpenAI streaming TTS.',
                    'Kontroliuojama benchmark metodika, lyginanti kalbos atpažinimo profilius naudojant tuos pačius įrašus ir kritinių elementų išsaugojimo metriką.',
                    'Naršyklėje veikianti Engineering Lab aplinka, išmatuotas end-to-end vėlinimas, viešo demo apsaugos ir diegimas Railway platformoje.',
                ],
                'case_study' => 'Projekto aprašymas',
                'github' => 'GitHub',
                'live' => 'Veikiantis demo',
            ],
        ],
    ],

    'skills' => [
        'eyebrow' => 'Techniniai įgūdžiai',
        'title' => 'Technologijos',

        'groups' => [
            [
                'title' => 'Backend',
                'items' => [
                    'PHP 7 / 8',
                    'Laravel',
                    'Symfony',
                    'REST API',
                    'Eloquent ORM',
                    'Doctrine',
                ],
            ],

            [
                'title' => 'Duomenų bazės ir duomenys',
                'items' => [
                    'MySQL',
                    'Microsoft SQL Server',
                    'Redis',
                    'SQL optimizavimas',
                    'Indeksai',
                    'EXPLAIN',
                    'Duomenų bazių migracijos',
                ],
            ],

            [
                'title' => 'Testavimas ir kokybė',
                'items' => [
                    'PHPUnit',
                    'Pest',
                    'PHPStan',
                    'Xdebug',
                    'Laravel Pint',
                    'CI',
                ],
            ],

            [
                'title' => 'Infrastruktūra ir diegimas',
                'items' => [
                    'Docker',
                    'Laravel Sail',
                    'Linux',
                    'Git',
                    'GitHub',
                    'Gitea',
                    'GitHub Actions',
                    'Railway',
                    'Sentry',
                ],
            ],

            [
                'title' => 'Integracijos ir automatizavimas',
                'items' => [
                    'REST integracijos',
                    'Webhooks',
                    'Queues ir foninės užduotys',
                    'Automatinės užduotys',
                    'El. pašto / SMS pranešimai',
                    'PDF / Excel / Word generavimas',
                ],
            ],

            [
                'title' => 'Realtime ir AI',
                'items' => [
                    'WebSockets',
                    'Google Speech-to-Text',
                    'DeepL',
                    'OpenAI API',
                    'Streaming TTS',
                    'AI / kalbos technologijų integracijos',
                ],
            ],
        ],
    ],

    'education' => [
        'eyebrow' => 'Išsilavinimas ir mokymai',
        'title' => 'Mokymai',

        'items' => [
            [
                'name' => 'CodeAcademy',
                'program' => 'PHP programavimas',
                'details' => '600 valandų profesinė mokymo programa, orientuota į PHP ir internetinių sistemų kūrimą.',
            ],
            [
                'name' => 'Profesinis tobulėjimas',
                'program' => 'Backend programavimas ir produkcinės sistemos',
                'details' => 'Nuolatinis praktinis mokymasis dirbant su Laravel, SQL, integracijomis, testavimu ir sistemų priežiūra.',
            ],
        ],
    ],

    'languages' => [
        'eyebrow' => 'Kalbos',
        'title' => 'Kalbos',

        'items' => [
            [
                'language' => 'Rusų',
                'level' => 'Laisvai',
            ],
            [
                'language' => 'Lietuvių',
                'level' => 'Laisvai',
            ],
            [
                'language' => 'Anglų',
                'level' => 'Vidutiniškai',
            ],
            [
                'language' => 'Vokiečių',
                'level' => 'Pagrindai',
            ],
        ],
    ],

    'earlier_experience' => [
        'eyebrow' => 'Ankstesnė patirtis',
        'title' => 'Prieš programavimą',
        'meta_description' => 'Andrej Kotov CV. PHP / Laravel Backend programuotojas, turintis profesinės patirties logistikos sistemose, duomenų bazėse, integracijose ir produkcinių sistemų priežiūroje.',
        'paragraphs' => [
            'Prieš pradėdamas dirbti programavimo srityje dirbau aliuminių laivų gamyboje suvirintoju, o vėliau gamybos vadovu.',
            'Ši patirtis padėjo išsiugdyti praktinio problemų sprendimo, planavimo, atsakomybės, komandinio darbo ir bendravimo įgūdžius, kurie naudingi ir programinės įrangos kūrime.',
        ],
    ],

    'contact' => [
        'eyebrow' => 'Kontaktai',
        'title' => 'Susisiekime',
        'description' => 'Domina PHP / Laravel backend galimybės, susijusios su produkcinėmis sistemomis, esamomis aplikacijomis, integracijomis, legacy sistemų modernizavimu ir intensyviai duomenų bazes naudojančiais procesais.',
        'email' => 'El. paštas',
        'linkedin' => 'LinkedIn',
        'github' => 'GitHub',
    ],
];
