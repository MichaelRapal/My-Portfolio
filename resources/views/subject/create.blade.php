<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Subject</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(173, 216, 230, 0.8)); /* White to blue gradient */
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.9); /* Transparent white */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.7s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn {
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0d6efd;
            transform: scale(1.05);
        }

        .btn-secondary:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container col-md-6 mx-auto">
            <h2 class="text-center text-primary">Create Subject</h2>
            
            <form action="{{ route('subjects.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Subject Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="code" class="form-label">Subject Code</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>

                <div class="mb-3">
                    <label for="instructor" class="form-label">Instructor</label>
                    <input type="text" class="form-control" id="instructor" name="instructor" required>
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Day</label>
                    <input type="date" class="form-control" id="day" name="day" required>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>

                <div class="mb-3">
                    <label for="receiver_id" class="form-label">Student Subject</label>
                    <select name="receiver_id" class="form-control" required>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-100 me-2">Save</button>
                    <a href="javascript:history.back()" class="btn btn-secondary w-100">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
