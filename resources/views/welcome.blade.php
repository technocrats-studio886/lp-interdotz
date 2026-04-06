<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interdotz — Satu Akun, Semua Akses</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --bg-deep: #09090b;
            --bg-card: #18181b;
            --bg-card-hover: #27272a;
            --accent-primary: #6366f1;
            --accent-secondary: #10b981;
        }
        body { background-color: var(--bg-deep); }
        html { scroll-padding-top: 80px; }
    </style>
</head>
<body x-data="{ lang: 'id' }" class="font-['Inter'] antialiased text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 border-b border-white/5" style="background: rgba(9,9,11,0.92); backdrop-filter: blur(20px);">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3 group">
                <div class="relative w-10 h-10">
                    <div class="absolute inset-0 rounded-xl rotate-6 group-hover:rotate-12 transition-transform duration-300" style="background: var(--accent-primary);"></div>
                    <div class="absolute inset-0 rounded-xl flex items-center justify-center" style="background: var(--bg-deep);">
                        <div class="grid grid-cols-3 gap-[3px]">
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-primary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-secondary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-primary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-secondary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-primary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-secondary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-primary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-secondary);"></div>
                            <div class="w-[4px] h-[4px] rounded-full" style="background: var(--accent-primary);"></div>
                        </div>
                    </div>
                </div>
                <span class="text-xl font-bold tracking-tight">Inter<span style="color: var(--accent-primary);">dotz</span></span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#products" class="text-sm text-zinc-400 hover:text-white transition-colors" x-text="lang === 'id' ? 'Produk' : 'Products'"></a>
                <a href="#dots-units" class="text-sm text-zinc-400 hover:text-white transition-colors">Dots Units</a>
                <a href="#about" class="text-sm text-zinc-400 hover:text-white transition-colors" x-text="lang === 'id' ? 'Tentang' : 'About'"></a>
                <button @click="lang = lang === 'id' ? 'en' : 'id'" class="flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium text-zinc-400 hover:text-white border border-white/10 hover:border-white/20 transition-all">
                    <i data-lucide="globe" class="w-4 h-4"></i>
                    <span x-text="lang === 'id' ? 'EN' : 'ID'"></span>
                </button>
            </div>

            <div class="flex items-center gap-3 md:hidden">
                <button @click="lang = lang === 'id' ? 'en' : 'id'" class="flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-medium text-zinc-400 border border-white/10">
                    <i data-lucide="globe" class="w-3.5 h-3.5"></i>
                    <span x-text="lang === 'id' ? 'EN' : 'ID'"></span>
                </button>
                <button id="mobile-menu-btn" class="text-zinc-400 hover:text-white">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-t border-white/5" style="background: rgba(9,9,11,0.97);">
            <div class="px-6 py-4 flex flex-col gap-4">
                <a href="#products" class="text-sm text-zinc-400 hover:text-white" x-text="lang === 'id' ? 'Produk' : 'Products'"></a>
                <a href="#dots-units" class="text-sm text-zinc-400 hover:text-white">Dots Units</a>
                <a href="#about" class="text-sm text-zinc-400 hover:text-white" x-text="lang === 'id' ? 'Tentang' : 'About'"></a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 rounded-full blur-[120px]" style="background: rgba(99,102,241,0.12);"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 rounded-full blur-[120px]" style="background: rgba(16,185,129,0.08);"></div>
        </div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.015)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.015)_1px,transparent_1px)] bg-[size:64px_64px]"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 border border-white/10 rounded-full mb-8" style="background: rgba(99,102,241,0.08);">
                <div class="w-2 h-2 rounded-full animate-pulse" style="background: var(--accent-secondary);"></div>
                <span class="text-sm text-zinc-400" x-text="lang === 'id' ? 'Platform sedang dalam pengembangan aktif' : 'Platform is under active development'"></span>
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black leading-[0.9] tracking-tight mb-6">
                <template x-if="lang === 'id'">
                    <span>
                        <span class="text-white">Satu Akun.</span><br>
                        <span style="color: var(--accent-primary);">Banyak Hal.</span><br>
                        <span class="text-white">Hidup Lebih Mudah.</span>
                    </span>
                </template>
                <template x-if="lang === 'en'">
                    <span>
                        <span class="text-white">One Account.</span><br>
                        <span style="color: var(--accent-primary);">So Many Things.</span><br>
                        <span class="text-white">Life Made Easier.</span>
                    </span>
                </template>
            </h1>

            <p class="text-lg md:text-xl text-zinc-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                <template x-if="lang === 'id'">
                    <span><span class="text-white font-semibold">Interdotz</span> menyatukan berbagai aplikasi yang kamu butuhkan sehari-hari dalam satu genggaman. Masuk sekali, gunakan semuanya.</span>
                </template>
                <template x-if="lang === 'en'">
                    <span><span class="text-white font-semibold">Interdotz</span> brings together the apps you need every day, all in one place. Sign in once, use everything.</span>
                </template>
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#products" class="px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 shadow-lg hover:scale-105 hover:brightness-110" style="background: var(--accent-primary); box-shadow: 0 8px 30px rgba(99,102,241,0.3);">
                    <span x-text="lang === 'id' ? 'Lihat Apa Saja yang Ada' : 'See What\'s Inside'"></span>
                </a>
                <a href="#dots-units" class="px-8 py-4 border border-white/10 hover:border-white/25 rounded-full font-semibold text-lg transition-all duration-300 hover:scale-105" style="background: rgba(24,24,27,0.8);">
                    <span x-text="lang === 'id' ? 'Kenalan dengan Dots Units' : 'Meet Dots Units'"></span>
                </a>
            </div>

            <div class="mt-16 flex justify-center">
                <div class="grid grid-cols-3 gap-1.5">
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-primary); animation-delay: 0s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-secondary); animation-delay: 0.1s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-primary); animation-delay: 0.2s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-secondary); animation-delay: 0.3s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-primary); animation-delay: 0.4s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-secondary); animation-delay: 0.5s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-primary); animation-delay: 0.6s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-secondary); animation-delay: 0.7s;"></div>
                    <div class="w-2.5 h-2.5 rounded-full animate-bounce" style="background: var(--accent-primary); animation-delay: 0.8s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dots Units -->
    <section id="dots-units" class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-[120px]" style="background: rgba(16,185,129,0.08);"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-white/10 rounded-full mb-6" style="background: rgba(16,185,129,0.08);">
                    <i data-lucide="coins" class="w-4 h-4" style="color: var(--accent-secondary);"></i>
                    <span class="text-sm font-medium" style="color: var(--accent-secondary);" x-text="lang === 'id' ? 'Cara Baru Menikmati Semuanya' : 'A New Way to Enjoy Everything'"></span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black mb-6" style="color: var(--accent-secondary);">Dots Units</h2>
                <p class="text-lg text-zinc-400 max-w-2xl mx-auto leading-relaxed">
                    <template x-if="lang === 'id'">
                        <span>Anggap saja Dots Units sebagai tiket kamu. Satu saldo yang bisa dipakai di semua produk Interdotz — tanpa ribet, tanpa langganan terpisah.</span>
                    </template>
                    <template x-if="lang === 'en'">
                        <span>Think of Dots Units as your ticket. One balance you can use across all Interdotz products — no hassle, no separate subscriptions.</span>
                    </template>
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="group p-8 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300" style="background: rgba(16,185,129,0.1);">
                        <i data-lucide="wallet" class="w-7 h-7" style="color: var(--accent-secondary);"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3" x-text="lang === 'id' ? 'Simpel' : 'Simple'"></h3>
                    <p class="text-zinc-500 leading-relaxed">
                        <template x-if="lang === 'id'"><span>Isi sekali, pakai di mana-mana. Gak perlu mikir saldo mana untuk aplikasi apa.</span></template>
                        <template x-if="lang === 'en'"><span>Top up once, use it everywhere. No need to think about which balance goes where.</span></template>
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300" style="background: rgba(16,185,129,0.1);">
                        <i data-lucide="repeat" class="w-7 h-7" style="color: var(--accent-secondary);"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3" x-text="lang === 'id' ? 'Sesuai Kamu' : 'Your Way'"></h3>
                    <p class="text-zinc-500 leading-relaxed">
                        <template x-if="lang === 'id'"><span>Gak ada paket yang maksa. Pakai sebanyak yang kamu butuhkan, kapan pun kamu mau.</span></template>
                        <template x-if="lang === 'en'"><span>No pushy plans. Use as much as you need, whenever you want.</span></template>
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300" style="background: rgba(16,185,129,0.1);">
                        <i data-lucide="trending-up" class="w-7 h-7" style="color: var(--accent-secondary);"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3" x-text="lang === 'id' ? 'Makin Seru' : 'More to Come'"></h3>
                    <p class="text-zinc-500 leading-relaxed">
                        <template x-if="lang === 'id'"><span>Setiap produk baru yang hadir, Dots Units kamu makin berguna. Ekosistemnya terus tumbuh.</span></template>
                        <template x-if="lang === 'en'"><span>With every new product, your Dots Units become even more useful. The ecosystem keeps growing.</span></template>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section id="products" class="relative py-32">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-1/4 w-80 h-80 rounded-full blur-[120px]" style="background: rgba(99,102,241,0.08);"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-white/10 rounded-full mb-6" style="background: rgba(99,102,241,0.08);">
                    <i data-lucide="boxes" class="w-4 h-4" style="color: var(--accent-primary);"></i>
                    <span class="text-sm font-medium" style="color: var(--accent-primary);" x-text="lang === 'id' ? 'Ada Apa Aja?' : 'What\'s Inside?'"></span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black mb-6" style="color: var(--accent-primary);">
                    <span x-text="lang === 'id' ? 'Semua Ada di Sini' : 'It\'s All Here'"></span>
                </h2>
                <p class="text-lg text-zinc-400 max-w-2xl mx-auto leading-relaxed">
                    <template x-if="lang === 'id'"><span>Dari produktivitas sampai keuangan — semuanya bisa kamu akses dari satu tempat.</span></template>
                    <template x-if="lang === 'en'"><span>From productivity to finance — access it all from one place.</span></template>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- ==================== FASE 3 PRODUCTS (full: name + category + image) ==================== --}}
                <div class="group rounded-2xl overflow-hidden border border-white/5 hover:border-white/20 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="relative h-44 overflow-hidden" style="background: var(--bg-card-hover);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i data-lucide="layout-kanban" class="w-16 h-16 mx-auto mb-2" style="color: rgba(99,102,241,0.3);"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0" style="background: linear-gradient(to top, var(--bg-card), transparent);"></div>
                        <div class="absolute bottom-3 left-4">
                            <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border" style="background: rgba(99,102,241,0.1); color: var(--accent-primary); border-color: rgba(99,102,241,0.2);"
                                x-text="lang === 'id' ? 'Manajemen Proyek' : 'Project Management'"></div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-white mb-2">DotTask</h4>
                        <p class="text-zinc-500 text-sm leading-relaxed">
                            <template x-if="lang === 'id'"><span>Atur tugas dan proyek dengan tampilan kanban yang intuitif. Kolaborasi tim jadi lebih mudah.</span></template>
                            <template x-if="lang === 'en'"><span>Manage tasks and projects with an intuitive kanban view. Team collaboration made easy.</span></template>
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center gap-2 text-sm font-medium" style="color: var(--accent-secondary);">
                                <i data-lucide="sparkles" class="w-4 h-4"></i>
                                <span x-text="lang === 'id' ? 'Tersedia' : 'Available'"></span>
                            </div>
                            <a href="#" class="px-4 py-2 rounded-full text-xs font-semibold transition-all duration-300 hover:brightness-110" style="background: var(--accent-primary);">
                                <span x-text="lang === 'id' ? 'Gunakan' : 'Use Now'"></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ==================== FASE 2 PRODUCTS (name + category, monochrome) ==================== --}}
                <div class="group p-6 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-300" style="background: var(--bg-card);">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: rgba(255,255,255,0.05);">
                        <i data-lucide="check-circle" class="w-6 h-6 text-zinc-600"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">DotTrack</h4>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-3 border" style="background: rgba(255,255,255,0.04); color: rgba(161,161,170,0.6); border-color: rgba(255,255,255,0.06);"
                        x-text="lang === 'id' ? 'Pelacak Kebiasaan' : 'Habit Tracker'"></div>
                    <p class="text-zinc-600 text-sm leading-relaxed">
                        <template x-if="lang === 'id'"><span>Lacak kebiasaan harianmu dan bangun rutinitas yang lebih baik dengan insight yang actionable.</span></template>
                        <template x-if="lang === 'en'"><span>Track your daily habits and build better routines with actionable insights.</span></template>
                    </p>
                    <div class="mt-4 pt-4 border-t border-white/5 flex items-center gap-2 text-zinc-600 text-xs">
                        <i data-lucide="loader" class="w-3.5 h-3.5"></i>
                        <span x-text="lang === 'id' ? 'Dalam pengembangan' : 'In development'"></span>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-300" style="background: var(--bg-card);">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: rgba(255,255,255,0.05);">
                        <i data-lucide="calendar" class="w-6 h-6 text-zinc-600"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">DotMeet</h4>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-3 border" style="background: rgba(255,255,255,0.04); color: rgba(161,161,170,0.6); border-color: rgba(255,255,255,0.06);"
                        x-text="lang === 'id' ? 'Penjadwalan' : 'Scheduling'"></div>
                    <p class="text-zinc-600 text-sm leading-relaxed">
                        <template x-if="lang === 'id'"><span>Jadwalkan meeting tanpa drama. Sync kalender, kirim undangan, dan atur timezone otomatis.</span></template>
                        <template x-if="lang === 'en'"><span>Schedule meetings hassle-free. Sync calendars, send invitations, and auto-adjust timezones.</span></template>
                    </p>
                    <div class="mt-4 pt-4 border-t border-white/5 flex items-center gap-2 text-zinc-600 text-xs">
                        <i data-lucide="loader" class="w-3.5 h-3.5"></i>
                        <span x-text="lang === 'id' ? 'Dalam pengembangan' : 'In development'"></span>
                    </div>
                </div>

                {{-- ==================== FASE 1 PRODUCTS (category description only, no name) ==================== --}}
                <div class="group p-6 rounded-2xl border border-dashed border-white/8 hover:border-white/15 transition-all duration-300" style="background: rgba(24,24,27,0.5);">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: rgba(99,102,241,0.06);">
                        <i data-lucide="file-text" class="w-6 h-6" style="color: rgba(99,102,241,0.3);"></i>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-3 border" style="background: rgba(99,102,241,0.06); color: rgba(99,102,241,0.5); border-color: rgba(99,102,241,0.1);">
                        Note Taking
                    </div>
                    <p class="text-zinc-600 text-sm leading-relaxed">
                        <template x-if="lang === 'id'"><span>Aplikasi catatan yang bisa ditulis dan dipublish sebagai artikel untuk dibagikan ke publik.</span></template>
                        <template x-if="lang === 'en'"><span>A note-taking app where you can write and publish notes as articles to share with the public.</span></template>
                    </p>
                    <div class="mt-4 pt-4 border-t border-white/5 flex items-center gap-2 text-zinc-700 text-xs">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                        <span x-text="lang === 'id' ? 'Segera hadir' : 'Coming soon'"></span>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl border border-dashed border-white/8 hover:border-white/15 transition-all duration-300" style="background: rgba(24,24,27,0.5);">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: rgba(99,102,241,0.06);">
                        <i data-lucide="credit-card" class="w-6 h-6" style="color: rgba(99,102,241,0.3);"></i>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-3 border" style="background: rgba(99,102,241,0.06); color: rgba(99,102,241,0.5); border-color: rgba(99,102,241,0.1);"
                        x-text="lang === 'id' ? 'Keuangan Pribadi' : 'Personal Finance'"></div>
                    <p class="text-zinc-600 text-sm leading-relaxed">
                        <template x-if="lang === 'id'"><span>Kelola keuangan pribadi dengan mencatat pemasukan, pengeluaran, dan melihat analisis keuangan.</span></template>
                        <template x-if="lang === 'en'"><span>Manage personal finances by recording income, expenses, and viewing financial analysis.</span></template>
                    </p>
                    <div class="mt-4 pt-4 border-t border-white/5 flex items-center gap-2 text-zinc-700 text-xs">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                        <span x-text="lang === 'id' ? 'Segera hadir' : 'Coming soon'"></span>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl border border-dashed border-white/8 hover:border-white/15 transition-all duration-300" style="background: rgba(24,24,27,0.5);">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: rgba(99,102,241,0.06);">
                        <i data-lucide="graduation-cap" class="w-6 h-6" style="color: rgba(99,102,241,0.3);"></i>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium mb-3 border" style="background: rgba(99,102,241,0.06); color: rgba(99,102,241,0.5); border-color: rgba(99,102,241,0.1);">
                        E-Learning
                    </div>
                    <p class="text-zinc-600 text-sm leading-relaxed">
                        <template x-if="lang === 'id'"><span>Platform belajar interaktif dengan konten singkat untuk belajar skill baru di sela kesibukan.</span></template>
                        <template x-if="lang === 'en'"><span>An interactive learning platform with bite-sized content to learn new skills in your spare time.</span></template>
                    </p>
                    <div class="mt-4 pt-4 border-t border-white/5 flex items-center gap-2 text-zinc-700 text-xs">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                        <span x-text="lang === 'id' ? 'Segera hadir' : 'Coming soon'"></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="relative py-32">
        <div class="absolute inset-0">
            <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full blur-[120px]" style="background: rgba(99,102,241,0.06);"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 border border-white/10 rounded-full mb-6" style="background: rgba(99,102,241,0.08);">
                <i data-lucide="heart" class="w-4 h-4" style="color: var(--accent-primary);"></i>
                <span class="text-sm font-medium" style="color: var(--accent-primary);" x-text="lang === 'id' ? 'Tentang Kami' : 'About Us'"></span>
            </div>
            <h2 class="text-4xl md:text-6xl font-black mb-8" style="color: var(--accent-primary);">
                <span x-text="lang === 'id' ? 'Kenapa Interdotz?' : 'Why Interdotz?'"></span>
            </h2>

            <div class="space-y-4 text-left">
                <div class="group p-6 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform" style="background: rgba(99,102,241,0.1);">
                            <i data-lucide="target" class="w-6 h-6" style="color: var(--accent-primary);"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-2" x-text="lang === 'id' ? 'Karena Kamu Butuh' : 'Because You Need It'"></h3>
                            <p class="text-zinc-500 leading-relaxed">
                                <template x-if="lang === 'id'"><span>Setiap produk lahir dari masalah nyata, bukan ide yang dipaksakan. Kalau kamu pernah merasa "andai ada aplikasi untuk ini" — itu yang kami bangun.</span></template>
                                <template x-if="lang === 'en'"><span>Every product is born from a real problem, not a forced idea. If you've ever thought "I wish there was an app for this" — that's what we build.</span></template>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform" style="background: rgba(16,185,129,0.1);">
                            <i data-lucide="puzzle" class="w-6 h-6" style="color: var(--accent-secondary);"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-2" x-text="lang === 'id' ? 'Gak Perlu Banyak Akun' : 'No More Multiple Accounts'"></h3>
                            <p class="text-zinc-500 leading-relaxed">
                                <template x-if="lang === 'id'"><span>Satu akun, satu saldo, semua produk. Interdotz menyatukan semuanya supaya kamu gak perlu pindah-pindah.</span></template>
                                <template x-if="lang === 'en'"><span>One account, one balance, all products. Interdotz ties it all together so you don't have to jump around.</span></template>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl border border-white/5 hover:border-white/15 transition-all duration-500" style="background: var(--bg-card);">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform" style="background: rgba(99,102,241,0.1);">
                            <i data-lucide="users" class="w-6 h-6" style="color: var(--accent-primary);"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-2" x-text="lang === 'id' ? 'Kamu yang Tentukan' : 'You Decide'"></h3>
                            <p class="text-zinc-500 leading-relaxed">
                                <template x-if="lang === 'id'"><span>Produk selanjutnya? Kamu yang bantu tentukan. Interdotz tumbuh dari kebutuhan penggunanya.</span></template>
                                <template x-if="lang === 'en'"><span>The next product? You help decide. Interdotz grows from what its users actually need.</span></template>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="relative py-24">
        <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">
            <div class="p-10 rounded-3xl border border-white/5" style="background: var(--bg-card);">
                <i data-lucide="bell" class="w-10 h-10 mx-auto mb-4" style="color: var(--accent-secondary);"></i>
                <h2 class="text-3xl md:text-4xl font-black mb-4">
                    <template x-if="lang === 'id'"><span>Mau Tahu Duluan?</span></template>
                    <template x-if="lang === 'en'"><span>Want to Know First?</span></template>
                </h2>
                <p class="text-zinc-500 mb-8 max-w-lg mx-auto">
                    <template x-if="lang === 'id'"><span>Tinggalkan emailmu, nanti kami kabarin kalau ada yang baru.</span></template>
                    <template x-if="lang === 'en'"><span>Drop your email, we'll let you know when something new drops.</span></template>
                </p>
                <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="event.preventDefault();">
                    <input type="email" :placeholder="lang === 'id' ? 'Masukkan email kamu' : 'Enter your email'" class="flex-1 px-5 py-3.5 rounded-full text-white placeholder-zinc-600 focus:outline-none transition-colors text-sm" style="background: var(--bg-deep); border: 1px solid rgba(255,255,255,0.08);">
                    <button type="submit" class="px-6 py-3.5 rounded-full font-semibold text-sm transition-all duration-300 hover:scale-105 hover:brightness-110" style="background: var(--accent-secondary); color: #09090b; box-shadow: 0 8px 25px rgba(16,185,129,0.2);">
                        <span x-text="lang === 'id' ? 'Kabarin Aku' : 'Notify Me'"></span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-3">
                    <div class="relative w-8 h-8">
                        <div class="absolute inset-0 rounded-lg rotate-6" style="background: var(--accent-primary);"></div>
                        <div class="absolute inset-0 rounded-lg flex items-center justify-center" style="background: var(--bg-deep);">
                            <div class="grid grid-cols-3 gap-[2px]">
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-primary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-secondary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-primary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-secondary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-primary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-secondary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-primary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-secondary);"></div>
                                <div class="w-[3px] h-[3px] rounded-full" style="background: var(--accent-primary);"></div>
                            </div>
                        </div>
                    </div>
                    <span class="font-bold tracking-tight">Inter<span style="color: var(--accent-primary);">dotz</span></span>
                </div>
                <p class="text-sm text-zinc-600">&copy; {{ date('Y') }} Interdotz. <span x-text="lang === 'id' ? 'Semua hak dilindungi.' : 'All rights reserved.'"></span></p>
                <div class="flex items-center gap-4">
                    <a href="#" class="text-zinc-700 hover:text-white transition-colors"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                    <a href="#" class="text-zinc-700 hover:text-white transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="text-zinc-700 hover:text-white transition-colors"><i data-lucide="github" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => { lucide.createIcons(); });
        document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
