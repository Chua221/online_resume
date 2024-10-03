@session('message')
	<script>
		window.alert("{{ session('message') }}")
	</script>
@endsession
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* Background image styling */
        body {
            background-image: url('storage/images/cover_bg_3.jpg'); /* Use the image you want as the background */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form container styling */
        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Slight white background for readability */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4e54c8;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #8f94fb;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="name" placeholder="Username" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
