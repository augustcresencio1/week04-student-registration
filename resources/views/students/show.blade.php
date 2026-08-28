```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Details</title>

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

        .info-card {
            background: rgba(255, 255, 255, 0.95);
            transition: 0.2s;
        }

        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.12);
        }
    </style>
</head>

<body class="min-h-screen">

    <div class="max-w-4xl mx-auto py-12 px-4">

        <!-- Top Header -->
        <div class="flex justify-between items-center mb-8">

            <div>
                <p class="text-sm font-bold text-violet-600 uppercase tracking-wider">
                    Student Management System
                </p>

                <h1 class="text-4xl font-extrabold gradient-text">
                    Student Details
                </h1>

                <p class="text-gray-500 mt-1">
                    View complete student information
                </p>
            </div>

            <a href="{{ route('students.index') }}"
               class="bg-white text-gray-700 px-5 py-3 rounded-xl font-semibold shadow-md hover:shadow-lg transition">
                ← Back
            </a>

        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

            <!-- Gradient Profile Header -->
            <div class="main-gradient px-8 py-10 text-white">

                <div class="flex flex-col items-center">

                    @if ($student->profile_picture)

                        <img
                            src="{{ asset('storage/' . $student->profile_picture) }}"
                            alt="Profile Picture"
                            class="w-36 h-36 rounded-full object-cover border-4 border-white shadow-xl"
                        >

                    @else

                        <div class="w-36 h-36 rounded-full bg-white flex items-center justify-center text-gray-400 shadow-xl">
                            <span class="text-5xl">👤</span>
                        </div>

                    @endif

                    <h2 class="text-3xl font-bold mt-5 text-center">
                        {{ $student->first_name }}
                        {{ $student->middle_name }}
                        {{ $student->last_name }}
                    </h2>

                    <p class="mt-2 text-blue-100 font-medium">
                        {{ $student->program }} • {{ $student->year_level }}
                    </p>

                </div>

            </div>

            <!-- Information -->
            <div class="p-8">

                <h3 class="text-xl font-bold gradient-text mb-5">
                    Personal Information
                </h3>

                <div class="grid md:grid-cols-2 gap-5">

                    <!-- Student ID -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Student ID
                        </p>

                        <p class="text-lg font-bold text-gray-800 mt-1">
                            {{ $student->student_id }}
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Email Address
                        </p>

                        <p class="font-semibold text-gray-800 mt-1 break-all">
                            {{ $student->email }}
                        </p>
                    </div>

                    <!-- Mobile -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Mobile Number
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->mobile_number }}
                        </p>
                    </div>

                    <!-- Date of Birth -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Date of Birth
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->date_of_birth }}
                        </p>
                    </div>

                    <!-- Gender -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Gender
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->gender }}
                        </p>
                    </div>

                    <!-- Program -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Program
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->program }}
                        </p>
                    </div>

                    <!-- Year Level -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5">
                        <p class="text-sm text-gray-400">
                            Year Level
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->year_level }}
                        </p>
                    </div>

                    <!-- Address -->
                    <div class="info-card border border-gray-100 rounded-2xl p-5 md:col-span-2">
                        <p class="text-sm text-gray-400">
                            Address
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->address }}
                        </p>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="mt-8 pt-6 border-t border-gray-100 flex flex-col sm:flex-row justify-center gap-4">

                    <a href="{{ route('students.edit', $student->id) }}"
                       class="main-gradient text-white text-center px-8 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition">
                        ✏️ Edit Student
                    </a>

                    <form action="{{ route('students.destroy', $student->id) }}"
                          method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this student?');">

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="w-full bg-red-500 text-white px-8 py-3 rounded-xl font-bold shadow-md hover:bg-red-600 transition">
                            🗑️ Delete Student
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <p class="text-center text-gray-400 text-sm mt-8">
            Student Registration System
        </p>

    </div>

</body>
</html>
```
