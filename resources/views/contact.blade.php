@extends('layouts.app')

@section('content')
<main class="flex-1" x-init="
    const sections = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                if (entry.target.dataset.animate === 'contact-info') {
                    const items = entry.target.querySelectorAll('[data-contact-item]');
                    items.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('is-visible');
                        }, index * 200);
                    });
                }
            }
        });
    }, { threshold: 0.2 });
    sections.forEach(section => {
        observer.observe(section);
    });
">
    <!-- Hero Section with Background -->
    <section class="relative py-24 animate-fade-in is-visible overflow-hidden" data-animate="fade-in" style="background-image: linear-gradient(135deg, rgba(236, 72, 153, 0.85), rgba(219, 39, 119, 0.9)), url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2340&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        <!-- Background overlay for better text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-pink-400/80 to-rose-500/75"></div>
        
        <!-- Floating elements for visual interest -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white/10 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
        
        <div class="relative container mx-auto px-4 text-center z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                    Contact Mirai-Career
                </h1>
                <p class="text-xl md:text-2xl text-white/95 max-w-3xl mx-auto leading-relaxed drop-shadow-md">
                    Ready to start your journey? Get in touch with our team and take the first step towards your career in Japan.
                </p>
                
                <!-- Call-to-action buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact-form" class="inline-flex items-center px-8 py-4 bg-white text-[var(--primary-color)] font-bold rounded-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        <span class="material-icons mr-2">chat</span>
                        Send Message
                    </a>
                    <a href="tel:+81-3-1234-5678" class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-[var(--primary-color)] transform hover:scale-105 transition-all duration-300">
                        <span class="material-icons mr-2">phone</span>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Decorative wave at bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">

            </svg>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-20 section-bg-gray overflow-hidden" data-animate="slide-up" id="contact-form">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Form -->
                <div class="animate-slide-left" data-animate="">
                    <div class="bg-white rounded-xl shadow-2xl p-8">
                        <h2 class="text-3xl font-extrabold text-[var(--text-primary)] mb-6">Send us a Message</h2>
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-semibold text-[var(--text-primary)] mb-2">First Name</label>
                                    <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent transition-colors">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-semibold text-[var(--text-primary)] mb-2">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent transition-colors">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-[var(--text-primary)] mb-2">Email Address</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent transition-colors">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-[var(--text-primary)] mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent transition-colors">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-[var(--text-primary)] mb-2">Subject</label>
                                <select id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent transition-colors">
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="programs">Program Information</option>
                                    <option value="jlpt">JLPT Preparation</option>
                                    <option value="career">Career Consultation</option>
                                    <option value="partnership">Partnership Opportunities</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-semibold text-[var(--text-primary)] mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent transition-colors resize-vertical"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-[var(--primary-color)] text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                                <span class="material-icons mr-2">send</span>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="animate-slide-right" data-animate="">
                    <h2 class="text-3xl font-extrabold text-[var(--text-primary)] mb-6">Get in Touch</h2>
                    <p class="text-lg text-[var(--text-secondary)] mb-8">
                        We're here to help you every step of the way. Reach out to us through any of the following channels.
                    </p>
                    
                    <div class="space-y-6" data-animate="contact-info">
                        <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md" data-contact-item="">
                            <div class="flex-shrink-0 w-12 h-12 bg-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <span class="material-icons text-[var(--primary-color)] text-xl">location_on</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-[var(--text-primary)] mb-1">Office Address</h3>
                                <p class="text-[var(--text-secondary)]">
                                    123 Business District<br>
                                    Tokyo, Japan 100-0001
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md" data-contact-item="">
                            <div class="flex-shrink-0 w-12 h-12 bg-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <span class="material-icons text-[var(--primary-color)] text-xl">phone</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-[var(--text-primary)] mb-1">Phone Number</h3>
                                <p class="text-[var(--text-secondary)]">+81 (0)3-1234-5678</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md" data-contact-item="">
                            <div class="flex-shrink-0 w-12 h-12 bg-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <span class="material-icons text-[var(--primary-color)] text-xl">email</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-[var(--text-primary)] mb-1">Email Address</h3>
                                <p class="text-[var(--text-secondary)]">info@mirai-career.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md" data-contact-item="">
                            <div class="flex-shrink-0 w-12 h-12 bg-[var(--secondary-color)] rounded-full flex items-center justify-center">
                                <span class="material-icons text-[var(--primary-color)] text-xl">schedule</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-[var(--text-primary)] mb-1">Business Hours</h3>
                                <p class="text-[var(--text-secondary)]">
                                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 10:00 AM - 4:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 section-bg-white" data-animate="zoom-in">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-zoom-in" data-animate="">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Find Us</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Visit our office in the heart of Tokyo's business district.
                </p>
            </div>
            <div class="bg-gray-300 rounded-xl overflow-hidden shadow-2xl h-96 animate-zoom-in" data-animate="">
                <!-- Placeholder for map - you can integrate Google Maps or similar -->
                <div class="w-full h-full flex items-center justify-center text-[var(--text-secondary)]">
                    <div class="text-center">
                        <span class="material-icons text-6xl mb-4">map</span>
                        <p class="text-xl">Interactive Map Coming Soon</p>
                        <p class="text-sm mt-2">123 Business District, Tokyo, Japan 100-0001</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 section-bg-gray" data-animate="slide-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-slide-up" data-animate="">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Quick answers to common questions about our programs and services.
                </p>
            </div>
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-slide-up" data-animate="" style="transition-delay: 100ms;">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-bold text-[var(--text-primary)] flex items-center">
                            <span class="material-icons mr-2 text-[var(--primary-color)]">help_outline</span>
                            What programs do you offer?
                        </h3>
                    </div>
                    <div class="p-6">
                        <p class="text-[var(--text-secondary)]">
                            We offer comprehensive JLPT preparation courses, career development programs, and job placement assistance specifically designed for international professionals seeking opportunities in Japan.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-slide-up" data-animate="" style="transition-delay: 200ms;">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-bold text-[var(--text-primary)] flex items-center">
                            <span class="material-icons mr-2 text-[var(--primary-color)]">help_outline</span>
                            How long are the programs?
                        </h3>
                    </div>
                    <div class="p-6">
                        <p class="text-[var(--text-secondary)]">
                            Program duration varies depending on your goals and current level. JLPT preparation courses range from 3-12 months, while our comprehensive career programs can take 6-18 months to complete.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-slide-up" data-animate="" style="transition-delay: 300ms;">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-bold text-[var(--text-primary)] flex items-center">
                            <span class="material-icons mr-2 text-[var(--primary-color)]">help_outline</span>
                            Do you provide job placement assistance?
                        </h3>
                    </div>
                    <div class="p-6">
                        <p class="text-[var(--text-secondary)]">
                            Yes! We have partnerships with leading Japanese companies and provide comprehensive job placement assistance, including resume preparation, interview coaching, and direct introductions to potential employers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection