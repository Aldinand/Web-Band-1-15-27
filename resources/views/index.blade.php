<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - rumahsakit</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>

    ::-webkit-scrollbar {
        width: 6px; 
    }
    ::-webkit-scrollbar-thumb {
        background-color: #000; 
        border-radius: 8px; 
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: #444; 
    }
    ::-webkit-scrollbar-track {
        background-color: #f0f0f0; 
    }

    html {
        scroll-behavior: smooth;
    }
    
</style>

</head>
<body class="font-sans overflow-x-hidden">

    <nav class="sticky top-0 bg-white border-b border-gray-500 z-10">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <div class="text-4xl font-bold">
                <a href="index.html" class="text-black no-underline">rumahsakit</a>
            </div>
            <ul class="flex space-x-8 font-mono">
                <li><a href="#shows" class="text-black font-semibold hover:underline">SHOWS</a></li>
                <li><a href="#shop2" class="text-black font-semibold hover:underline">MERCH</a></li>
                <li><a href="#video" class="text-black font-semibold hover:underline">VIDEO</a></li>
                <li><a href="#Album" class="text-black font-semibold hover:underline">ALBUM</a></li>
                <li><a href="#sm" class="text-black font-semibold hover:underline">FOLLOW</a></li>
            </ul>
        </div>
    </nav>

    <div class="relative">
        <img src="{{ asset('images/at4.png') }}" alt="" class="w-11/12 mx-auto">
        <a href="https://open.spotify.com/album/47N7fUOEFRggQUUsm16RnE?si=U5dlfIMVSgOULT3Mk7TQJQ" 
   class="absolute top-[85%] left-[80%] transform -translate-x-1/2 -translate-y-1/2 bg-black text-white font-mono text-2xl px-6 py-3 hover:scale-110 transition-all underline">
   LISTEN NOW
</a>

    </div>

    <section id="shows" class="px-6 py-12">
         <h1 class="text-3xl font-bold text-left mb-1">TOUR DATES</h1>
        <div class="space-y-12">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-mono">OCT 28 2023</h2>
                    <p class="text-4xl font-mono">BANDUNG (VESPARTY)</p>
                </div>
                <a href="/login" class="px-6 py-2 text-black border-2 border-black font-semibold hover:bg-black hover:text-white transition-all">TICKETS</a>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-mono">OCT 15 2023</h2>
                    <p class="text-4xl font-mono">LAMPUNG (EXPLOSIVE FEST)</p>
                </div>
                <a href="/login" class="px-6 py-2 text-black border-2 border-black font-semibold hover:bg-black hover:text-white transition-all">TICKETS</a>
            </div>

            <div class="space-y-12">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-mono">SEP 23 2023</h2>
                    <p class="text-4xl font-mono">JAKARTA (PESTAPORA)</p>
                </div>
                <a href="/login" class="px-6 py-2 text-black border-2 border-black font-semibold hover:bg-black hover:text-white transition-all">TICKETS</a>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-mono">SEP 16 2023</h2>
                    <p class="text-4xl font-mono">KUNINGAN (CIREMAI FEST)</p>
                </div>
                <a href="/login" class="px-6 py-2 text-black border-2 border-black font-semibold hover:bg-black hover:text-white transition-all">TICKETS</a>
            </div>

            <div class="space-y-12">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-mono">SEP 9 2023</h2>
                    <p class="text-4xl font-mono">SINGAPORE (CIPTA CITA)</p>
                </div>
                <a href="/login" class="px-6 py-2 text-black border-2 border-black font-semibold hover:bg-black hover:text-white transition-all">TICKETS</a>
            </div>




    </section>

    <section id="shop2" class="px-6 py-12">
    <div class="flex flex-wrap justify-center gap-6">
        
        <a href="https://www.tokopedia.com/rumahsakitmerch/t-shirt-about-time-black-official-rumahsakit?extParam=src%3Dshop%26whid%3D12163006" target="_blank" class="relative group w-72 h-72">
            <img src="{{ asset('images/a1.png') }}" alt="merch 1" class="w-full h-full object-cover rounded-md">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-md">
                <h2 class="text-lg font-bold">T-Shirt About Time</h2>
                <p class="text-base font-semibold mt-2">Rp185,000</p>
            </div>
        </a>
        
        <a href="https://www.tokopedia.com/rumahsakitmerch/t-shirt-metro-black-official-rumahsakit?extParam=src%3Dshop%26whid%3D12163006" target="_blank" class="relative group w-72 h-72">
            <img src="{{ asset('images/a2.png') }}" alt="merch 2" class="w-full h-full object-cover rounded-md">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-md">
                <h2 class="text-lg font-bold">T-Shirt Metro Black</h2>
                <p class="text-base font-semibold mt-2">Rp185,000</p>
            </div>
        </a>
        
        <a href="https://www.tokopedia.com/rumahsakitmerch/t-shirt-metro-black-official-rumahsakit?extParam=src%3Dshop%26whid%3D12163006" target="_blank" class="relative group w-72 h-72">
            <img src="{{ asset('images/a3.png') }}" alt="merch 3" class="w-full h-full object-cover rounded-md">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-md">
                <h2 class="text-lg font-bold">T-Shirt Metro</h2>
                <p class="text-base font-semibold mt-2">Rp185,000</p>
            </div>
        </a>
    </div>
</section>

