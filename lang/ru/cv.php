<?php

return [
    'title' => 'CV | Andrej Kotov',

    'seo' => [
        'title' => 'Резюме | Andrej Kotov | PHP / Laravel Backend-разработчик',
        'description' => 'Резюме Andrej Kotov, PHP / Laravel backend-разработчика с опытом работы с логистическими системами, оптимизацией баз данных, интеграциями, автоматическим тестированием, WebSocket и production-приложениями.',
    ],

    'hero' => [
        'eyebrow' => 'Резюме',
        'name' => 'Andrej Kotov',
        'role' => 'PHP / Laravel Backend-разработчик',
        'summary' => 'Backend-разработчик с профессиональным опытом работы с логистическими системами, современными Laravel-приложениями и legacy PHP-кодом. Разрабатываю и анализирую процессы, связанные с базами данных, интеграциями, фоновыми задачами и операционными инструментами, уделяя особое внимание надёжному поведению системы, измеримым результатам и поддерживаемым изменениям в существующих проектах.',
        'github' => 'GitHub',
        'linkedin' => 'LinkedIn',
        'email' => 'Email',
    ],

    'experience' => [
        'eyebrow' => 'Профессиональный опыт',
        'title' => 'Опыт',

        'items' => [
            [
                'company' => 'UAB Vlantana',
                'role' => 'PHP / Laravel Backend-разработчик',
                'location' => 'Клайпеда, Литва',
                'period' => 'Ноябрь 2023 - настоящее время',
                'description' => 'Backend-разработка и production-поддержка логистических систем, объединяющих современные Laravel-приложения, legacy PHP-код и операционные процессы с интенсивной работой с данными.',
                'responsibilities' => [
                    'Разрабатываю и поддерживаю backend-функциональность Laravel и legacy PHP-приложений, используемых в ежедневных логистических операциях.',
                    'Расследую production-инциденты, отслеживаю ошибки в логике приложения, автоматических заданиях, интеграциях и базах данных и устраняю их первопричины.',
                    'Оптимизирую запросы MySQL и Microsoft SQL Server с использованием индексов, EXPLAIN, анализа планов выполнения и рефакторинга запросов.',
                    'Разрабатываю REST-интеграции, плановые и фоновые процессы, Redis-based workflows и email / SMS уведомления.',
                    'Поддерживаю процессы отчётности, экспорта данных и генерации документов для операционных пользователей.',
                    'Пишу автоматические тесты и ежедневно работаю с Docker, Laravel Sail, Git, code review, Sentry и инструментами мониторинга production-систем.',
                ],
            ],

            [
                'company' => 'AndersenLab',
                'role' => 'PHP / Symfony разработчик',
                'location' => null,
                'period' => 'Июнь 2023 - сентябрь 2023',
                'description' => 'Опыт backend-разработки в банковском проекте с использованием PHP и Symfony.',
                'responsibilities' => [
                    'Работал с существующей кодовой базой Symfony и логикой приложения, основанной на данных.',
                    'Разрабатывал и поддерживал backend-функциональность.',
                    'Использовал Git-based workflow и командные практики разработки.',
                ],
            ],

            [
                'company' => 'CodeAcademy',
                'role' => 'PHP / Laravel разработчик',
                'location' => null,
                'period' => 'Январь 2023 - март 2023',
                'description' => 'Практическая PHP / Laravel разработка в рамках e-commerce проекта.',
                'responsibilities' => [
                    'Разрабатывал backend-функциональность с использованием Laravel, Eloquent ORM и валидации.',
                    'Работал с реляционными базами данных и бизнес-логикой приложения.',
                    'Реализовывал функциональность от требований до готового решения с использованием Git.',
                ],
            ],
        ],
    ],

    'projects' => [
        'eyebrow' => 'Избранные работы',
        'title' => 'Избранные проекты',

        'items' => [
            'service_desk' => [
                'name' => 'Service Desk',
                'status' => 'Production-ready',
                'description' => 'Полноценное Laravel Service Desk приложение, подготовленное к production и созданное как комплексный backend-ориентированный portfolio-проект.',
                'highlights' => [
                    'Workflow заявок, RBAC и Policies, история аудита, queued notifications и REST API аутентификация.',
                    'Интеграции с Jira и GitHub и процессы на основе webhooks.',
                    'Независимая от AI-провайдера архитектура с human-in-the-loop контролем, автоматическими тестами, CI и production deployment.',
                ],
                'case_study' => 'Описание проекта',
                'github' => 'GitHub',
                'live' => 'Приложение',
            ],

            'voice_translator' => [
                'name' => 'Voice Translator',
                'status' => 'v1.0.0',
                'description' => 'Production RU ↔ EN push-to-talk голосовой переводчик, который вырос в инженерный проект по работе с речью и сравнительному тестированию.',
                'highlights' => [
                    'Realtime WebSocket pipeline с Google Speech-to-Text, переводом DeepL и OpenAI streaming TTS.',
                    'Контролируемая benchmark-методика для сравнения speech-профилей на одних и тех же записях с оценкой сохранения критически важных элементов.',
                    'Browser-based Engineering Lab, измерение end-to-end latency, защита публичного demo и deployment на Railway.',
                ],
                'case_study' => 'Описание проекта',
                'github' => 'GitHub',
                'live' => 'Live demo',
            ],
        ],
    ],

    'skills' => [
        'eyebrow' => 'Технические навыки',
        'title' => 'Технологии',

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
                'title' => 'Базы данных и данные',
                'items' => [
                    'MySQL',
                    'Microsoft SQL Server',
                    'Redis',
                    'Оптимизация SQL',
                    'Индексы',
                    'EXPLAIN',
                    'Миграции баз данных',
                ],
            ],

            [
                'title' => 'Тестирование и качество',
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
                'title' => 'Инфраструктура и deployment',
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
                'title' => 'Интеграции и автоматизация',
                'items' => [
                    'REST-интеграции',
                    'Webhooks',
                    'Queues и фоновые задачи',
                    'Плановые задания',
                    'Email / SMS уведомления',
                    'Генерация PDF / Excel / Word',
                ],
            ],

            [
                'title' => 'Realtime и AI',
                'items' => [
                    'WebSockets',
                    'Google Speech-to-Text',
                    'DeepL',
                    'OpenAI API',
                    'Streaming TTS',
                    'AI / speech integrations',
                ],
            ],
        ],
    ],

    'education' => [
        'eyebrow' => 'Образование и обучение',
        'title' => 'Обучение',

        'items' => [
            [
                'name' => 'CodeAcademy',
                'program' => 'PHP программирование',
                'details' => '600-часовая профессиональная программа обучения, ориентированная на PHP и веб-разработку.',
            ],
            [
                'name' => 'Профессиональное развитие',
                'program' => 'Backend-разработка и production-системы',
                'details' => 'Непрерывное практическое обучение в ходе работы с Laravel, SQL, интеграциями, тестированием и поддержкой production-систем.',
            ],
        ],
    ],

    'languages' => [
        'eyebrow' => 'Языки',
        'title' => 'Языки',

        'items' => [
            [
                'language' => 'Русский',
                'level' => 'Свободно',
            ],
            [
                'language' => 'Литовский',
                'level' => 'Свободно',
            ],
            [
                'language' => 'Английский',
                'level' => 'Средний',
            ],
            [
                'language' => 'Немецкий',
                'level' => 'Базовый',
            ],
        ],
    ],

    'earlier_experience' => [
        'eyebrow' => 'Предыдущий опыт',
        'title' => 'До разработки ПО',
        'meta_description' => 'Резюме Andrej Kotov, PHP / Laravel Backend-разработчика с профессиональным опытом в логистических системах, базах данных, интеграциях и поддержке production-систем.',
        'paragraphs' => [
            'До перехода в разработку программного обеспечения я работал в производстве алюминиевых катеров сварщиком, а позднее руководителем производства.',
            'Этот опыт развил навыки практического решения проблем, планирования, ответственности, командной работы и коммуникации, которые остаются полезными и в разработке программного обеспечения.',
        ],
    ],

    'contact' => [
        'eyebrow' => 'Контакты',
        'title' => 'Связаться со мной',
        'description' => 'Открыт к PHP / Laravel backend-возможностям, связанным с production-системами, существующими приложениями, интеграциями, модернизацией legacy-систем и процессами с интенсивной работой с базами данных.',
        'email' => 'Email',
        'linkedin' => 'LinkedIn',
        'github' => 'GitHub',
    ],
];
