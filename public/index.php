<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Product Landing Page</title>
</head>
<body class="text-white min-h-screen flex flex-col" style="background: linear-gradient(to bottom, #1F2937 0%, #111827 100%);">
    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="max-w-lg mx-auto">
            <h1 class="text-4xl font-bold mb-4 text-indigo-400">Organic Green Tea</h1>
            <div class="relative">
                <img src="tea_bottle.jpg" alt="Product Image" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="mt-8 flex justify-between items-center">
                <span class="text-3xl font-bold text-indigo-400">$9.99</span>
                
                <!-- Purchase form containing necessary details for transaction -->
                <form id="purchaseForm" method="POST" action="../generateInvoice.php" target="_blank">
                    <input type="hidden" name="amount" value="10">
                    <input type="hidden" name="currency" value="EUR">
                    <input type="hidden" name="orderId" value="ID000">
                    <input type="hidden" name="language" value="en">
                    <button type="submit" id="generateInvoiceBtn" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Purchase
                    </button>
                </form>

            </div>
            <p class="mt-6 text-lg text-gray-300">Experience the refreshing and rejuvenating taste of our Organic Green Tea. Carefully handpicked and expertly blended, this tea offers a harmonious balance of subtle flavors and invigorating antioxidants. Enjoy a cup of pure bliss that will awaken your senses and nourish your body.</p>
            <div class="mt-8">
                <h2 class="text-2xl font-bold text-indigo-400 mb-2">Product Details</h2>
                <ul class="list-disc list-inside text-gray-300">
                    <li>Sourced from premium organic tea gardens</li>
                    <li>Rich in antioxidants and natural nutrients</li>
                    <li>Delicate and refreshing flavor</li>
                    <li>Carefully packaged to preserve freshness</li>
                </ul>
            </div>
            <div id="invoiceContainer" class="mt-8"></div>
        </div>
    </div>
    <footer class="bg-gray-800 py-4 mt-auto">
        <div class="container mx-auto text-center text-gray-400">
            Powered by <a href="https://yowpay.com" target="_blank" class="underline">YowPay</a>
        </div>
    </footer>
</body>
</html>