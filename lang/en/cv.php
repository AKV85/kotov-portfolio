<?php

return [
    'title' => 'CV | Andrej Kotov',

    'hero' => [
        'eyebrow' => 'Curriculum Vitae',
        'name' => 'Andrej Kotov',
        'role' => 'PHP / Laravel Backend Developer',
        'summary' => 'Backend developer with professional experience building, maintaining and improving production systems in the logistics industry. Focused on PHP, Laravel, databases, backend integrations and practical problem solving in existing codebases.',
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
                'period' => 'Nov 2023 — Present',
                'description' => 'Development and maintenance of production systems used in the logistics industry.',
                'responsibilities' => [
                    'Developing new backend functionality in existing PHP / Laravel applications.',
                    'Maintaining and improving legacy systems and production code.',
                    'Investigating production incidents and identifying root causes.',
                    'Optimizing SQL queries and database performance in MySQL and Microsoft SQL Server.',
                    'Working with REST API integrations and external services.',
                    'Developing scheduled jobs, automated workflows and email / SMS notifications.',
                    'Creating and maintaining PDF, Excel and Word reports.',
                    'Writing automated tests and validating backend behaviour.',
                    'Using Docker, Laravel Sail, Git, code review and production monitoring tools in day-to-day development.',
                ],
            ],

            [
                'company' => 'AndersenLab',
                'role' => 'PHP / Symfony Developer',
                'location' => null,
                'period' => 'Jun 2023 — Sep 2023',
                'description' => 'Backend development experience in a banking-related project using PHP and Symfony.',
                'responsibilities' => [
                    'Worked with an existing Symfony codebase.',
                    'Implemented and maintained backend functionality.',
                    'Worked with database-driven application logic.',
                    'Used Git-based development workflow and team collaboration practices.',
                ],
            ],

            [
                'company' => 'CodeAcademy',
                'role' => 'PHP / Laravel Developer',
                'location' => null,
                'period' => 'Jan 2023 — Mar 2023',
                'description' => 'Practical PHP / Laravel development with an e-commerce project.',
                'responsibilities' => [
                    'Developed backend functionality using Laravel.',
                    'Worked with Eloquent ORM, validation and relational databases.',
                    'Built application features from requirements to implementation.',
                    'Worked with Git and a structured development workflow.',
                ],
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
                    'Xdebug',
                    'Laravel Pint',
                    'CI',
                ],
            ],

            [
                'title' => 'Engineering',
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
                'title' => 'Integrations & Automation',
                'items' => [
                    'REST integrations',
                    'Email notifications',
                    'SMS notifications',
                    'Scheduled jobs',
                    'Background processing',
                    'PDF / Excel / Word generation',
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
        'paragraphs' => [
            'Before moving into software development, I worked in aluminium boat manufacturing as a welder and later as a production manager.',
            'That experience developed practical problem solving, planning, responsibility, teamwork and communication skills that remain useful in software development today.',
        ],
    ],

    'contact' => [
        'eyebrow' => 'Contact',
        'title' => 'Get in Touch',
        'description' => 'Open to freelance and remote PHP / Laravel backend development opportunities, including existing applications, legacy systems and database-heavy projects.',
        'email' => 'Email',
        'linkedin' => 'LinkedIn',
        'github' => 'GitHub',
    ],
];