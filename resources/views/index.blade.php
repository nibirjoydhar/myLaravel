<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

        <!-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                <h5 class="text-danger">{{ $error }}</h5>
            @endforeach
        @endif -->


        <!-- To show error and success -->
        <!-- @include('components.alerts'); -->





        <div class="mt-5">
            <h5>📬 Contact Us</h5>
            <form action="/form-submit" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input name="name" id="name" class="form-control" placeholder="Write your name..."
                        value="{{ old('name') }}"></i>

                    <label for="number" class="form-label">Your Phone</label>
                    <input name="number" id="number" class="form-control" placeholder="Write your phone..."
                        value="{{ old('number') }}"></i>
                    <!-- @error('number')
                        <h5 class="text-danger">Mobile is required</h5>
                    @enderror -->
                    <label for="message" class="form-label">Your Message</label>
                    <textarea name="message" id="message" rows="4" class="form-control"
                        placeholder="Write your query...">{{ old('message') }}</textarea>

                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Show message -->
    <div class="container my-5">
        <h1 class="mb-4">All Contact Messages</h1>

        @if($contacts->isEmpty())
            <p>No messages found.</p>
        @else
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Message</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->number }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>
    <a href="{{ url('/messages') }}" class="btn btn-outline-info mb-3">
        📩 View All Messages
    </a>
    <!-- To show error and success with toast-->
    @include('components.toasts_alerts');
</body>

</html>