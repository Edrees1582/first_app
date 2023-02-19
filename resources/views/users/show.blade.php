<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $user->username }} - show</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('user_style.css') }}">

</head>

<body>
    <div class="container-xl">
        <h1>{{ $user->name }}</h1>

        <p>Username: {{ $user->username }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Address: {{ $user->address }}</p>
        <p>Phone: {{ $user->phone }}</p>

        <p>User created at: {{ $user->created_at }}</p>
        <p>User updated at: {{ $user->updated_at }}</p>

        <a href="{{ route('users.index') }}">Back to Users</a>
    </div>
</body>

</html>
