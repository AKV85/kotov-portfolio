<?php

return [
    'title' => 'Voice Translator | Andrej Kotov',

    'seo' => [
        'title' => 'Voice Translator projekto analizė | Andrej Kotov',
        'description' => 'Andrej Kotov Voice Translator projekto analizė: produkcinė RU ↔ EN push-to-talk balso vertimo sistema, sukurta naudojant kontroliuojamus kalbos benchmarkus, streaming atpažinimą, WebSockets ir išmatuojamą end-to-end delsą.',
    ],

    'hero' => [
        'back' => '← Grįžti į projektus',
        'eyebrow' => 'Produkcinis projektas',
        'name' => 'Voice Translator',
        'description' => 'Produkcinis RU ↔ EN push-to-talk balso vertėjas, iš paprasto kalbos apdorojimo pipeline išaugęs į benchmarkais pagrįstą inžinerinę laboratoriją.',
        'github' => 'Peržiūrėti GitHub',
        'live' => 'Atidaryti live demo',

        'meta' => [
            'type_label' => 'Tipas',
            'type' => 'Balso vertimo sistema',
            'focus_label' => 'Pagrindinis dėmesys',
            'focus' => 'Kalbos pipeline, benchmarkai ir realaus laiko perdavimas',
            'status_label' => 'Būsena',
            'status' => 'v1.0.0',
        ],
    ],

    'project' => [
        'eyebrow' => '01 / Projektas',
        'title' => 'Projektas',

        'paragraphs' => [
            'Pradinė idėja buvo sąmoningai paprasta: paspausti mygtuką, pasakyti frazę rusiškai ir išgirsti ją anglų kalba. Tada tą patį atlikti priešinga kryptimi.',
            'Kai bazinis speech-to-text → translation → text-to-speech pipeline jau veikė, sudėtingiausias klausimas pasikeitė. Reikėjo nebe išsiaiškinti, ar balso vertimą galima sujungti, o nustatyti, kuri technologija yra pakankamai tiksli ir greita praktiškam beveik realaus laiko pokalbiui.',
            'Šis klausimas projektą iš funkcionalumo kūrimo pavertė R&D užduotimi su kontroliuojamais garso įrašais, keliais kalbos atpažinimo tiekėjais, pakartojamais benchmarkais, naršyklės laiko matavimais ir galiausiai produkciniu demo.',
        ],
    ],

    'persik' => [
        'eyebrow' => 'Lūžio taškas',
        'title' => 'Katinas, nuo kurio prasidėjo R&D skyrius',

        'paragraph_1' => 'Vienas svarbiausių testų buvo susijęs su mano katinu Persiku. Rusišką frazę „Кот Персик рыжий хулиган“ Google atpažino kaip „Код Персик рыжий хулиган“. Klaida buvo visiškai logiška: rusų kalboje žodžių „кот“ ir „код“ galiniai priebalsiai be pakankamo konteksto gali skambėti beveik vienodai.',
        'paragraph_2' => 'Pridėjus daugiau konteksto atpažinimas tapo teisingas. Šis nedidelis eksperimentas pakeitė projekto kryptį: vietoje klausimo, ar kalbos atpažinimas apskritai veikia, pradėjau tirti, kuri speech technologija iš tikrųjų yra pakankamai gera beveik realaus laiko RU ↔ EN komunikacijai.',

        'first_label' => 'Pirmasis testas',
        'first_input' => 'Кот Персик рыжий хулиган.',
        'first_output' => 'Код Персик рыжий хулиган.',

        'context_label' => 'Su daugiau konteksto',
        'context_input' => 'У меня есть кот Персик, он рыжий хулиган.',
        'context_result' => 'Atpažinta teisingai',

        'translation_label' => 'Vėliau pipeline',
        'translation_input' => 'Персик',
        'translation_output' => 'Peach',

        'conclusion' => 'Persikas parodė du skirtingus klaidų tipus: kalbos atpažinimas gali neteisingai suprasti žodį, o net teisinga transkripcija vis tiek gali būti išversta klaidingai. Todėl projektas galiausiai pradėjo vertinti visą pipeline, o ne pasitikėti vienu sėkmingu API atsakymu.',
    ],

    'pipeline' => [
        'eyebrow' => '02 / Produkcinis pipeline',
        'title' => 'Nuo kalbos iki išversto balso',
        'description' => 'Produkcinis procesas padalintas į išmatuojamus etapus, kad kalbos atpažinimą, vertimą, balso sintezę ir rezultatų perdavimą būtų galima vertinti atskirai.',

        'steps' => [
            [
                'label' => '01 / Įvestis',
                'title' => 'Push-to-talk įrašymas',
                'description' => 'Naršyklė įrašo trumpą WebM garso fragmentą. Aiškūs Start ir Stop veiksmai išlaiko pokalbio modelį nuspėjamą ir leidžia koncentruotis į patikimą vertimą, neapsimetant, kad sistema jau teikia pilną simultaneous interpretation.',
            ],
            [
                'label' => '02 / Speech-to-text',
                'title' => 'Streaming kalbos atpažinimas',
                'description' => 'Rusų ir anglų kalboms naudojami atskirai pagal benchmarkų rezultatus parinkti Google Chirp 3 streaming profiliai, vietoje vienos universalios konfigūracijos abiem kalboms.',
            ],
            [
                'label' => '03 / Vertimas',
                'title' => 'DeepL vertimas',
                'description' => 'Atpažintas tekstas verčiamas tarp rusų ir anglų kalbų. Vertimo etapas buvo benchmarkinamas atskirai, nes teisinga transkripcija dar negarantuoja teisingos prasmės.',
            ],
            [
                'label' => '04 / Balso rezultatas',
                'title' => 'OpenAI streaming TTS',
                'description' => 'Išverstas tekstas paverčiamas garsu ir grąžinamas naršyklei, kur reali playback pradžia tampa vartotojo jaučiamos delsos matavimo dalimi.',
            ],
        ],

        'production_label' => 'Pasirinkti produkciniai profiliai',
        'production' => 'Rusų kalbos įvestis → Chirp 3 Streaming STANDARD → DeepL → OpenAI TTS. Anglų kalbos įvestis → Chirp 3 Streaming SHORT → DeepL → OpenAI TTS.',
    ],

    'lab' => [
        'eyebrow' => '03 / Inžinerinė laboratorija',
        'title' => 'Nuo CLI benchmarkų iki naršyklės laboratorijos',
        'description' => 'Benchmarkai prasidėjo kaip command-line įrankiai ir išaugo į naršyklėje veikiančią Live Pipeline Lab, kurioje tą patį įrašą galima paleisti per kelis pilnus profilius.',

        'cards' => [
            [
                'label' => 'Kontroliuojama įvestis',
                'title' => 'Vienas įrašas, keli modeliai',
                'description' => 'Tas pats WebM garso įrašas gali būti pakartotinai naudojamas skirtingiems profiliams, todėl rezultatai nepriklauso nuo to, kaip žmogus pakartotinai ištarė tą pačią frazę.',
            ],
            [
                'label' => 'Profiliai',
                'title' => 'Skirtingos pipeline strategijos',
                'description' => 'Batch Chirp 3, Streaming STANDARD, Streaming SHORT ir Deepgram Flux gali būti lyginami naudojant tuos pačius vertimo ir TTS etapus.',
            ],
            [
                'label' => 'Matavimai',
                'title' => 'Etapų ir end-to-end laikas',
                'description' => 'Lab matuoja STT, vertimo, TTS, audio-ready ir naršyklės playback laiką, todėl visas vartotojo potyris nėra redukuojamas iki vieno provider request.',
            ],
            [
                'label' => 'Išsaugojimas',
                'title' => 'Run rezultatai išlieka',
                'description' => 'Transkripcijos, vertimai, laiko matavimai, kokybės žymos ir ankstesni run rezultatai saugomi vėlesnei analizei bei profilių palyginimui.',
            ],
        ],

        'screenshot_alt' => 'Voice Translator inžinerinė laboratorija su užbaigtu pipeline run, transkripcija, vertimu ir laiko metrikomis.',
    ],

    'benchmark' => [
        'eyebrow' => '04 / Benchmarkai',
        'title' => 'Matuoti prasmę, o ne tik žodžius',
        'description' => 'Benchmarkuose naudoti kontroliuojami garso įrašai su logistikos frazėmis, o kokybė vertinta pagal kritinių elementų išsaugojimą. Pamesti artikelį nėra tas pats, kas 15 paversti į 50, pakeisti vilkiko numerį, paskirties vietą, temperatūrą ar operacinę instrukciją.',

        'quality_label' => 'Geriausia išmatuota RU kokybė',
        'quality_value' => '93.33%',

        'ru_audio_label' => 'RU STANDARD STOP → audio',
        'ru_audio_value' => '1701 ms',

        'en_audio_label' => 'EN SHORT STOP → audio',
        'en_audio_value' => '1677 ms',

        'table' => [
            'profile' => 'Profilis',
            'ru_quality' => 'RU kokybė',
            'en_quality' => 'EN kokybė',
            'ru_audio' => 'RU STOP → audio',
            'en_audio' => 'EN STOP → audio',

            'rows' => [
                [
                    'profile' => 'Batch Chirp 3',
                    'ru_quality' => '93.33%',
                    'en_quality' => '90.63%',
                    'ru_audio' => '2104 ms',
                    'en_audio' => '1982 ms',
                ],
                [
                    'profile' => 'Streaming STANDARD',
                    'ru_quality' => '93.33%',
                    'en_quality' => '90.63%',
                    'ru_audio' => '1701 ms',
                    'en_audio' => '1850 ms',
                ],
                [
                    'profile' => 'Streaming SHORT',
                    'ru_quality' => '90.00%',
                    'en_quality' => '90.63%',
                    'ru_audio' => '1315 ms',
                    'en_audio' => '1677 ms',
                ],
                [
                    'profile' => 'Deepgram Flux',
                    'ru_quality' => '86.67%',
                    'en_quality' => '78.13%',
                    'ru_audio' => '1236 ms',
                    'en_audio' => '1279 ms',
                ],
            ],
        ],

        'decision_label' => 'Inžinerinis sprendimas',
        'decision' => 'Rusų kalbai paliktas Streaming STANDARD, nes jis išlaikė geriausią išmatuotą 93.33% kokybę ir kartu sumažino delsą lyginant su batch atpažinimu. Anglų kalbai pasirinktas Streaming SHORT, nes jis išlaikė tokią pačią 90.63% kokybę kaip STANDARD, tačiau sumažino tiek atpažinimo, tiek visą STOP-to-audio delsą.',

        'screenshot_alt' => 'Voice Translator Lab palyginimas su kelių kalbos atpažinimo profilių kokybės ir delsos rezultatais.',
    ],

    'demo' => [
        'eyebrow' => '05 / Viešas demo',
        'title' => 'Lab yra lanksti. Internetas nėra.',
        'description' => 'Vieša sąsaja naudoja tikrą vertimo pipeline, tačiau sąmoningai pašalina didžiąją dalį eksperimentinių pasirinkimų. Patikimą pipeline konfigūraciją valdo serveris, o ne naršyklė.',

        'cards' => [
            [
                'label' => 'Sesija',
                'title' => 'Trumpalaikis vienkartinis token',
                'description' => 'Prieš atidarant WebSocket pipeline naršyklė paprašo trumpalaikės demo sesijos. Backend patikrina šaltinio kalbą, parenka sukonfigūruotą profilį, rezervuoja kvotą ir išduoda vienkartinį token.',
            ],
            [
                'label' => 'Ribojimai',
                'title' => '15 sekundžių vieši įrašai',
                'description' => 'Serveris riboja įrašo trukmę ir garso dydį bei taiko lankytojo, IP ir globalias kvotas, kad demo netaptų neribotu speech API proxy.',
            ],
            [
                'label' => 'Pasitikėjimo riba',
                'title' => 'Serverio parenkamas pipeline',
                'description' => 'Vieši klientai negali savavališkai pasirinkti provider, eksperimentinių profilių ar patikimos source konfigūracijos. Šie sprendimai lieka serverio pusėje.',
            ],
            [
                'label' => 'Valdymas',
                'title' => 'Kill switch ir privati Lab',
                'description' => 'Viešą demo galima išjungti nepriklausomai, o eksperimentinė Live Lab produkcijoje išlieka atskirai apsaugota nuo viešos prieigos.',
            ],
        ],

        'desktop_alt' => 'Voice Translator desktop sąsaja su rusų ir anglų push-to-talk vertimo valdikliais.',
        'mobile_alt' => 'Voice Translator mobili sąsaja.',
    ],

    'production' => [
        'eyebrow' => '06 / Produkcija ir diegimas',
        'title' => 'Production yra visai kita rūšis',
        'description' => 'Kai pipeline ir Lab pradėjo patikimai veikti lokaliai, projektas buvo išdiegtas kaip atskiros produkcinės paslaugos, o ne paliktas kaip įspūdinga terminalų langų kolekcija.',

        'cards' => [
            [
                'label' => 'Hostingas',
                'title' => 'Railway deployment',
                'description' => 'Produkcinė sistema veikia Railway su atskiromis Laravel web aplikacijos, WebSocket pipeline serverio ir MySQL paslaugomis.',
            ],
            [
                'label' => 'Realtime',
                'title' => 'Atskiras WebSocket pipeline',
                'description' => 'WebSocket servisas apdoroja live audio nepriklausomai nuo įprastų web užklausų ir viešų demo sesijų kūrimo.',
            ],
            [
                'label' => 'Runtime',
                'title' => 'Kalbos apdorojimui paruoštas PHP container',
                'description' => 'Produkcinėje PHP 8.4 aplinkoje įdiegtos speech stack reikalingos priklausomybės, įskaitant gRPC, protobuf, intl, pcntl ir MySQL palaikymą.',
            ],
            [
                'label' => 'Prisijungimo duomenys',
                'title' => 'Cloud aplinkai pritaikytos paslaptys',
                'description' => 'Provider paslaptys laikomos environment konfigūracijoje. Google service-account credentials produkcijoje gali būti pateikiami kaip JSON, todėl nereikia lokaliai mountinamo failo.',
            ],
            [
                'label' => 'Domenas',
                'title' => 'voice.kotov.lt',
                'description' => 'Viešas RU ↔ EN demo pasiekiamas per atskirą HTTPS produkcinį subdomeną.',
            ],
            [
                'label' => 'Kokybė',
                'title' => 'Automatizuota projekto patikra',
                'description' => 'Prieš release projektas tikrinamas testais, PHPStan, Laravel Pint ir frontend production build.',
            ],
        ],

        'setup_label' => 'Produkcinė aplinka',
        'setup' => 'Laravel, Railway, MySQL, atskiras WebSocket servisas, Google Speech-to-Text, DeepL, OpenAI TTS, HTTPS ir nuosavas domenas.',
    ],

    'limitations' => [
        'eyebrow' => '07 / Dabartiniai apribojimai',
        'title' => 'Ko v1.0.0 neapsimeta jau išsprendusi',
        'description' => 'Projektas aiškiai parodo dabartines ribas ir nevadina push-to-talk produkcinio demo baigta simultaneous interpretation sistema.',

        'items' => [
            'Komunikacija veikia push-to-talk principu, o ne kaip full-duplex simultaneous translation.',
            'Dabartinis viešas demo orientuotas į RU ↔ EN; lietuvių kalba lieka būsimu plėtros etapu.',
            'Kokybė ir delsa vis dar priklauso nuo tinklo sąlygų bei išorinių cloud provider.',
            'Išversto balso perdavimas tiesiogiai tarp dviejų atskirų kompiuterių arba į konferencijų programas lieka būsimu darbu už dabartinio portfolio demo ribų.',
        ],
    ],

    'stack' => [
        'eyebrow' => '08 / Technologijos',
        'title' => 'Technologijų stack',
        'description' => 'Projektas jungia Laravel aplikaciją, naršyklės audio įrašymą, realaus laiko komunikaciją, išsaugomus benchmark duomenis ir specializuotus speech bei language provider.',

        'groups' => [
            'application' => 'Aplikacija',
            'speech' => 'Kalba ir vertimas',
            'data' => 'Duomenys ir realtime',
            'engineering' => 'Inžinerija',
        ],
    ],

    'result' => [
        'eyebrow' => '09 / Rezultatas',
        'title' => 'Ką parodo šis projektas',

        'paragraph_1' => 'Voice Translator parodo daugiau nei kelių AI API sujungimą. Projekte naudojami kontroliuojami garso įrašai, kritinių elementų išsaugojimo vertinimas ir end-to-end laiko matavimai, kad būtų galima nustatyti, kaip skirtingi pipeline sprendimai veikia tiek tikslumą, tiek vartotojo realiai jaučiamą delsą.',
        'paragraph_2' => 'Projektas taip pat parodo kelią nuo netikėtos kalbos atpažinimo problemos su katinu iki pakartojamo R&D proceso, naršyklėje veikiančios inžinerinės Lab ir galiausiai valdomos produkcinės aplikacijos su aiškiomis pasitikėjimo ribomis bei viešo naudojimo apsaugomis.',

        'items' => [
            'Streaming kalbos apdorojimas',
            'Kontroliuojama benchmark metodika',
            'Kritinių elementų išsaugojimas',
            'End-to-end delsos matavimas',
            'Provider ir pipeline palyginimas',
            'Production deployment ir apsaugos',
        ],

        'source' => 'Peržiūrėti source code',
        'live' => 'Atidaryti live demo',
        'back' => '← Grįžti į projektus',
    ],
];
