@extends('layouts.app')

@section('content')

<main class="flex-1 font-['Plus_Jakarta_Sans']">
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <img alt="Cherry blossoms" class="w-full h-full object-cover opacity-10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq06CIZiqKVLmpjpzB4z29xfa_7Ro5Ksh09nA__e8cOoyRWv9zu8Qcz7aw9VIp8cWr3LbPmefqeuYXE-Jk3B0bHYgLYX6Eh7N-_-nuhS3tGWz8ljm9SHnHoEiPoHHqT_MI4bZE2nirI0UEBZ7h6DpdMZuhXNA8mdTnZb4sPzqsjbU1e5bm5MoRqjGDSxOzva-Bhwgyr3J-QZTMAunsHjHoXmgDcnsIVEjNJpwp6wQhw2DxLop1NbfENLesVh-hU2nLRs9DdERo2MBi"/>
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
            <h1 class="text-5xl font-extrabold text-[var(--text-primary)] sm:text-6xl lg:text-7xl font-['Plus_Jakarta_Sans']">JLPT Preparation Programs</h1>
            <p class="mt-6 text-xl text-[var(--text-secondary)] max-w-3xl mx-auto font-['Plus_Jakarta_Sans']">
                Master the Japanese Language Proficiency Test with our expertly designed courses. Choose your level and start your journey to fluency today.
            </p>
        </div>
    </div>
    <div class="bg-[var(--background-color)] py-16 sm:py-24" x-data="{
        activeLevel: 'N1',
        levels: [
          { 
            id: 'N1', 
            name: 'JLPT N1', 
            desc: 'Advanced', 
            icon: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' viewBox='0 0 24 24' fill='currentColor'><path d='M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z'/></svg>`,
            schedules: [
              { time: 'Mon & Wed 6:00 PM - 8:00 PM', teacher: 'Ms. Tanaka', seats: 15, price: '$300', location: 'Shibuya Campus, Room 301', status: 'available' },
              { time: 'Sat & Sun 10:00 AM - 12:00 PM', teacher: 'Mr. Watanabe', seats: 10, price: '$300', location: 'Shinjuku Campus, Room 105', status: 'available' }
            ]
          },
          { 
            id: 'N2', 
            name: 'JLPT N2', 
            desc: 'Upper-Intermediate',
            icon: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' viewBox='0 0 24 24' fill='currentColor'><path d='M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z'/></svg>`,
            schedules: [
              { time: 'Tue & Thu 7:00 PM - 9:00 PM', teacher: 'Mr. Sato', seats: 0, price: '$280', location: 'Ikebukuro Campus, Room 210', status: 'full' }
            ]
          },
          { 
            id: 'N3', 
            name: 'JLPT N3', 
            desc: 'Intermediate',
            icon: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' viewBox='0 0 24 24' fill='currentColor'><path d='M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z'/></svg>`,
            schedules: [
              { time: 'Mon & Wed 5:00 PM - 7:00 PM', teacher: 'Ms. Suzuki', seats: 20, price: '$250', location: 'Akihabara Campus, Room 101', status: 'available' },
              { time: 'Friday 4:00 PM - 8:00 PM', teacher: 'Ms. Suzuki', seats: 5, price: '$250', location: 'Akihabara Campus, Room 102', status: 'available' }
            ]
          },
          { 
            id: 'N4', 
            name: 'JLPT N4', 
            desc: 'Elementary',
            icon: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' viewBox='0 0 24 24' fill='currentColor'><path d='M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z'/></svg>`,
            schedules: [
              { time: 'Tue & Thu 6:00 PM - 8:00 PM', teacher: 'Mr. Ito', seats: 25, price: '$220', location: 'Ueno Campus, Room 5A', status: 'available' }
            ]
          },
          { 
            id: 'N5', 
            name: 'JLPT N5', 
            desc: 'Beginner',
            icon: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' viewBox='0 0 24 24' fill='currentColor'><path d='M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z'/></svg>`,
            schedules: [
              { time: 'Mon & Wed 4:00 PM - 6:00 PM', teacher: 'Ms. Yamamoto', seats: 30, price: '$200', location: 'Yokohama Campus, Hall B', status: 'available' },
              { time: 'Sat & Sun 2:00 PM - 4:00 PM', teacher: 'Mr. Kobayashi', seats: 12, price: '$200', location: 'Yokohama Campus, Hall C', status: 'available' }
            ]
          }
        ],
        get activeLevelData() {
          return this.levels.find(level => level.id === this.activeLevel);
        }
      }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/3">
                    <h2 class="text-3xl font-bold font-['Plus_Jakarta_Sans'] text-[var(--text-primary)] mb-6">Select a Level</h2>
                    <div class="space-y-3">
                        <template :key="level.id" x-for="level in levels">
                            <button :class="{ 'bg-[var(--primary-color)] text-white shadow-lg scale-105': activeLevel === level.id, 'bg-white hover:bg-gray-50 text-[var(--text-secondary)]': activeLevel !== level.id }" @click="activeLevel = level.id" class="w-full flex items-center p-5 rounded-xl transition-all duration-300 ease-in-out border border-gray-200 font-['Plus_Jakarta_Sans']">
                                <div :class="activeLevel === level.id ? 'bg-white/20' : 'bg-[var(--secondary-color)]'" class="flex items-center justify-center size-12 rounded-lg">
                                    <div :class="activeLevel === level.id ? 'text-white' : 'text-[var(--primary-color)]'" x-html="level.icon"></div>
                                </div>
                                <div class="ml-5 text-left">
                                    <p :class="{ 'text-white': activeLevel === level.id, 'text-[var(--text-primary)]': activeLevel !== level.id }" class="text-xl font-bold font-['Plus_Jakarta_Sans']" x-text="level.name"></p>
                                    <p class="text-sm font-['Plus_Jakarta_Sans']" x-text="level.desc"></p>
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
                <div class="lg:w-2/3">
                    <div class="space-y-6" x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100 translate-y-0" x-transition:enter-start="opacity-0 translate-y-4" x-transition:leave="transition ease-in duration-200" x-transition:leave-end="opacity-0 translate-y-4" x-transition:leave-start="opacity-100 translate-y-0">
                        <template x-if="activeLevelData">
                            <div class="space-y-6">
                                <h2 class="text-3xl font-bold font-['Plus_Jakarta_Sans'] text-[var(--text-primary)]" x-text="activeLevelData.name + ' Classes'"></h2>
                                <template :key="index" x-for="(schedule, index) in activeLevelData.schedules">
                                    <div :class="{'opacity-60 bg-gray-50': schedule.status === 'full'}" class="bg-white rounded-2xl shadow-md border border-gray-200/80 overflow-hidden font-['Plus_Jakarta_Sans']">
                                        <div class="p-6">
                                            <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                                                <div>
                                                    <p class="text-xl font-bold text-[var(--primary-color)] font-['Plus_Jakarta_Sans']" x-text="schedule.time"></p>
                                                    <div class="flex items-center gap-4 mt-2 text-sm text-[var(--text-secondary)] font-['Plus_Jakarta_Sans']">
                                                        <span class="flex items-center gap-1.5">
                                                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path clip-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" fill-rule="evenodd"></path>
                                                            </svg>
                                                            <span x-text="schedule.teacher"></span>
                                                        </span>
                                                        <span class="flex items-center gap-1.5">
                                                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
                                                            </svg>
                                                            <span x-text="schedule.location"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="text-right flex-shrink-0">
                                                    <p class="text-3xl font-bold text-[var(--text-primary)] font-['Plus_Jakarta_Sans']" x-text="schedule.price"></p>
                                                    <p class="text-sm text-[var(--text-secondary)] font-['Plus_Jakarta_Sans']">per term</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-6 py-4 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                                            <div class="flex items-center gap-3">
                                                <div :class="{ 'text-green-600': schedule.seats > 5, 'text-amber-600': schedule.seats <= 5 && schedule.seats > 0, 'text-red-600': schedule.seats === 0 }" class="flex items-center font-['Plus_Jakarta_Sans']">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                                    </svg>
                                                    <p class="font-semibold text-sm ml-1.5 font-['Plus_Jakarta_Sans']" x-text="schedule.seats > 0 ? `${schedule.seats} Seats Available` : 'Class Full'"></p>
                                                </div>
                                            </div>
                                            <div class="w-full sm:w-auto">
                                                <button :class="schedule.status === 'full' ? 'bg-gray-300 text-gray-500 cursor-not-allowed' : 'bg-[var(--primary-color)] text-white hover:bg-opacity-90 hover:scale-105'" :disabled="schedule.status === 'full'" class="w-full text-center items-center justify-center rounded-lg h-11 px-8 text-sm font-bold leading-normal tracking-[0.015em] transition-all duration-300 transform font-['Plus_Jakarta_Sans']">
                                                    <span x-text="schedule.status === 'full' ? 'Join Waitlist' : 'Enroll Now'"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>
                        <template x-if="!activeLevelData">
                            <div class="text-center py-12">
                                <p class="text-[var(--text-secondary)] font-['Plus_Jakarta_Sans']">Please select a level to see the available classes.</p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection