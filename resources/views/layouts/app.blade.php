<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>About Us - Mirai-Career</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" referrerpolicy="no-referrer" rel="stylesheet"/>
    <style type="text/tailwindcss">
        :root {
            --primary-color: #e61980;
            --secondary-color: #fce4ec;
            --background-color: #F8F9FA;
            --text-primary: #1A202C;
            --text-secondary: #4A5568;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--background-color);
            color: var(--text-primary);
        }
        .group .group-hover\:block {
            display: none;
        }
        .group:hover .group-hover\:block {
            display: block;
        }
        .dropdown-menu {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 300ms ease-in-out, transform 300ms ease-in-out;
        }
        .group:hover .dropdown-menu {
            opacity: 1;
            transform: translateY(0);
        }
        .japanese-bg {
            background-color: #F8F9FA;
        }
        .section-bg-white {
            background-color: #ffffff;
        }
        .section-bg-gray {
            background-color: #F8F9FA;
        }
        .animate-fade-in {
            opacity: 0;
            transition: opacity 1.2s ease-in-out;
        }
        .animate-fade-in.is-visible {
            opacity: 1;
        }
        .animate-slide-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .animate-slide-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        .animate-slide-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .animate-slide-left.is-visible {
            opacity: 1;
            transform: translateX(0);
        }
        .animate-slide-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .animate-slide-right.is-visible {
            opacity: 1;
            transform: translateX(0);
        }
        .animate-zoom-in {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .animate-zoom-in.is-visible {
            opacity: 1;
            transform: scale(1);
        }
        [data-team-member] {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        [data-team-member].is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-[var(--background-color)] text-[var(--text-primary)] japanese-bg" x-data="{}">
    <div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md shadow-sm py-4 px-10 flex justify-between items-center border-b border-gray-200 transition-all duration-300">
                <div class="flex items-center gap-3">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <div class="relative">
                            <svg class="h-10 w-10 text-[var(--primary-color)]" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <!-- Japanese flag inspired base with Mount Fuji silhouette -->
                                <circle cx="24" cy="24" r="20" fill="currentColor" opacity="0.1"/>
                                
                                <!-- Mount Fuji silhouette representing Japan -->
                                <path d="M8 32 L24 12 L40 32 Z" fill="currentColor" opacity="0.3"/>
                                <path d="M12 30 L24 16 L36 30" stroke="currentColor" stroke-width="2" fill="none"/>
                                
                                <!-- Rising sun representing future/hope -->
                                <circle cx="24" cy="18" r="6" fill="currentColor" opacity="0.6"/>
                                <circle cx="24" cy="18" r="4" fill="currentColor"/>
                                
                                <!-- Career ladder/steps representing job progression -->
                                <rect x="18" y="26" width="12" height="2" fill="white" rx="1"/>
                                <rect x="20" y="29" width="8" height="2" fill="white" rx="1"/>
                                <rect x="22" y="32" width="4" height="2" fill="white" rx="1"/>
                                
                                <!-- Upward arrows representing career growth -->
                                <path d="M14 36 L18 32 L22 36" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 36 L30 32 L34 36" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <!-- Achievement stars representing success -->
                                <path d="M12 14 L13 17 L16 17 L13.5 19 L14.5 22 L12 20 L9.5 22 L10.5 19 L8 17 L11 17 Z" fill="currentColor" opacity="0.7"/>
                                <path d="M36 14 L37 17 L40 17 L37.5 19 L38.5 22 L36 20 L33.5 22 L34.5 19 L32 17 L35 17 Z" fill="currentColor" opacity="0.7"/>
                            </svg>
                            <!-- Small Japanese character accent -->
                            <div class="absolute -top-1 -right-1 w-3 h-3 bg-gradient-to-br from-pink-400 to-red-500 rounded-full shadow-sm"></div>
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-2xl font-bold text-[var(--primary-color)] leading-tight">Mirai-Career</h2>
                            <span class="text-xs text-[var(--text-secondary)] font-medium tracking-wide">未来キャリア</span>
                        </div>
                    </a>
                </div>
                <nav class="flex items-center gap-8">
                    <div class="hidden md:flex items-center gap-6">
                        <a class="{{ Request::is('/') ? 'text-[var(--primary-color)] font-bold' : 'text-[var(--text-secondary)] font-medium hover:text-[var(--primary-color)]' }} transition-colors duration-200 ease-in-out" href="{{ url('/') }}">Home</a>
                        <a class="{{ Request::is('about') ? 'text-[var(--primary-color)] font-bold' : 'text-[var(--text-secondary)] font-medium hover:text-[var(--primary-color)]' }} transition-colors duration-200 ease-in-out" href="{{ url('about') }}">About</a>
                        <div class="relative group">
                            @php
                                $isProgramsActive = Request::is('programs*') || Request::is('jlpt-preparation');
                            @endphp
                            <a class="{{ $isProgramsActive ? 'text-[var(--primary-color)] font-bold' : 'text-[var(--text-secondary)] font-medium hover:text-[var(--primary-color)]' }} transition-colors duration-200 ease-in-out flex items-center py-5" href="#">
                                Programs
                                <svg class="ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-0 py-2 w-48 z-10 dropdown-menu">
                                <a class="{{ Request::is('jlpt-preparation') ? 'text-[var(--primary-color)] font-bold bg-[var(--secondary-color)]' : 'text-[var(--text-secondary)] font-medium hover:bg-gray-100 hover:text-[var(--primary-color)]' }} block px-4 py-2 text-sm transition-colors" href="{{ url('jlpt-preparation') }}">JLPT Preparation</a>
                                <a class="text-[var(--text-secondary)] font-medium hover:bg-gray-100 hover:text-[var(--primary-color)] block px-4 py-2 text-sm transition-colors" href="#">SSW Preparation</a>
                            </div>
                        </div>
                        <a class="{{ Request::is('contact') ? 'text-[var(--primary-color)] font-bold' : 'text-[var(--text-secondary)] font-medium hover:text-[var(--primary-color)]' }} transition-colors duration-200 ease-in-out" href="{{ url('contact') }}">Contact</a>
                        <a class="{{ Request::is('news') ? 'text-[var(--primary-color)] font-bold' : 'text-[var(--text-secondary)] font-medium hover:text-[var(--primary-color)]' }} transition-colors duration-200 ease-in-out" href="{{ url('news') }}">News</a>
                    </div>
                    @if(Auth::check())
                        <div class="flex items-center gap-3">
                            <span class="font-bold text-[var(--primary-color)]">{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="bg-[var(--primary-color)] text-white px-4 py-2 rounded hover:bg-pink-700 transition">Sign Out</button>
                            </form>
                        </div>
                    @else
                        <button 
                            class="bg-[var(--primary-color)] text-white px-4 py-2 rounded hover:bg-pink-700 transition"
                            onclick="showLoginModal()"
                        >Sign In</button>
                    @endif
                </nav>
            </header>

            <main class="flex-1">
                @yield('content')
            </main>

            <footer class="bg-white text-gray-700 pt-20 pb-10 border-t border-gray-200">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
                        <div class="lg:col-span-5 flex flex-col">
                            <h3 class="text-2xl font-bold text-[var(--text-primary)] mb-6">Get in Touch</h3>
                            <div class="space-y-5 text-[var(--text-secondary)] flex-grow">
                                <p class="flex items-start text-base">
                                    <span class="material-icons mr-4 text-[var(--primary-color)] mt-1">location_on</span>
                                    <span>1-1-1 Chiyoda, Chiyoda-ku,<br/>Tokyo, Japan</span>
                                </p>
                                <p class="flex items-center text-base">
                                    <span class="material-icons mr-4 text-[var(--primary-color)]">email</span>
                                    info@mirai-career.com
                                </p>
                                <p class="flex items-center text-base">
                                    <span class="material-icons mr-4 text-[var(--primary-color)]">phone</span>
                                    +81 3-1234-5678
                                </p>
                            </div>
                            <a class="mt-8 inline-block bg-[var(--primary-color)] text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition-colors duration-300 shadow-md text-center self-start" href="#">Contact Us</a>
                        </div>
                        <div class="lg:col-span-7 h-full rounded-lg overflow-hidden shadow-lg border border-gray-200"
                            x-data="{
                                isDragging: false,
                                startX: 0,
                                startY: 0,
                                scrollLeft: 0,
                                scrollTop: 0,
                                startDrag(e) {
                                    this.isDragging = true;
                                    const event = e.type.startsWith('touch') ? e.touches[0] : e;
                                    this.startX = event.pageX - this.$el.offsetLeft;
                                    this.startY = event.pageY - this.$el.offsetTop;
                                    this.scrollLeft = this.$el.scrollLeft;
                                    this.scrollTop = this.$el.scrollTop;
                                    this.$el.style.cursor = 'grabbing';
                                },
                                moveDrag(e) {
                                    if (!this.isDragging) return;
                                    e.preventDefault();
                                    const event = e.type.startsWith('touch') ? e.touches[0] : e;
                                    const x = event.pageX - this.$el.offsetLeft;
                                    const y = event.pageY - this.$el.offsetTop;
                                    const walkX = (x - this.startX) * 1.5;
                                    const walkY = (y - this.startY) * 1.5;
                                    this.$el.scrollLeft = this.scrollLeft - walkX;
                                    this.$el.scrollTop = this.scrollTop - walkY;
                                },
                                endDrag() {
                                    this.isDragging = false;
                                    this.$el.style.cursor = 'grab';
                                }
                            }">
                            <div @mousedown="startDrag" @mouseleave="endDrag" @mousemove.prevent="moveDrag" @mouseup="endDrag" @touchend="endDrag" @touchmove.prevent="moveDrag" @touchstart="startDrag" class="relative w-full h-full overflow-auto cursor-grab">
                                <iframe allowfullscreen="" class="absolute inset-0 w-full h-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Leuwiliang%2C%20Bogor&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 pt-8 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center">
                        <p class="text-sm text-gray-500 mb-6 sm:mb-0">Copyright © 2025 Mirai-Career. All Rights Reserved.</p>
                        <div class="flex space-x-4">
                            <a class="w-10 h-10 bg-gray-100 hover:bg-[var(--secondary-color)] text-gray-500 hover:text-[var(--primary-color)] rounded-full flex items-center justify-center transition-colors duration-300" href="#">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a class="w-10 h-10 bg-gray-100 hover:bg-[var(--secondary-color)] text-gray-500 hover:text-[var(--primary-color)] rounded-full flex items-center justify-center transition-colors duration-300" href="#">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a class="w-10 h-10 bg-gray-100 hover:bg-[var(--secondary-color)] text-gray-500 hover:text-[var(--primary-color)] rounded-full flex items-center justify-center transition-colors duration-300" href="#">
                                <i class="fab fa-youtube text-xl"></i>
                            </a>
                            <a class="w-10 h-10 bg-gray-100 hover:bg-[var(--secondary-color)] text-gray-500 hover:text-[var(--primary-color)] rounded-full flex items-center justify-center transition-colors duration-300" href="#">
                                <i class="fab fa-tiktok text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>