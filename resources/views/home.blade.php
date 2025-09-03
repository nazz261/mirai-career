<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mirai-Career</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style type="text/tailwindcss">
        :root {
            --primary-color: #e61980;
            --secondary-color: #fce4ec;
            --background-color: #F8F9FA;
            --text-primary: #1A202C;
            --text-secondary: #4A5568;
            --accent-color: #ffcc00;
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
            background-image:
                linear-gradient(rgba(236, 239, 241, 0.8) 1px, transparent 1px),
                linear-gradient(90deg, rgba(236, 239, 241, 0.8) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        .section-bg-white {
            background-color: #ffffff;
        }
        .section-bg-gray {
            background-color: #F8F9FA;
        }
    </style>
</head>
<body class="bg-[var(--background-color)] text-[var(--text-primary)] japanese-bg">
<div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="bg-white shadow-sm py-4 px-10 flex justify-between items-center border-b border-gray-200">
<div class="flex items-center gap-3">
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
</div>
<nav class="flex items-center gap-8">
<div class="hidden md:flex items-center gap-6">
<a class="text-[var(--primary-color)] font-bold transition-colors duration-200 ease-in-out" href="#">Home</a>
<a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] font-medium transition-colors duration-200 ease-in-out" href="#">About</a>
<div class="relative group">
<a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] font-medium transition-colors duration-200 ease-in-out flex items-center py-5" href="#">Programs
                            <svg class="ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" fill-rule="evenodd"></path>
</svg>
</a>
<div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-0 py-2 w-48 z-10 dropdown-menu">
<a class="block px-4 py-2 text-sm text-[var(--text-secondary)] hover:bg-gray-100 hover:text-[var(--primary-color)]" href="#">JLPT Preparation</a>
<a class="block px-4 py-2 text-sm text-[var(--text-secondary)] hover:bg-gray-100 hover:text-[var(--primary-color)]" href="#">SSW Preparation</a>
</div>
</div>
<a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] font-medium transition-colors duration-200 ease-in-out" href="#">Contact</a>
<a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] font-medium transition-colors duration-200 ease-in-out" href="#">News</a>
</div>
</nav>
</header>
<main class="flex-1">
<section class="relative section-bg-white">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDmpDT7TC4N0Vw7bJ5iLzchQdsTTRr6yPKh3pTsi6ZfHtSgS_6OdWCmwcg54jTMg6axpjbWgxs3pxkrekpy0PcLsP9c1pmP8fU9xzkexdkC7LmPRJ1ABEHh9z-bNdTh7dSeSzcPqfVq68AS1nv7KPwwaUo3G7FfyPiGfwm7u_v1ElEllfNNpgz1WOiLMGbgo79oQhx-SuvEype3V9Cya632EO6b18IWH0qbaLQrGEvCDPlWS0-uvZuh0xzdFf4-5gR8teqJmJui1_bZ");'></div>
<div class="absolute inset-0 bg-black bg-opacity-50"></div>
<div class="relative container mx-auto px-4 py-32 text-center text-white">
<h1 class="text-5xl font-extrabold mb-4 leading-tight">TEST Mirai-Career: Your Path to a Brighter Future</h1>
<p class="text-xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Unlock your potential with our comprehensive career development programs. Explore new opportunities and achieve your professional goals.
                    </p>
<button class="bg-[var(--primary-color)] text-white px-8 py-4 rounded-md text-lg font-bold hover:bg-pink-700 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-opacity-50">
                        Join Us
                    </button>
</div>
</section>
<section class="py-20 section-bg-gray">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">JLPT Preparation Programs</h2>
<p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                            Achieve your desired Japanese Language Proficiency Test level with our targeted courses, designed for every stage of your learning journey.
                        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
