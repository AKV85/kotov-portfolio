<header
    x-data="{ open: false }"
    class="border-b border-white/10"
>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">

        <a
            href="{{ route('home') }}"
            class="text-xl font-semibold tracking-tight"
        >
            KOTOV<span class="text-orange-400">_</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex">
            <a
                href="#projects"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                Projects
            </a>

            <a
                href="#experience"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                Experience
            </a>

            <a
                href="#about"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                About
            </a>

            <a
                href="#contact"
                class="text-sm text-neutral-300 transition hover:text-white"
            >
                Contact
            </a>

            <div class="flex items-center gap-3 text-xs text-neutral-400">
                <button
                    type="button"
                    class="text-white"
                >
                    EN
                </button>

                <button
                    type="button"
                    class="transition hover:text-white"
                >
                    LT
                </button>

                <button
                    type="button"
                    class="transition hover:text-white"
                >
                    RU
                </button>
            </div>
        </nav>

        <button
            type="button"
            class="text-sm text-neutral-300 md:hidden"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-label="Toggle navigation"
        >
            <span x-show="!open">
                Menu
            </span>

            <span
                x-show="open"
                x-cloak
            >
                Close
            </span>
        </button>
    </div>

    <div
        x-show="open"
        x-cloak
        class="border-t border-white/10 md:hidden"
    >
        <nav class="mx-auto flex max-w-7xl flex-col gap-5 px-6 py-6">
            <a
                href="#projects"
                class="text-neutral-300"
                @click="open = false"
            >
                Projects
            </a>

            <a
                href="#experience"
                class="text-neutral-300"
                @click="open = false"
            >
                Experience
            </a>

            <a
                href="#about"
                class="text-neutral-300"
                @click="open = false"
            >
                About
            </a>

            <a
                href="#contact"
                class="text-neutral-300"
                @click="open = false"
            >
                Contact
            </a>

            <div class="flex gap-4 pt-2 text-sm text-neutral-400">
                <button
                    type="button"
                    class="text-white"
                >
                    EN
                </button>

                <button
                    type="button"
                    class="transition hover:text-white"
                >
                    LT
                </button>

                <button
                    type="button"
                    class="transition hover:text-white"
                >
                    RU
                </button>
            </div>
        </nav>
    </div>
</header>