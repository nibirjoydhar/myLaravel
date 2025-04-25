<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5 p-4 bg-white rounded shadow">
        <!-- The only way to do great work is to love what you do. - Steve Jobs -->
        <h1 class="mb-4">👋 Welcome, {{ $name }}!</h1>

        <div class="mb-3">
            <h4><strong>Customer ID:</strong> {{ $id }}</h4>
        </div>

        <div class="mb-4">
            <h5>📦 Your Serial Numbers:</h5>
            <ul class="list-group">
                @foreach ($numbers as $number)
                    <li class="list-group-item">Serial Number: <strong>{{ $number }}</strong></li>
                @endforeach
            </ul>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error )
                <h5 class="text-danger">{{ $error }}</h5>
            @endforeach
        @endif

        <div class="mt-5">
            <h5>📬 Contact Us</h5>
            <form action="/form-submit" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input name="name" id="name" class="form-control" placeholder="Write your name..." value="{{ old('name') }}"></i>

                    <label for="number" class="form-label">Your Phone</label>
                    <input name="number" id="number" class="form-control" placeholder="Write your phone..." value="{{ old('number') }}"></i>
                    @error('number')
                        <h5 class="text-danger">Mobile is required</h5>
                    @enderror
                    <label for="message" class="form-label">Your Message</label>
                    <textarea name="message" id="message" rows="4" class="form-control"
                        placeholder="Write your query..." value="{{ old('message') }}"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

</body>

</html>