<h3 class="text-2xl font-bold text-[var(--primary-color)]">N5</h3>
<p class="text-sm font-semibold text-[var(--text-secondary)]">Basic</p>
</div>
<div class="p-6 flex-grow flex flex-col">
<p class="text-[var(--text-secondary)] mb-6 text-center flex-grow">Understand some basic Japanese, focusing on foundational grammar and vocabulary.</p>
<a class="block w-full text-center bg-[var(--primary-color)] text-white py-2 rounded-md font-bold hover:bg-pink-700 transition-colors duration-300 mt-auto" href="#">Learn More</a>
</div>
</div>
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
<h3 class="text-2xl font-bold text-[var(--primary-color)]">N4</h3>
<p class="text-sm font-semibold text-[var(--text-secondary)]">Elementary</p>
</div>
<div class="p-6 flex-grow flex flex-col">
<p class="text-[var(--text-secondary)] mb-6 text-center flex-grow">Understand basic Japanese used in daily conversations and simple written materials.</p>
<a class="block w-full text-center bg-[var(--primary-color)] text-white py-2 rounded-md font-bold hover:bg-pink-700 transition-colors duration-300 mt-auto" href="#">Learn More</a>
</div>
</div>
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
<h3 class="text-2xl font-bold text-[var(--primary-color)]">N3</h3>
<p class="text-sm font-semibold text-[var(--text-secondary)]">Intermediate</p>
</div>
<div class="p-6 flex-grow flex flex-col">
<p class="text-[var(--text-secondary)] mb-6 text-center flex-grow">Understand Japanese used in everyday situations to a certain degree.</p>
<a class="block w-full text-center bg-[var(--primary-color)] text-white py-2 rounded-md font-bold hover:bg-pink-700 transition-colors duration-300 mt-auto" href="#">Learn More</a>
</div>
</div>
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
<h3 class="text-2xl font-bold text-[var(--primary-color)]">N2</h3>
<p class="text-sm font-semibold text-[var(--text-secondary)]">Upper-Intermediate</p>
</div>
<div class="p-6 flex-grow flex flex-col">
<p class="text-[var(--text-secondary)] mb-6 text-center flex-grow">Understand Japanese used in a variety of circumstances with natural speed.</p>
<a class="block w-full text-center bg-[var(--primary-color)] text-white py-2 rounded-md font-bold hover:bg-pink-700 transition-colors duration-300 mt-auto" href="#">Learn More</a>
</div>
</div>
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
<div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
<h3 class="text-2xl font-bold text-[var(--primary-color)]">N1</h3>
<p class="text-sm font-semibold text-[var(--text-secondary)]">Advanced</p>
</div>
<div class="p-6 flex-grow flex flex-col">
<p class="text-[var(--text-secondary)] mb-6 text-center flex-grow">Understand Japanese used in a broad range of circumstances, approaching native level.</p>
<a class="block w-full text-center bg-[var(--primary-color)] text-white py-2 rounded-md font-bold hover:bg-pink-700 transition-colors duration-300 mt-auto" href="#">Learn More</a>
</div>
</div>
</div>
</div>
</section>
<section class="py-20 section-bg-white" x-data="{
                    slides: [
                        { icon: 'local_hospital', title: 'Nursing Care' },
                        { icon: 'cleaning_services', title: 'Building Cleaning Management' },
                        { icon: 'construction', title: 'Construction' },
                        { icon: 'build_circle', title: 'Machine Parts and Tooling' },
                        { icon: 'precision_manufacturing', title: 'Industrial Machinery' },
                        { icon: 'memory', title: 'Electric and Information Industries' },
                        { icon: 'directions_boat', title: 'Shipbuilding and Ship Machinery' },
                        { icon: 'car_repair', title: 'Automobile Repair and Maintenance' },
                        { icon: 'flight', title: 'Aviation' },
                        { icon: 'hotel', title: 'Accommodation' },
                        { icon: 'agriculture', title: 'Agriculture and Aquaculture' },
                        { icon: 'fastfood', title: 'Food and Beverage Manufacturing' },
                        { icon: 'restaurant', title: 'Food Service' }
                    ],
                    activeSlide: 0,
                    slidesVisible: 4,
                    get totalSlides() {
                        return this.slides.length;
                    },
                    get totalPages() {
                        return Math.ceil(this.totalSlides / this.slidesVisible);
                    },
                    get currentPage() {
                        return Math.floor(this.activeSlide / this.slidesVisible);
                    },
                    next() {
                       this.activeSlide = (this.activeSlide + this.slidesVisible) % this.totalSlides;
                    },
                    prev() {
                       this.activeSlide = (this.activeSlide - this.slidesVisible + this.totalSlides) % this.totalSlides;
                    },
                     goToPage(page) {
                        this.activeSlide = page * this.slidesVisible;
                    }
                }">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Specified Skilled Worker (SSW) Preparation Programs</h2>
