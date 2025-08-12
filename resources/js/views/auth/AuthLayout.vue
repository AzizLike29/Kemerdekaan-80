<template>
    <!-- Full merah putih -->
    <div
        class="min-h-screen flex items-center justify-center p-6 relative overflow-hidden"
    >
        <!-- Gradien merah sebagai background full -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-red-700 via-red-600 to-rose-500"
        ></div>

        <!-- Gelombang putih -->
        <svg
            class="absolute inset-0 w-full h-full opacity-30"
            viewBox="0 0 1440 720"
            fill="none"
        >
            <path
                d="M0 220C180 260 360 180 540 220C720 260 900 340 1080 320C1260 300 1380 240 1440 220V0H0V220Z"
                fill="white"
            />
            <path
                d="M0 520C200 560 420 470 620 520C820 570 980 640 1200 610C1300 596 1380 570 1440 550V720H0V520Z"
                fill="white"
                opacity="0.8"
            />
        </svg>

        <!-- konfeti halus -->
        <div aria-hidden="true">
            <div
                class="absolute top-12 left-14 w-2 h-2 bg-white/70 rounded-full"
            ></div>
            <div
                class="absolute top-24 right-24 w-2 h-2 bg-white/70 rounded-full"
            ></div>
            <div
                class="absolute bottom-12 left-24 w-2 h-2 bg-white/70 rounded-full"
            ></div>
        </div>

        <!-- Kartu konten -->
        <div class="relative z-10 w-full max-w-md">
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-10">
                <!-- Badge 17 -->
                <div
                    class="mx-auto -mt-14 mb-4 w-16 h-16 rounded-2xl bg-red-600 text-white grid place-items-center shadow-lg"
                >
                    <span class="text-2xl font-extrabold leading-none">17</span>
                </div>
                <slot />
                <!-- footer mini -->
                <div class="mt-8 text-center text-[11px] text-gray-400">
                    Dirgahayu Republik Indonesia 🇮🇩
                </div>
            </div>
        </div>
    </div>
</template>
