<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/x-icon" href="images/logo.png" />
</head>
<body class="flex flex-col min-h-screen bg-[#f1f3f4] text-[#324149]">
  <header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-200">
    <nav class="container mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center space-x-3">
        <img src="images/logo.png" class="h-10" alt="Bistro Crafté Logo" />
        <span class="font-extrabold text-2xl tracking-wide">Bistro Crafté</span>
      </div>
      <div class="flex items-center space-x-3">
      <a href="index.php" class="hidden md:inline-block bg-[#324149] text-white px-4 py-2 rounded-lg hover:bg-[#6e7a86] transition cursor-pointer">
        Order Kiosk
      </a>
    </nav>
  </header>
  <main class="flex-grow flex items-center justify-center px-6 py-16">
    <div class="bg-white shadow-lg rounded-2xl p-10 w-full max-w-md border border-gray-100">
      <div class="text-center mb-8">
        <img src="images/logo.png" alt="Bistro Crafté" class="mx-auto h-16 mb-3">
        <h1 class="text-3xl font-extrabold text-[#324149]">Crafté Begins Here</h1>
        <p class="text-gray-600 mt-2">For authorized management use only.</p>
      </div>

      <form onsubmit="loginUser(event)" class="space-y-5">
        <div>
          <label for="username" class="block text-sm font-semibold text-gray-700 mb-1">Username:</label>
          <input type="text" id="username" name="username" 
            class="block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#6e7a86] focus:border-transparent transition">
        </div>
        <div>
          <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password:</label>
          <input type="password" id="password" name="password" 
            class="block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#6e7a86] focus:border-transparent transition">
        </div>

        <button type="submit"
          class="w-full bg-[#324149] text-white font-semibold py-2.5 rounded-lg hover:bg-[#6e7a86] transition">
          Sign In
        </button>

        <p class="text-center text-sm text-gray-600 mt-4">
          Don’t have an account?
          <a href="register.php" class="text-[#324149] font-semibold hover:underline">Register here</a>
        </p>
      </form>
    </div>
  </main>

  <footer class="border-t border-gray-300 bg-white py-6 text-center text-sm text-gray-600">
    © 2025 Bistro Crafté. All rights reserved.
  </footer>
  <script src="scripts/crafteSwal.js"></script>
  <script src="scripts/login.js"></script>
</body>
</html>