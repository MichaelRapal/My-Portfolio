<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Vite (Laravel Mix Alternative) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* Remove extra space above */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow-x: hidden; /* Prevents horizontal scrolling */
        }

        body {
            background: linear-gradient(to right, #ffffff, #4facfe);
            display: flex;
        }

        /* Sidebar Styling */
        .sidebar {
            background: rgba(30, 41, 59, 0.9);
            width: 280px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            transition: width 0.3s ease-in-out;
            padding-top: 20px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: white;
            text-decoration: none;
            transition: background 0.3s ease, padding-left 0.3s ease;
        }

        .sidebar a:hover {
            background: rgba(51, 65, 85, 0.8);
            padding-left: 20px;
        }

        /* Logout Button */
        .logout-btn {
            background: #dc2626;
            width: 100%;
            padding: 14px;
            color: white;
            text-align: center;
            cursor: pointer;
            font-size: 1.1rem;
            border: none;
        }

        .logout-btn:hover {
            background: #b91c1c;
        }

        /* Main Content */
        main {
            margin-left: 280px; /* Matches sidebar width */
            width: calc(100% - 280px);
            height: 100vh;
            overflow-y: auto;
            padding: 20px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar shadow-lg d-flex flex-column">
        <div class="text-white text-center fs-4 fw-bold mb-4">
            Dashboard
        </div>
        <nav class="flex-grow-1">
            <ul class="list-unstyled">
                <li><a href="#" id="studentInfoBtn">📘 <span class="ms-3">Student Information</span></a></li>
                <li><a href="#" id="subjectBtn">📚 <span class="ms-3">Subjects</span></a></li>
                <li><a href="#" id="scheduleBtn">📅 <span class="ms-3">Class Schedule</span></a></li>
            </ul>
        </nav>

        <!-- Logout -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">🔓 Log Out</button>
        </form>
    </aside>

    <!-- Main Content -->
    <main>
        <div id="studentInfoContent" class="hidden">
            <h2 class="text-primary fw-bold mb-3">Student Information</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Highest Educational Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->highest_educational_level }}</td>       
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="subjectContent" class="hidden">
            <h2 class="text-primary fw-bold mb-3">Subjects</h2>
            @if (Auth::user()->role === 'admin')
            <a href="{{ route('subjects.create') }}" class="btn btn-primary mb-3">Add Subject</a>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Subject Name</th>
                            <th>Subject Code</th>
                            <th>Instructor</th>
                            @if (Auth::user()->role === 'admin')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->code }}</td>
                            <td>{{ $subject->instructor }}</td>
                            @if (Auth::user()->role === 'admin')
                            <td>
                                <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="scheduleContent" class="hidden">
            <h2 class="text-primary fw-bold mb-3">Class Schedule</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Subject Name</th>
                            <th>Day</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->day }}</td>
                            <td>{{ $subject->time }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('studentInfoBtn').addEventListener('click', function () {
            toggleContent('studentInfoContent');
        });

        document.getElementById('subjectBtn').addEventListener('click', function () {
            toggleContent('subjectContent');
        });

        document.getElementById('scheduleBtn').addEventListener('click', function () {
            toggleContent('scheduleContent');
        });

        function toggleContent(id) {
            document.querySelectorAll('main > div').forEach(div => div.classList.add('hidden'));
            document.getElementById(id).classList.remove('hidden');
        }
    </script>

</body>
</html>
