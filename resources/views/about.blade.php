<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-none shadow-lg w-72 text-center">
        <h2 class="mb-5 text-xl font-semibold text-gray-800">Ticket Reservation</h2>
        <form id="ticketForm">
            <div class="mb-4 text-left">
                <label for="email" class="block mb-1 text-sm font-medium">Email</label>
                <input type="email" id="email" required class="w-full px-3 py-2 border border-gray-300 rounded-none text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4 text-left">
                <label for="tickets" class="block mb-1 text-sm font-medium">Number of Tickets</label>
                <input type="number" id="tickets" min="1" required class="w-full px-3 py-2 border border-gray-300 rounded-none text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full px-3 py-2 bg-black text-white rounded-none text-base font-medium hover:bg-blue-800 transition duration-200">Reserve</button>
            <p id="successMessage" class="mt-3 text-sm text-green-600 hidden"></p>
            <p id="errorMessage" class="mt-3 text-sm text-red-600 hidden"></p>
        </form>
    </div>

    <script src="assets/js/pay.js"></script>
</body>
</html>
