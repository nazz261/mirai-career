@extends('layouts.app')

@section('content')
<main class="flex-1" x-init="
    const sections = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.2 });
    sections.forEach(section => {
        observer.observe(section);
    });
">
    <!-- Hero Section with Background -->
    <section class="relative py-24 animate-fade-in is-visible overflow-hidden" data-animate="fade-in" style="background-image: linear-gradient(135deg, rgba(236, 72, 153, 0.85), rgba(219, 39, 119, 0.9)), url('https://images.unsplash.com/photo-1585829365295-ab7cd400c167?ixlib=rb-4.0.3&auto=format&fit=crop&w=2340&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-pink-400/80 to-rose-500/75"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white/10 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
        
        <div class="relative container mx-auto px-4 text-center z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                    Latest News & Updates
                </h1>
                <p class="text-xl md:text-2xl text-white/95 max-w-3xl mx-auto leading-relaxed drop-shadow-md">
                    Stay informed about career opportunities in Japan and our latest success stories.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured News Section -->
    <section class="py-20 section-bg-gray" data-animate="slide-up">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Featured News Card -->
                <div class="lg:col-span-2 animate-slide-left" data-animate="">
                    <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3" alt="Featured News" class="w-full h-80 object-cover">
                        <div class="p-8">
                            <span class="inline-block px-4 py-2 bg-[var(--secondary-color)] text-[var(--primary-color)] rounded-full text-sm font-semibold mb-4">Featured Story</span>
                            <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-4">Success Stories: From JLPT N5 to Working at Toyota</h2>
                            <p class="text-[var(--text-secondary)] mb-6">Discover how our comprehensive program helped international students achieve their dreams of working in Japan's automotive industry...</p>
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-[var(--primary-color)] text-white font-bold rounded-lg hover:bg-opacity-90 transition-all">
                                Read More
                                <span class="material-icons ml-2">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Latest Updates -->
                <div class="animate-slide-right" data-animate="">
                    <h3 class="text-2xl font-bold text-[var(--text-primary)] mb-6">Latest Updates</h3>
                    <div class="space-y-6">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <span class="text-sm text-[var(--primary-color)]">September 5, 2025</span>
                            <h4 class="text-xl font-bold text-[var(--text-primary)] my-2">New JLPT Preparation Course Launch</h4>
                            <p class="text-[var(--text-secondary)] mb-4">Introducing our enhanced JLPT preparation program...</p>
                            <a href="#" class="text-[var(--primary-color)] font-semibold hover:underline">Learn more →</a>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <span class="text-sm text-[var(--primary-color)]">September 3, 2025</span>
                            <h4 class="text-xl font-bold text-[var(--text-primary)] my-2">Partnership with Leading Tech Companies</h4>
                            <p class="text-[var(--text-secondary)] mb-4">Expanding job opportunities in Japan's tech sector...</p>
                            <a href="#" class="text-[var(--primary-color)] font-semibold hover:underline">Learn more →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Grid Section -->
    <section class="py-20 section-bg-white" data-animate="zoom-in">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-12">Recent News</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden animate-zoom-in" data-animate="">
                    <img src="https://picsum.photos/seed/{{ $i }}/800/400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-[var(--primary-color)]">September {{ $i }}, 2025</span>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] my-3">News Title {{ $i }}</h3>
                        <p class="text-[var(--text-secondary)] mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...</p>
                        <a href="#" class="inline-flex items-center text-[var(--primary-color)] font-semibold hover:underline">
                            Read More
                            <span class="material-icons ml-1 text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="inline-flex rounded-lg shadow">
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-[var(--text-primary)] hover:bg-gray-50 rounded-l-lg">Previous</a>
                    <a href="#" class="px-4 py-2 bg-[var(--primary-color)] text-white border border-[var(--primary-color)]">1</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-[var(--text-primary)] hover:bg-gray-50">2</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-[var(--text-primary)] hover:bg-gray-50">3</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-[var(--text-primary)] hover:bg-gray-50 rounded-r-lg">Next</a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 section-bg-gray" data-animate="slide-up">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-6">Subscribe to Our Newsletter</h2>
                <p class="text-[var(--text-secondary)] mb-8">Stay updated with the latest news, job opportunities, and success stories.</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Enter your email" class="px-6 py-3 rounded-lg border border-gray-300 flex-1 max-w-md focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent">
                    <button type="submit" class="px-8 py-3 bg-[var(--primary-color)] text-white font-bold rounded-lg hover:bg-opacity-90 transition-all inline-flex items-center justify-center">
                        <span class="material-icons mr-2">mail</span>
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection