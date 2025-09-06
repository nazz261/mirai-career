@extends('layouts.app')

@section('content')
<main class="flex-1" x-init="
    const sections = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                if (entry.target.dataset.animate === 'team-section') {
                    const members = entry.target.querySelectorAll('[data-team-member]');
                    members.forEach((member, index) => {
                        setTimeout(() => {
                            member.classList.add('is-visible');
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
    <!-- Replace the existing hero section with this -->
    <section class="relative py-24 animate-fade-in overflow-hidden" data-animate="fade-in" style="background-image: linear-gradient(135deg, rgba(236, 72, 153, 0.85), rgba(219, 39, 119, 0.9)), url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2340&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-pink-400/80 to-rose-500/75"></div>
        
        <!-- Floating elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white/10 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
        
        <div class="relative container mx-auto px-4 text-center z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                    About Mirai-Career
                </h1>
                <p class="text-xl md:text-2xl text-white/95 max-w-3xl mx-auto leading-relaxed drop-shadow-md">
                    Pioneering pathways for global talent to thrive in Japan's dynamic professional landscape.
                </p>
            </div>
        </div>
        
        <!-- Decorative wave at bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">

            </svg>
        </div>
    </section>
    <section class="py-20 section-bg-gray overflow-hidden" data-animate="slide-up">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="animate-slide-left" data-animate="">
                    <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-6">Our Mission &amp; Vision</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-2 flex items-center">
                                <span class="material-icons mr-2">rocket_launch</span>Mission
                            </h3>
                            <p class="text-[var(--text-secondary)] text-lg leading-relaxed">
                                To empower aspiring professionals worldwide by providing exceptional training and seamless pathways to successful careers in Japan. We are committed to bridging the gap between global talent and Japanese industries, fostering mutual growth and cultural understanding.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-2 flex items-center">
                                <span class="material-icons mr-2">visibility</span>Vision
                            </h3>
                            <p class="text-[var(--text-secondary)] text-lg leading-relaxed">
                                To be the leading and most trusted partner for career development in Japan, recognized for our commitment to quality, integrity, and the long-term success of our students and corporate partners. We envision a future where talent knows no borders.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-2xl animate-slide-right" data-animate="">
                    <img alt="Office meeting" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3Jw0EN-jYa2T9ubyr_bGCwpDN1HFnPAKXAAPQ8rQ0titPQAaCpMKRT37qOwXTq4OPHR9iTxjWHgOw7Q3vCpOIq8-cjJQPkZURK-Lelpc5QZvL0dDVqmtDdWLwxMTC1bl-yloG7PTxjGfeatfYatNjb91Lah6d2OEZ4BRtZsJqsw7QxrKCHbpr_iPUXpDKd7s8tiEKOre1zYtZdzI7IA1X0JIjCX9Uk_RZxDfTxEk5Ru5GhiyDa_3SbIhVTQgfMP_kBE0hJ8cwuz_D"/>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 section-bg-white" data-animate="zoom-in">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-zoom-in" data-animate="">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Our Core Values</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    The principles that guide our every action and define our character.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-lg border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 animate-zoom-in" data-animate="" style="transition-delay: 100ms;">
                    <div class="inline-block p-4 bg-[var(--secondary-color)] rounded-full mb-4">
                        <span class="material-icons text-4xl text-[var(--primary-color)]">handshake</span>
                    </div>
                    <h3 class="text-2xl font-bold text-[var(--text-primary)] mb-2">Integrity</h3>
                    <p class="text-[var(--text-secondary)]">
                        We operate with honesty, transparency, and a strong sense of ethics in all our interactions.
                    </p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-lg border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 animate-zoom-in" data-animate="" style="transition-delay: 200ms;">
                    <div class="inline-block p-4 bg-[var(--secondary-color)] rounded-full mb-4">
                        <span class="material-icons text-4xl text-[var(--primary-color)]">school</span>
                    </div>
                    <h3 class="text-2xl font-bold text-[var(--text-primary)] mb-2">Excellence</h3>
                    <p class="text-[var(--text-secondary)]">
                        We strive for the highest standards in education and support services, ensuring the best outcomes for our students.
                    </p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-lg border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 animate-zoom-in" data-animate="" style="transition-delay: 300ms;">
                    <div class="inline-block p-4 bg-[var(--secondary-color)] rounded-full mb-4">
                        <span class="material-icons text-4xl text-[var(--primary-color)]">groups</span>
                    </div>
                    <h3 class="text-2xl font-bold text-[var(--text-primary)] mb-2">Collaboration</h3>
                    <p class="text-[var(--text-secondary)]">
                        We build strong partnerships with students, companies, and communities to create shared success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 section-bg-gray" data-animate="team-section">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-slide-up" data-animate="">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Meet Our Team</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    The dedicated professionals behind your success story.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Kenji Tanaka" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)] object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=256&h=256&q=80"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Kenji Tanaka</h3>
                    <p class="text-[var(--primary-color)] font-semibold">CEO & Founder</p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Yuki Sato" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)] object-cover" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=256&h=256&q=80"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Yuki Sato</h3>
                    <p class="text-[var(--primary-color)] font-semibold">Head of Programs</p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Haruto Ito" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)] object-cover" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=256&h=256&q=80"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Haruto Ito</h3>
                    <p class="text-[var(--primary-color)] font-semibold">Lead Instructor</p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Airi Yamamoto" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)] object-cover" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=256&h=256&q=80"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Airi Yamamoto</h3>
                    <p class="text-[var(--primary-color)] font-semibold">Student Support Manager</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection