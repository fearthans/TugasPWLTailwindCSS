@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <h1>Products</h1>
    </div>
    <div class="flex flex-wrap mt-6 -mx-3">
        <!-- List of products goes here -->
        <!-- Product 1 -->
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('https://th.bing.com/th/id/OIP.2gvZjAYr50JfVemZJCld8QHaFs?rs=1&pid=ImgDetMain')">
                    <!-- Product image overlay -->
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Laptop</h5>
                        <p class="text-white">Powerful and portable computing device for work or entertainment.</p>
                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('https://th.bing.com/th/id/OIP.QGNUJBEED2Yq_vAkVrf88gHaFe?rs=1&pid=ImgDetMain')">
                    <!-- Product image overlay -->
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Smartphone</h5>
                        <p class="text-white">All-in-one communication and computing device that fits in your pocket.</p>
                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('https://th.bing.com/th/id/R.40779d6faed348d2322d5ac7f16a0197?rik=MLUgze33hyC%2bKw&riu=http%3a%2f%2fwww.juegosandroide.com%2fwp-content%2fuploads%2f2015%2f08%2frazer-edge-5-100020387-orig.png&ehk=bxrGN2MRIQrG8GaBnZwRqIb9aHGr4lZhEUbtAJ2ZMZQ%3d&risl=&pid=ImgRaw&r=0')">
                    <!-- Product image overlay -->
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Tablet</h5>
                        <p class="text-white">Portable touchscreen device perfect for multimedia consumption and productivity on the go.</p>
                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('https://1.bp.blogspot.com/-OJ7gMtndgmo/Te-e6BMUSmI/AAAAAAAAABI/A1DNoqlt9mg/s1600/PC+O%2529ffice.jpg')">
                    <!-- Product image overlay -->
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Desktop</h5>
                        <p class="text-white">High-performance computing powerhouse for demanding tasks and gaming.</p>
                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 5 -->
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('https://th.bing.com/th/id/OIP.EpGeMms-B0TC0cTliTiMzgHaHa?rs=1&pid=ImgDetMain')">
                    <!-- Product image overlay -->
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Smartwatch</h5>
                        <p class="text-white">Wearable device that offers fitness tracking,notifikasi, dan akses cepat ke informasi dari smartphone.</p>
                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 6 -->
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('https://s3.bukalapak.com/img/3640120284/w-1000/data.png')">
                    <!-- Product image overlay -->
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Headphones</h5>
                        <p class="text-white">Immersive audio experience for music, movies, and gaming.</p>
                        <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection