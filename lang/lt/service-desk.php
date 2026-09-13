<?php

return [
    'title' => 'Service Desk | Andrej Kotov',

    'seo' => [
        'title' => 'Service Desk projekto analizė | Andrej Kotov',
        'description' => 'Andrej Kotov Service Desk projekto analizė: produkcijai paruošta Laravel aplikacija su užduočių valdymu, integracijomis, AI funkcijomis, automatizuotais testais ir diegimu.',
    ],

    'hero' => [
        'back' => '← Grįžti į projektus',
        'eyebrow' => 'Produkcinis projektas',
        'name' => 'Service Desk',
        'description' => 'Produkcinė paslaugų valdymo sistema, sukurta naudojant Laravel ir orientuota į struktūrizuotą užklausų darbo eigą, teises, integracijas, automatizavimą ir lengvai prižiūrimą backend architektūrą.',
        'github' => 'Peržiūrėti GitHub',
        'live' => 'Atidaryti sistemą',

        'meta' => [
            'type_label' => 'Tipas',
            'type' => 'Paslaugų valdymo sistema',
            'focus_label' => 'Pagrindinis dėmesys',
            'focus' => 'Backend architektūra ir integracijos',
            'status_label' => 'Būsena',
            'status' => 'Baigtas',
        ],
    ],

    'project' => [
        'eyebrow' => '01 / Projektas',
        'title' => 'Projektas',

        'paragraphs' => [
            'Service Desk yra į backend orientuota pagalbos ir užklausų valdymo sistema, sukurta aplink aiškiai apibrėžtą užklausos gyvavimo ciklą ir atskirtas naudotojų atsakomybes.',
            'Sistema palaiko tris pagrindinius vaidmenis: Requester, Agent ir Administrator. Kiekvienas vaidmuo turi savo teises ir atsakomybes užklausų darbo eigoje.',
            'Requester gali kurti ir stebėti savo užklausas, Agent gali dirbti su jam priskirtomis užklausomis ir valdyti jų eigą, o Administrator turi platesnes naudotojų, priskyrimų ir sistemos operacijų valdymo teises.',
            'Projektas buvo kuriamas kaip realistiška produkcinė sistema, o ne paprastas CRUD sprendimas. Pagrindinis dėmesys skirtas prognozuojamoms verslo taisyklėms, lengvai prižiūrimam backend kodui, atsekamiems pakeitimams, integracijoms ir patikimam sistemos elgesiui keičiantis jos būsenai.',
        ],
    ],

    'core_backend' => [
        'eyebrow' => '02 / Pagrindinis backend',
        'title' => 'Pagrindinis backend',
        'description' => 'Sistemos branduolys paremtas aiškiomis užklausų darbo eigos taisyklėmis, neleidžiant savavališkai keisti būsenų tiesiogiai valdikliuose ar modeliuose.',

        'cards' => [
            [
                'label' => 'Darbo eiga',
                'title' => 'Kontroliuojami būsenų perėjimai',
                'description' => 'Užklausų būsenos keičiamos per atskirą darbo eigos logiką. Netinkami perėjimai atmetami, todėl sistemoje negalima savavališkai keisti būsenų.',
            ],
            [
                'label' => 'Autorizacija',
                'title' => 'Teisės pagal vaidmenis',
                'description' => 'Laravel policies apibrėžia, ką Requester, Agent ir Administrator gali atlikti su užklausomis, komentarais, priedais ir darbo eigos operacijomis.',
            ],
            [
                'label' => 'Programos logika',
                'title' => 'Į paslaugas orientuotas dizainas',
                'description' => 'Verslo operacijos, tokios kaip būsenų perėjimai, pranešimai ir išorinės integracijos, išskirtos į atskiras paslaugas, todėl valdikliai lieka orientuoti į užklausų apdorojimą.',
            ],
            [
                'label' => 'Nuoseklumas',
                'title' => 'Duomenų bazės transakcijos',
                'description' => 'Operacijos, kurios keičia kelias sistemos būsenos dalis, vykdomos duomenų bazės transakcijose, kad visi susiję pakeitimai būtų įvykdyti arba atšaukti kartu.',
            ],
            [
                'label' => 'Domeno struktūra',
                'title' => 'Enums ir aiškios būsenos',
                'description' => 'Užklausų būsenos ir prioritetai aprašyti naudojant PHP enums, taip sumažinant išsibarsčiusių tekstinių reikšmių kiekį ir palengvinant domeno taisyklių supratimą bei priežiūrą.',
            ],
            [
                'label' => 'Priskyrimas',
                'title' => 'Užklausos atsakomybė',
                'description' => 'Užklausos gali būti priskiriamos Agent naudotojams išsaugant ryšį su pradiniu Requester, todėl sistema aiškiai atskiria užklausos kūrėją nuo ją vykdančio darbuotojo.',
            ],
        ],
    ],

    'audit' => [
        'eyebrow' => '03 / Auditas ir pranešimai',
        'title' => 'Auditas ir pranešimai',
        'description' => 'Svarbūs veiksmai su užklausomis yra atsekami, o pranešimai apdorojami už pagrindinio HTTP užklausos srauto ribų, kad verslo operacijos išliktų patikimos ir greitos.',

        'history' => [
            'label' => 'Audito istorija',
            'title' => 'Žmogui suprantama užklausos istorija',
            'paragraph_1' => 'Užklausų pakeitimai registruojami atskirame istorijos sluoksnyje, išsaugant informaciją apie tai, kas atliko veiksmą, kada jis buvo atliktas ir kas pasikeitė.',
            'paragraph_2' => 'Vietoje neapdorotų duomenų bazės reikšmių rodymo naudotojui sistema pakeitimus paverčia suprantamais istorijos įrašais, tokiais kaip būsenos pakeitimai, priskyrimai ir prioriteto atnaujinimai.',
            'examples_label' => 'Pavyzdžiai',
            'examples' => [
                'Būsena pakeista iš New į In Progress',
                'Užklausa priskirta Agent naudotojui',
                'Prioritetas pakeistas iš Medium į High',
            ],
        ],

        'cards' => [
            [
                'label' => 'Bendradarbiavimas',
                'title' => 'Komentarai',
                'description' => 'Naudotojai gali aptarti užklausos eigą tiesiogiai sistemoje, išlaikant komunikaciją susietą su konkrečia užklausa ir naudotoju.',
            ],
            [
                'label' => 'Failai',
                'title' => 'Privatūs priedai',
                'description' => 'Užklausų priedai saugomi privačiai ir pasiekiami per programos autorizaciją, o ne pateikiami kaip neribotai viešai prieinami failai.',
            ],
            [
                'label' => 'Pranešimai',
                'title' => 'Pristatymas per eilę',
                'description' => 'Pranešimai siunčiami per queue, todėl išorinis jų pristatymas neblokuoja pagrindinės naudotojo užklausos.',
            ],
            [
                'label' => 'Patikimumas',
                'title' => 'Veiksmai po transakcijos',
                'description' => 'Šalutiniai veiksmai, priklausantys nuo išsaugotos programos būsenos, vykdomi tik sėkmingai užbaigus duomenų bazės transakciją. Tai apsaugo nuo pranešimų išsiuntimo apie pakeitimus, kurie vėliau buvo atšaukti.',
            ],
        ],
    ],

    'integrations' => [
        'eyebrow' => '04 / Integracijos',
        'title' => 'Integracijos',
        'description' => 'Išorinės sistemos integruojamos per atskiras programos paslaugas ir patikrintus įeinančių užklausų endpointus, todėl konkrečių tiekėjų logika lieka atskirta nuo pagrindinio užklausų domeno.',

        'cards' => [
            [
                'label' => 'API',
                'title' => 'REST API',
                'description' => 'Sistema pateikia REST API darbui su Service Desk duomenimis už Blade sąsajos ribų, kartu pakartotinai naudodama tas pačias autorizacijos ir verslo taisykles kaip pagrindinė programa.',
            ],
            [
                'label' => 'Jira',
                'title' => 'Jira integracija',
                'description' => 'Service Desk gali komunikuoti su Jira per atskirą integracijos sluoksnį, todėl išorinė užduočių sistema prijungiama neperkeliant Jira specifinės logikos į pagrindinę užklausų darbo eigą.',
            ],
            [
                'label' => 'GitHub',
                'title' => 'GitHub integracija',
                'description' => 'GitHub integracija leidžia su saugykla susijusiems įvykiams ir išoriniams kūrimo procesams sąveikauti su sistema per atskirą tiekėjo paslaugą, tiesiogiai nesusiejant jų su užklausų modeliais ir valdikliais.',
            ],
            [
                'label' => 'Webhooks',
                'title' => 'Patikrinti įeinantys įvykiai',
                'description' => 'Gaunamos webhook užklausos patikrinamos prieš priimant jų duomenis, todėl nepatikimos užklausos nėra laikomos teisėtais išorinių tiekėjų įvykiais.',
            ],
            [
                'label' => 'Patikimumas',
                'title' => 'Idempotentinis apdorojimas',
                'description' => 'Webhook apdorojimas sukurtas taip, kad toleruotų pasikartojančius pristatymus. Pakartotiniai išorinio tiekėjo įvykiai atpažįstami, todėl tas pats įvykis nesukuria dubliuotų sistemos pakeitimų.',
            ],
            [
                'label' => 'Architektūra',
                'title' => 'Tiekėjų izoliacija',
                'description' => 'Išoriniai tiekėjai atskirti aiškiomis integracijos ribomis. Tai padeda išlaikyti programos domeną nepriklausomą ir palengvina konkretaus tiekėjo logikos keitimą, testavimą bei plėtimą.',
            ],
        ],
    ],

    'ai' => [
        'eyebrow' => '05 / AI integracija',
        'title' => 'AI integracija',
        'paragraph_1' => 'AI funkcionalumas integruotas kaip programos galimybė, o ne tiesiogiai įrašytas į užklausų valdiklius ar nuolat susietas su vienu išoriniu modelių tiekėju.',
        'paragraph_2' => 'Įgyvendinimas palieka AI sugeneruotus pasiūlymus naudotojo kontrolėje. Sugeneruotas turinys gali padėti darbo eigoje, tačiau sistemos būsena nėra keičiama automatiškai be aiškaus žmogaus veiksmo.',

        'cards' => [
            [
                'label' => 'Architektūra',
                'title' => 'Nuo tiekėjo nepriklausomas dizainas',
                'description' => 'AI funkcionalumas pateikiamas per programos lygio abstrakciją, užuot išsklaidžius konkretaus tiekėjo SDK kvietimus po visą kodo bazę. Likusi sistema priklauso nuo bendros sąsajos, o ne nuo vieno konkretaus AI tiekėjo.',
            ],
            [
                'label' => 'Tiekėjai',
                'title' => 'OpenAI ir Groq',
                'description' => 'Integracija palaiko kelis AI tiekėjus, įskaitant OpenAI ir Groq. Tiekėją galima pakeisti nereikalaujant, kad pats užklausų domenas suprastų konkretaus tiekėjo API.',
            ],
            [
                'label' => 'Darbo eiga',
                'title' => 'Human-in-the-loop',
                'description' => 'AI rezultatas laikomas pasiūlymu, o ne autoritetingu sistemos sprendimu. Naudotojai peržiūri sugeneruotą turinį ir patys nusprendžia, ar jis turi tapti realios užklausos darbo eigos dalimi.',
            ],
            [
                'label' => 'Atskyrimas',
                'title' => 'AI už pagrindinio domeno ribų',
                'description' => 'Užklausų darbo eigos taisyklės išlieka deterministinės ir nepriklausomos nuo AI prieinamumo. Jei AI tiekėjas nepasiekiamas, pagrindinė Service Desk sistema gali toliau veikti normaliai.',
            ],
        ],

        'principle_label' => 'Projektavimo principas',
        'principle' => 'AI padeda naudotojui. Jis netampa verslo logika be aiškaus žmogaus sprendimo.',
    ],

    'testing' => [
        'eyebrow' => '06 / Testavimas ir patikimumas',
        'title' => 'Testavimas ir patikimumas',
        'description' => 'Automatiniai testai saugo programos darbo eigą, autorizacijos taisykles ir integracijas, todėl pakeitimus galima atlikti nepasikliaujant vien rankiniu tikrinimu.',

        'metrics' => [
            'tests_label' => 'Testai',
            'tests' => 'automatiniai testai',
            'assertions_label' => 'Patikrinimai',
            'assertions' => 'assertions',
            'pipeline_label' => 'Pipeline',
            'pipeline' => 'automatinis tikrinimas',
        ],

        'cards' => [
            [
                'label' => 'PHPUnit',
                'title' => 'Feature ir unit testai',
                'description' => 'Automatiniai testai tikrina verslo elgseną skirtingais lygiais, įskaitant atskiras domeno taisykles ir pilnas programos darbo eigas.',
            ],
            [
                'label' => 'Integracijos',
                'title' => 'Išorinės elgsenos tikrinimas',
                'description' => 'Su integracijomis susijusi elgsena testuojama nereikalaujant, kad kiekvienas testas priklausytų nuo veikiančių trečiųjų šalių paslaugų. Taip testai išlieka pakartojami ir tinkami automatiniam vykdymui.',
            ],
            [
                'label' => 'CI',
                'title' => 'Automatinis projekto tikrinimas',
                'description' => 'CI pipeline vykdo automatinius patikrinimus prieš priimant pakeitimus, suteikdamas papildomą saugumo sluoksnį šalia lokalaus kūrimo ir rankinės peržiūros.',
            ],
            [
                'label' => 'Kodo kokybė',
                'title' => 'Laravel Pint',
                'description' => 'Laravel Pint naudojamas kaip projekto tikrinimo dalis, kad PHP kodo formatavimas išliktų nuoseklus visoje kodo bazėje.',
            ],
            [
                'label' => 'Build',
                'title' => 'Production assetų tikrinimas',
                'description' => 'Frontend production build tikrinamas kartu su backend patikromis, kad diegimas nepriklausytų nuo tik development aplinkoje veikiančio assetų elgesio.',
            ],
        ],

        'verification_label' => 'Galutinis patikrinimas',
        'verification' => '315 testų, 979 assertions, Laravel Pint, production asset build ir CI patikrinimas sėkmingai užbaigti.',
    ],

    'production' => [
        'eyebrow' => '07 / Production ir diegimas',
        'title' => 'Production ir diegimas',
        'description' => 'Sistema įdiegta kaip reali production sistema su nuolatine failų saugykla, foniniu apdorojimu, HTTPS ir išoriniu el. pašto pristatymu.',

        'cards' => [
            [
                'label' => 'Hostingas',
                'title' => 'Diegimas Railway',
                'description' => 'Sistema įdiegta Railway platformoje naudojant atskirus pagrindinės programos ir foninio worker procesus.',
            ],
            [
                'label' => 'Duomenų bazė',
                'title' => 'MySQL',
                'description' => 'Production sistemos duomenys saugomi MySQL, o migrations naudojamos tam, kad duomenų bazės struktūra išliktų vienoda skirtingose aplinkose.',
            ],
            [
                'label' => 'Foninės užduotys',
                'title' => 'Atskiras queue worker',
                'description' => 'Queue užduotys vykdomos atskirame worker procese, todėl pranešimai ir kitos asinchroninės operacijos apdorojamos nepriklausomai nuo web užklausų.',
            ],
            [
                'label' => 'Saugykla',
                'title' => 'Nuolat saugomi privatūs failai',
                'description' => 'Privatūs užklausų priedai saugomi nuolatinėje saugykloje, todėl įkelti failai išlieka po sistemos redeploy ir kartu lieka apsaugoti programos autorizacijos.',
            ],
            [
                'label' => 'Saugumas',
                'title' => 'HTTPS ir saugūs slapukai',
                'description' => 'Production aplinkoje naudojamas HTTPS su nuosavu domenu ir saugia slapukų konfigūracija, tinkama šifruotoms naršyklės sesijoms.',
            ],
            [
                'label' => 'Būsena',
                'title' => 'Programos health endpoint',
                'description' => 'Laravel health endpoint naudojamas baziniams diegimo ir sistemos pasiekiamumo patikrinimams.',
            ],
            [
                'label' => 'El. paštas',
                'title' => 'Siuntimas per Resend',
                'description' => 'Transakciniai sistemos el. laiškai siunčiami per Resend naudojant sukonfigūruotą production siuntėjo adresą.',
            ],
            [
                'label' => 'Domenas',
                'title' => 'desk.kotov.lt',
                'description' => 'Sistema pasiekiama per atskirą nuosavą subdomeną, todėl tai yra realiai viešai veikianti sistema, o ne tik lokali demonstracinė aplinka.',
            ],
        ],

        'setup_label' => 'Production aplinka',
        'setup' => 'Railway, MySQL, atskiras queue worker, nuolatinė privati failų saugykla, HTTPS, health patikrinimai ir transakcinis el. pašto siuntimas.',
    ],

    'stack' => [
        'eyebrow' => '08 / Technologijų stack',
        'title' => 'Technologijų stack',
        'description' => 'Projektas sujungia įprastą Laravel programos stack su foniniu apdorojimu, išorinėmis integracijomis ir produkcijai skirtais inžineriniais įrankiais.',

        'groups' => [
            'backend' => 'Backend',
            'data' => 'Duomenys',
            'integrations' => 'Integracijos',
            'engineering' => 'Inžinerija',
        ],

        'data_items' => [
            'migrations' => 'Duomenų bazės migracijos',
            'storage' => 'Privati failų saugykla',
        ],
    ],

    'result' => [
        'eyebrow' => '09 / Rezultatas',
        'title' => 'Ką parodo šis projektas',

        'paragraph_1' => 'Service Desk parodo gebėjimą projektuoti ir prižiūrėti backend funkcionalumą, kuris neapsiriboja paprastomis CRUD operacijomis: aiškios verslo taisyklės, autorizacija, asinchroninis apdorojimas, integracijos ir production diegimas.',
        'paragraph_2' => 'Projektas taip pat sprendžia problemas, kurios tampa svarbios realiose sistemose: transakcinį nuoseklumą, auditą, pasikartojančius išorinius įvykius, privačią prieigą prie failų, automatinius testus ir gedimų izoliavimą tarp skirtingų sistemos komponentų.',

        'items' => [
            'Struktūrizuotos verslo darbo eigos',
            'Autorizacija pagal vaidmenis',
            'Į paslaugas orientuota backend architektūra',
            'Patikimos išorinės integracijos',
            'Automatinis testavimas ir CI',
            'Production diegimas ir eksploatavimas',
        ],

        'source' => 'Peržiūrėti source code',
        'live' => 'Atidaryti veikiančią sistemą',
        'back' => '← Grįžti į projektus',
    ],
];
