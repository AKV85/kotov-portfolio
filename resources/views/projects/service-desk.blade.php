@extends('layouts.app')

@section('title', 'Service Desk | Andrej Kotov')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
    <div class="max-w-5xl">

        <a
            href="{{ route('home') }}#projects"
            class="text-sm text-neutral-400 transition hover:text-white">
            ← Back to projects
        </a>

        <p class="mt-12 text-sm font-medium uppercase tracking-[0.25em] text-orange-400">
            Production Project
        </p>

        <h1 class="mt-5 text-5xl font-semibold tracking-tight sm:text-6xl lg:text-8xl">
            Service Desk
        </h1>

        <p class="mt-8 max-w-3xl text-lg leading-8 text-neutral-400 sm:text-xl">
            A production-ready service management application built with Laravel,
            focused on structured ticket workflows, permissions, integrations,
            automation and maintainable backend architecture.
        </p>

        <div class="mt-10 flex flex-wrap gap-4">
            <a
                href="https://github.com/AKV85/service-desk"
                target="_blank"
                rel="noopener noreferrer"
                class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200">
                View on GitHub
            </a>

            <a
                href="https://desk.kotov.lt"
                target="_blank"
                rel="noopener noreferrer"
                class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50">
                Live application
            </a>
        </div>

        <div class="mt-16 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-3">
            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    Type
                </p>

                <p class="mt-3 text-sm text-neutral-300">
                    Service management platform
                </p>
            </div>

            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    Focus
                </p>

                <p class="mt-3 text-sm text-neutral-300">
                    Backend architecture & integrations
                </p>
            </div>

            <div class="bg-neutral-950 p-6">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    Status
                </p>

                <p class="mt-3 text-sm text-orange-400">
                    Completed
                </p>
            </div>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">

            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    01 / The Project
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    The Project
                </h2>
            </div>

            <div class="max-w-3xl space-y-6 text-lg leading-8 text-neutral-400">
                <p>
                    Service Desk is a backend-focused support management application
                    designed around a structured ticket lifecycle and clearly
                    separated user responsibilities.
                </p>

                <p>
                    The application supports three main roles:
                    Requester, Agent and Administrator. Each role has its own
                    permissions and responsibilities within the ticket workflow.
                </p>

                <p>
                    Requesters can create and follow their tickets, agents can work
                    with assigned requests and manage their progress, while
                    administrators have broader control over users, assignments
                    and system-level operations.
                </p>

                <p>
                    The project was designed as a realistic production application
                    rather than a simple CRUD system. The main focus was predictable
                    business rules, maintainable backend code, traceable changes,
                    integrations and reliable behaviour when application state changes.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                02 / Core Backend
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                Core Backend
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                The core of the application is built around explicit ticket workflow
                rules instead of allowing arbitrary state changes directly from
                controllers or models.
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Workflow
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Controlled status transitions
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Ticket status changes are handled through dedicated workflow
                    logic. Invalid transitions are rejected instead of allowing
                    arbitrary status updates throughout the application.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Authorization
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Role-based permissions
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Laravel policies define what Requesters, Agents and Administrators
                    are allowed to do with tickets, comments, attachments and
                    workflow operations.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Application logic
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Service-oriented design
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Business operations such as workflow transitions, notifications
                    and external integrations are separated into dedicated services,
                    keeping controllers focused on request handling.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Consistency
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Database transactions
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Operations that update multiple parts of the application state
                    are executed inside database transactions so related changes
                    succeed or fail together.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Domain structure
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Enums and explicit states
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Ticket statuses and priorities are represented by PHP enums,
                    reducing scattered string values and making domain rules easier
                    to understand and maintain.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Assignment
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Ticket ownership
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Tickets can be assigned to agents while preserving the original
                    requester relationship, allowing the application to distinguish
                    clearly between ticket ownership and ticket handling.
                </p>
            </article>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                03 / Audit & Notifications
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                Audit & Notifications
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                Important ticket actions are traceable, while notifications are
                handled outside the main request flow so business operations remain
                reliable and responsive.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-[0.55fr_0.45fr]">

            <div class="border border-white/10 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Audit trail
                </p>

                <h3 class="mt-4 text-2xl font-medium tracking-tight text-white">
                    Human-readable ticket history
                </h3>

                <p class="mt-5 text-base leading-7 text-neutral-400">
                    Ticket changes are recorded in a dedicated history layer,
                    preserving who performed an action, when it happened and what
                    changed.
                </p>

                <p class="mt-4 text-base leading-7 text-neutral-400">
                    Instead of exposing raw database values to users, the application
                    converts stored changes into readable history entries for events
                    such as status changes, assignments and priority updates.
                </p>

                <div class="mt-8 border-t border-white/10 pt-6">
                    <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                        Examples
                    </p>

                    <div class="mt-5 space-y-4">
                        <div class="flex gap-3 text-sm leading-6 text-neutral-400">
                            <span class="text-orange-400">/</span>
                            <span>Status changed from New to In Progress</span>
                        </div>

                        <div class="flex gap-3 text-sm leading-6 text-neutral-400">
                            <span class="text-orange-400">/</span>
                            <span>Ticket assigned to an agent</span>
                        </div>

                        <div class="flex gap-3 text-sm leading-6 text-neutral-400">
                            <span class="text-orange-400">/</span>
                            <span>Priority updated from Medium to High</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid gap-px border border-white/10 bg-white/10">

                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        Collaboration
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        Comments
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        Users can discuss ticket progress directly inside the
                        application while keeping communication associated with
                        the correct ticket and user.
                    </p>
                </article>

                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        Files
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        Private attachments
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        Ticket attachments are stored privately and accessed through
                        application authorization rather than being exposed as
                        unrestricted public files.
                    </p>
                </article>

                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        Notifications
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        Queued delivery
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        Notifications are dispatched through the queue so external
                        delivery does not block the main user request.
                    </p>
                </article>

                <article class="bg-neutral-950 p-7 sm:p-8">
                    <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                        Reliability
                    </p>

                    <h3 class="mt-4 text-xl font-medium text-white">
                        After-commit side effects
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-neutral-400">
                        Side effects that depend on persisted application state are
                        triggered only after the database transaction has committed,
                        preventing notifications from being sent for changes that
                        were later rolled back.
                    </p>
                </article>

            </div>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                04 / Integrations
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                Integrations
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                External systems are integrated through dedicated application
                services and verified inbound endpoints, keeping provider-specific
                behaviour separated from the core ticket domain.
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    API
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    REST API
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The application exposes a REST API for working with service
                    desk data outside the Blade interface while reusing the same
                    authorization and business rules as the main application.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Jira
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Jira integration
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Service Desk can communicate with Jira through a dedicated
                    integration layer, allowing external issue tracking to be
                    connected without placing Jira-specific logic inside the core
                    ticket workflow.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    GitHub
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    GitHub integration
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    GitHub integration allows repository-related events and external
                    development workflows to interact with the application through
                    a provider-specific service instead of coupling them directly
                    to ticket models and controllers.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Webhooks
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Verified inbound events
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Incoming webhook requests are verified before their payload is
                    accepted, preventing untrusted requests from being treated as
                    legitimate provider events.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Reliability
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Idempotent processing
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Webhook processing is designed to tolerate duplicate deliveries.
                    Repeated provider events can be recognized so the same external
                    event does not create duplicate application changes.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Architecture
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Provider isolation
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    External providers are kept behind dedicated integration
                    boundaries. This keeps the application domain independent and
                    makes provider-specific behaviour easier to replace, test and
                    extend.
                </p>
            </article>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">

            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    05 / AI Integration
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    AI Integration
                </h2>
            </div>

            <div>
                <p class="max-w-3xl text-lg leading-8 text-neutral-400">
                    AI functionality is integrated as an application capability,
                    not embedded directly into ticket controllers or tied permanently
                    to a single external model provider.
                </p>

                <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                    The implementation keeps AI-generated suggestions under user
                    control. Generated output can assist the workflow, but application
                    state is not changed automatically without explicit human action.
                </p>
            </div>

        </div>

        <div class="mt-14 grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Architecture
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Provider-neutral design
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    AI functionality is exposed through an application-level
                    abstraction instead of spreading provider SDK calls throughout
                    the codebase. The rest of the application depends on a common
                    interface rather than one specific AI vendor.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Providers
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    OpenAI and Groq
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The integration supports multiple AI providers, including
                    OpenAI and Groq. Provider selection can change without requiring
                    the ticket domain itself to understand provider-specific APIs.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Workflow
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Human-in-the-loop
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    AI output is treated as a suggestion rather than an authoritative
                    system decision. Users review generated content before deciding
                    whether it should become part of the actual ticket workflow.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Separation
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    AI outside the core domain
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Ticket workflow rules remain deterministic and independent from
                    AI availability. If an AI provider is unavailable, the core
                    service desk workflow can continue to operate normally.
                </p>
            </article>

        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                Design principle
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                AI assists the user. It does not silently become the business logic.
            </p>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                06 / Testing & Reliability
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                Testing & Reliability
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                Automated tests protect the application workflow, authorization
                rules and integrations so changes can be made without relying only
                on manual verification.
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-3">

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    Tests
                </p>

                <p class="mt-4 text-4xl font-semibold tracking-tight text-white">
                    315
                </p>

                <p class="mt-3 text-sm text-neutral-400">
                    automated tests
                </p>
            </div>

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    Assertions
                </p>

                <p class="mt-4 text-4xl font-semibold tracking-tight text-white">
                    979
                </p>

                <p class="mt-3 text-sm text-neutral-400">
                    assertions
                </p>
            </div>

            <div class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                    Pipeline
                </p>

                <p class="mt-4 text-4xl font-semibold tracking-tight text-orange-400">
                    CI
                </p>

                <p class="mt-3 text-sm text-neutral-400">
                    automated validation
                </p>
            </div>

        </div>

        <div class="mt-8 grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Pest
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Feature and unit tests
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Pest is used to verify business behaviour at different levels,
                    including individual domain rules and complete application
                    workflows.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    PHPUnit
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Feature and unit tests
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Automated tests verify business behaviour at different levels,
                    including individual domain rules and complete application
                    workflows.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Integrations
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    External behaviour verification
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Integration-related behaviour is tested without requiring
                    every test to depend on live third-party services, keeping the
                    test suite repeatable and suitable for automated execution.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    CI
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Automated project validation
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The CI pipeline runs automated checks before changes are accepted,
                    providing an additional safety layer beyond local development
                    and manual review.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Code quality
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Laravel Pint
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Laravel Pint is used as part of project validation to keep PHP
                    formatting consistent across the codebase.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Build
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Production asset validation
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The frontend production build is verified alongside backend
                    checks so deployment does not depend on development-only asset
                    behaviour.
                </p>
            </article>

        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                Final verification
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                315 tests, 979 assertions, Laravel Pint, production asset build
                and CI validation completed successfully.
            </p>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                07 / Production & Deployment
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                Production & Deployment
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                The application is deployed as a real production system with
                persistent storage, background processing, HTTPS and external
                email delivery.
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 md:grid-cols-2">

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Hosting
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Railway deployment
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The application is deployed on Railway with separate application
                    and background worker processes.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Database
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    MySQL
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Production application data is stored in MySQL, with migrations
                    used to keep database structure consistent between environments.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Background jobs
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Dedicated queue worker
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Queued jobs run in a dedicated worker process so notifications
                    and other asynchronous operations are handled independently from
                    web requests.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Storage
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Persistent private files
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Private ticket attachments are stored on persistent storage so
                    uploaded files survive application redeployments while remaining
                    protected by application authorization.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Security
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    HTTPS and secure cookies
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The production environment uses HTTPS with a custom domain and
                    secure cookie configuration appropriate for encrypted browser
                    sessions.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Health
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Application health endpoint
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Laravel's health endpoint is available for basic deployment and
                    availability checks.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Email
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    Resend delivery
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    Transactional application email is delivered through Resend
                    using the project's configured production sender.
                </p>
            </article>

            <article class="bg-neutral-950 p-7 sm:p-8">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Domain
                </p>

                <h3 class="mt-4 text-xl font-medium text-white">
                    desk.kotov.lt
                </h3>

                <p class="mt-4 text-sm leading-7 text-neutral-400">
                    The application is available through a dedicated custom
                    subdomain, providing a real public deployment rather than only
                    a local demonstration environment.
                </p>
            </article>

        </div>

        <div class="mt-8 border border-white/10 p-7 sm:p-8">
            <p class="text-xs uppercase tracking-[0.18em] text-neutral-600">
                Production setup
            </p>

            <p class="mt-4 max-w-4xl text-xl leading-8 text-neutral-300">
                Railway, MySQL, dedicated queue worker, persistent private storage,
                HTTPS, health checks and transactional email delivery.
            </p>
        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="mb-12">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                08 / Technology Stack
            </p>

            <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                Technology Stack
            </h2>

            <p class="mt-6 max-w-3xl text-lg leading-8 text-neutral-400">
                The project combines a conventional Laravel application stack with
                background processing, external integrations and production-focused
                tooling.
            </p>
        </div>

        <div class="grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-4">

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Backend
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>PHP</p>
                    <p>Laravel</p>
                    <p>REST API</p>
                    <p>Laravel Sanctum</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Data
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>MySQL</p>
                    <p>Eloquent ORM</p>
                    <p>Database migrations</p>
                    <p>Private file storage</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Integrations
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>Jira</p>
                    <p>GitHub</p>
                    <p>OpenAI</p>
                    <p>Groq</p>
                    <p>Resend</p>
                </div>
            </div>

            <div class="bg-neutral-950 p-7">
                <p class="text-xs uppercase tracking-[0.18em] text-orange-400">
                    Engineering
                </p>

                <div class="mt-5 space-y-3 text-sm text-neutral-300">
                    <p>PHPUnit</p>
                    <p>Laravel Pint</p>
                    <p>Docker</p>
                    <p>Laravel Sail</p>
                    <p>CI</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-[0.35fr_0.65fr]">

            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">
                    09 / Result
                </p>

                <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                    What This Project Demonstrates
                </h2>
            </div>

            <div class="max-w-3xl">

                <p class="text-lg leading-8 text-neutral-400">
                    Service Desk demonstrates the ability to design and maintain
                    backend functionality beyond basic CRUD operations, with clear
                    business rules, authorization, asynchronous processing,
                    integrations and production deployment.
                </p>

                <p class="mt-6 text-lg leading-8 text-neutral-400">
                    The project also focuses on concerns that become important in
                    real applications: transactional consistency, auditability,
                    duplicate external events, private file access, automated tests
                    and failure isolation between application components.
                </p>

                <div class="mt-10 grid gap-px border border-white/10 bg-white/10 sm:grid-cols-2">

                    <div class="bg-neutral-950 p-6">
                        <p class="text-sm text-neutral-300">
                            Structured business workflows
                        </p>
                    </div>

                    <div class="bg-neutral-950 p-6">
                        <p class="text-sm text-neutral-300">
                            Role-based authorization
                        </p>
                    </div>

                    <div class="bg-neutral-950 p-6">
                        <p class="text-sm text-neutral-300">
                            Service-oriented backend architecture
                        </p>
                    </div>

                    <div class="bg-neutral-950 p-6">
                        <p class="text-sm text-neutral-300">
                            Reliable external integrations
                        </p>
                    </div>

                    <div class="bg-neutral-950 p-6">
                        <p class="text-sm text-neutral-300">
                            Automated testing and CI
                        </p>
                    </div>

                    <div class="bg-neutral-950 p-6">
                        <p class="text-sm text-neutral-300">
                            Production deployment and operations
                        </p>
                    </div>

                </div>

                <div class="mt-12 flex flex-wrap gap-4">
                    <a
                        href="https://github.com/AKV85/service-desk"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="border border-white bg-white px-5 py-3 text-sm font-medium text-black transition hover:bg-neutral-200">
                        View source code
                    </a>

                    <a
                        href="https://desk.kotov.lt"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="border border-white/20 px-5 py-3 text-sm font-medium transition hover:border-white/50">
                        Open live application
                    </a>

                    <a
                        href="{{ route('home') }}#projects"
                        class="px-5 py-3 text-sm text-neutral-400 transition hover:text-white">
                        ← Back to projects
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
