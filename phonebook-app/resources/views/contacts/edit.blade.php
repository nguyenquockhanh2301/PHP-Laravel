<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <br>
        <label>Phone Number:</label>
        <input type="text" name="phone_number" value="{{ $contact->phone_number }}" required>
        <br>
        <button type="submit">Save</button>
    </form>

    <br>
    <a href="{{ route('contacts.index') }}">Back to Phone Book</a>
</body>
</html>
