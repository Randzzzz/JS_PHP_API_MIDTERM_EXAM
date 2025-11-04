<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bistro Crafté</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/x-icon" href="images/logo.png" />
</head>
<body class="flex flex-col min-h-screen bg-[#f1f3f4] text-[#324149]">
  <!-- navbar -->
  <header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-200">
    <nav class="container mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center space-x-3">
        <img src="images/logo.png" class="h-10" alt="Bistro Crafté Logo" />
        <span class="font-extrabold text-2xl tracking-wide">Bistro Crafté</span>
      </div>
      <ul class="hidden md:flex space-x-8 font-semibold text-lg">
        <li><button class="hover:text-[#6e7a86]" onclick="showMenu('signatures')">Signatures</button></li>
        <li><button class="hover:text-[#6e7a86]" onclick="showMenu('coffee')">Coffee</button></li>
        <li><button class="hover:text-[#6e7a86]" onclick="showMenu('non-coffee')">Non-Coffee</button></li>
        <li><button class="hover:text-[#6e7a86]" onclick="showMenu('pastries')">Pastries</button></li>
        <li><button class="hover:text-[#6e7a86]" onclick="showMenu('pasta')">Pasta</button></li>
        <li><button class="hover:text-[#6e7a86]" onclick="showMenu('all')">All Menu</button></li>
      </ul>
      <div class="flex items-center space-x-3">
      <a href="login.php" class="hidden md:inline-block bg-[#324149] text-white px-4 py-2 rounded-lg hover:bg-[#6e7a86] transition cursor-pointer">
        User Login
      </a>
      <button class="md:hidden p-2 border rounded text-[#1c0d08]" onclick="toggleMenu()">☰</button>
    </nav>
    <div id="mobileMenu" class="hidden flex-col bg-white border-t border-gray-200 px-6 py-4 space-y-2 md:hidden">
      <button class="block text-left hover:text-[#6e7a86]" onclick="showMenu('signatures')">Signatures</button>
      <button class="block text-left hover:text-[#6e7a86]" onclick="showMenu('coffee')">Coffee</button>
      <button class="block text-left hover:text-[#6e7a86]" onclick="showMenu('non-coffee')">Non-Coffee</button>
      <button class="block text-left hover:text-[#6e7a86]" onclick="showMenu('pastries')">Pastries</button>
      <button class="block text-left hover:text-[#6e7a86]" onclick="showMenu('pasta')">Pasta</button>
      <button class="block text-left hover:text-[#6e7a86]" onclick="showMenu('all')">All Menu</button>
    </div>
  </header>

  <!-- body -->
  <main class="flex-1 container mx-auto px-6 py-10 flex flex-col lg:flex-row gap-10">
    <section class="menu flex-1">
      <div class="text-center mb-12">
        <h1 class="menu-title text-5xl font-extrabold mb-4">Bistro Crafté Kiosk</h1>
        <p class="text-xl text-gray-700 max-w-2xl mx-auto">
          Explore our handcrafted selections made with passion and the finest ingredients.
        </p>
      </div>

      <div class="menu-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Item Sample-->
        <!-- <div class="item-container bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition transform hover:-translate-y-1 cursor-pointer" data-category="coffee">
          <div class="h-48 overflow-hidden rounded-xl">
            <img src="images/menu/crafte-brew.png" class="w-full h-full object-cover" />
          </div>
          <div class="mt-4">
            <h3 class="text-2xl font-bold">Crafté Brew</h3>
            <p class="text-gray-600">Hot/Iced</p>
            <p class="text-2xl font-semibold mt-2">&#8369;150</p>
            <form class="mt-4 space-y-2" onsubmit="addToOrder(event)">
              <input type="hidden" name="productId" value="1">
              <input type="hidden" name="productName" value="Crafté Brew">
              <input type="hidden" name="price" value="150">
              <label for="quantity-1" class="block text-sm font-medium text-gray-600">Quantity:</label>
              <input type="number" name="quantity" id="quantity-1" min="1" value="1" class="w-full border border-gray-300 rounded px-3 py-1" />
              <button type="submit" class="w-full bg-[#324149] text-white py-2 rounded hover:bg-[#6e7a86] transition">Add to Order</button>
            </form>
          </div>
        </div> -->
      </div>
    </section>

    <!-- ORDER SUMMARY -->
    <aside class="w-full lg:w-80 h-fit self-start bg-white rounded-2xl shadow-md border border-gray-200 p-6 lg:sticky lg:top-24">
      <h2 class="text-2xl font-bold border-b pb-2 mb-4">Order Summary</h2>
      <div id="order-items" class="space-y-3 text-gray-700">
        <p class="text-sm text-gray-500">Your ordered items will appear here...</p>
      </div>
      <div class="border-t mt-4 pt-4 text-[#324149]">
        <div class="flex justify-between text-lg font-semibold">
          <span>Total:</span>
          <span id="total-amount">&#8369;0.00</span>
        </div>
        <div class="mt-5 space-y-3">
          <form onsubmit="processPayment(event)">
            <input type="number" id="cash-amount" class="w-full border rounded px-3 py-2 mb-2" placeholder="Input Cash Amount">
            <button id="pay-button" class="w-full bg-[#324149] text-white py-2 rounded hover:bg-[#6e7a86] transition">Pay Now</button>
          </form>
        </div>
      </div>
    </aside>
  </main>

  <footer class="border-t border-gray-300 mt-auto bg-white py-8">
    <div class="container mx-auto px-10 flex flex-col md:flex-row md:justify-between items-center md:items-start gap-8 md:gap-32 lg:gap-40">
      <div class="flex justify-center md:justify-start">
        <img 
          src="images/footer.png" 
          alt="Bistro Crafté Logo" 
          class="w-52 md:w-60 h-auto object-contain" 
        />
      </div>
      <div class="flex flex-col sm:flex-row justify-center md:justify-between items-center md:items-start gap-12 md:gap-20 text-center md:text-left font-medium text-lg text-[#324149] w-full md:w-auto">
        <div class="space-y-2">
          <a href="#" class="block hover:underline">Privacy Notice</a>
          <a href="#" class="block hover:underline">Health Privacy Notice</a>
          <a href="#" class="block hover:underline">Terms of Use</a>
          <a href="#" class="block hover:underline">Cookie Preferences</a>
        </div>

        <div class="hidden sm:block w-px h-20"></div>
        <div class="space-y-2">
          <a href="#" class="block hover:underline">Tiktok</a>
          <a href="#" class="block hover:underline">Facebook</a>
          <a href="#" class="block hover:underline">Instagram</a>
        </div>
      </div>
    </div>
    <div class="border-t mt-8 pt-4 text-center text-sm text-gray-600">
      © 2025 Bistro Crafté. All rights reserved.
    </div>
  </footer>


  <button id="scrollToTopBtn" class="hidden fixed bottom-6 right-6 bg-[#324149] text-white p-3 rounded-full shadow-lg hover:bg-[#6e7a86] transition duration-300 z-50">
    ↑
  </button>
  <script src="scripts/scrollButton.js"></script>
  <script src="scripts/crafteSwal.js"></script>
  <script src="scripts/updateOrder.js"></script>
  <script src="scripts/showMenu.js"></script>
</body>
</html>
