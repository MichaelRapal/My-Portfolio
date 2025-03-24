<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Subject</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(173, 216, 230, 0.8)), 
                        url('https://source.unsplash.com/1600x900/?education,technology');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-in-out;
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

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="col-md-6 mx-auto">
            <div class="form-container">
                <h2 class="text-center mb-4">Edit Subject</h2>

                <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Subject Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $subject->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="code" class="form-label">Subject Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{ $subject->code }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="instructor" class="form-label">Instructor</label>
                        <input type="text" class="form-control" id="instructor" name="instructor" value="{{ $subject->instructor }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="day" class="form-label">Day</label>
                        <input type="date" class="form-control" id="day" value="{{ $subject->day }}" name="day" required>
                    </div>

                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time" value="{{ $subject->time }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success px-4">Update</button>
                        <a href="javascript:history.back()" class="btn btn-secondary px-4">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for better interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
