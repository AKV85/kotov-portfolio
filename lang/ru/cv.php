<?php

return [
    'title' => 'CV | Andrej Kotov',

    'seo' => [
        'title' => 'Резюме | Andrej Kotov | PHP / Laravel Backend-разработчик',
        'description' => 'Резюме Andrej Kotov, PHP / Laravel backend-разработчика с опытом работы с production-системами, legacy-приложениями, MySQL, Microsoft SQL Server и backend-интеграциями.',
    ],

    'hero' => [
        'eyebrow' => 'Резюме',
        'name' => 'Andrej Kotov',
        'role' => 'PHP / Laravel Backend-разработчик',
        'summary' => 'Backend-разработчик с профессиональным опытом разработки, поддержки и улучшения production-систем в логистике. Основные направления: PHP, Laravel, базы данных, backend-интеграции и практическое решение проблем в существующих кодовых базах.',
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
                'period' => 'Ноябрь 2023 — настоящее время',
                'description' => 'Разработка и поддержка production-систем, используемых в логистической отрасли.',
                'responsibilities' => [
                    'Разработка новой backend-функциональности в существующих PHP / Laravel приложениях.',
                    'Поддержка и улучшение legacy-систем и production-кода.',
                    'Расследование production-инцидентов и поиск первопричин проблем.',
                    'Оптимизация SQL-запросов и производительности баз данных MySQL и Microsoft SQL Server.',
                    'Работа с REST API интеграциями и внешними сервисами.',
                    'Разработка плановых заданий, автоматизированных процессов и email / SMS уведомлений.',
                    'Создание и поддержка отчётов в PDF, Excel и Word.',
                    'Написание автоматических тестов и проверка поведения backend-систем.',
                    'Ежедневная работа с Docker, Laravel Sail, Git, code review и инструментами мониторинга production-систем.',
                ],
            ],

            [
                'company' => 'AndersenLab',
                'role' => 'PHP / Symfony разработчик',
                'location' => null,
                'period' => 'Июнь 2023 — сентябрь 2023',
                'description' => 'Опыт backend-разработки в банковском проекте с использованием PHP и Symfony.',
                'responsibilities' => [
                    'Работа с существующей кодовой базой Symfony.',
                    'Разработка и поддержка backend-функциональности.',
                    'Работа с логикой приложения, основанной на данных из базы.',
                    'Использование Git workflow и командных практик разработки.',
                ],
            ],

            [
                'company' => 'CodeAcademy',
                'role' => 'PHP / Laravel разработчик',
                'location' => null,
                'period' => 'Январь 2023 — март 2023',
                'description' => 'Практическая разработка на PHP / Laravel в рамках e-commerce проекта.',
                'responsibilities' => [
                    'Разработка backend-функциональности на Laravel.',
                    'Работа с Eloquent ORM, валидацией и реляционными базами данных.',
                    'Реализация функциональности приложения от требований до готового решения.',
                    'Работа с Git и структурированным процессом разработки.',
                ],
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
                    'Xdebug',
                    'Laravel Pint',
                    'CI',
                ],
            ],

            [
                'title' => 'Инженерные инструменты',
                'items' => [
                    'Docker',
                    'Laravel Sail',
                    'Git',
                    'Gitea',
                    'GitLab',
                    'GitHub',
                    'Linux',
                    'Sentry',
                ],
            ],

            [
                'title' => 'Интеграции и автоматизация',
                'items' => [
                    'REST-интеграции',
                    'Email-уведомления',
                    'SMS-уведомления',
                    'Плановые задания',
                    'Фоновая обработка',
                    'Генерация PDF / Excel / Word',
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
        'description' => 'Открыт к freelance и удалённой работе в PHP / Laravel backend-разработке, включая существующие приложения, legacy-системы и проекты с интенсивной работой с базами данных.',
        'email' => 'Email',
        'linkedin' => 'LinkedIn',
        'github' => 'GitHub',
    ],
];
