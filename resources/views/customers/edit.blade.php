<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User Account</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}" required>
        </div>

        <div>
            <label>Full Name:</label>
            <input type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}" required>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div>
            <label>Profile Avatar (Max 2MB):</label>
            <input type="file" name="avatar">
        </div>

        <button type="submit">Update User</button>
    </form>
</body>
</html>