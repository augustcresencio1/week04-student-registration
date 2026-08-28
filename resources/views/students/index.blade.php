```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student List</title>

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

        .student-row {
            transition: 0.2s;
        }

        .student-row:hover {
            background: #f5f3ff;
        }
    </style>
</head>

<body class="min-h-screen">

    <div class="max-w-6xl mx-auto py-12 px-4">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4 mb-8">

            <div>
                <p class="text-sm font-bold text-violet-600 uppercase tracking-wider">
                    Student Management System
                </p>

                <h1 class="text-4xl font-extrabold gradient-text">
                    Student List
                </h1>

                <p class="text-gray-500 mt-1">
                    View and manage registered students
                </p>
            </div>

            <a href="{{ route('students.create') }}"
               class="main-gradient text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition text-center">
                + Add Student
            </a>

        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

            <!-- Gradient Table Header -->
            <div class="main-gradient px-8 py-6 text-white">

                <<h2 class="text-2xl font-bold">
    Registered Students
</h2>

<p class="text-blue-100 mt-1">
    List of all students in the system
</p>

<p class="text-blue-100 mt-2 text-sm font-semibold">
    Total Students: {{ $students->count() }}
</p>
            </div>

            @if ($students->count() > 0)

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead>
                            <tr class="bg-gray-50 border-b">

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                                    Student ID
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                                    Name
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                                    Email
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                                    Program
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                                    Year Level
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                                    Action
                                </th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($students as $student)

                                <tr class="student-row border-b">

                                    <td class="px-6 py-5">
                                        <div>
    <span class="text-xs text-gray-400 uppercase tracking-wide">
        ID
    </span>

    <p class="font-bold text-indigo-600">
        {{ $student->student_id }}
    </p>
</div>
                                    </td>

                                    <td class="px-6 py-5">

                                        <div>
    <p class="font-bold text-gray-800">
        {{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}
    </p>

    <p class="text-xs text-gray-400 mt-1">
        Student
    </p>
</div>

                                    </td>

                                    <td class="px-6 py-5 text-gray-600">
                                        {{ $student->email }}
                                    </td>

                                    <td class="px-6 py-5">

                                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-semibold">
                                            {{ $student->program }}
                                        </span>

                                    </td>

                                    <td class="px-6 py-5 text-gray-600">
                                        {{ $student->year_level }}
                                    </td>

                                    <td class="px-6 py-5">

                                        <a href="{{ route('students.show', $student->id) }}"
                                           class="main-gradient text-white px-4 py-2 rounded-lg font-semibold text-sm shadow hover:shadow-md transition">
                                            View
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <!-- Empty State -->
                <div class="text-center py-16 px-6">

                    <div class="w-20 h-20 mx-auto rounded-full main-gradient flex items-center justify-center text-white text-3xl mb-5">
                        👤
                    </div>

                    <h3 class="text-xl font-bold text-gray-800">
                        No Students Yet
                    </h3>

                    <p class="text-gray-500 mt-2 mb-6">
                        There are no registered students yet.
                    </p>

                    <a href="{{ route('students.create') }}"
                       class="main-gradient text-white px-6 py-3 rounded-xl font-semibold shadow-lg">
                        Register a Student
                    </a>

                </div>

            @endif

        </div>

        <p class="text-center text-gray-400 text-sm mt-8">
            Student Registration System
        </p>

    </div>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

</body>
</html>
```
