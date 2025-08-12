<template>
    <AuthLayout>
        <h1 class="text-center text-2xl font-semibold text-gray-800">
            Buat Akun
        </h1>
        <p class="text-center text-sm text-gray-500 mt-1">
            Gabung & rayakan semangat kemerdekaan!
        </p>

        <form @submit.prevent="submit" class="mt-6 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1"
                    >Nama</label
                >
                <input
                    v-model="form.name"
                    type="text"
                    required
                    placeholder="Nama lengkap"
                    class="w-full rounded-xl border border-gray-200 px-4 py-2.5 text-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none"
                />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1"
                    >Email</label
                >
                <input
                    v-model="form.email"
                    type="email"
                    required
                    placeholder="Email kamu"
                    class="w-full rounded-xl border border-gray-200 px-4 py-2.5 text-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none"
                />
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Password</label
                    >
                    <input
                        :type="showPass ? 'text' : 'password'"
                        v-model="form.password"
                        required
                        placeholder="Buat password"
                        class="w-full rounded-xl border border-gray-200 px-4 py-2.5 text-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none"
                    />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Konfirmasi</label
                    >
                    <input
                        :type="showPass ? 'text' : 'password'"
                        v-model="form.password_confirmation"
                        required
                        placeholder="Ulangi password"
                        class="w-full rounded-xl border border-gray-200 px-4 py-2.5 text-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none"
                    />
                </div>
            </div>

            <label class="inline-flex items-center gap-2 text-sm text-gray-600">
                <input
                    v-model="showPass"
                    type="checkbox"
                    class="rounded border-gray-300 text-red-600 focus:ring-red-500"
                />
                Tampilkan password
            </label>

            <button
                type="submit"
                :disabled="loading"
                class="w-full rounded-xl bg-red-600 hover:bg-red-700 text-white font-medium py-2.5 shadow disabled:opacity-60"
            >
                {{ loading ? "Mendaftarkan…" : "Daftar" }}
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Sudah punya akun?
            <RouterLink to="/login" class="text-red-600 hover:underline"
                >Login</RouterLink
            >
        </p>
    </AuthLayout>
</template>

<script setup>
import { reactive, ref } from "vue";
import axios from "axios";
import AuthLayout from "./AuthLayout.vue";

const form = reactive({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
const showPass = ref(false);
const loading = ref(false);

const submit = async () => {
    try {
        loading.value = true;
        await axios.get("/sanctum/csrf-cookie");
        await axios.post("/api/register", form);
        // redirect setelah sukses
    } catch (e) {
        alert("Registrasi gagal");
    } finally {
        loading.value = false;
    }
};
</script>
