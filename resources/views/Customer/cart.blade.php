@extends('layouts.app')

@section('content')
    <div>
        <div class="ml-[10px] mr-[10px] p-4">
            <div class="mb-8">
                <a href="jastiperInfo"><img src="{{ asset('assets/back.png') }}" class="absolute mt-[10px] w-[20px]"></a>
                <h1 class="ml-[30px] text-3xl font-semibold">Items</h1>
            </div>
            @if ($products)
                <form id="checkoutForm" method="POST" action="{{ route('checkout') }}">
                    @csrf
                    @foreach ($products as $index => $product)
                        <div class="product w-full flex flex-col justify-between" id="product-{{ $index }}">
                            <div class="">
                                <div class="mb-8 flex flex-row w-auto">
                                    <img src="{{ asset('assets/image/'. $product->product->picture) }}" alt=""
                                        class="h-[250px] w-[230px] object-cover rounded-2xl mr-8">
                                    <div class="h-auto w-full">
                                        <div class="space-y-2">
                                            <p class="font-semibold text-2xl">{{ $product->product->product_name }}</p>
                                            <p class="text-xl">Rp {{ number_format($product->product->price, 0, ',', '.') }}</p>
                                            <p>{{ $product->product->description }}</p>
                                        </div>
                                        <div class="mt-12">
                                            <div class="flex flex-cols items-center">
                                                <div>
                                                    <p class="text-xl mr-4">Qty:</p>
                                                </div>
                                                <div
                                                    class="flex items-center justify-between rounded-md border-yellow-200 text-right">
                                                    <button type="button"
                                                        class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white decrement"
                                                        data-index="{{ $index }}">-</button>
                                                    <span class="quantity text-xl font-bold px-8"
                                                        id="quantity-{{ $index }}">1</span>
                                                    <button type="button"
                                                        class="bg-[#69A197] hover:bg-[#69A197] font-bold py-1.5 px-4 rounded text-[18px] text-white increment"
                                                        data-index="{{ $index }}">+</button>
                                                </div>
                                                <div class="w-full text-right">
                                                    <input type="hidden" class="base_price"
                                                        id="base_price-{{ $index }}"
                                                        value="{{ $product->product->price }}">
                                                    <p class="totalPrice text-xl font-semibold"
                                                        id="totalPrice-{{ $index }}">Rp
                                                        {{ $product->product->price }}</p>
                                                </div>
                                            </div>
                                            <!-- Hidden inputs to store product data -->
                                            <input type="hidden" name="products[{{ $index }}][id]"
                                                value="{{ $product->product->id }}">
                                            <input type="hidden" name="order_id"
                                                value="{{ $orderDetails[$index]->order_id }}">
                                            <input type="hidden" class="hidden-quantity"
                                                name="products[{{ $index }}][quantity]"
                                                id="hidden-quantity-{{ $index }}" value="1">
                                            <input type="hidden" class="hidden-total-price"
                                                name="products[{{ $index }}][total_price]"
                                                id="hidden-total-price-{{ $index }}"
                                                value="{{ $product->product->price }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="border-black mb-8">
                    @endforeach
                    <div class="w-full">
                        <div>
                            <h1 class="text-3xl font-semibold mb-8">Payment</h1>
                        </div>
                        <div class="flex flex-rows justify-between mb-4">
                            <p class="text-2xl">Subtotal</p>
                            <p id="subtotal" class="text-2xl">Rp 0</p>
                        </div>
                        <div class="flex flex-rows justify-between mb-4">
                            <p class="text-2xl">Shipping Cost</p>
                            <p class="text-2xl">Rp 15.000</p>
                        </div>
                        <hr class="border-black mb-4">
                        <div class="flex flex-rows justify-between mb-4">
                            <p class="text-2xl font-bold">Total Cost</p>
                            <p id="totalCost" class="text-2xl font-bold">Rp 0</p>
                        </div>
                        <button type="submit"
                            class="absolute ml-[1090px] mt-[10px] text-white bg-[#69A197] hover:bg-[#69A197] focus:ring-4 focus:ring-[#69A197] font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-[#69A197] dark:hover:bg-[#69A197] focus:outline-none dark:focus:ring-[#69A197]">
                            <span class="text-[20px]">Checkout</span>
                        </button>
                        <br>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const products = document.querySelectorAll('.product');

            products.forEach((product, index) => {
                const decrementBtn = product.querySelector(".decrement");
                const incrementBtn = product.querySelector(".increment");
                const quantityDisplay = product.querySelector(`#quantity-${index}`);
                const totalPriceDisplay = product.querySelector(`#totalPrice-${index}`);
                const basePrice = product.querySelector(`#base_price-${index}`);
                const hiddenQuantity = product.querySelector(`#hidden-quantity-${index}`);
                const hiddenTotalPrice = product.querySelector(`#hidden-total-price-${index}`);

                let quantity = parseInt(quantityDisplay.textContent);
                let pricePerUnit = parseInt(basePrice.value);

                function updateTotalPrice() {
                    const totalPrice = quantity * pricePerUnit;
                    totalPriceDisplay.textContent = "Rp " + totalPrice.toLocaleString(
                    'id-ID'); // Specify 'id-ID' for Indonesian formatting

                    // Update hidden fields
                    hiddenQuantity.value = quantity;
                    hiddenTotalPrice.value = totalPrice;

                    // Calculate subtotal
                    let subtotal = 0;
                    products.forEach((product, idx) => {
                        subtotal += parseInt(product.querySelector(`#totalPrice-${idx}`).textContent
                            .replace("Rp ", "").replace(/\./g, ''));
                    });

                    // Calculate total cost
                    const shippingCost = 15000;
                    const totalCost = subtotal + shippingCost;

                    // Update subtotal and total cost
                    document.getElementById("subtotal").textContent = "Rp " + subtotal.toLocaleString(
                        'id-ID');
                    document.getElementById("totalCost").textContent = "Rp " + totalCost.toLocaleString(
                        'id-ID');
                }

                decrementBtn.addEventListener("click", function() {
                    if (quantity > 1) {
                        quantity--;
                        quantityDisplay.textContent = quantity;
                        updateTotalPrice();
                    }
                });

                incrementBtn.addEventListener("click", function() {
                    quantity++;
                    quantityDisplay.textContent = quantity;
                    updateTotalPrice();
                });

                updateTotalPrice();
            });

            const checkoutForm = document.getElementById('checkoutForm');
            checkoutForm.addEventListener('submit', function(event) {
                // Update hidden fields before form submission if needed
                products.forEach((product, index) => {
                    const quantityDisplay = product.querySelector(`#quantity-${index}`);
                    const totalPriceDisplay = product.querySelector(`#totalPrice-${index}`);
                    const hiddenQuantity = product.querySelector(`#hidden-quantity-${index}`);
                    const hiddenTotalPrice = product.querySelector(`#hidden-total-price-${index}`);

                    hiddenQuantity.value = quantityDisplay.textContent;
                    hiddenTotalPrice.value = totalPriceDisplay.textContent.replace("Rp ", "")
                        .replace(/\./g, '');
                });
            });
        });
    </script>
@endsection
