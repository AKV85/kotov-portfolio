<?php

return [
    'title' => 'Voice Translator | Andrej Kotov',

    'seo' => [
        'title' => 'Voice Translator: разбор проекта | Andrej Kotov',
        'description' => 'Разбор проекта Voice Translator от Andrej Kotov: production RU ↔ EN push-to-talk переводчик речи с контролируемыми speech-бенчмарками, streaming-распознаванием, WebSockets и измеряемой end-to-end задержкой.',
    ],

    'hero' => [
        'back' => '← Назад к проектам',
        'eyebrow' => 'Production-проект',
        'name' => 'Voice Translator',
        'description' => 'Production RU ↔ EN push-to-talk переводчик речи, который вырос из простого speech pipeline в инженерную лабораторию с выбором решений на основе benchmark-данных.',
        'github' => 'Открыть на GitHub',
        'live' => 'Открыть live demo',

        'meta' => [
            'type_label' => 'Тип',
            'type' => 'Приложение для голосового перевода',
            'focus_label' => 'Основной фокус',
            'focus' => 'Speech pipeline, benchmark-тестирование и realtime-доставка',
            'status_label' => 'Статус',
            'status' => 'v1.0.0',
        ],
    ],

    'project' => [
        'eyebrow' => '01 / Проект',
        'title' => 'Проект',

        'paragraphs' => [
            'Изначальная идея была намеренно простой: нажать кнопку, сказать фразу на русском и услышать её на английском. Затем сделать то же самое в обратном направлении.',
            'Когда базовый pipeline speech-to-text → translation → text-to-speech уже заработал, главный вопрос изменился. Нужно было понять не то, можно ли вообще собрать голосовой перевод, а какая технология достаточно точна и быстра для практического общения почти в реальном времени.',
            'Этот вопрос превратил разработку функциональности в R&D-задачу с контролируемыми аудиозаписями, несколькими speech-провайдерами, повторяемыми benchmark-тестами, измерениями в браузере и в итоге production demo.',
        ],
    ],

    'persik' => [
        'eyebrow' => 'Поворотный момент',
        'title' => 'Кот, который запустил R&D-отдел',

        'paragraph_1' => 'Один из самых важных тестов был связан с моим котом Персиком. Русскую фразу «Кот Персик рыжий хулиган» Google распознал как «Код Персик рыжий хулиган». Ошибка была вполне логичной: в русском языке конечные согласные в словах «кот» и «код» без достаточного контекста могут звучать почти одинаково.',
        'paragraph_2' => 'После добавления контекста распознавание стало правильным. Этот небольшой эксперимент изменил направление проекта: вместо вопроса, работает ли speech recognition вообще, я начал выяснять, какая speech-технология действительно достаточно хороша для почти realtime RU ↔ EN общения.',

        'first_label' => 'Первый тест',
        'first_input' => 'Кот Персик рыжий хулиган.',
        'first_output' => 'Код Персик рыжий хулиган.',

        'context_label' => 'С дополнительным контекстом',
        'context_input' => 'У меня есть кот Персик, он рыжий хулиган.',
        'context_result' => 'Распознано правильно',

        'translation_label' => 'Позже в pipeline',
        'translation_input' => 'Персик',
        'translation_output' => 'Peach',

        'conclusion' => 'Персик показал два разных класса ошибок: speech recognition может неверно распознать слово, а даже правильная транскрипция всё равно может быть переведена неправильно. Поэтому проект в итоге начал оценивать весь pipeline, а не доверять одному удачному API-ответу.',
    ],

    'pipeline' => [
        'eyebrow' => '02 / Production Pipeline',
        'title' => 'От речи до переведённого голоса',
        'description' => 'Production-процесс разделён на измеряемые этапы, чтобы распознавание, перевод, синтез речи и доставку результата можно было оценивать отдельно.',

        'steps' => [
            [
                'label' => '01 / Ввод',
                'title' => 'Push-to-talk запись',
                'description' => 'Браузер записывает короткий WebM-аудиофрагмент. Явные кнопки Start и Stop делают модель общения предсказуемой и позволяют сосредоточиться на надёжном переводе, не выдавая систему за готовый full-duplex simultaneous interpreter.',
            ],
            [
                'label' => '02 / Speech-to-text',
                'title' => 'Streaming-распознавание речи',
                'description' => 'Для русского и английского используются разные Google Chirp 3 streaming-профили, выбранные по результатам benchmark-тестов, вместо одной универсальной конфигурации для обоих языков.',
            ],
            [
                'label' => '03 / Перевод',
                'title' => 'Перевод через DeepL',
                'description' => 'Распознанный текст переводится между русским и английским. Этап перевода benchmark-тестировался отдельно, потому что правильная транскрипция ещё не гарантирует правильный смысл.',
            ],
            [
                'label' => '04 / Голосовой результат',
                'title' => 'OpenAI streaming TTS',
                'description' => 'Переведённый текст преобразуется обратно в речь и возвращается в браузер, где реальное начало воспроизведения становится частью измерения задержки, которую ощущает пользователь.',
            ],
        ],

        'production_label' => 'Выбранные production-профили',
        'production' => 'Русский ввод → Chirp 3 Streaming STANDARD → DeepL → OpenAI TTS. Английский ввод → Chirp 3 Streaming SHORT → DeepL → OpenAI TTS.',
    ],

    'lab' => [
        'eyebrow' => '03 / Инженерная лаборатория',
        'title' => 'От CLI-бенчмарков до лаборатории в браузере',
        'description' => 'Benchmark-система начиналась как набор command-line инструментов и выросла в браузерную Live Pipeline Lab, где одну и ту же запись можно прогнать через несколько полных профилей.',

        'cards' => [
            [
                'label' => 'Контролируемый ввод',
                'title' => 'Одна запись, несколько моделей',
                'description' => 'Один и тот же WebM-аудиофайл повторно используется для разных профилей, поэтому сравнение не зависит от того, как человек повторно произнёс ту же самую фразу.',
            ],
            [
                'label' => 'Профили',
                'title' => 'Разные стратегии pipeline',
                'description' => 'Batch Chirp 3, Streaming STANDARD, Streaming SHORT и Deepgram Flux можно сравнивать при одинаковых этапах перевода и TTS.',
            ],
            [
                'label' => 'Измерения',
                'title' => 'Stage и end-to-end timing',
                'description' => 'Lab измеряет STT, перевод, TTS, готовность аудио и фактическое начало playback в браузере, а не сводит весь пользовательский опыт к длительности одного provider request.',
            ],
            [
                'label' => 'Сохранение',
                'title' => 'Результаты запусков сохраняются',
                'description' => 'Транскрипции, переводы, временные метрики, оценки качества и история запусков сохраняются для последующего анализа и сравнения профилей.',
            ],
        ],

        'screenshot_alt' => 'Инженерная лаборатория Voice Translator с завершённым pipeline run, транскрипцией, переводом и временными метриками.',
    ],

    'benchmark' => [
        'eyebrow' => '04 / Benchmarking',
        'title' => 'Измерять смысл, а не только слова',
        'description' => 'В benchmark-тестах использовались контролируемые записи с логистическими фразами, а качество оценивалось по сохранению критически важных элементов. Потерять артикль и превратить 15 в 50, изменить номер грузовика, пункт назначения, температуру или рабочую инструкцию — совсем не одно и то же.',

        'quality_label' => 'Лучшее измеренное качество RU',
        'quality_value' => '93.33%',

        'ru_audio_label' => 'RU STANDARD STOP → audio',
        'ru_audio_value' => '1701 ms',

        'en_audio_label' => 'EN SHORT STOP → audio',
        'en_audio_value' => '1677 ms',

        'table' => [
            'profile' => 'Профиль',
            'ru_quality' => 'Качество RU',
            'en_quality' => 'Качество EN',
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

        'decision_label' => 'Инженерное решение',
        'decision' => 'Для русского оставлен Streaming STANDARD, потому что он сохранил лучшее измеренное качество 93.33% и при этом уменьшил задержку по сравнению с batch-распознаванием. Для английского выбран Streaming SHORT, потому что он сохранил те же 90.63% качества, что и STANDARD, но уменьшил как время распознавания, так и полную задержку STOP-to-audio.',

        'screenshot_alt' => 'Сравнение Voice Translator Lab с результатами качества и задержки нескольких speech recognition профилей.',
    ],

    'demo' => [
        'eyebrow' => '05 / Публичное demo',
        'title' => 'Lab гибкая. Интернет — нет.',
        'description' => 'Публичный интерфейс использует настоящий переводческий pipeline, но намеренно убирает большинство экспериментальных настроек. Доверенную конфигурацию контролирует сервер, а не браузер.',

        'cards' => [
            [
                'label' => 'Сессия',
                'title' => 'Короткоживущий одноразовый token',
                'description' => 'Перед открытием WebSocket pipeline браузер запрашивает короткоживущую demo-сессию. Backend проверяет исходный язык, выбирает настроенный профиль, резервирует квоту и выдаёт одноразовый token.',
            ],
            [
                'label' => 'Ограничения',
                'title' => 'Публичные записи до 15 секунд',
                'description' => 'Сервер ограничивает длительность записи и размер аудио, а также применяет visitor, IP и global quotas, чтобы demo не превратилось в бесплатный безлимитный speech API proxy.',
            ],
            [
                'label' => 'Граница доверия',
                'title' => 'Pipeline выбирается сервером',
                'description' => 'Публичный клиент не может произвольно выбирать provider, экспериментальный профиль или доверенную source-конфигурацию. Эти решения остаются на стороне сервера.',
            ],
            [
                'label' => 'Управление',
                'title' => 'Kill switch и закрытая Lab',
                'description' => 'Публичное demo можно полностью отключить отдельно, а экспериментальная Live Lab остаётся независимо защищённой от публичного production-доступа.',
            ],
        ],

        'desktop_alt' => 'Desktop-интерфейс Voice Translator с русскими и английскими push-to-talk элементами управления.',
        'mobile_alt' => 'Мобильный интерфейс Voice Translator.',
    ],

    'production' => [
        'eyebrow' => '06 / Production и deployment',
        'title' => 'Production — это уже другой вид животного',
        'description' => 'Когда pipeline и Lab стабильно заработали локально, проект был развёрнут как отдельные production-сервисы, а не оставлен коллекцией впечатляющих терминальных окон.',

        'cards' => [
            [
                'label' => 'Хостинг',
                'title' => 'Deployment на Railway',
                'description' => 'Production-система работает на Railway с отдельными сервисами для Laravel web-приложения, WebSocket pipeline server и MySQL.',
            ],
            [
                'label' => 'Realtime',
                'title' => 'Отдельный WebSocket pipeline',
                'description' => 'WebSocket-сервис обрабатывает live audio независимо от обычных web-запросов и создания публичных demo-сессий.',
            ],
            [
                'label' => 'Runtime',
                'title' => 'PHP-контейнер для speech stack',
                'description' => 'Production runtime на PHP 8.4 содержит расширения, необходимые speech stack, включая gRPC, protobuf, intl, pcntl и поддержку MySQL.',
            ],
            [
                'label' => 'Credentials',
                'title' => 'Секреты, пригодные для cloud deployment',
                'description' => 'Provider secrets хранятся в environment-конфигурации. Google service-account credentials в production передаются как JSON, без зависимости от локально примонтированного файла.',
            ],
            [
                'label' => 'Домен',
                'title' => 'voice.kotov.lt',
                'description' => 'Публичное RU ↔ EN demo доступно через отдельный HTTPS production-поддомен.',
            ],
            [
                'label' => 'Качество',
                'title' => 'Автоматизированная проверка проекта',
                'description' => 'Перед release проект проверяется тестами, PHPStan, Laravel Pint и production frontend build.',
            ],
        ],

        'setup_label' => 'Production setup',
        'setup' => 'Laravel, Railway, MySQL, отдельный WebSocket-сервис, Google Speech-to-Text, DeepL, OpenAI TTS, HTTPS и собственный домен.',
    ],

    'limitations' => [
        'eyebrow' => '07 / Текущие ограничения',
        'title' => 'Что v1.0.0 не притворяется уже решившей',
        'description' => 'Проект явно показывает свои текущие границы и не выдаёт production push-to-talk demo за законченную систему simultaneous interpretation.',

        'items' => [
            'Общение работает по принципу push-to-talk, а не как full-duplex simultaneous translation.',
            'Текущее публичное demo ориентировано на RU ↔ EN; литовский остаётся следующим возможным языковым расширением.',
            'Качество и задержка по-прежнему зависят от сети и внешних cloud providers.',
            'Передача переведённой речи напрямую между двумя отдельными компьютерами или в conferencing software остаётся будущим этапом за пределами текущего portfolio demo.',
        ],
    ],

    'stack' => [
        'eyebrow' => '08 / Technology Stack',
        'title' => 'Технологический стек',
        'description' => 'Проект объединяет Laravel-приложение, запись аудио в браузере, realtime-коммуникацию, сохраняемые benchmark-данные и специализированные speech и language providers.',

        'groups' => [
            'application' => 'Приложение',
            'speech' => 'Речь и перевод',
            'data' => 'Данные и realtime',
            'engineering' => 'Инженерия',
        ],
    ],

    'result' => [
        'eyebrow' => '09 / Результат',
        'title' => 'Что демонстрирует этот проект',

        'paragraph_1' => 'Voice Translator демонстрирует больше, чем соединение нескольких AI API. В проекте используются контролируемые записи, оценка сохранения критически важных элементов и end-to-end измерения, чтобы понять, как разные pipeline-решения влияют и на точность, и на задержку, которую реально ощущает пользователь.',
        'paragraph_2' => 'Проект также показывает путь от случайной проблемы распознавания речи с котом до повторяемого R&D-процесса, инженерной Lab в браузере и в итоге контролируемого production-приложения с явными границами доверия и защитой публичного доступа.',

        'items' => [
            'Streaming-обработка речи',
            'Контролируемая benchmark-методика',
            'Сохранение критически важных элементов',
            'End-to-end измерение задержки',
            'Сравнение providers и pipeline',
            'Production deployment и защитные ограничения',
        ],

        'source' => 'Открыть исходный код',
        'live' => 'Открыть live demo',
        'back' => '← Назад к проектам',
    ],
];
