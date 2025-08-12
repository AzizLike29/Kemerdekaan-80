<template>
    <main class="min-h-screen bg-white text-gray-800 selection:bg-red-600/20">
        <!-- NAVBAR -->
        <header class="sticky top-0 z-40 bg-white/80 backdrop-blur border-b">
            <div
                class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between"
            >
                <div class="flex items-center gap-3">
                    <span
                        class="inline-flex items-center justify-center w-9 h-9 rounded-xl bg-red-600 text-white font-extrabold"
                        >17</span
                    >
                    <span class="font-semibold">Peringatan Kemerdekaan</span>
                </div>
                <nav class="hidden md:flex items-center gap-6 text-sm">
                    <a href="#jadwal" class="hover:text-red-600 transition"
                        >Jadwal</a
                    >
                    <a href="#lomba" class="hover:text-red-600 transition"
                        >Lomba</a
                    >
                    <a href="#daftar" class="hover:text-red-600 transition"
                        >Daftar</a
                    >
                </nav>
                <a
                    href="#daftar"
                    class="hidden md:inline-flex rounded-xl bg-red-600 text-white px-4 py-2 text-sm hover:bg-red-700 transition"
                >
                    Ikut Lomba
                </a>
            </div>
        </header>

        <!-- HERO -->
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-red-600/10 via-white to-white"
                ></div>
                <div
                    class="absolute -top-16 -right-14 w-80 h-80 bg-red-500/20 rounded-full blur-3xl"
                ></div>
                <div
                    class="absolute -bottom-16 -left-10 w-72 h-72 bg-red-400/20 rounded-full blur-3xl"
                ></div>
                <div
                    class="absolute -skew-y-6 top-0 left-1/2 -translate-x-1/2 w-[140%] h-32 bg-gradient-to-r from-red-600 to-red-500/90"
                ></div>
            </div>

            <div
                class="max-w-7xl mx-auto px-4 pt-16 lg:pt-24 pb-10 grid lg:grid-cols-2 gap-10 items-center"
            >
                <div>
                    <div
                        class="inline-flex items-center gap-2 rounded-full border px-3 py-1 text-xs font-medium bg-white/70 backdrop-blur"
                    >
                        <span class="w-2 h-2 rounded-full bg-red-600"></span> 17
                        Agustus {{ targetYear }}
                    </div>
                    <h1
                        class="mt-4 text-4xl lg:text-6xl font-extrabold leading-tight tracking-tight"
                    >
                        Semarak HUT ke-{{ targetYear - 1945 }} Republik
                        Indonesia
                    </h1>
                    <p class="mt-4 text-lg text-gray-600 max-w-2xl">
                        Rayakan kemerdekaan bersama! Upacara bendera, lomba
                        rakyat, dan panggung hiburan malam—untuk semua kalangan.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a
                            href="#jadwal"
                            class="inline-flex items-center rounded-2xl px-5 py-3 border border-red-600 text-red-600 hover:bg-red-50 transition"
                            >Lihat Jadwal</a
                        >
                        <a
                            href="#daftar"
                            class="inline-flex items-center rounded-2xl px-5 py-3 bg-red-600 text-white hover:bg-red-700 transition"
                            >Daftar Lomba</a
                        >
                    </div>

                    <!-- Countdown -->
                    <div class="mt-8 grid grid-cols-4 gap-3 max-w-md">
                        <div
                            class="rounded-2xl border bg-white/80 backdrop-blur p-4 text-center"
                        >
                            <div class="text-3xl font-extrabold tabular-nums">
                                {{ dd }}
                            </div>
                            <div
                                class="text-xs uppercase tracking-wide text-gray-500"
                            >
                                Hari
                            </div>
                        </div>
                        <div
                            class="rounded-2xl border bg-white/80 backdrop-blur p-4 text-center"
                        >
                            <div class="text-3xl font-extrabold tabular-nums">
                                {{ hh }}
                            </div>
                            <div
                                class="text-xs uppercase tracking-wide text-gray-500"
                            >
                                Jam
                            </div>
                        </div>
                        <div
                            class="rounded-2xl border bg-white/80 backdrop-blur p-4 text-center"
                        >
                            <div class="text-3xl font-extrabold tabular-nums">
                                {{ mm }}
                            </div>
                            <div
                                class="text-xs uppercase tracking-wide text-gray-500"
                            >
                                Menit
                            </div>
                        </div>
                        <div
                            class="rounded-2xl border bg-white/80 backdrop-blur p-4 text-center"
                        >
                            <div class="text-3xl font-extrabold tabular-nums">
                                {{ ss }}
                            </div>
                            <div
                                class="text-xs uppercase tracking-wide text-gray-500"
                            >
                                Detik
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu info -->
                <div class="relative">
                    <div
                        class="aspect-[4/3] rounded-3xl border overflow-hidden shadow-sm bg-white"
                    >
                        <div class="grid grid-cols-3 h-full divide-x">
                            <div
                                class="p-6 flex flex-col items-center justify-center"
                            >
                                <div class="text-3xl font-bold">17</div>
                                <div class="text-sm text-gray-500">
                                    Agustus {{ targetYear }}
                                </div>
                            </div>
                            <div
                                class="p-6 flex flex-col items-center justify-center"
                            >
                                <div class="text-3xl font-bold">08.00</div>
                                <div class="text-sm text-gray-500">
                                    Mulai Kegiatan
                                </div>
                            </div>
                            <div
                                class="p-6 flex flex-col items-center justify-center"
                            >
                                <div class="text-3xl font-bold">
                                    Lapangan RW
                                </div>
                                <div class="text-sm text-gray-500">
                                    Lokasi Acara
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 bg-white rounded-2xl border shadow p-4"
                    >
                        <p class="text-sm">
                            Tema:
                            <span class="font-semibold text-red-700"
                                >Bersatu, Tangguh, Maju</span
                            >
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATUS -->
        <section
            class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-3 gap-6"
        >
            <div
                class="rounded-2xl p-6 border bg-white hover:shadow-sm transition"
            >
                <div class="text-3xl font-bold">50+</div>
                <div class="text-sm text-gray-500">Panitia & Relawan</div>
            </div>
            <div
                class="rounded-2xl p-6 border bg-white hover:shadow-sm transition"
            >
                <div class="text-3xl font-bold">300+</div>
                <div class="text-sm text-gray-500">Peserta Lomba</div>
            </div>
            <div
                class="rounded-2xl p-6 border bg-white hover:shadow-sm transition"
            >
                <div class="text-3xl font-bold">4</div>
                <div class="text-sm text-gray-500">Kategori Lomba</div>
            </div>
        </section>

        <!-- JADWAL -->
        <section id="jadwal" class="max-w-7xl mx-auto px-4 py-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Rundown Acara</h2>
                <span class="text-xs text-gray-500"
                    >*Estimasi dapat berubah</span
                >
            </div>
            <ol class="space-y-4">
                <li
                    class="rounded-2xl border p-4 flex items-start gap-4 bg-white hover:shadow-sm transition"
                >
                    <span class="mt-1 w-2 h-2 rounded-full bg-red-600"></span>
                    <div>
                        <p class="font-medium">07.30 — Registrasi Peserta</p>
                        <p class="text-sm text-gray-600">
                            Pembagian nomor & briefing panitia.
                        </p>
                    </div>
                </li>
                <li
                    class="rounded-2xl border p-4 flex items-start gap-4 bg-white hover:shadow-sm transition"
                >
                    <span class="mt-1 w-2 h-2 rounded-full bg-red-600"></span>
                    <div>
                        <p class="font-medium">08.00 — Upacara Bendera</p>
                        <p class="text-sm text-gray-600">
                            Mengheningkan cipta, pembacaan proklamasi, doa.
                        </p>
                    </div>
                </li>
                <li
                    class="rounded-2xl border p-4 flex items-start gap-4 bg-white hover:shadow-sm transition"
                >
                    <span class="mt-1 w-2 h-2 rounded-full bg-red-600"></span>
                    <div>
                        <p class="font-medium">09.00 — Lomba Rakyat</p>
                        <p class="text-sm text-gray-600">
                            Balap karung, makan kerupuk, tarik tambang, panjat
                            pinang.
                        </p>
                    </div>
                </li>
                <li
                    class="rounded-2xl border p-4 flex items-start gap-4 bg-white hover:shadow-sm transition"
                >
                    <span class="mt-1 w-2 h-2 rounded-full bg-red-600"></span>
                    <div>
                        <p class="font-medium">19.00 — Panggung Hiburan</p>
                        <p class="text-sm text-gray-600">
                            Pentas seni warga & pembagian hadiah.
                        </p>
                    </div>
                </li>
            </ol>
        </section>

        <!-- LOMBA -->
        <section id="lomba" class="max-w-7xl mx-auto px-4 pb-12">
            <h2 class="text-2xl font-semibold mb-6">Kategori Lomba</h2>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <article
                    class="rounded-2xl border p-5 bg-white hover:shadow-sm transition"
                >
                    <div class="text-2xl">🎒</div>
                    <h3 class="mt-2 font-semibold">Balap Karung</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Seru, butuh keseimbangan & kelincahan.
                    </p>
                </article>
                <article
                    class="rounded-2xl border p-5 bg-white hover:shadow-sm transition"
                >
                    <div class="text-2xl">🍘</div>
                    <h3 class="mt-2 font-semibold">Makan Kerupuk</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Tanpa tangan—siapa paling cepat?
                    </p>
                </article>
                <article
                    class="rounded-2xl border p-5 bg-white hover:shadow-sm transition"
                >
                    <div class="text-2xl">🪢</div>
                    <h3 class="mt-2 font-semibold">Tarik Tambang</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Kekompakan tim jadi kunci.
                    </p>
                </article>
                <article
                    class="rounded-2xl border p-5 bg-white hover:shadow-sm transition"
                >
                    <div class="text-2xl">🎁</div>
                    <h3 class="mt-2 font-semibold">Panjat Pinang</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Kerja sama untuk raih puncak.
                    </p>
                </article>
            </div>
        </section>

        <!-- FORM -->
        <section id="daftar" class="max-w-7xl mx-auto px-4 pb-16">
            <div class="rounded-3xl border p-6 md:p-8 bg-white">
                <h2 class="text-2xl font-semibold mb-4">
                    Form Pendaftaran Lomba
                </h2>
                <form
                    @submit.prevent="submitForm"
                    class="grid gap-4 sm:grid-cols-2"
                >
                    <div>
                        <label class="block text-sm mb-1">Nama Lengkap</label>
                        <input
                            v-model="form.nama"
                            type="text"
                            class="w-full rounded-xl border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600"
                            required
                        />
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Nomor HP</label>
                        <input
                            v-model="form.hp"
                            type="tel"
                            class="w-full rounded-xl border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600"
                            required
                        />
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm mb-1">Pilih Lomba</label>
                        <select
                            v-model="form.lomba"
                            class="w-full rounded-xl border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600"
                            required
                        >
                            <option value="" disabled>Pilih...</option>
                            <option>Balap Karung</option>
                            <option>Makan Kerupuk</option>
                            <option>Tarik Tambang</option>
                            <option>Panjat Pinang</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <button
                            type="submit"
                            class="w-full sm:w-auto rounded-2xl bg-red-600 px-6 py-2 text-white hover:bg-red-700 transition"
                        >
                            Kirim Pendaftaran
                        </button>
                    </div>
                </form>
                <p v-if="success" class="mt-3 text-green-600 text-sm">
                    Pendaftaran terkirim! Panitia akan menghubungi Anda.
                </p>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="border-t py-6 text-center text-sm text-gray-500">
            © {{ new Date().getFullYear() }} Panitia 17 Agustus — Semua hak
            dilindungi.
        </footer>
    </main>
</template>

<script setup>
import { reactive, ref, onMounted, onBeforeUnmount } from "vue";

// Target acara => 17 Agustus jam 08:00 WIB (01:00 UTC)
const targetYear = new Date().getFullYear();
const target = new Date(`${targetYear}-08-17T01:00:00Z`);

const dd = ref("00");
const hh = ref("00");
const mm = ref("00");
const ss = ref("00");

let timer;
const tick = () => {
    const now = new Date();
    const diff = Math.max(0, target - now);
    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const m = Math.floor((diff / (1000 * 60)) % 60);
    const s = Math.floor((diff / 1000) % 60);
    dd.value = String(d).padStart(2, "0");
    hh.value = String(h).padStart(2, "0");
    mm.value = String(m).padStart(2, "0");
    ss.value = String(s).padStart(2, "0");
};

onMounted(() => {
    tick();
    timer = setInterval(tick, 1000);
});
onBeforeUnmount(() => {
    clearInterval(timer);
});

const form = reactive({ nama: "", hp: "", lomba: "" });
const success = ref(false);
function submitForm() {
    success.value = true;
    setTimeout(() => (success.value = false), 3000);
}
</script>

<style scoped>
.tabular-nums {
    font-variant-numeric: tabular-nums;
}
</style>
