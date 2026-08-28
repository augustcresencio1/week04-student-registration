```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(135deg, #dbeafe 0%, #ede9fe 50%, #e0e7ff 100%);
        }

        .main-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #4f46e5 50%, #7c3aed 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-card {
            transition: 0.2s;
        }

        .form-card:focus-within {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
    </style>
</head>

<body class="min-h-screen">

    <div class="max-w-4xl mx-auto py-12 px-4">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4 mb-8">

            <div>
                <p class="text-sm font-bold text-violet-600 uppercase tracking-wider">
                    Student Management System
                </p>

                <h1 class="text-4xl font-extrabold gradient-text">
                    Edit Student
                </h1>

                <p class="text-gray-500 mt-1">
                    Update student information
                </p>
            </div>

            <a href="{{ route('students.show', $student->id) }}"
               class="bg-white text-gray-700 px-5 py-3 rounded-xl font-semibold shadow-md hover:shadow-lg transition">
                ← Cancel
            </a>

        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

            <!-- Gradient Header -->
            <div class="main-gradient px-8 py-7 text-white">

                <h2 class="text-2xl font-bold">
                    Student Information
                </h2>

                <p class="text-blue-100 mt-1">
                    Edit the information below and save your changes.
                </p>

            </div>

            <div class="p-8">

                {{-- Validation Errors --}}
                @if ($errors->any())

                    <div class="bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-xl mb-6">

                        <p class="font-bold mb-2">
                            Please fix the following errors:
                        </p>

                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>

                @endif

                <form action="{{ route('students.update', $student->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Student ID -->
                    <div class="form-card border border-gray-200 rounded-2xl p-5 mb-5">

                        <label class="block font-semibold text-gray-700 mb-2">
                            Student ID
                        </label>

                        <input
                            type="text"
                            name="student_id"
                            value="{{ old('student_id', $student->student_id) }}"
                            class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        >

                    </div>

                    <!-- Name -->
                    <div class="grid md:grid-cols-3 gap-4 mb-5">

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                First Name
                            </label>

                            <input
                                type="text"
                                name="first_name"
                                value="{{ old('first_name', $student->first_name) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Middle Name
                            </label>

                            <input
                                type="text"
                                name="middle_name"
                                value="{{ old('middle_name', $student->middle_name) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Last Name
                            </label>

                            <input
                                type="text"
                                name="last_name"
                                value="{{ old('last_name', $student->last_name) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                    </div>

                    <!-- Email and Mobile -->
                    <div class="grid md:grid-cols-2 gap-4 mb-5">

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Email Address
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $student->email) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Mobile Number
                            </label>

                            <input
                                type="text"
                                name="mobile_number"
                                value="{{ old('mobile_number', $student->mobile_number) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                    </div>

                    <!-- Date of Birth and Gender -->
                    <div class="grid md:grid-cols-2 gap-4 mb-5">

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Date of Birth
                            </label>

                            <input
                                type="date"
                                name="date_of_birth"
                                value="{{ old('date_of_birth', $student->date_of_birth) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Gender
                            </label>

                            <select
                                name="gender"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400">

                                <option value="">Select Gender</option>

                                <option value="Male"
                                    {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>
                                    Male
                                </option>

                                <option value="Female"
                                    {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>
                                    Female
                                </option>

                            </select>

                        </div>

                    </div>

                    <!-- Program and Year Level -->
                    <div class="grid md:grid-cols-2 gap-4 mb-5">

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Program
                            </label>

                            <input
                                type="text"
                                name="program"
                                value="{{ old('program', $student->program) }}"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                            >

                        </div>

                        <div class="form-card border border-gray-200 rounded-2xl p-5">

                            <label class="block font-semibold text-gray-700 mb-2">
                                Year Level
                            </label>

                            <select
                                name="year_level"
                                class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400">

                                <option value="">Select Year Level</option>

                                <option value="1st Year"
                                    {{ old('year_level', $student->year_level) == '1st Year' ? 'selected' : '' }}>
                                    1st Year
                                </option>

                                <option value="2nd Year"
                                    {{ old('year_level', $student->year_level) == '2nd Year' ? 'selected' : '' }}>
                                    2nd Year
                                </option>

                                <option value="3rd Year"
                                    {{ old('year_level', $student->year_level) == '3rd Year' ? 'selected' : '' }}>
                                    3rd Year
                                </option>

                                <option value="4th Year"
                                    {{ old('year_level', $student->year_level) == '4th Year' ? 'selected' : '' }}>
                                    4th Year
                                </option>

                            </select>

                        </div>

                    </div>

                    <!-- Address -->
                    <div class="form-card border border-gray-200 rounded-2xl p-5 mb-5">

                        <label class="block font-semibold text-gray-700 mb-2">
                            Address
                        </label>

                        <textarea
                            name="address"
                            rows="3"
                            class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-400">{{ old('address', $student->address) }}</textarea>

                    </div>

                    <!-- Profile Picture -->
                    <div class="form-card border border-gray-200 rounded-2xl p-5 mb-8">

                        <label class="block font-semibold text-gray-700 mb-3">
                            Profile Picture
                        </label>

                        @if ($student->profile_picture)

                            <img
                                src="{{ asset('storage/' . $student->profile_picture) }}"
                                alt="Current Profile Picture"
                                class="w-28 h-28 rounded-full object-cover border-4 border-indigo-200 mb-4"
                            >

                        @else

                            <div class="w-28 h-28 rounded-full bg-indigo-50 flex items-center justify-center text-gray-400 mb-4">
                                No Image
                            </div>

                        @endif

                        <input
                            type="file"
                            name="profile_picture"
                            accept=".jpg,.jpeg,.png"
                            class="w-full border border-gray-200 rounded-xl px-4 py-3"
                        >

                        <p class="text-sm text-gray-500 mt-2">
                            Leave blank if you don't want to change the picture.
                        </p>

                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">

                        <button
                            type="submit"
                            class="main-gradient flex-1 text-white font-bold py-3 rounded-xl shadow-lg hover:shadow-xl transition">

                            ✓ Update Student

                        </button>

                        <a href="{{ route('students.show', $student->id) }}"
                           class="flex-1 text-center bg-gray-100 text-gray-700 font-bold py-3 rounded-xl hover:bg-gray-200 transition">

                            Cancel

                        </a>

                    </div>

                </form>

            </div>

        </div>

        <p class="text-center text-gray-400 text-sm mt-8">
            Student Registration System
        </p>

    </div>

</body>
</html>
```
