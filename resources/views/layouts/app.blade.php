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
                        <svg class="h-8 w-8 text-[var(--primary-color)]" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6_543)">
                                <path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
                                <path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_6_543">
                                    <rect fill="white" height="48" width="48"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <h2 class="text-2xl font-bold text-[var(--primary-color)]">Mirai-Career</h2>
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
                                <iframe allowfullscreen="" class="absolute inset-0 w-full h-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.827855365538!2d139.7523176152589!3d35.6812362801944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf90839e4dd%3A0x9541a7c062779785!2sImperial%20Palace!5e0!3m2!1sen!2sjp!4v1683264245678!5m2!1sen!2sjp" style="border:0;"></iframe>
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