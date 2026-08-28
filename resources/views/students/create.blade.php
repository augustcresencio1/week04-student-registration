<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(135deg, #eef2ff, #f5f3ff, #eff6ff);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }

        .gradient-text {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
        }

        .input-style {
            transition: all 0.2s ease;
        }

        .input-style:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
            outline: none;
        }
    </style>
</head>

<body class="min-h-screen">

    <div class="max-w-4xl mx-auto py-12 px-4">

        <!-- Header -->
        <div class="text-center mb-8">

            <p class="text-sm font-semibold text-violet-600 uppercase tracking-wider">
                Student Management System
            </p>

            <h1 class="text-4xl font-extrabold gradient-text mt-2">
                Student Registration
            </h1>

            <p class="text-gray-500 mt-2">
                Please fill out the form below.
            </p>

        </div>

        <!-- Main Card -->
        <div class="glass rounded-3xl shadow-xl border border-white p-8">

            {{-- Success Message --}}
            @if (session('success'))

                <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl mb-6">
                    <span class="font-semibold">
                        ✓ {{ session('success') }}
                    </span>
                </div>

            @endif

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

            <form action="{{ route('students.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- Student ID -->
                <div class="mb-5">

                    <label class="block font-semibold text-gray-700 mb-2">
                        Student ID
                    </label>

                    <input
                        type="text"
                        name="student_id"
                        value="{{ old('student_id') }}"
                        class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                        placeholder="Enter Student ID"
                    >

                </div>

                <!-- Name -->
                <div class="grid md:grid-cols-3 gap-4 mb-5">

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            First Name
                        </label>

                        <input
                            type="text"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                            placeholder="First Name"
                        >

                    </div>

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Middle Name
                        </label>

                        <input
                            type="text"
                            name="middle_name"
                            value="{{ old('middle_name') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                            placeholder="Middle Name"
                        >

                    </div>

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Last Name
                        </label>

                        <input
                            type="text"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                            placeholder="Last Name"
                        >

                    </div>

                </div>

                <!-- Email and Mobile -->
                <div class="grid md:grid-cols-2 gap-4 mb-5">

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Email Address
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                            placeholder="example@email.com"
                        >

                    </div>

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Mobile Number
                        </label>

                        <input
                            type="text"
                            name="mobile_number"
                            value="{{ old('mobile_number') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                            placeholder="09XXXXXXXXX"
                        >

                    </div>

                </div>

                <!-- Date of Birth and Gender -->
                <div class="grid md:grid-cols-2 gap-4 mb-5">

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Date of Birth
                        </label>

                        <input
                            type="date"
                            name="date_of_birth"
                            value="{{ old('date_of_birth') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                        >

                    </div>

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Gender
                        </label>

                        <select
                            name="gender"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white">

                            <option value="">Select Gender</option>

                            <option value="Male"
                                {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>

                            <option value="Female"
                                {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>

                        </select>

                    </div>

                </div>

                <!-- Program and Year Level -->
                <div class="grid md:grid-cols-2 gap-4 mb-5">

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Program
                        </label>

                        <input
                            type="text"
                            name="program"
                            value="{{ old('program') }}"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                            placeholder="e.g. BSIT"
                        >

                    </div>

                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Year Level
                        </label>

                        <select
                            name="year_level"
                            class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white">

                            <option value="">Select Year Level</option>

                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>

                        </select>

                    </div>

                </div>

                <!-- Address -->
                <div class="mb-5">

                    <label class="block font-semibold text-gray-700 mb-2">
                        Address
                    </label>

                    <textarea
                        name="address"
                        rows="3"
                        class="input-style w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                        placeholder="Enter complete address">{{ old('address') }}</textarea>

                </div>

                <!-- Profile Picture -->
                <div class="mb-8">

                    <label class="block font-semibold text-gray-700 mb-2">
                        Profile Picture
                    </label>

                    <input
                        type="file"
                        name="profile_picture"
                        accept=".jpg,.jpeg,.png"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 bg-white"
                    >

                    <p class="text-sm text-gray-500 mt-2">
                        JPG, JPEG, or PNG only. Maximum file size: 2MB.
                    </p>

                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="gradient-bg w-full text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.01] transition duration-200">

                    Register Student

                </button>

            </form>

        </div>

        <p class="text-center text-gray-400 text-sm mt-8">
            Student Registration System
        </p>

    </div>

</body>
</html>