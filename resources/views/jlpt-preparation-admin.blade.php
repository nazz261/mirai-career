@extends('layouts.app')

@section('content')
<main class="max-w-6xl mx-auto py-10 font-['Plus_Jakarta_Sans']">
    <h1 class="text-4xl font-extrabold text-[var(--primary-color)] mb-8 text-center">Manage JLPT Classes</h1>

    <!-- Add / Edit Class -->
    <div class="bg-white shadow-xl rounded-2xl p-8 mb-12 border border-gray-200">
        <h2 class="text-2xl font-bold text-[var(--primary-color)] mb-6">
            {{ isset($editClass) ? 'Edit Class' : 'Add New Class' }}
        </h2>
        <form method="POST" 
              action="{{ isset($editClass) ? route('jlpt-classes.update', $editClass->id) : route('jlpt-classes.store') }}">
            @csrf
            @if(isset($editClass))
                @method('PUT')
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Level select --}}
                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Level</label>
                    <select name="level" class="border p-3 rounded-lg w-full" required>
                        <option value="">Select Level</option>
                        @foreach(['N1', 'N2', 'N3', 'N4', 'N5'] as $level)
                            <option value="{{ $level }}" {{ old('level', $editClass->level ?? '') == $level ? 'selected' : '' }}>
                                {{ $level }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Day select --}}
                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Day</label>
                    <select name="day" class="border p-3 rounded-lg w-full" required>
                        <option value="">Select Day</option>
                        @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
                            <option value="{{ $day }}" {{ old('day', $editClass->day ?? '') == $day ? 'selected' : '' }}>
                                {{ $day }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Time range --}}
                <div class="flex gap-2 items-end">
                    <div class="flex-1">
                        <label class="block font-semibold mb-1 text-[var(--text-primary)]">Start Time</label>
                        <input type="time" name="start_time" value="{{ old('start_time', $editClass->start_time ?? '') }}" class="border p-3 rounded-lg w-full" required>
                    </div>
                    <span class="mb-3 font-bold text-[var(--primary-color)]">to</span>
                    <div class="flex-1">
                        <label class="block font-semibold mb-1 text-[var(--text-primary)]">End Time</label>
                        <input type="time" name="end_time" value="{{ old('end_time', $editClass->end_time ?? '') }}" class="border p-3 rounded-lg w-full" required>
                    </div>
                </div>

                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Teacher</label>
                    <input type="text" name="teacher" 
                           value="{{ old('teacher', $editClass->teacher ?? '') }}" 
                           placeholder="Teacher Name" 
                           class="border p-3 rounded-lg w-full" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Location</label>
                    <input type="text" name="location" 
                           value="{{ old('location', $editClass->location ?? '') }}" 
                           placeholder="Location" 
                           class="border p-3 rounded-lg w-full" required>
                </div>

                {{-- Seats --}}
                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Seats Available</label>
                    <input type="number" name="seats" min="0"
                           value="{{ old('seats', $editClass->seats ?? '') }}" 
                           placeholder="Seats Available" 
                           class="border p-3 rounded-lg w-full" required
                           oninput="updateStatusDisplay(this)">
                </div>

                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Price</label>
                    <input type="text" name="price" 
                           value="{{ old('price', $editClass->price ?? '') }}" 
                           placeholder="Price" 
                           class="border p-3 rounded-lg w-full" required>
                </div>

                {{-- Status (automatic, display only) --}}
                <div>
                    <label class="block font-semibold mb-1 text-[var(--text-primary)]">Status</label>
                    <input type="text" id="statusDisplay" class="border p-3 rounded-lg w-full bg-gray-100"
                        value="{{ (old('seats', $editClass->seats ?? '') === '') ? '-' : ((old('seats', $editClass->seats ?? '') == 0) ? 'Full' : 'Available') }}"
                        readonly>
                </div>
            </div>

            <div class="mt-8 flex gap-2">
                <button class="bg-[var(--primary-color)] text-white px-6 py-3 rounded-lg font-bold hover:bg-pink-700 transition">
                    {{ isset($editClass) ? 'Update Class' : 'Add Class' }}
                </button>

                @if(isset($editClass))
                    <a href="{{ route('jlpt.admin') }}" 
                       class="bg-gray-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-gray-600 transition">
                        Cancel
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Existing Classes -->
    <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-200">
        <h2 class="text-2xl font-bold text-[var(--primary-color)] mb-6">Existing Classes</h2>
        <div class="overflow-x-auto">
        <table class="w-full border rounded-xl overflow-hidden">
            <thead>
                <tr class="bg-[var(--primary-color)] text-white">
                    <th class="p-3">Level</th>
                    <th class="p-3">Day</th>
                    <th class="p-3">Time</th>
                    <th class="p-3">Teacher</th>
                    <th class="p-3">Location</th>
                    <th class="p-3">Seats</th>
                    <th class="p-3">Price</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jlptClasses as $class)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="p-3 font-bold text-[var(--primary-color)]">{{ $class->level }}</td>
                    <td class="p-3">{{ $class->day }}</td>
                    <td class="p-3">{{ $class->start_time }} - {{ $class->end_time }}</td>
                    <td class="p-3">{{ $class->teacher }}</td>
                    <td class="p-3">{{ $class->location }}</td>
                    <td class="p-3">{{ $class->seats }}</td>
                    <td class="p-3">${{ $class->price }}</td>
                    <td class="p-3">
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-bold
                            {{ $class->seats == 0 ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700' }}">
                            {{ $class->seats == 0 ? 'Full' : 'Available' }}
                        </span>
                    </td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('jlpt-classes.edit', $class->id) }}" 
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">Edit</a>
                        <form method="POST" action="{{ route('jlpt-classes.destroy', $class->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" 
                                    class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</main>

<script>
function updateStatusDisplay(input) {
    const statusDisplay = document.getElementById('statusDisplay');
    if (input.value === '' || input.value === null) {
        statusDisplay.value = '-';
    } else if (parseInt(input.value) === 0) {
        statusDisplay.value = 'Full';
    } else {
        statusDisplay.value = 'Available';
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const seatsInput = document.querySelector('input[name="seats"]');
    if (seatsInput) updateStatusDisplay(seatsInput);
});
</script>
@endsection
