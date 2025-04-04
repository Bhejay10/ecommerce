<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - FoodPanda</title>
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
    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-5">Checkout</h1>
        
        <div class="bg-white p-5 shadow-md rounded-md">
            <h2 class="text-xl font-semibold mb-3">Payment Method</h2>
            <div class="space-y-3">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="payment" value="cod" class="payment-option" checked>
                    <span>Cash on Delivery (COD)</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="payment" value="card" class="payment-option">
                    <span>Credit/Debit Card</span>
                </label>
            </div>
            
            <div id="card-details" class="hidden mt-5">
                <h3 class="text-lg font-semibold mb-2">Card Details</h3>
                <input type="text" id="card-number" class="w-full p-2 border rounded-md mb-3" placeholder="Card Number">
                <input type="text" id="card-expiry" class="w-full p-2 border rounded-md mb-3" placeholder="Expiry (MM/YY)">
                <input type="text" id="card-cvv" class="w-full p-2 border rounded-md" placeholder="CVV">
            </div>
            
            <button id="place-order" class="w-full bg-primary hover:bg-primary-hover text-white font-bold py-3 rounded-md mt-5">
                Place Order
            </button>
        </div>
    </div>
    
    <!-- Confirmation Modal -->
    <div id="confirmation-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white p-5 rounded-md shadow-lg text-center w-96">
            <h2 class="text-xl font-bold mb-2">Order Placed Successfully!</h2>
            <p class="text-gray-600 mb-4">Your food will be delivered soon.</p>
            <button onclick="closeModal()" class="bg-primary hover:bg-primary-hover text-white font-bold py-2 px-5 rounded-md">OK</button>
        </div>
    </div>
    
    <script>
        document.querySelectorAll('.payment-option').forEach(option => {
            option.addEventListener('change', function () {
                document.getElementById('card-details').classList.toggle('hidden', this.value !== 'card');
            });
        });
        
        document.getElementById('place-order').addEventListener('click', function () {
            let selectedPayment = document.querySelector('input[name="payment"]:checked').value;
            if (selectedPayment === 'card') {
                let cardNumber = document.getElementById('card-number').value.trim();
                let expiry = document.getElementById('card-expiry').value.trim();
                let cvv = document.getElementById('card-cvv').value.trim();
                if (!cardNumber || !expiry || !cvv) {
                    alert('Please enter valid card details.');
                    return;
                }
            }
            document.getElementById('confirmation-modal').classList.remove('hidden');
        });
        
        function closeModal() {
            document.getElementById('confirmation-modal').classList.add('hidden');
            window.location.href = 'index.html';
        }
    </script>
</body>
</html>
