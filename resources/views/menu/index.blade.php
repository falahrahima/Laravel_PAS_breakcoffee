<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE SHOP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f5ebe0] text-[#4e3629] font-sans">

    <!-- Navbar -->
    <div class="bg-[#7a5745] text-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="logo">
                <a href="#" class="text-xl font-bold">Coffee Shop</a>
            </div>
            <ul class="flex space-x-6">
                <li><a href="#home-section" class="hover:text-[#d4a373]">Home</a></li>
                <li><a href="#about-us-section" class="hover:text-[#d4a373]">About Us</a></li>
                <li><a href="#menu-section" class="hover:text-[#d4a373]">Menu</a></li>
                <li><a href="#landing-section" class="hover:text-[#d4a373]">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home Section -->
    <div id="home-section" class="pt-24 bg-cover bg-center h-screen" style="background-image: url('/storage/cover.png');">
        <div class="container mx-auto flex flex-col items-center justify-center h-full text-center text-brown">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Start Your Day With <span class="text-[#d4a373]">Coffee</span></h1>
            <p class="text-lg md:text-2xl mb-8">Where Every Morning Begins With a Perfect Brew</p>
            <a href="https://wa.me/089669577870" class="px-6 py-3 bg-[#d4a373] hover:bg-[#b48a6a] text-white font-semibold rounded-lg shadow-md transition">Contact Us</a>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about-us-section" class="py-16 bg-[#e8d3c3]">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-4">About Us</h2>
                <p class="leading-relaxed">
                    Welcome to BreakCoffee, where every cup is crafted with passion and precision.
                    Step into our cozy space, where the aroma of freshly brewed coffee fills the air, inviting you to relax, unwind, and savor the moment.
                    Whether you're here to catch up with friends or enjoy a quiet moment alone, our friendly baristas are ready to serve you the perfect brew.
                </p>
            </div>
            <div>
                <img src="abt us.png" alt="About Us" class="rounded-lg shadow-md">
            </div>
        </div>
    </div>

    <!-- Menu Section -->
    <div id="menu-section" class="py-16 bg-[#f5ebe0]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Our Menu</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($menu as $row)
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition">
                    <img src="{{ asset('storage/' . $row->picture) }}" alt="{{ $row->title }}" class="w-full h-40 object-cover rounded-md">
                    <h3 class="mt-4 text-xl font-semibold">{{ $row->title }}</h3>
                    <p class="text-sm mt-2">{{ $row->content }}</p>
                    <span class="text-[#d4a373] font-bold mt-2 block">${{ $row->price }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="landing-section" class="py-16 bg-[#e8d3c3]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Contact Us</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="text-center">
                        <img src="instagram.png" alt="Instagram" class="mx-auto w-12 h-12 mb-2">
                        <p>@breakcoffee.id</p>
                    </div>
                    <div class="text-center">
                        <img src="phone-call.png" alt="Phone" class="mx-auto w-12 h-12 mb-2">
                        <p>+62 665823592</p>
                    </div>
                    <div class="text-center">
                        <img src="map-pin.png" alt="Map" class="mx-auto w-12 h-12 mb-2">
                        <p>Jl. DI Panjaitan</p>
                    </div>
                    <div class="text-center">
                        <img src="mail.png" alt="Email" class="mx-auto w-12 h-12 mb-2">
                        <p>breakcoffee45@gmail.com</p>
                    </div>
                </div>
                <!-- Google Maps -->
                <div class="flex justify-center items-center">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2880542730327!2d109.24603587431676!3d-7.433343273231347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fc28ce139c9%3A0x7d367a6628871b13!2set%20al%20Coffee%20Purwokerto!5e0!3m2!1sen!2sid!4v1727265606544!5m2!1sen!2sid" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#7a5745] text-white text-center py-4">
        <p>© 2024 Coffee Shop. All Rights Reserved.</p>
    </footer>
</body>
</html>
