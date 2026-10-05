<?php

return [
    'title' => 'Voice Translator | Andrej Kotov',

    'seo' => [
        'title' => 'Voice Translator Case Study | Andrej Kotov',
        'description' => 'Voice Translator case study by Andrej Kotov: a production RU ↔ EN push-to-talk voice translation application built through controlled speech benchmarking, streaming recognition, WebSockets and measurable end-to-end latency.',
    ],

    'hero' => [
        'back' => '← Back to projects',
        'eyebrow' => 'Production Project',
        'name' => 'Voice Translator',
        'description' => 'A production RU ↔ EN push-to-talk voice translator that grew from a simple speech pipeline into a benchmark-driven engineering laboratory.',
        'github' => 'View on GitHub',
        'live' => 'Open live demo',

        'meta' => [
            'type_label' => 'Type',
            'type' => 'Voice translation application',
            'focus_label' => 'Focus',
            'focus' => 'Speech pipelines, benchmarking & realtime delivery',
            'status_label' => 'Status',
            'status' => 'v1.0.0',
        ],
    ],

    'project' => [
        'eyebrow' => '01 / The Project',
        'title' => 'The Project',

        'paragraphs' => [
            'The original idea was deliberately simple: press a button, speak Russian, and hear English speech back. Then do the same in the opposite direction.',
            'Once the basic speech-to-text → translation → text-to-speech pipeline worked, the difficult question changed. It was no longer whether voice translation could be connected, but which technology was accurate and fast enough for practical near real-time conversation.',
            'That question turned the project from feature development into an R&D exercise involving controlled recordings, multiple speech providers, repeatable benchmarks, browser-side timing and finally a production demo.',
        ],
    ],

    'persik' => [
        'eyebrow' => 'Turning Point',
        'title' => 'The Cat That Started the R&D Department',

        'paragraph_1' => 'One of the most important tests involved my cat, Persik. Google recognized the Russian phrase “Кот Персик рыжий хулиган” as “Код Персик рыжий хулиган”. The mistake was plausible: in Russian, the final consonants in “кот” and “код” can sound almost identical without enough context.',
        'paragraph_2' => 'Adding context fixed the recognition. That tiny experiment changed the direction of the project: instead of asking whether speech recognition worked, I started asking which speech technology was actually good enough for near real-time Russian-English communication.',

        'first_label' => 'First test',
        'first_input' => 'Кот Персик рыжий хулиган.',
        'first_output' => 'Код Персик рыжий хулиган.',

        'context_label' => 'With more context',
        'context_input' => 'У меня есть кот Персик, он рыжий хулиган.',
        'context_result' => 'Recognized correctly',

        'translation_label' => 'Later in the pipeline',
        'translation_input' => 'Персик',
        'translation_output' => 'Peach',

        'conclusion' => 'Persik exposed two different failure modes: speech recognition could misunderstand a word, and even a correct transcript could still be translated incorrectly. That is why the project eventually benchmarked the complete pipeline instead of trusting one successful API call.',
    ],

    'pipeline' => [
        'eyebrow' => '02 / Production Pipeline',
        'title' => 'From Speech to Translated Voice',
        'description' => 'The production workflow is divided into measurable stages so recognition, translation, synthesis and delivery can be evaluated independently.',

        'steps' => [
            [
                'label' => '01 / Input',
                'title' => 'Push-to-talk recording',
                'description' => 'The browser records a short WebM audio sample. Explicit Start and Stop controls keep the conversation model predictable while the project focuses on reliable translation rather than pretending to provide full-duplex simultaneous interpretation.',
            ],
            [
                'label' => '02 / Speech-to-text',
                'title' => 'Streaming speech recognition',
                'description' => 'Language-specific Google Chirp 3 streaming profiles were selected from benchmark results instead of forcing Russian and English through one universal configuration.',
            ],
            [
                'label' => '03 / Translation',
                'title' => 'DeepL translation',
                'description' => 'Recognized text is translated between Russian and English. Translation was benchmarked separately because a correct transcript can still produce an incorrect meaning.',
            ],
            [
                'label' => '04 / Voice output',
                'title' => 'OpenAI streaming TTS',
                'description' => 'Translated text is converted into audio and returned to the browser, where playback timing becomes part of the user-facing latency measurement.',
            ],
        ],

        'production_label' => 'Selected production profiles',
        'production' => 'Russian input → Chirp 3 Streaming STANDARD → DeepL → OpenAI TTS. English input → Chirp 3 Streaming SHORT → DeepL → OpenAI TTS.',
    ],

    'lab' => [
        'eyebrow' => '03 / Engineering Lab',
        'title' => 'From CLI Benchmarks to a Browser Lab',
        'description' => 'The benchmark began as command-line tooling and evolved into a browser-based Live Pipeline Lab where the same recording can be replayed through different complete profiles.',

        'cards' => [
            [
                'label' => 'Controlled input',
                'title' => 'One recording, many models',
                'description' => 'The same captured WebM audio can be reused across profiles, avoiding the false comparison created when a person simply tries to repeat the same sentence several times.',
            ],
            [
                'label' => 'Profiles',
                'title' => 'Different pipeline strategies',
                'description' => 'Batch Chirp 3, Streaming STANDARD, Streaming SHORT and Deepgram Flux can be compared using the same surrounding translation and TTS stages.',
            ],
            [
                'label' => 'Measurements',
                'title' => 'Stage and end-to-end timing',
                'description' => 'The Lab records STT, translation, TTS, audio-ready and browser playback timing instead of reducing the entire experience to one provider request.',
            ],
            [
                'label' => 'Persistence',
                'title' => 'Runs survive the request',
                'description' => 'Transcripts, translations, timing data, quality labels and historical runs are stored for later review and profile comparison.',
            ],
        ],

        'screenshot_alt' => 'Voice Translator engineering Lab showing a completed pipeline run with transcription, translation and timing metrics.',
    ],

    'benchmark' => [
        'eyebrow' => '04 / Benchmarking',
        'title' => 'Measure Meaning, Not Just Words',
        'description' => 'The benchmark used controlled recordings with logistics-oriented phrases and evaluated critical-element preservation. Losing an article is not equivalent to changing 15 into 50, a truck identifier, destination, temperature or operational instruction.',

        'quality_label' => 'Best measured RU quality',
        'quality_value' => '93.33%',

        'ru_audio_label' => 'RU STANDARD STOP → audio',
        'ru_audio_value' => '1701 ms',

        'en_audio_label' => 'EN SHORT STOP → audio',
        'en_audio_value' => '1677 ms',

        'table' => [
            'profile' => 'Profile',
            'ru_quality' => 'RU quality',
            'en_quality' => 'EN quality',
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

        'decision_label' => 'Engineering decision',
        'decision' => 'Russian keeps Streaming STANDARD because it preserves the strongest measured 93.33% quality while improving latency over batch recognition. English uses Streaming SHORT because it retained the same measured 90.63% quality as STANDARD while reducing both recognition and complete STOP-to-audio latency.',

        'screenshot_alt' => 'Voice Translator Lab comparison showing quality and latency results for multiple speech recognition profiles.',
    ],

    'demo' => [
        'eyebrow' => '05 / Public Demo',
        'title' => 'The Lab Is Flexible. The Internet Is Not.',
        'description' => 'The public interface exposes the real translation workflow while deliberately removing most experimental choices. The server, not the browser, owns trusted pipeline configuration.',

        'cards' => [
            [
                'label' => 'Session',
                'title' => 'Short-lived one-time token',
                'description' => 'Before opening the WebSocket pipeline, the browser requests a short-lived demo session. The backend validates the source language, selects the configured profile, reserves quota and issues a one-time token.',
            ],
            [
                'label' => 'Limits',
                'title' => '15-second public recordings',
                'description' => 'The server limits recording duration and audio size and applies visitor, IP and global quotas so the demo does not become an unlimited speech API proxy.',
            ],
            [
                'label' => 'Trust boundary',
                'title' => 'Server-selected pipeline',
                'description' => 'Public clients cannot choose arbitrary providers, experimental profiles or trusted source configuration. Those decisions remain server-side.',
            ],
            [
                'label' => 'Operations',
                'title' => 'Kill switch and private Lab',
                'description' => 'The public demo can be disabled independently, while the experimental Live Lab remains separately protected from public production access.',
            ],
        ],

        'desktop_alt' => 'Voice Translator public desktop interface with Russian and English push-to-talk translation controls.',
        'mobile_alt' => 'Voice Translator public mobile interface.',
    ],

    'production' => [
        'eyebrow' => '06 / Production & Delivery',
        'title' => 'Production Is a Different Species',
        'description' => 'After the pipeline and Lab worked locally, the project was deployed as separate production services instead of remaining an impressive collection of terminal windows.',

        'cards' => [
            [
                'label' => 'Hosting',
                'title' => 'Railway deployment',
                'description' => 'The production system runs on Railway with separate services for the Laravel web application, WebSocket pipeline server and MySQL.',
            ],
            [
                'label' => 'Realtime',
                'title' => 'Dedicated WebSocket pipeline',
                'description' => 'The WebSocket service handles live audio processing independently from normal web requests and public demo session creation.',
            ],
            [
                'label' => 'Runtime',
                'title' => 'Speech-ready PHP container',
                'description' => 'The production PHP 8.4 runtime includes the extensions required by the speech stack, including gRPC, protobuf, intl, pcntl and MySQL support.',
            ],
            [
                'label' => 'Credentials',
                'title' => 'Cloud-friendly secret handling',
                'description' => 'Provider secrets stay in environment configuration. Google service-account credentials can be supplied as JSON in production instead of relying on a locally mounted file.',
            ],
            [
                'label' => 'Domain',
                'title' => 'voice.kotov.lt',
                'description' => 'The public RU ↔ EN demo runs through a dedicated HTTPS production subdomain.',
            ],
            [
                'label' => 'Validation',
                'title' => 'Automated project checks',
                'description' => 'Tests, PHPStan, Laravel Pint and the frontend production build are used to validate the project before release.',
            ],
        ],

        'setup_label' => 'Production setup',
        'setup' => 'Laravel, Railway, MySQL, dedicated WebSocket service, Google Speech-to-Text, DeepL, OpenAI TTS, HTTPS and a custom domain.',
    ],

    'limitations' => [
        'eyebrow' => '07 / Current Limitations',
        'title' => 'What v1.0.0 Does Not Pretend to Solve',
        'description' => 'The project keeps its current boundaries explicit instead of presenting a push-to-talk production demo as finished simultaneous interpretation.',

        'items' => [
            'Communication is push-to-talk, not full-duplex simultaneous translation.',
            'The current public demo focuses on RU ↔ EN; Lithuanian remains a future language extension.',
            'Quality and latency still depend on network conditions and external cloud providers.',
            'Sending translated speech directly between two separate computers or into conferencing software remains future work beyond the current portfolio demo.',
        ],
    ],

    'stack' => [
        'eyebrow' => '08 / Technology Stack',
        'title' => 'Technology Stack',
        'description' => 'The project combines a Laravel application with browser audio capture, realtime communication, persisted benchmark data and specialized speech and language providers.',

        'groups' => [
            'application' => 'Application',
            'speech' => 'Speech & language',
            'data' => 'Data & realtime',
            'engineering' => 'Engineering',
        ],
    ],

    'result' => [
        'eyebrow' => '09 / Result',
        'title' => 'What This Project Demonstrates',

        'paragraph_1' => 'Voice Translator demonstrates more than connecting several AI APIs. The project uses controlled recordings, critical-element preservation and end-to-end timing to decide how different pipeline choices affect both accuracy and the delay a user actually experiences.',
        'paragraph_2' => 'It also shows the path from an accidental speech-recognition problem involving a cat to a repeatable R&D workflow, a browser-based engineering Lab and finally a controlled production application with explicit trust boundaries and public safeguards.',

        'items' => [
            'Streaming speech processing',
            'Controlled benchmark methodology',
            'Critical-element preservation',
            'End-to-end latency measurement',
            'Provider and pipeline comparison',
            'Production deployment and safeguards',
        ],

        'source' => 'View source code',
        'live' => 'Open live demo',
        'back' => '← Back to projects',
    ],
];
