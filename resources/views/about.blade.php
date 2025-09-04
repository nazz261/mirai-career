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
    <section class="relative section-bg-white py-24 animate-fade-in is-visible" data-animate="fade-in">
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-5xl font-extrabold text-[var(--text-primary)] mb-4">About Mirai-Career</h1>
            <p class="text-xl text-[var(--text-secondary)] max-w-3xl mx-auto">
                Pioneering pathways for global talent to thrive in Japan's dynamic professional landscape.
            </p>
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
                    <img alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOwZ0-X1aMGA3xr13qiWWuLkzRdbtbziJW-MYwVxNKCMlTpo8eMhdvsuljYwXdWlLJr4IktBMvlGB5HRemyA41NHcnJoYj8EelKE5-y_Hp37KEUtk1PkUOVfZjAUT4JcVE48R06nML99NTZTiMKtaJpcRzHDyrTxxa71sjHhBrOry-JqLfwrLcIt6Mkx5ulc7gmN6ShsJY0CWy91EN74OS_cYrs6Fs4IwGUl1i2aeXlPaI2xi-xWRAlREJxeiZDffI_hoDujoCGDib"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Kenji Tanaka</h3>
                    <p class="text-[var(--primary-color)] font-semibold">CEO &amp; Founder</p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjWxWFPNQBepuPCRbPtb3XW_WwXJh2YhYUVEXZ1n8LrV2-rsCM_eHDiu7vbv0KsMFztfWvROOQtYApUcugATA-6Be_1CMPHVV4VEeeg7obx33tVQhyMKzJyZtutSkmAmnT8EmzySfWwaHGWH-A7hh86wcd2F6BisqEl9DvGNGFwmoIjukyDbEh_spVmH_MbUd6NLylaTNJfA-O7TSnfvg9gKCzR1d-FfAqOPQyo5wXV8D5-cHTEgAbdX1DpyoDhAtkeZlyAli72Vu7"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Yuki Sato</h3>
                    <p class="text-[var(--primary-color)] font-semibold">Head of Programs</p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD77LFwAOGa48YYg-FjwW7ReWJk9tIGxnrzOtQt0tVkSknUovv19sHH4rlu4-XtMNVEElLyczNhmlBwQ4F3GcP8VWtQgEwLtiiNHcH44-ZCOE4XHOrdKZR1PV1StKJEolh9l1tljrGbbk9fkqWrA_uByFRYdQU04wyaAmKRYaqoDpGJ27GsQwCs1JoFSJFHtXpBRGiuFMdbpt9aq_Acw7EK3mF4yqGlGO2iYnQf_zyJbFnyKBYVR_jXybXoDI5TjveTe2mK_qr5Sjm7"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Haruto Ito</h3>
                    <p class="text-[var(--primary-color)] font-semibold">Lead Instructor</p>
                </div>
                <div class="text-center bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition-transform duration-300" data-team-member="">
                    <img alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-[var(--secondary-color)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCX5JHe7H4u2bi5ssDQ4KgqM0eG6l3kOt8UnGyfy4e2tL-6sjfZ7uEeRm0oFBq5Mi6BBCfcx3DtjXM_tZjqwGtU1T90GKEuxjaR0nRzMbk_RKPP67jGM-oqWSwVR689IRNNOKjIil1AhNpoFgawwRce4nbi71Doh5fosk4bjiq98C1o9ene4HYRuINbc-s3AGDJqkTyglXyHSzJ22K8mswNr98_fld0Czi9DaCS6Cy1rlTT2qmKjmqXSIcRQtubVzWDCSPt55NunBZM"/>
                    <h3 class="text-xl font-bold text-[var(--text-primary)]">Airi Yamamoto</h3>
                    <p class="text-[var(--primary-color)] font-semibold">Student Support Manager</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection