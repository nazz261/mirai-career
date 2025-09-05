@extends('layouts.app')
@section('content')

<main class="flex-1">
    <!-- Hero -->
    <section class="relative section-bg-white">
        <div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDmpDT7TC4N0Vw7bJ5iLzchQdsTTRr6yPKh3pTsi6ZfHtSgS_6OdWCmwcg54jTMg6axpjbWgxs3pxkrekpy0PcLsP9c1pmP8fU9xzkexdkC7LmPRJ1ABEHh9z-bNdTh7dSeSzcPqfVq68AS1nv7KPwwaUo3G7FfyPiGfwm7u_v1ElEllfNNpgz1WOiLMGbgo79oQhx-SuvEype3V9Cya632EO6b18IWH0qbaLQrGEvCDPlWS0-uvZuh0xzdFf4-5gR8teqJmJui1_bZ");'></div>
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative container mx-auto px-4 py-32 text-center text-white">
            <h1 class="text-5xl font-extrabold mb-4 leading-tight">Mirai-Career: Your Path to a Brighter Future</h1>
            <p class="text-xl text-gray-200 mb-0 max-w-3xl mx-auto leading-relaxed">
                Unlock your potential with our comprehensive career development programs. Explore new opportunities and achieve your professional goals.
            </p>
        </div>
    </section>

    <!-- JLPT Preparation Programs -->
    <section class="py-20 section-bg-gray" x-data="{ showModal: false, modalTitle: '', modalContent: '' }">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">JLPT Preparation Programs</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Achieve your desired Japanese Language Proficiency Test level with our targeted courses, designed for every stage of your learning journey.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col cursor-pointer" @click="modalTitle = 'JLPT N5 - Basic'; modalContent = 'Understand some basic Japanese, focusing on foundational grammar and vocabulary.'; showModal = true" role="button" tabindex="0" @keydown.enter.prevent="modalTitle = 'JLPT N5 - Basic'; modalContent = 'Understand some basic Japanese, focusing on foundational grammar and vocabulary.'; showModal = true" @keydown.space.prevent="modalTitle = 'JLPT N5 - Basic'; modalContent = 'Understand some basic Japanese, focusing on foundational grammar and vocabulary.'; showModal = true">
                    <div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
                        <h3 class="text-2xl font-bold text-[var(--primary-color)]">N5</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)]">Basic</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center">
                        <p class="text-[var(--text-secondary)] text-center">Understand some basic Japanese, focusing on foundational grammar and vocabulary.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col cursor-pointer" @click="modalTitle = 'JLPT N4 - Elementary'; modalContent = 'Understand basic Japanese used in daily conversations and simple written materials.'; showModal = true" role="button" tabindex="0" @keydown.enter.prevent="modalTitle = 'JLPT N4 - Elementary'; modalContent = 'Understand basic Japanese used in daily conversations and simple written materials.'; showModal = true" @keydown.space.prevent="modalTitle = 'JLPT N4 - Elementary'; modalContent = 'Understand basic Japanese used in daily conversations and simple written materials.'; showModal = true">
                    <div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
                        <h3 class="text-2xl font-bold text-[var(--primary-color)]">N4</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)]">Elementary</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center">
                        <p class="text-[var(--text-secondary)] text-center">Understand basic Japanese used in daily conversations and simple written materials.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col cursor-pointer" @click="modalTitle = 'JLPT N3 - Intermediate'; modalContent = 'Understand Japanese used in everyday situations to a certain degree.'; showModal = true" role="button" tabindex="0" @keydown.enter.prevent="modalTitle = 'JLPT N3 - Intermediate'; modalContent = 'Understand Japanese used in everyday situations to a certain degree.'; showModal = true" @keydown.space.prevent="modalTitle = 'JLPT N3 - Intermediate'; modalContent = 'Understand Japanese used in everyday situations to a certain degree.'; showModal = true">
                    <div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
                        <h3 class="text-2xl font-bold text-[var(--primary-color)]">N3</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)]">Intermediate</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center">
                        <p class="text-[var(--text-secondary)] text-center">Understand Japanese used in everyday situations to a certain degree.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col cursor-pointer" @click="modalTitle = 'JLPT N2 - Upper-Intermediate'; modalContent = 'Understand Japanese used in a variety of circumstances with natural speed.'; showModal = true" role="button" tabindex="0" @keydown.enter.prevent="modalTitle = 'JLPT N2 - Upper-Intermediate'; modalContent = 'Understand Japanese used in a variety of circumstances with natural speed.'; showModal = true" @keydown.space.prevent="modalTitle = 'JLPT N2 - Upper-Intermediate'; modalContent = 'Understand Japanese used in a variety of circumstances with natural speed.'; showModal = true">
                    <div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
                        <h3 class="text-2xl font-bold text-[var(--primary-color)]">N2</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)]">Upper-Intermediate</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center">
                        <p class="text-[var(--text-secondary)] text-center">Understand Japanese used in a variety of circumstances with natural speed.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col cursor-pointer" @click="modalTitle = 'JLPT N1 - Advanced'; modalContent = 'Understand Japanese used in a broad range of circumstances, approaching native level.'; showModal = true" role="button" tabindex="0" @keydown.enter.prevent="modalTitle = 'JLPT N1 - Advanced'; modalContent = 'Understand Japanese used in a broad range of circumstances, approaching native level.'; showModal = true" @keydown.space.prevent="modalTitle = 'JLPT N1 - Advanced'; modalContent = 'Understand Japanese used in a broad range of circumstances, approaching native level.'; showModal = true">
                    <div class="p-6 text-center border-b-4 border-[var(--primary-color)]">
                        <h3 class="text-2xl font-bold text-[var(--primary-color)]">N1</h3>
                        <p class="text-sm font-semibold text-[var(--text-secondary)]">Advanced</p>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-center">
                        <p class="text-[var(--text-secondary)] text-center">Understand Japanese used in a broad range of circumstances, approaching native level.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/jlpt-preparation" class="bg-[var(--primary-color)] text-white px-8 py-4 rounded-md text-lg font-bold hover:bg-pink-700 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-opacity-50 inline-block">
                    Enroll class now!
                </a>
            </div>

            <!-- JLPT Modal -->
            <div
                x-show="showModal"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
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

    <!-- SSW Preparation Programs - Cards with Modal (Simplified) -->
    <section class="py-20 section-bg-white"
        x-data="{
            showModal: false,
            modalTitle: '',
            modalContent: '',
            query: '',
            programs: [
                { icon: 'local_hospital', title: 'Nursing Care', detail: 'Training for caregiving, elderly support, and nursing skills in Japan.' },
                { icon: 'cleaning_services', title: 'Building Cleaning Management', detail: 'Learn building cleaning, facility management, and hygiene standards.' },
                { icon: 'construction', title: 'Construction', detail: 'Skills for construction, site safety, and Japanese building standards.' },
                { icon: 'build_circle', title: 'Machine Parts and Tooling', detail: 'Manufacturing, assembling, and maintaining machine parts and tools.' },
                { icon: 'precision_manufacturing', title: 'Industrial Machinery', detail: 'Operate and maintain industrial machinery in various industries.' },
                { icon: 'memory', title: 'Electric and Information Industries', detail: 'Electronics, IT, and information industry skills for modern workplaces.' },
                { icon: 'directions_boat', title: 'Shipbuilding and Ship Machinery', detail: 'Shipbuilding, repair, and marine machinery operation.' },
                { icon: 'car_repair', title: 'Automobile Repair and Maintenance', detail: 'Automotive diagnostics, repair, and maintenance skills.' },
                { icon: 'flight', title: 'Aviation', detail: 'Ground handling, aircraft maintenance, and airport operations.' },
                { icon: 'hotel', title: 'Accommodation', detail: 'Hotel operations, guest services, and hospitality management.' },
                { icon: 'agriculture', title: 'Agriculture and Aquaculture', detail: 'Modern farming, aquaculture, and food production techniques.' },
                { icon: 'fastfood', title: 'Food and Beverage Manufacturing', detail: 'Food processing, safety, and quality control in manufacturing.' },
                { icon: 'restaurant', title: 'Food Service', detail: 'Restaurant operations, customer service, and food preparation.' },
            ],
            filtered() {
                const q = this.query.toLowerCase().trim();
                if (!q) return this.programs;
                return this.programs.filter(p =>
                    p.title.toLowerCase().includes(q) || p.detail.toLowerCase().includes(q)
                );
            },
            open(program) { this.modalTitle = program.title; this.modalContent = program.detail; this.showModal = true; }
        }">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Specified Skilled Worker (SSW) Preparation Programs</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Click a card to see details.
                </p>
            </div>

            <div class="max-w-xl mx-auto mb-8">
                <div class="relative">
                    <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                    <input type="text" x-model="query" placeholder="Search programs (e.g., Nursing, Agriculture)" class="w-full pl-11 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)]" />
                    <button x-show="query" @click="query=''" type="button" class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                        <span class="material-icons">close</span>
                    </button>
                </div>
            </div>

            <template x-if="filtered().length === 0">
                <p class="text-center text-[var(--text-secondary)] my-6">No programs match your search.</p>
            </template>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <template x-for="program in filtered()" :key="program.title">
                    <div class="bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition cursor-pointer px-5 py-4 flex items-center gap-4" @click="open(program)">
                        <i class="material-icons text-3xl text-[var(--primary-color)] flex-shrink-0" x-text="program.icon"></i>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-base font-semibold text-[var(--text-primary)] leading-tight" x-text="program.title"></h3>
                        </div>
                        <i class="material-icons text-gray-300 flex-shrink-0">chevron_right</i>
                    </div>
                </template>
            </div>

            <!-- Modal -->
            <div
                x-show="showModal"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
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
</main>


@endsection