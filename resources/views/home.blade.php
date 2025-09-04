@extends('layouts.app')
@section('content')

<main class="flex-1">
    <section class="relative section-bg-white">
        <div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDmpDT7TC4N0Vw7bJ5iLzchQdsTTRr6yPKh3pTsi6ZfHtSgS_6OdWCmwcg54jTMg6axpjbWgxs3pxkrekpy0PcLsP9c1pmP8fU9xzkexdkC7LmPRJ1ABEHh9z-bNdTh7dSeSzcPqfVq68AS1nv7KPwwaUo3G7FfyPiGfwm7u_v1ElEllfNNpgz1WOiLMGbgo79oQhx-SuvEype3V9Cya632EO6b18IWH0qbaLQrGEvCDPlWS0-uvZuh0xzdFf4-5gR8teqJmJui1_bZ");'></div>
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative container mx-auto px-4 py-32 text-center text-white">
            <h1 class="text-5xl font-extrabold mb-4 leading-tight">Mirai-Career: Your Path to a Brighter Future</h1>
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
        showModal: false,
        modalTitle: '',
        modalContent: '',
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
        openDetail(program) {
            this.modalTitle = program.title;
            this.modalContent = program.detail;
            this.showModal = true;
        }
    }">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-[var(--text-primary)] mb-4">Specified Skilled Worker (SSW) Preparation Programs</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Specialized training programs to prepare you for a successful career in Japan's key industries under the SSW visa.
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <template x-for="program in programs" :key="program.title">
                        <div
                            class="flex items-center bg-gray-50 rounded-2xl border border-gray-200 shadow transition-all duration-300 hover:bg-[var(--primary-color)] hover:text-white hover:shadow-xl group cursor-pointer h-[120px] min-w-[260px] max-w-full px-6"
                            @click="openDetail(program)"
                        >
                            <div class="flex-shrink-0">
                                <i class="material-icons text-5xl transition-colors duration-300 group-hover:text-white text-[var(--primary-color)]" x-text="program.icon"></i>
                            </div>
                            <div class="flex flex-col flex-grow pl-6">
                                <h3 class="text-lg font-semibold transition-colors duration-300 group-hover:text-white text-[var(--text-primary)] mb-2 line-clamp-2" x-text="program.title"></h3>
                                <span class="text-xs text-[var(--primary-color)] group-hover:text-white font-medium">Click for details</span>
                            </div>
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
        </div>
    </section>
</main>

@endsection