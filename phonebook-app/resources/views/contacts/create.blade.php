<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>
    <h1>Add Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Phone Number:</label>
        <input type="text" name="phone_number" required>
        <br>
        <button type="submit">Add</button>
    </form>

    <br>
    <a href="{{ route('contacts.index') }}">Back to Phone Book</a>
</body>
</html>
