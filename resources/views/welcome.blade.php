<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
</head>
<body>
    <div class="min-w-screen min-h-screen bg-amber-50 py-2">
        <div class="text-center absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 border-2 border-amber-200 bg-amber-100 shadow-md rounded-xl min-h-max w-screen sm:w-[360px] pb-10">
            <h1 class="text-3xl font-bold underline mt-10 text-stone-700">KAFKACHIPS</h1>
            <form class="mt-6" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="relative p-1 text-left w-11/12 m-auto">
                    <label for="market" class="text-stone-700 block">Marketplace</label>
                    <div class="absolute bottom-2 left-2 w-6 text-center">
                        <i class="fa-solid fa-store"></i>
                        <div class="absolute top-0 w-full h-full bg-stone-100 bg-opacity-40"></div>
                    </div>
                    <select id="market" name="market" class="shadow-md px-2 w-full text-stone-600 rounded-lg pl-8 block h-8">
                        <option value="TOKOPEDIA">TOKOPEDIA</option>
                        <option value="SHOPEE">SHOPEE</option>
                    </select>
                </div>
                <div class="relative p-1 text-left w-11/12 m-auto">
                    <label for="invoice" class="text-stone-700 block">Invoice</label>
                    <div class="absolute bottom-2 left-2 w-6 text-center">
                        <i class="fa-solid fa-file-invoice"></i>
                        <div class="absolute top-0 w-full h-full bg-stone-100 bg-opacity-40"></div>
                    </div>
                    <input type="text" id="invoice" name="invoice" class="shadow-md px-2 w-full text-stone-600 rounded-lg placeholder:italic placeholder:text-sm pl-8 block h-8" placeholder="ex: INV/xxx/xxxxx">
                </div>
                <div class="relative p-1 text-left w-11/12 m-auto">
                    <label for="courier" class="text-stone-700 block">Courier</label>
                    <div class="absolute bottom-2 left-2 w-6 text-center">
                        <i class="fa-solid fa-cart-flatbed"></i>
                        <div class="absolute top-0 w-full h-full bg-stone-100 bg-opacity-40"></div>
                    </div>
                    <select id="courier" name="courier" class="shadow-md px-2 w-full text-stone-600 rounded-lg pl-8 block h-8">
                        <option value="ANTERAJA">ANTERAJA</option>
                        <option value="SICEPAT">SICEPAT</option>
                        <option value="JNT">JNT</option>
                        <option value="ID-EXPRESS">ID-EXPRESS</option>
                    </select>
                </div>
                <div class="relative p-1 text-left w-11/12 m-auto">
                    <label for="awb" class="text-stone-700 block">Air Way Bill</label>
                    <div class="absolute bottom-2 left-2 w-6 text-center">
                        <i class="fa-solid fa-plane-departure"></i>
                        <div class="absolute top-0 w-full h-full bg-stone-100 bg-opacity-40"></div>
                    </div>
                    <input type="text" id="awb" name="awb" class="shadow-md px-2 w-full text-stone-600 rounded-lg placeholder:italic placeholder:text-sm pl-8 block h-8" placeholder="ex: 1001231xxx">
                </div>
                <div class="relative p-1 text-left w-11/12 m-auto">
                    <label for="customer" class="text-stone-700 block">Customer Name</label>
                    <div class="absolute bottom-2 left-2 w-6 text-center">
                        <i class="fa-solid fa-user-ninja"></i>
                        <div class="absolute top-0 w-full h-full bg-stone-100 bg-opacity-40"></div>
                    </div>
                    <input type="text" id="customer" name="customer" class="shadow-md px-2 w-full text-stone-600 rounded-lg placeholder:italic placeholder:text-sm pl-8 block h-8" placeholder="ex: andi">
                </div>
                <div class="relative p-1 text-left w-11/12 m-auto">
                    <label for="order" class="text-stone-700 block">Detail Orders</label>
                    <div class="absolute top-8 left-2 w-6 text-center">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div class="absolute top-0 w-full h-full bg-stone-100 bg-opacity-40"></div>
                    </div>
                    <textarea name="order" id="order" cols="30" rows="10" class="shadow-md px-2 py-1 w-full text-stone-600 rounded-lg placeholder:italic placeholder:text-sm pl-8 block h-32" placeholder="ex: 1 Nangka A 500g"></textarea>
                </div>
                <div class="relative w-1/3 h-8 rounded-md bg-slate-700 m-auto mt-5">
                    <input type="submit" name="send" value="Submit" class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-slate-100" href="{{url('/shipment')}}">
                </div>
            </form>
        </div>
    </div>
</body>
</html>