<p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                            Specialized training programs to prepare you for a successful career in Japan's key industries under the SSW visa.
                        </p>
</div>
<div class="relative">
<div class="overflow-hidden">
<div :style="{ transform: `translateX(-${(activeSlide / slidesVisible) * 100}%)` }" class="flex transition-transform duration-500 ease-in-out -mx-4">
<template :key="index" x-for="(slide, index) in slides">
<div class="w-1/4 flex-shrink-0 px-4 py-4">
<div class="group/item bg-gray-50 rounded-lg p-6 text-center flex flex-col h-full border border-gray-200 transition-all duration-300 hover:border-[var(--primary-color)] relative">
<div class="w-full h-full flex flex-col items-center justify-between transition-transform duration-300 group-hover/item:scale-105">
<i class="material-icons text-4xl text-[var(--primary-color)] mb-4" x-text="slide.icon"></i>
<h3 class="text-lg font-semibold text-[var(--text-primary)] mb-4 flex-grow flex items-center text-center" x-text="slide.title"></h3>
<a class="bg-[var(--primary-color)] text-white px-4 py-2 rounded-md text-sm font-bold hover:bg-pink-700 transition-colors duration-300 mt-auto" href="#">Learn More</a>
</div>
</div>
</div>
</template>
</div>
</div>
<button @click="prev" class="absolute top-1/2 -translate-y-1/2 -left-6 bg-[var(--primary-color)] text-white rounded-full shadow-lg w-12 h-12 flex items-center justify-center hover:bg-pink-700 transition z-20">
<i class="material-icons">chevron_left</i>
</button>
<button @click="next" class="absolute top-1/2 -translate-y-1/2 -right-6 bg-[var(--primary-color)] text-white rounded-full shadow-lg w-12 h-12 flex items-center justify-center hover:bg-pink-700 transition z-20">
<i class="material-icons">chevron_right</i>
</button>
</div>
<div class="flex justify-center mt-8 space-x-2">
<template :key="page" x-for="page in totalPages">
<button :class="{ 'bg-[var(--primary-color)]': currentPage === page - 1, 'bg-gray-300': currentPage !== page - 1 }" @click="goToPage(page - 1)" class="w-3 h-3 rounded-full transition-colors"></button>
</template>
</div>
</div>
</section>
</main>

<footer class="bg-white text-gray-700 pt-20 pb-10 border-t border-gray-200">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
<div class="lg:col-span-5 flex flex-col">
<h3 class="text-2xl font-bold text-[var(--text-primary)] mb-6">Get in Touch</h3>
<div class="space-y-5 text-[var(--text-secondary)] flex-grow">
<p class="flex items-start text-base"><span class="material-icons mr-4 text-[var(--primary-color)] mt-1">location_on</span><span>1-1-1 Chiyoda, Chiyoda-ku,<br/>Tokyo, Japan</span></p>
<p class="flex items-center text-base"><span class="material-icons mr-4 text-[var(--primary-color)]">email</span>info@mirai-career.com</p>
<p class="flex items-center text-base"><span class="material-icons mr-4 text-[var(--primary-color)]">phone</span>+81 3-1234-5678</p>
</div>
<a class="mt-8 inline-block bg-[var(--primary-color)] text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition-colors duration-300 shadow-md text-center self-start" href="#">Contact Us</a>
</div>
<div class="lg:col-span-7 h-full rounded-lg overflow-hidden shadow-lg border border-gray-200" x-data="{
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

</body></html>