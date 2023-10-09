<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="text" id="username" name="email" class="mt-1 p-2 border rounded-lg w-full focus:outline-none focus:ring focus:border-blue-300">
                @error('email')<span class="text-red-500">{{$message}}</span>@enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 border rounded-lg w-full focus:outline-none focus:ring focus:border-blue-300">
                @error('password')<span class="text-red-500">{{$message}}</span>@enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
