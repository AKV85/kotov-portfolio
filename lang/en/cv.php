<?php

return [
    'title' => 'CV | Andrej Kotov',

    'seo' => [
        'title' => 'CV | Andrej Kotov | PHP / Laravel Backend Developer',
        'description' => 'CV of Andrej Kotov, a PHP / Laravel backend developer with production experience in logistics systems, database optimization, integrations, automated testing, WebSockets and cloud-deployed applications.',
    ],

    'hero' => [
        'eyebrow' => 'Curriculum Vitae',
        'name' => 'Andrej Kotov',
        'role' => 'PHP / Laravel Backend Developer',
        'summary' => 'Backend developer with production experience in logistics systems, working across modern Laravel applications and legacy PHP codebases. I build and troubleshoot database-heavy workflows, integrations, background processes and operational tooling, with a focus on reliable behaviour, measurable results and maintainable changes in existing systems.',
        'github' => 'GitHub',
        'linkedin' => 'LinkedIn',
        'email' => 'Email',
    ],

    'experience' => [
        'eyebrow' => 'Professional Experience',
        'title' => 'Experience',

        'items' => [
            [
                'company' => 'UAB Vlantana',
                'role' => 'PHP / Laravel Backend Developer',
                'location' => 'Klaipėda, Lithuania',
                'period' => 'Nov 2023 - Present',
                'description' => 'Backend development and production support for logistics systems combining modern Laravel applications, legacy PHP code and data-heavy operational workflows.',
                'responsibilities' => [
                    'Build and maintain backend functionality across Laravel and legacy PHP applications supporting day-to-day logistics operations.',
                    'Investigate production incidents, trace failures across application logic, scheduled jobs, integrations and databases, and deliver root-cause fixes.',
                    'Optimize MySQL and Microsoft SQL Server queries using indexes, EXPLAIN, execution-plan analysis and query refactoring.',
                    'Implement REST integrations, scheduled and background processing, Redis-backed workflows and email / SMS notifications.',
                    'Maintain reporting, export and document-generation workflows for operational users.',
                    'Write automated tests and work with Docker, Laravel Sail, Git, code review, Sentry and production monitoring tools.',
                ],
            ],

            [
                'company' => 'AndersenLab',
                'role' => 'PHP / Symfony Developer',
                'location' => null,
                'period' => 'Jun 2023 - Sep 2023',
                'description' => 'Backend development experience in a banking-related project using PHP and Symfony.',
                'responsibilities' => [
                    'Worked with an existing Symfony codebase and database-driven application logic.',
                    'Implemented and maintained backend functionality.',
                    'Used Git-based development workflows and team collaboration practices.',
                ],
            ],

            [
                'company' => 'CodeAcademy',
                'role' => 'PHP / Laravel Developer',
                'location' => null,
                'period' => 'Jan 2023 - Mar 2023',
                'description' => 'Practical PHP / Laravel development through an e-commerce project.',
                'responsibilities' => [
                    'Built backend functionality using Laravel, Eloquent ORM and validation.',
                    'Worked with relational databases and application business logic.',
                    'Developed features from requirements through implementation using Git.',
                ],
            ],
        ],
    ],

    'projects' => [
        'eyebrow' => 'Selected Work',
        'title' => 'Selected Projects',

        'items' => [
            'service_desk' => [
                'name' => 'Service Desk',
                'status' => 'Production-ready',
                'description' => 'A production-ready Laravel service desk application built as a complete backend-focused portfolio project.',
                'highlights' => [
                    'Ticket workflow, RBAC and Policies, audit history, queued notifications and REST API authentication.',
                    'Jira and GitHub integrations with webhook-driven workflows.',
                    'Provider-neutral AI assistance with human-in-the-loop controls, automated tests, CI and production deployment.',
                ],
                'case_study' => 'Case study',
                'github' => 'GitHub',
                'live' => 'Live app',
            ],

            'voice_translator' => [
                'name' => 'Voice Translator',
                'status' => 'v1.0.0',
                'description' => 'A production RU ↔ EN push-to-talk voice translator that evolved into a benchmark-driven speech engineering project.',
                'highlights' => [
                    'Realtime WebSocket pipeline using Google Speech-to-Text, DeepL translation and OpenAI streaming TTS.',
                    'Controlled benchmark methodology comparing speech profiles using the same recordings and critical-element preservation.',
                    'Browser-based Engineering Lab, measured end-to-end latency, public demo safeguards and Railway deployment.',
                ],
                'case_study' => 'Case study',
                'github' => 'GitHub',
                'live' => 'Live demo',
            ],
        ],
    ],

    'skills' => [
        'eyebrow' => 'Technical Skills',
        'title' => 'Technology Stack',

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
                'title' => 'Databases & Data',
                'items' => [
                    'MySQL',
                    'Microsoft SQL Server',
                    'Redis',
                    'SQL optimization',
                    'Indexes',
                    'EXPLAIN',
                    'Database migrations',
                ],
            ],

            [
                'title' => 'Testing & Quality',
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
                'title' => 'Infrastructure & Delivery',
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
                'title' => 'Integrations & Automation',
                'items' => [
                    'REST integrations',
                    'Webhooks',
                    'Queues & background jobs',
                    'Scheduled jobs',
                    'Email / SMS notifications',
                    'PDF / Excel / Word generation',
                ],
            ],

            [
                'title' => 'Realtime & AI',
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
        'eyebrow' => 'Education & Training',
        'title' => 'Education',

        'items' => [
            [
                'name' => 'CodeAcademy',
                'program' => 'PHP Programming',
                'details' => '600-hour professional training program focused on PHP and web development.',
            ],
            [
                'name' => 'Professional development',
                'program' => 'Backend development and production systems',
                'details' => 'Continuous practical learning through production work with Laravel, SQL, integrations, testing and system maintenance.',
            ],
        ],
    ],

    'languages' => [
        'eyebrow' => 'Languages',
        'title' => 'Languages',

        'items' => [
            [
                'language' => 'Russian',
                'level' => 'Fluent',
            ],
            [
                'language' => 'Lithuanian',
                'level' => 'Fluent',
            ],
            [
                'language' => 'English',
                'level' => 'Intermediate',
            ],
            [
                'language' => 'German',
                'level' => 'Basic',
            ],
        ],
    ],

    'earlier_experience' => [
        'eyebrow' => 'Earlier Experience',
        'title' => 'Before Software Development',
        'meta_description' => 'CV of Andrej Kotov, PHP / Laravel Backend Developer with professional experience in logistics systems, databases, integrations and production support.',
        'paragraphs' => [
            'Before moving into software development, I worked in aluminium boat manufacturing as a welder and later as a production manager.',
            'That experience developed practical problem solving, planning, responsibility, teamwork and communication skills that remain useful in software development today.',
        ],
    ],

    'contact' => [
        'eyebrow' => 'Contact',
        'title' => 'Get in Touch',
        'description' => 'Open to PHP / Laravel backend opportunities involving production systems, existing applications, integrations, legacy modernization and database-heavy workflows.',
        'email' => 'Email',
        'linkedin' => 'LinkedIn',
        'github' => 'GitHub',
    ],
];
