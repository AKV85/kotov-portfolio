<?php

return [
    'title' => 'Service Desk | Andrej Kotov',

    'hero' => [
        'back' => '← Back to projects',
        'eyebrow' => 'Production Project',
        'name' => 'Service Desk',
        'description' => 'A production-ready service management application built with Laravel, focused on structured ticket workflows, permissions, integrations, automation and maintainable backend architecture.',
        'github' => 'View on GitHub',
        'live' => 'Live application',

        'meta' => [
            'type_label' => 'Type',
            'type' => 'Service management platform',
            'focus_label' => 'Focus',
            'focus' => 'Backend architecture & integrations',
            'status_label' => 'Status',
            'status' => 'Completed',
        ],
    ],

    'project' => [
        'eyebrow' => '01 / The Project',
        'title' => 'The Project',

        'paragraphs' => [
            'Service Desk is a backend-focused support management application designed around a structured ticket lifecycle and clearly separated user responsibilities.',
            'The application supports three main roles: Requester, Agent and Administrator. Each role has its own permissions and responsibilities within the ticket workflow.',
            'Requesters can create and follow their tickets, agents can work with assigned requests and manage their progress, while administrators have broader control over users, assignments and system-level operations.',
            'The project was designed as a realistic production application rather than a simple CRUD system. The main focus was predictable business rules, maintainable backend code, traceable changes, integrations and reliable behaviour when application state changes.',
        ],
    ],

    'core_backend' => [
        'eyebrow' => '02 / Core Backend',
        'title' => 'Core Backend',
        'description' => 'The core of the application is built around explicit ticket workflow rules instead of allowing arbitrary state changes directly from controllers or models.',

        'cards' => [
            [
                'label' => 'Workflow',
                'title' => 'Controlled status transitions',
                'description' => 'Ticket status changes are handled through dedicated workflow logic. Invalid transitions are rejected instead of allowing arbitrary status updates throughout the application.',
            ],
            [
                'label' => 'Authorization',
                'title' => 'Role-based permissions',
                'description' => 'Laravel policies define what Requesters, Agents and Administrators are allowed to do with tickets, comments, attachments and workflow operations.',
            ],
            [
                'label' => 'Application logic',
                'title' => 'Service-oriented design',
                'description' => 'Business operations such as workflow transitions, notifications and external integrations are separated into dedicated services, keeping controllers focused on request handling.',
            ],
            [
                'label' => 'Consistency',
                'title' => 'Database transactions',
                'description' => 'Operations that update multiple parts of the application state are executed inside database transactions so related changes succeed or fail together.',
            ],
            [
                'label' => 'Domain structure',
                'title' => 'Enums and explicit states',
                'description' => 'Ticket statuses and priorities are represented by PHP enums, reducing scattered string values and making domain rules easier to understand and maintain.',
            ],
            [
                'label' => 'Assignment',
                'title' => 'Ticket ownership',
                'description' => 'Tickets can be assigned to agents while preserving the original requester relationship, allowing the application to distinguish clearly between ticket ownership and ticket handling.',
            ],
        ],
    ],

    'audit' => [
        'eyebrow' => '03 / Audit & Notifications',
        'title' => 'Audit & Notifications',
        'description' => 'Important ticket actions are traceable, while notifications are handled outside the main request flow so business operations remain reliable and responsive.',

        'history' => [
            'label' => 'Audit trail',
            'title' => 'Human-readable ticket history',
            'paragraph_1' => 'Ticket changes are recorded in a dedicated history layer, preserving who performed an action, when it happened and what changed.',
            'paragraph_2' => 'Instead of exposing raw database values to users, the application converts stored changes into readable history entries for events such as status changes, assignments and priority updates.',
            'examples_label' => 'Examples',
            'examples' => [
                'Status changed from New to In Progress',
                'Ticket assigned to an agent',
                'Priority updated from Medium to High',
            ],
        ],

        'cards' => [
            [
                'label' => 'Collaboration',
                'title' => 'Comments',
                'description' => 'Users can discuss ticket progress directly inside the application while keeping communication associated with the correct ticket and user.',
            ],
            [
                'label' => 'Files',
                'title' => 'Private attachments',
                'description' => 'Ticket attachments are stored privately and accessed through application authorization rather than being exposed as unrestricted public files.',
            ],
            [
                'label' => 'Notifications',
                'title' => 'Queued delivery',
                'description' => 'Notifications are dispatched through the queue so external delivery does not block the main user request.',
            ],
            [
                'label' => 'Reliability',
                'title' => 'After-commit side effects',
                'description' => 'Side effects that depend on persisted application state are triggered only after the database transaction has committed, preventing notifications from being sent for changes that were later rolled back.',
            ],
        ],
    ],

    'integrations' => [
        'eyebrow' => '04 / Integrations',
        'title' => 'Integrations',
        'description' => 'External systems are integrated through dedicated application services and verified inbound endpoints, keeping provider-specific behaviour separated from the core ticket domain.',

        'cards' => [
            [
                'label' => 'API',
                'title' => 'REST API',
                'description' => 'The application exposes a REST API for working with service desk data outside the Blade interface while reusing the same authorization and business rules as the main application.',
            ],
            [
                'label' => 'Jira',
                'title' => 'Jira integration',
                'description' => 'Service Desk can communicate with Jira through a dedicated integration layer, allowing external issue tracking to be connected without placing Jira-specific logic inside the core ticket workflow.',
            ],
            [
                'label' => 'GitHub',
                'title' => 'GitHub integration',
                'description' => 'GitHub integration allows repository-related events and external development workflows to interact with the application through a provider-specific service instead of coupling them directly to ticket models and controllers.',
            ],
            [
                'label' => 'Webhooks',
                'title' => 'Verified inbound events',
                'description' => 'Incoming webhook requests are verified before their payload is accepted, preventing untrusted requests from being treated as legitimate provider events.',
            ],
            [
                'label' => 'Reliability',
                'title' => 'Idempotent processing',
                'description' => 'Webhook processing is designed to tolerate duplicate deliveries. Repeated provider events can be recognized so the same external event does not create duplicate application changes.',
            ],
            [
                'label' => 'Architecture',
                'title' => 'Provider isolation',
                'description' => 'External providers are kept behind dedicated integration boundaries. This keeps the application domain independent and makes provider-specific behaviour easier to replace, test and extend.',
            ],
        ],
    ],

    'ai' => [
        'eyebrow' => '05 / AI Integration',
        'title' => 'AI Integration',
        'paragraph_1' => 'AI functionality is integrated as an application capability, not embedded directly into ticket controllers or tied permanently to a single external model provider.',
        'paragraph_2' => 'The implementation keeps AI-generated suggestions under user control. Generated output can assist the workflow, but application state is not changed automatically without explicit human action.',

        'cards' => [
            [
                'label' => 'Architecture',
                'title' => 'Provider-neutral design',
                'description' => 'AI functionality is exposed through an application-level abstraction instead of spreading provider SDK calls throughout the codebase. The rest of the application depends on a common interface rather than one specific AI vendor.',
            ],
            [
                'label' => 'Providers',
                'title' => 'OpenAI and Groq',
                'description' => 'The integration supports multiple AI providers, including OpenAI and Groq. Provider selection can change without requiring the ticket domain itself to understand provider-specific APIs.',
            ],
            [
                'label' => 'Workflow',
                'title' => 'Human-in-the-loop',
                'description' => 'AI output is treated as a suggestion rather than an authoritative system decision. Users review generated content before deciding whether it should become part of the actual ticket workflow.',
            ],
            [
                'label' => 'Separation',
                'title' => 'AI outside the core domain',
                'description' => 'Ticket workflow rules remain deterministic and independent from AI availability. If an AI provider is unavailable, the core service desk workflow can continue to operate normally.',
            ],
        ],

        'principle_label' => 'Design principle',
        'principle' => 'AI assists the user. It does not silently become the business logic.',
    ],

    'testing' => [
        'eyebrow' => '06 / Testing & Reliability',
        'title' => 'Testing & Reliability',
        'description' => 'Automated tests protect the application workflow, authorization rules and integrations so changes can be made without relying only on manual verification.',

        'metrics' => [
            'tests_label' => 'Tests',
            'tests' => 'automated tests',
            'assertions_label' => 'Assertions',
            'assertions' => 'assertions',
            'pipeline_label' => 'Pipeline',
            'pipeline' => 'automated validation',
        ],

        'cards' => [
            [
                'label' => 'PHPUnit',
                'title' => 'Feature and unit tests',
                'description' => 'Automated tests verify business behaviour at different levels, including individual domain rules and complete application workflows.',
            ],
            [
                'label' => 'Integrations',
                'title' => 'External behaviour verification',
                'description' => 'Integration-related behaviour is tested without requiring every test to depend on live third-party services, keeping the test suite repeatable and suitable for automated execution.',
            ],
            [
                'label' => 'CI',
                'title' => 'Automated project validation',
                'description' => 'The CI pipeline runs automated checks before changes are accepted, providing an additional safety layer beyond local development and manual review.',
            ],
            [
                'label' => 'Code quality',
                'title' => 'Laravel Pint',
                'description' => 'Laravel Pint is used as part of project validation to keep PHP formatting consistent across the codebase.',
            ],
            [
                'label' => 'Build',
                'title' => 'Production asset validation',
                'description' => 'The frontend production build is verified alongside backend checks so deployment does not depend on development-only asset behaviour.',
            ],
        ],

        'verification_label' => 'Final verification',
        'verification' => '315 tests, 979 assertions, Laravel Pint, production asset build and CI validation completed successfully.',
    ],

    'production' => [
        'eyebrow' => '07 / Production & Deployment',
        'title' => 'Production & Deployment',
        'description' => 'The application is deployed as a real production system with persistent storage, background processing, HTTPS and external email delivery.',

        'cards' => [
            [
                'label' => 'Hosting',
                'title' => 'Railway deployment',
                'description' => 'The application is deployed on Railway with separate application and background worker processes.',
            ],
            [
                'label' => 'Database',
                'title' => 'MySQL',
                'description' => 'Production application data is stored in MySQL, with migrations used to keep database structure consistent between environments.',
            ],
            [
                'label' => 'Background jobs',
                'title' => 'Dedicated queue worker',
                'description' => 'Queued jobs run in a dedicated worker process so notifications and other asynchronous operations are handled independently from web requests.',
            ],
            [
                'label' => 'Storage',
                'title' => 'Persistent private files',
                'description' => 'Private ticket attachments are stored on persistent storage so uploaded files survive application redeployments while remaining protected by application authorization.',
            ],
            [
                'label' => 'Security',
                'title' => 'HTTPS and secure cookies',
                'description' => 'The production environment uses HTTPS with a custom domain and secure cookie configuration appropriate for encrypted browser sessions.',
            ],
            [
                'label' => 'Health',
                'title' => 'Application health endpoint',
                'description' => 'Laravel\'s health endpoint is available for basic deployment and availability checks.',
            ],
            [
                'label' => 'Email',
                'title' => 'Resend delivery',
                'description' => 'Transactional application email is delivered through Resend using the project\'s configured production sender.',
            ],
            [
                'label' => 'Domain',
                'title' => 'desk.kotov.lt',
                'description' => 'The application is available through a dedicated custom subdomain, providing a real public deployment rather than only a local demonstration environment.',
            ],
        ],

        'setup_label' => 'Production setup',
        'setup' => 'Railway, MySQL, dedicated queue worker, persistent private storage, HTTPS, health checks and transactional email delivery.',
    ],

    'stack' => [
        'eyebrow' => '08 / Technology Stack',
        'title' => 'Technology Stack',
        'description' => 'The project combines a conventional Laravel application stack with background processing, external integrations and production-focused tooling.',

        'groups' => [
            'backend' => 'Backend',
            'data' => 'Data',
            'integrations' => 'Integrations',
            'engineering' => 'Engineering',
        ],

        'data_items' => [
            'migrations' => 'Database migrations',
            'storage' => 'Private file storage',
        ],
    ],

    'result' => [
        'eyebrow' => '09 / Result',
        'title' => 'What This Project Demonstrates',

        'paragraph_1' => 'Service Desk demonstrates the ability to design and maintain backend functionality beyond basic CRUD operations, with clear business rules, authorization, asynchronous processing, integrations and production deployment.',
        'paragraph_2' => 'The project also focuses on concerns that become important in real applications: transactional consistency, auditability, duplicate external events, private file access, automated tests and failure isolation between application components.',

        'items' => [
            'Structured business workflows',
            'Role-based authorization',
            'Service-oriented backend architecture',
            'Reliable external integrations',
            'Automated testing and CI',
            'Production deployment and operations',
        ],

        'source' => 'View source code',
        'live' => 'Open live application',
        'back' => '← Back to projects',
    ],
];
