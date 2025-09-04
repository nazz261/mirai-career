@extends('layouts.app')

@section('content')

<main class="flex-1 font-['Plus_Jakarta_Sans']">
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <img alt="Cherry blossoms" class="w-full h-full object-cover opacity-10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq06CIZiqKVLmpjpzB4z29xfa_7Ro5Ksh09nA__e8cOoyRWv9zu8Qcz7aw9VIp8cWr3LbPmefqeuYXE-Jk3B0bHYgLYX6Eh7N-_-nuhS3tGWz8ljm9SHnHoEiPoHHqT_MI4bZE2nirI0UEBZ7h6DpdMZuhXNA8mdTnZb4sPzqsjbU1e5bm5MoRqjGDSxOzva-Bhwgyr3J-QZTMAunsHjHoXmgDcnsIVEjNJpwp6wQhw2DxLop1NbfENLesVh-hU2nLRs9DdERo2MBi"/>
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
            <h1 class="text-5xl font-extrabold text-[var(--text-primary)] sm:text-6xl lg:text-7xl">JLPT Preparation Programs</h1>
            <p class="mt-6 text-xl text-[var(--text-secondary)] max-w-3xl mx-auto">
                Master the Japanese Language Proficiency Test with our expertly designed courses. Choose your level and start your journey to fluency today.
            </p>
        </div>
    </div>

    <div 
        class="bg-[var(--background-color)] py-16 sm:py-24"
        x-data="{
            activeLevel: '{{ $jlptClasses->keys()->first() ?? '' }}',
            levels: {{ $jlptClasses->map(function($classes, $level) {
                return [
                    'id' => $level,
                    'name' => 'JLPT ' . $level,
                    'desc' => match($level) {
                        'N1' => 'Advanced',
                        'N2' => 'Upper-Intermediate',
                        'N3' => 'Intermediate',
                        'N4' => 'Elementary',
                        'N5' => 'Beginner',
                        default => 'Custom Level',
                    },
                    'icon' => "<svg xmlns='http://www.w3.org/2000/svg' class='size-8' viewBox='0 0 24 24' fill='currentColor'><path d='M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z'/></svg>",
                    'schedules' => $classes->map(function($c) {
                        return [
                            'time' => $c->day . ' ' .
                                \Carbon\Carbon::createFromFormat('H:i:s', $c->start_time)->format('g:i A') .
                                ' - ' .
                                \Carbon\Carbon::createFromFormat('H:i:s', $c->end_time)->format('g:i A'),
                            'teacher' => $c->teacher,
                            'seats' => $c->seats,
                            'price' => '$' . $c->price,
                            'location' => $c->location,
                            'status' => $c->status,
                        ];
                    })->toArray(),
                ];
            })->values()->toJson(JSON_UNESCAPED_UNICODE) }},
            get activeLevelData() {
                return this.levels.find(level => level.id === this.activeLevel);
            }
        }"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Left: Levels -->
                <div class="lg:w-1/3">
                    <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-6">Select a Level</h2>
                    <div class="space-y-3">
                        <template x-for="level in levels" :key="level.id">
                            <button 
                                @click="activeLevel = level.id"
                                :class="{ 
                                    'bg-[var(--primary-color)] text-white shadow-lg scale-105': activeLevel === level.id, 
                                    'bg-white hover:bg-gray-50 text-[var(--text-secondary)]': activeLevel !== level.id 
                                }"
                                class="w-full flex items-center p-5 rounded-xl transition-all duration-300 ease-in-out border border-gray-200"
                            >
                                <div :class="activeLevel === level.id ? 'bg-white/20' : 'bg-[var(--secondary-color)]'" class="flex items-center justify-center size-12 rounded-lg">
                                    <div :class="activeLevel === level.id ? 'text-white' : 'text-[var(--primary-color)]'" x-html="level.icon"></div>
                                </div>
                                <div class="ml-5 text-left">
                                    <p :class="{ 'text-white': activeLevel === level.id, 'text-[var(--text-primary)]': activeLevel !== level.id }" class="text-xl font-bold" x-text="level.name"></p>
                                    <p class="text-sm" x-text="level.desc"></p>
                                </div>
                                <div class="ml-auto">
                                    <svg :class="{'rotate-0': activeLevel === level.id, '-rotate-90': activeLevel !== level.id }" class="size-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </div>
                            </button>
                        </template>
                    </div>
                </div>

                <!-- Right: Schedules -->
                <div class="lg:w-2/3">
                    <div class="space-y-6">
                        <template x-if="activeLevelData">
                            <div class="space-y-6">
                                <h2 class="text-3xl font-bold text-[var(--text-primary)]" x-text="activeLevelData.name + ' Classes'"></h2>
                                <template x-for="(schedule, index) in activeLevelData.schedules" :key="index">
                                    <div :class="{'opacity-60 bg-gray-50': schedule.status === 'full'}" class="bg-white rounded-2xl shadow-md border overflow-hidden">
                                        <div class="p-6">
                                            <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                                                <div>
                                                    <p class="text-xl font-bold text-[var(--primary-color)]" x-text="schedule.time"></p>
                                                    <div class="flex items-center gap-4 mt-2 text-sm text-[var(--text-secondary)]">
                                                        <span class="flex items-center gap-1.5">
                                                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path clip-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" fill-rule="evenodd"></path></svg>
                                                            <span x-text="schedule.teacher"></span>
                                                        </span>
                                                        <span class="flex items-center gap-1.5">
                                                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path></svg>
                                                            <span x-text="schedule.location"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="text-right flex-shrink-0">
                                                    <p class="text-3xl font-bold text-[var(--text-primary)]" x-text="schedule.price"></p>
                                                    <p class="text-sm text-[var(--text-secondary)]">per term</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-6 py-4 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                                            <div class="flex items-center gap-3">
                                                <div :class="{ 'text-green-600': schedule.seats > 5, 'text-amber-600': schedule.seats <= 5 && schedule.seats > 0, 'text-red-600': schedule.seats === 0 }" class="flex items-center">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                                                    <p class="font-semibold text-sm ml-1.5" x-text="schedule.seats > 0 ? `${schedule.seats} Seats Available` : 'Class Full'"></p>
                                                </div>
                                            </div>
                                            <div class="w-full sm:w-auto">
                                                <button 
                                                    :class="schedule.seats === 0 ? 'bg-gray-300 text-gray-500 cursor-not-allowed' : 'bg-[var(--primary-color)] text-white hover:bg-opacity-90 hover:scale-105'" 
                                                    :disabled="schedule.seats === 0"
                                                    class="w-full rounded-lg h-11 px-8 text-sm font-bold transition-all duration-300 transform"
                                                    @click.prevent="openEnrollModal(schedule)"
                                                >
                                                    <span x-text="schedule.seats === 0 ? 'Enroll Now' : 'Enroll Now'"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>

                        <template x-if="!activeLevelData">
                            <div class="text-center py-12">
                                <p class="text-[var(--text-secondary)]">Please select a level to see the available classes.</p>
                            </div>
                        </template>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Enroll Modal --}}
    <div x-data="{ show: false, invoice: null, agree: false, success: false }" 
         x-show="show" style="display:none" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
        <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md text-center relative">
            <template x-if="!success">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Class Invoice</h2>
                    <div class="mb-4 text-left">
                        <p><b>Level:</b> <span x-text="invoice?.level"></span></p>
                        <p><b>Day:</b> <span x-text="invoice?.day"></span></p>
                        <p><b>Time:</b> <span x-text="invoice?.time"></span></p>
                        <p><b>Teacher:</b> <span x-text="invoice?.teacher"></span></p>
                        <p><b>Location:</b> <span x-text="invoice?.location"></span></p>
                        <p><b>Price:</b> <span x-text="invoice?.price"></span></p>
                    </div>
                    <label class="flex items-center gap-2 mb-4">
                        <input type="checkbox" x-model="agree" class="form-checkbox">
                        <span>I agree to this data check first.</span>
                    </label>
                    <button 
                        class="bg-[var(--primary-color)] text-white px-6 py-3 rounded-lg font-bold hover:bg-pink-700 transition disabled:opacity-50"
                        :disabled="!agree"
                        @click="success=true; setTimeout(()=>show=false, 1800)">
                        Submit
                    </button>
                </div>
            </template>
            <template x-if="success">
                <div>
                    <div class="flex justify-center mb-4">
                        <svg class="animate-bounce text-green-500" width="48" height="48" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="12" fill="#DCFCE7"/>
                            <path d="M7 13l3 3 7-7" stroke="#22C55E" stroke-width="2" fill="none"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-green-600">Enroll success!</h2>
                </div>
            </template>
            <button class="absolute top-2 right-2 text-gray-400 hover:text-[var(--primary-color)]" @click="show=false">&times;</button>
        </div>
    </div>
    <script>
    window.openEnrollModal = function(schedule) {
        @if(!Auth::check())
            showLoginModal();
            return;
        @endif
        const modal = document.querySelector('[x-data^="{ show: false, invoice: null"]');
        modal.__x.$data.show = true;
        modal.__x.$data.success = false;
        modal.__x.$data.agree = false;
        modal.__x.$data.invoice = {
            level: schedule.level || '',
            day: schedule.time.split(' ')[0],
            time: schedule.time.split(' ').slice(1).join(' '),
            teacher: schedule.teacher,
            location: schedule.location,
            price: schedule.price,
        };
    }
    </script>
</main>
@endsection