<section id="shop" class="px-6 py-12">
    <div class="flex flex-wrap justify-center gap-6">
      
        <a href="https://www.tokopedia.com/rumahsakitmerch/t-shirt-official-rumahsakit-tjst?extParam=whid%3D12163006%26src%3Dshop" target="_blank" class="relative group w-72 h-72">
            <img src="{{ asset('images/a4.png') }}" alt="merch 4" class="w-full h-full object-cover rounded-md">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-md">
                <h2 class="text-lg font-bold">T-Shirt TJST</h2>
                <p class="text-base font-semibold mt-2">Rp185,000</p>
            </div>
        </a>
        
        <a href="https://www.tokopedia.com/rumahsakitmerch/t-shirt-official-rumahsakit-kuning?extParam=src%3Dshop%26whid%3D12163006" target="_blank" class="relative group w-72 h-72">
            <img src="{{ asset('images/a5.png') }}" alt="merch 5" class="w-full h-full object-cover rounded-md">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-md">
                <h2 class="text-lg font-bold">T-Shirt Kuning</h2>
                <p class="text-base font-semibold mt-2">Rp185,000</p>
            </div>
        </a>
        
        <a href="https://www.tokopedia.com/rumahsakitmerch/t-shirt-pasien-black-official-rumahsakit?extParam=src%3Dshop%26whid%3D12163006" target="_blank" class="relative group w-72 h-72">
            <img src="{{ asset('images/a6.png') }}" alt="merch 6" class="w-full h-full object-cover rounded-md">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-md">
                <h2 class="text-lg font-bold">T-Shirt Pasien Black</h2>
                <p class="text-base font-semibold mt-2">Rp185,000</p>
            </div>
        </a>
    </div>
</section>


    <section id="video" class="px-6 py-12 text-center">
        <div class="flex flex-wrap justify-center gap-6">
            <iframe class="w-[480px] h-[270px]" src="https://www.youtube.com/embed/lkKUpCEw7SU"></iframe>
            <iframe class="w-[480px] h-[270px]" src="https://www.youtube.com/embed/Z1ZRQOuazeE"></iframe>
        </div>
    </section>

    <section id="Album">
    <div class="grid grid-cols-3 gap-4 p-4"> 
        <div class="flex flex-col items-center p-4 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">
            <img src="{{ asset('images/b1.jpeg') }}" class="w-3/4 rounded-md transition-transform duration-300 ease-in-out hover:scale-105"> 
            <h2 class="mt-2 text-base font-bold text-gray-800">About Time</h2> 
            <p class="text-xs font-medium text-gray-500">2023 Album</p> 
        </div>
        <div class="flex flex-col items-center p-4 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">
            <img src="{{ asset('images/b2.jpg') }}" alt="Sample Image 2" class="w-3/4 rounded-md transition-transform duration-300 ease-in-out hover:scale-105">
            <h2 class="mt-2 text-base font-bold text-gray-800">Panasea</h2>
            <p class="text-xs font-medium text-gray-500">2019 Single</p>
        </div>
        <div class="flex flex-col items-center p-4 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">
            <img src="{{ asset('images/b3.jpeg') }}" alt="Sample Image 3" class="w-3/4 rounded-md transition-transform duration-300 ease-in-out hover:scale-105">
            <h2 class="mt-2 text-base font-bold text-gray-800">Timeless</h2>
            <p class="text-xs font-medium text-gray-500">2015 Album</p>
        </div>
        <div class="flex flex-col items-center p-4 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">
            <img src="{{ asset('images/b4.jpeg') }}" alt="Sample Image 4" class="w-3/4 rounded-md transition-transform duration-300 ease-in-out hover:scale-105">
            <h2 class="mt-2 text-base font-bold text-gray-800">1+2</h2>
            <p class="text-xs font-medium text-gray-500">2012 Album</p>
        </div>
        <div class="flex flex-col items-center p-4 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">
            <img src="{{ asset('images/b5.jpg') }}" alt="Sample Image 5" class="w-3/4 rounded-md transition-transform duration-300 ease-in-out hover:scale-105">
            <h2 class="mt-2 text-base font-bold text-gray-800">Nol Derajat</h2>
            <p class="text-xs font-medium text-gray-500">2001 Album</p>
        </div>
        <div class="flex flex-col items-center p-4 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg">
            <img src="{{ asset('images/b6.jpeg') }}" alt="Sample Image 6" class="w-3/4 rounded-md transition-transform duration-300 ease-in-out hover:scale-105">
            <h2 class="mt-2 text-base font-bold text-gray-800">rumahsakit</h2>
            <p class="text-xs font-medium text-gray-500">1998 Album</p>
        </div>
    </div>
</section>


    <section id="sm" class="px-6 py-12 text-center">
    <div class="flex justify-center gap-12">
        <a href="https://www.instagram.com/rumahsakitband/?hl=en"><img src="{{ asset('images/2.png') }}" alt="Instagram" class="hover:scale-125 transition-transform w-20"></a>
        <a href="https://www.youtube.com/@officialrumahsakit/featured"><img src="{{ asset('images/3.png') }}" alt="YouTube" class="hover:scale-125 transition-transform w-20"></a>
        <a href="https://www.facebook.com/officialrumahsakit/"><img src="{{ asset('images/4.png') }}" alt="Facebook" class="hover:scale-125 transition-transform w-20"></a>
        <a href="https://open.spotify.com/artist/1Foqp2ngVCEaD2xKanB7QP?si=92ac6dd8e03f4142"><img src="{{ asset('images/5.png') }}" alt="Facebook" class="hover:scale-125 transition-transform w-20"></a>
        <a href="https://twitter.com/_rumahsakit"><img src="{{ asset('images/6.png') }}" alt="Facebook" class="hover:scale-125 transition-transform w-20"></a>

    </div>
</section>


    <footer class="bg-black text-white text-center py-4">
        <p>2023 rumahsakit. All rights reserved.</p>
    </footer>

</body>
</html>
