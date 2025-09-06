@extends('layouts.app')
@section('content')

<main class="flex-1">
    
    <!-- Hero -->
    <section class="relative bg-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-fixed" style='background-image: linear-gradi    <!-- SSW Preparation Programs - Enhanced Design -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-3">
            <div class="absolute inset-0" style="background-image: linear-gradient(45deg, #ec489950 25%, transparent 25%), linear-gradient(-45deg, #ec489950 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #ec489950 75%), linear-gradient(-45deg, transparent 75%, #ec489950 75%); background-size: 60px 60px; background-position: 0 0, 0 30px, 30px -30px, -30px 0px;"></div>
        </div>t(135deg, rgba(236, 72, 153, 0.85), rgba(219, 39, 119, 0.9)), url("https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2340&q=80");'></div>
        <div class="absolute inset-0 bg-gradient-to-r from-pink-500/80 to-rose-600/75"></div>
        
        <!-- Enhanced floating elements with better animations -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full animate-bounce backdrop-blur-sm" style="animation-delay: 0s; animation-duration: 3s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white/15 rounded-full animate-bounce backdrop-blur-sm" style="animation-delay: 1s; animation-duration: 2.5s;"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white/20 rounded-full animate-bounce backdrop-blur-sm" style="animation-delay: 2s; animation-duration: 3.5s;"></div>
        <div class="absolute top-1/2 right-1/4 w-8 h-8 bg-white/10 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-1/3 right-10 w-14 h-14 bg-white/15 rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
        
        <div class="relative container mx-auto px-4 py-32 text-center text-white z-10">
            <div class="max-w-5xl mx-auto">
                <div class="mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <span class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 text-sm font-medium border border-white/30">
                        <span class="material-icons text-lg">trending_up</span>
                        Building Careers in Japan Since 2020
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 drop-shadow-2xl leading-tight animate-fade-in-up" style="animation-delay: 0.4s;">
                    Mirai-Career: Your Path to a 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-pink-200 to-white">Brighter Future</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/95 mb-10 max-w-4xl mx-auto leading-relaxed drop-shadow-lg animate-fade-in-up" style="animation-delay: 0.6s;">
                    Unlock your potential with our comprehensive career development programs. Join thousands who've successfully launched their careers in Japan.
                </p>
                
                <!-- Enhanced call-to-action buttons -->
                <div class="mt-12 flex flex-col sm:flex-row gap-6 justify-center animate-fade-in-up" style="animation-delay: 0.8s;">
                    <a href="/jlpt-preparation" class="group inline-flex items-center px-10 py-5 bg-white text-[var(--primary-color)] font-bold rounded-2xl hover:bg-gray-50 transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 shadow-xl hover:shadow-2xl border-2 border-transparent hover:border-white/20">
                        <span class="material-icons mr-3 text-xl group-hover:animate-pulse">school</span>
                        <span class="text-lg">Start Learning Journey</span>
                        <span class="material-icons ml-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                    <a href="/contact" class="group inline-flex items-center px-10 py-5 bg-transparent border-2 border-white text-white font-bold rounded-2xl hover:bg-white hover:text-[var(--primary-color)] transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 backdrop-blur-sm">
                        <span class="material-icons mr-3 text-xl group-hover:animate-pulse">contact_support</span>
                        <span class="text-lg">Get Free Consultation</span>
                        <span class="material-icons ml-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
                
                <!-- Trust indicators -->
                <div class="mt-16 animate-fade-in-up" style="animation-delay: 1s;">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-3xl mx-auto"
                        x-data="{
                            graduates: 0,
                            placement: 0,
                            partners: 0,
                            init() {
                                const animate = (target, endValue, duration) => {
                                    const start = performance.now();
                                    const update = currentTime => {
                                        const elapsed = currentTime - start;
                                        const progress = Math.min(elapsed / duration, 1);
                                        
                                        this[target] = Math.floor(endValue * progress);
                                        
                                        if (progress < 1) {
                                            requestAnimationFrame(update);
                                        }
                                    };
                                    requestAnimationFrame(update);
                                };

                                setTimeout(() => {
                                    animate('graduates', 5000, 2000);
                                    animate('placement', 98, 2000);
                                    animate('partners', 50, 2000);
                                }, 500);
                            }
                        }">
                        <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-xl">
                            <h3 class="text-4xl font-bold text-white mb-2">
                                <span x-text="graduates">0</span>+
                            </h3>
                            <p class="text-white/90 font-medium">Successful Graduates</p>
                        </div>
                        <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-xl">
                            <h3 class="text-4xl font-bold text-white mb-2">
                                <span x-text="placement">0</span>%
                            </h3>
                            <p class="text-white/90 font-medium">Job Placement Rate</p>
                        </div>
                        <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-xl">
                            <h3 class="text-4xl font-bold text-white mb-2">
                                <span x-text="partners">0</span>+
                            </h3>
                            <p class="text-white/90 font-medium">Partner Companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Decorative wave at bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">


            </svg>
        </div>
    </section>

    <!-- JLPT Preparation Programs -->
    <section class="py-24 bg-gray-50 relative overflow-hidden" x-data="{ showModal: false, modalTitle: '', modalContent: '' }">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #ec4899 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center gap-2 bg-[var(--primary-color)]/10 rounded-full px-6 py-3 text-sm font-medium text-[var(--primary-color)] mb-6">
                    <span class="material-icons text-lg">language</span>
                    Japanese Language Proficiency
                </div>
                <h2 class="text-5xl md:text-6xl font-extrabold text-[var(--text-primary)] mb-6 leading-tight">
                    JLPT Preparation Programs
                </h2>
                <p class="text-xl text-[var(--text-secondary)] max-w-4xl mx-auto leading-relaxed">
                    Achieve your desired Japanese Language Proficiency Test level with our targeted courses, designed for every stage of your learning journey.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-16">
                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-transparent hover:border-[var(--primary-color)]/20 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 flex flex-col cursor-pointer relative" @click="modalTitle = 'JLPT N5 - Basic'; modalContent = 'Understand some basic Japanese, focusing on foundational grammar and vocabulary. Perfect for absolute beginners starting their Japanese journey.'; showModal = true" role="button" tabindex="0">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="p-8 text-center border-b-4 border-[var(--primary-color)] relative z-10">
                        <div class="bg-[var(--primary-color)]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-[var(--primary-color)] transition-colors duration-300">
                            <span class="text-3xl font-bold text-[var(--primary-color)] group-hover:text-white transition-colors duration-300">N5</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--primary-color)] mb-2">JLPT N5</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">Basic Level</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center relative z-10">
                        <p class="text-[var(--text-secondary)] text-center leading-relaxed mb-4">Master foundational Japanese grammar, vocabulary, and basic conversation skills.</p>
                        <div class="flex items-center justify-center text-xs text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">
                            <span class="material-icons text-sm mr-1">schedule</span>
                            3-6 months
                        </div>
                    </div>
                    <!-- Hover effect -->
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-pink-400 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </div>

                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-transparent hover:border-[var(--primary-color)]/20 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 flex flex-col cursor-pointer relative" @click="modalTitle = 'JLPT N4 - Elementary'; modalContent = 'Understand basic Japanese used in daily conversations and simple written materials. Build upon your foundational knowledge.'; showModal = true" role="button" tabindex="0">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="p-8 text-center border-b-4 border-[var(--primary-color)] relative z-10">
                        <div class="bg-[var(--primary-color)]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-[var(--primary-color)] transition-colors duration-300">
                            <span class="text-3xl font-bold text-[var(--primary-color)] group-hover:text-white transition-colors duration-300">N4</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--primary-color)] mb-2">JLPT N4</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">Elementary Level</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center relative z-10">
                        <p class="text-[var(--text-secondary)] text-center leading-relaxed mb-4">Handle daily conversations and understand simple written materials with confidence.</p>
                        <div class="flex items-center justify-center text-xs text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">
                            <span class="material-icons text-sm mr-1">schedule</span>
                            4-8 months
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-pink-400 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </div>

                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-transparent hover:border-[var(--primary-color)]/20 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 flex flex-col cursor-pointer relative" @click="modalTitle = 'JLPT N3 - Intermediate'; modalContent = 'Understand Japanese used in everyday situations to a certain degree. Gateway to advanced Japanese proficiency.'; showModal = true" role="button" tabindex="0">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="p-8 text-center border-b-4 border-[var(--primary-color)] relative z-10">
                        <div class="bg-[var(--primary-color)]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-[var(--primary-color)] transition-colors duration-300">
                            <span class="text-3xl font-bold text-[var(--primary-color)] group-hover:text-white transition-colors duration-300">N3</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--primary-color)] mb-2">JLPT N3</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">Intermediate Level</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center relative z-10">
                        <p class="text-[var(--text-secondary)] text-center leading-relaxed mb-4">Navigate everyday situations and understand more complex Japanese content.</p>
                        <div class="flex items-center justify-center text-xs text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">
                            <span class="material-icons text-sm mr-1">schedule</span>
                            6-10 months
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-pink-400 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </div>

                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-transparent hover:border-[var(--primary-color)]/20 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 flex flex-col cursor-pointer relative" @click="modalTitle = 'JLPT N2 - Upper-Intermediate'; modalContent = 'Understand Japanese used in a variety of circumstances with natural speed. Essential for professional work.'; showModal = true" role="button" tabindex="0">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="p-8 text-center border-b-4 border-[var(--primary-color)] relative z-10">
                        <div class="bg-[var(--primary-color)]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-[var(--primary-color)] transition-colors duration-300">
                            <span class="text-3xl font-bold text-[var(--primary-color)] group-hover:text-white transition-colors duration-300">N2</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--primary-color)] mb-2">JLPT N2</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">Upper-Intermediate</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center relative z-10">
                        <p class="text-[var(--text-secondary)] text-center leading-relaxed mb-4">Handle complex situations and professional communications effectively.</p>
                        <div class="flex items-center justify-center text-xs text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">
                            <span class="material-icons text-sm mr-1">schedule</span>
                            8-12 months
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-pink-400 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </div>

                <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-transparent hover:border-[var(--primary-color)]/20 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 flex flex-col cursor-pointer relative" @click="modalTitle = 'JLPT N1 - Advanced'; modalContent = 'Understand Japanese used in a broad range of circumstances, approaching native level. Master advanced business Japanese.'; showModal = true" role="button" tabindex="0">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="p-8 text-center border-b-4 border-[var(--primary-color)] relative z-10">
                        <div class="bg-[var(--primary-color)]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-[var(--primary-color)] transition-colors duration-300">
                            <span class="text-3xl font-bold text-[var(--primary-color)] group-hover:text-white transition-colors duration-300">N1</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--primary-color)] mb-2">JLPT N1</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">Advanced Level</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center relative z-10">
                        <p class="text-[var(--text-secondary)] text-center leading-relaxed mb-4">Achieve near-native proficiency for advanced professional opportunities.</p>
                        <div class="flex items-center justify-center text-xs text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">
                            <span class="material-icons text-sm mr-1">schedule</span>
                            10-15 months
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-pink-400 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                </div>
            </div>

            <div class="text-center">
                <div class="bg-gradient-to-r from-[var(--primary-color)] to-pink-500 rounded-3xl p-8 md:p-12 text-white inline-block shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-center gap-4 mb-6">
                        <div class="bg-white/20 p-3 rounded-full">
                            <span class="material-icons text-2xl">school</span>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold mb-1">Ready to Start?</h3>
                            <p class="text-pink-100">Join 5000+ successful students</p>
                        </div>
                    </div>
                    <a href="/jlpt-preparation" class="inline-flex items-center gap-3 bg-white text-[var(--primary-color)] px-8 py-4 rounded-2xl text-lg font-bold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span class="material-icons">rocket_launch</span>
                        Enroll in JLPT Class Now!
                        <span class="material-icons">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- JLPT Modal -->
            <div
                x-show="showModal"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                style="display: none;"
                @click.self="showModal = false"
            >
                <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-8 relative">
                    <button @click="showModal = false" class="absolute top-3 right-3 text-gray-400 hover:text-[var(--primary-color)] text-2xl font-bold focus:outline-none" aria-label="Close">
                        &times;
                    </button>
                    <h3 class="text-2xl font-bold text-[var(--primary-color)] mb-4" x-text="modalTitle"></h3>
                    <p class="text-[var(--text-secondary)] text-base" x-text="modalContent"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- SSW Preparation Programs - Enhanced Design -->
    <section class="py-24 bg-white relative overflow-hidden"
        x-data="{
            showModal: false,
            modalTitle: '',
            modalContent: '',
            modalIcon: '',
            modalColor: '',
            query: '',
            programs: [
                { icon: 'local_hospital', title: 'Nursing Care', detail: 'Comprehensive training for caregiving, elderly support, and nursing skills in Japan. Learn about patient care, medical terminology, and Japanese healthcare standards.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'cleaning_services', title: 'Building Cleaning Management', detail: 'Professional building cleaning, facility management, and hygiene standards. Master cleaning techniques, equipment operation, and safety protocols.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'construction', title: 'Construction', detail: 'Essential skills for construction, site safety, and Japanese building standards. Learn construction techniques, safety regulations, and project management.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'build_circle', title: 'Machine Parts and Tooling', detail: 'Precision manufacturing, assembling, and maintaining machine parts and tools. Master CNC operation, quality control, and technical specifications.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'precision_manufacturing', title: 'Industrial Machinery', detail: 'Operate and maintain industrial machinery across various industries. Learn troubleshooting, preventive maintenance, and safety procedures.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'memory', title: 'Electric and Information Industries', detail: 'Electronics, IT, and information industry skills for modern workplaces. Cover circuit design, programming, and digital systems maintenance.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'directions_boat', title: 'Shipbuilding and Ship Machinery', detail: 'Comprehensive shipbuilding, repair, and marine machinery operation training. Learn welding, marine engineering, and vessel maintenance.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'car_repair', title: 'Automobile Repair and Maintenance', detail: 'Automotive diagnostics, repair, and maintenance skills for modern vehicles. Master engine systems, electrical components, and diagnostic tools.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'flight', title: 'Aviation', detail: 'Ground handling, aircraft maintenance, and airport operations training. Learn safety protocols, equipment handling, and aviation regulations.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'hotel', title: 'Accommodation', detail: 'Hotel operations, guest services, and hospitality management excellence. Master customer service, room management, and hospitality standards.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'agriculture', title: 'Agriculture and Aquaculture', detail: 'Modern farming, aquaculture, and food production techniques for sustainable agriculture. Learn crop management, aquaculture systems, and agricultural technology.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'fastfood', title: 'Food and Beverage Manufacturing', detail: 'Food processing, safety standards, and quality control in manufacturing environments. Master HACCP principles, production lines, and food safety regulations.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
                { icon: 'restaurant', title: 'Food Service', detail: 'Restaurant operations, customer service, and food preparation excellence. Learn Japanese cuisine, service standards, and restaurant management.', color: 'text-pink-500', bgColor: 'bg-pink-50', borderColor: 'border-pink-200' },
            ],
            filtered() {
                const q = this.query.toLowerCase().trim();
                if (!q) return this.programs;
                return this.programs.filter(p =>
                    p.title.toLowerCase().includes(q) || p.detail.toLowerCase().includes(q)
                );
            },
            open(program) { 
                this.modalTitle = program.title; 
                this.modalContent = program.detail; 
                this.modalIcon = program.icon;
                this.modalColor = program.color;
                this.showModal = true; 
            }
        }">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Specified Skilled Worker (SSW) Preparation Programs</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto leading-relaxed">
                    Master specialized skills for Japan's growing industries. Our comprehensive training programs prepare you for success in Japan's Specified Skilled Worker visa program.
                </p>
            </div>

            <!-- Search Section -->
            <div class="max-w-2xl mx-auto mb-12">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <span class="material-icons text-gray-400 text-xl">search</span>
                    </div>
                    <input 
                        type="text" 
                        x-model="query" 
                        placeholder="Search programs (e.g., Nursing Care, Construction, Agriculture)" 
                        class="w-full pl-12 pr-12 py-4 border-2 border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:border-[var(--primary-color)] transition-all duration-200 text-gray-700 placeholder-gray-400 bg-white shadow-sm"
                    />
                    <button 
                        x-show="query" 
                        @click="query=''" 
                        type="button" 
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[var(--primary-color)] transition-colors"
                    >
                        <span class="material-icons text-xl">close</span>
                    </button>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-sm text-[var(--text-secondary)]">
                        <span x-text="filtered().length"></span> of <span x-text="programs.length"></span> programs available
                    </p>
                </div>
            </div>

            <!-- No Results State -->
            <template x-if="filtered().length === 0">
                <div class="text-center py-16">
                    <div class="bg-[var(--secondary-color)] rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
                        <span class="material-icons text-4xl text-[var(--primary-color)]">search_off</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[var(--text-primary)] mb-2">No programs found</h3>
                    <p class="text-[var(--text-secondary)] mb-4">Try adjusting your search terms or browse all available programs.</p>
                    <button @click="query=''" class="bg-[var(--primary-color)] text-white px-6 py-2 rounded-lg hover:bg-pink-700 transition-colors">
                        Show All Programs
                    </button>
                </div>
            </template>

            <!-- Programs Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-16">
                <template x-for="program in filtered()" :key="program.title">
                    <div 
                        class="group bg-white rounded-xl border-2 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 cursor-pointer overflow-hidden"
                        :class="program.borderColor + ' hover:border-pink-300'"
                        @click="open(program)"
                    >
                        <!-- Card Header -->
                        <div class="p-6 pb-4" :class="program.bgColor">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-3 flex-1">
                                    <div class="p-3 bg-white rounded-xl shadow-sm flex-shrink-0">
                                        <i class="material-icons text-2xl" :class="program.color" x-text="program.icon"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[var(--text-primary)] leading-tight group-hover:text-[var(--primary-color)] transition-colors" x-text="program.title"></h3>
                                    </div>
                                </div>
                                <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:translate-x-1 flex-shrink-0">
                                    <i class="material-icons text-gray-400 group-hover:text-[var(--primary-color)]">arrow_forward</i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="px-6 pb-4">
                            <p class="text-sm text-[var(--text-secondary)] line-clamp-3 leading-relaxed mt-5" x-text="program.detail.substring(0, 100) + '...'"></p>
                        </div>
                        
                        <!-- Card Footer -->
                        <div class="px-6 pb-6">
                            <div class="flex items-center text-xs text-[var(--text-secondary)] group-hover:text-[var(--primary-color)] transition-colors">
                                <span class="material-icons text-sm mr-1">info</span>
                                Click to learn more
                            </div>
                        </div>
                        
                        <!-- Bottom Accent -->
                        <div class="h-1 bg-gradient-to-r from-transparent via-[var(--primary-color)] to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </div>
                </template>
            </div>

            <!-- Call to Action Section -->
            <div class="bg-gradient-to-r from-[var(--primary-color)] to-pink-500 rounded-2xl p-8 md:p-12 text-white text-center relative overflow-hidden shadow-lg">
                <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 bg-white bg-opacity-20 rounded-full px-4 py-2 text-sm font-medium mb-6">
                        <span class="material-icons text-lg">star</span>
                        Start Your Journey Today
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Build Your Future in Japan?</h3>
                    <p class="text-lg text-pink-100 mb-8 max-w-2xl mx-auto leading-relaxed">
                        Join thousands of successful graduates who have launched their careers in Japan through our comprehensive SSW preparation programs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/ssw-preparation" class="bg-white text-[var(--primary-color)] px-8 py-4 rounded-xl text-lg font-bold hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            <span class="flex items-center gap-2 justify-center">
                                <span class="material-icons">school</span>
                                Explore All Programs
                            </span>
                        </a>
                        <a href="/contact" class="border-2 border-white text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-white hover:text-[var(--primary-color)] transition-all duration-300">
                            <span class="flex items-center gap-2 justify-center">
                                <span class="material-icons">contact_support</span>
                                Get Consultation
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Enhanced Modal -->
            <div
                x-show="showModal"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 p-4"
                style="display: none;"
                @click.self="showModal = false"
            >
                <!-- Modal Content Container -->
                <div 
                    x-show="showModal"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="bg-white rounded-xl shadow-2xl max-w-2xl w-full relative overflow-hidden"
                >
                    <!-- Modal Header -->
                    <div class="bg-gradient-to-r from-[var(--primary-color)] to-pink-700 p-8 text-white relative">
                        <button @click="showModal = false" class="absolute top-4 right-4 text-white hover:text-gray-200 p-2 rounded-full hover:bg-white hover:bg-opacity-20 transition-all duration-200 z-10" aria-label="Close">
                            <span class="material-icons text-xl">close</span>
                        </button>
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                                <i class="material-icons text-3xl" x-text="modalIcon"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-1" x-text="modalTitle"></h3>
                                <p class="text-pink-100 text-sm">SSW Preparation Program</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal Content -->
                    <div class="p-8">
                        <div class="prose prose-gray max-w-none">
                            <p class="text-[var(--text-secondary)] text-base leading-relaxed mb-6" x-text="modalContent"></p>
                        </div>
                        
                        <!-- Features List -->
                        <div class="bg-[var(--secondary-color)] rounded-xl p-6 mb-6">
                            <h4 class="font-semibold text-[var(--text-primary)] mb-3 flex items-center gap-2">
                                <span class="material-icons text-[var(--primary-color)]">check_circle</span>
                                What You'll Learn
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-[var(--text-secondary)]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[var(--primary-color)] rounded-full"></span>
                                    Technical Skills
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[var(--primary-color)] rounded-full"></span>
                                    Japanese Language
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[var(--primary-color)] rounded-full"></span>
                                    Cultural Training
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[var(--primary-color)] rounded-full"></span>
                                    Safety Standards
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3">
                            <button @click="showModal = false" class="flex-1 bg-gray-100 text-[var(--text-secondary)] px-6 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors">
                                Close
                            </button>
                            <button class="flex-1 bg-[var(--primary-color)] text-white px-6 py-3 rounded-xl font-semibold hover:bg-pink-700 transition-colors flex items-center justify-center gap-2">
                                <span class="material-icons text-lg">school</span>
                                Enroll Now
                            </button>
                            <button class="flex-1 border-2 border-[var(--primary-color)] text-[var(--primary-color)] px-6 py-3 rounded-xl font-semibold hover:bg-[var(--primary-color)] hover:text-white transition-colors flex items-center justify-center gap-2">
                                <span class="material-icons text-lg">info</span>
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection