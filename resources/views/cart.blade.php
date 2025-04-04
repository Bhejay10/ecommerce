<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FoodPanda-Style Add to Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#e21b70',
                        'primary-hover': '#c8005f',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="https://www.foodpanda.com/wp-content/uploads/2019/06/foodpanda-logo.png" alt="FoodPanda Logo" class="h-10 mr-2">
                    <span class="text-primary font-bold text-2xl">foodpanda</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="relative cursor-pointer">
                        <i class="fas fa-shopping-bag text-primary text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Restaurant Info -->
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-sm p-5 mt-5">
            <h1 class="text-2xl font-bold mb-2">Delicious Restaurant</h1>
            <div class="flex gap-4 text-sm text-gray-600">
                <div class="flex items-center gap-1">
                    <span class="text-yellow-400">★</span>
                    <span>4.8 (200+ ratings)</span>
                </div>
                <div>30-45 min</div>
                <div>Free delivery</div>
            </div>
        </div>

        <!-- Menu Section -->
        <div class="my-8">
            <h2 class="text-xl font-bold mb-4">Popular Items</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <!-- Food Item 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="https://via.placeholder.com/300x180?text=Chicken+Adobo" alt="Chicken Adobo" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold mb-1">Chicken Adobo</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Classic Filipino dish with chicken marinated in vinegar, soy sauce, and spices</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold">₱180.00</span>
                            <button class="border border-primary text-primary hover:bg-primary hover:text-white px-4 py-2 rounded-md font-medium transition-colors">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Food Item 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="https://via.placeholder.com/300x180?text=Pork+Sisig" alt="Pork Sisig" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold mb-1">Pork Sisig</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Sizzling diced pork with onions and chili peppers</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold">₱220.00</span>
                            <div class="flex items-center gap-3">
                                <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">-</button>
                                <span class="font-bold">1</span>
                                <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Food Item 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="https://via.placeholder.com/300x180?text=Pancit+Canton" alt="Pancit Canton" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold mb-1">Pancit Canton</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Stir-fried noodles with vegetables and meat</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold">₱160.00</span>
                            <button class="border border-primary text-primary hover:bg-primary hover:text-white px-4 py-2 rounded-md font-medium transition-colors">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Food Item 4 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="https://via.placeholder.com/300x180?text=Beef+Tapa" alt="Beef Tapa" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold mb-1">Beef Tapa</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Cured beef served with garlic rice and egg</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold">₱190.00</span>
                            <button class="border border-primary text-primary hover:bg-primary hover:text-white px-4 py-2 rounded-md font-medium transition-colors">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Food Item 5 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="https://via.placeholder.com/300x180?text=Lechon+Kawali" alt="Lechon Kawali" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold mb-1">Lechon Kawali</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Crispy deep-fried pork belly with rice</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold">₱210.00</span>
                            <div class="flex items-center gap-3">
                                <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">-</button>
                                <span class="font-bold">1</span>
                                <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Food Item 6 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="https://via.placeholder.com/300x180?text=Halo+Halo" alt="Halo-Halo" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold mb-1">Halo-Halo</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Mixed dessert with shaved ice, sweet beans, fruits, and ice cream</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold">₱120.00</span>
                            <button class="border border-primary text-primary hover:bg-primary hover:text-white px-4 py-2 rounded-md font-medium transition-colors">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Sidebar -->
    <div class="fixed top-0 right-0 w-full md:w-96 h-full bg-white shadow-lg z-50 overflow-y-auto">
        <div class="p-5 border-b border-gray-200 flex justify-between items-center">
            <h3 class="text-lg font-bold flex items-center gap-2">
                <i class="fas fa-shopping-bag"></i>
                Your Cart
            </h3>
            <button class="text-2xl">&times;</button>
        </div>
        
        <div class="p-5">
            <!-- Cart Item 1 -->
            <div class="flex justify-between items-start pb-4 mb-4 border-b border-gray-200">
                <div>
                    <h4 class="font-bold mb-1">Pork Sisig</h4>
                    <p class="text-gray-600">₱220.00</p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">-</button>
                    <span class="font-bold">1</span>
                    <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">+</button>
                </div>
            </div>
            
            <!-- Cart Item 2 -->
            <div class="flex justify-between items-start pb-4 mb-4 border-b border-gray-200">
                <div>
                    <h4 class="font-bold mb-1">Lechon Kawali</h4>
                    <p class="text-gray-600">₱210.00</p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">-</button>
                    <span class="font-bold">1</span>
                    <button class="w-7 h-7 rounded-full border border-primary text-primary hover:bg-primary hover:text-white flex items-center justify-center">+</button>
                </div>
            </div>
        </div>
        
        <div class="p-5 border-t border-gray-200">
            <div class="flex justify-between mb-2">
                <span class="text-gray-600">Subtotal</span>
                <span>₱430.00</span>
            </div>
            <div class="flex justify-between mb-4">
                <span class="text-gray-600">Delivery Fee</span>
                <span>₱49.00</span>
            </div>
            <div class="flex justify-between font-bold text-lg pt-2 border-t border-gray-200">
                <span>Total</span>
                <span>₱479.00</span>
            </div>
            <button class="w-full bg-primary hover:bg-primary-hover text-white font-bold py-3 rounded-md mt-4">
                Proceed to Checkout
            </button>
        </div>
    </div>

    <!-- Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
</body>
</html>