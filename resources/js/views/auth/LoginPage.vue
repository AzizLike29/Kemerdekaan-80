<template>
    <AuthLayout>
        <h1 class="text-center text-2xl font-semibold text-gray-800">Login</h1>
        <p class="text-center text-sm text-gray-500 mt-1">
            Rayakan Kemerdekaan RI
        </p>

        <!-- tombol sosial -->
        <div class="mt-6 grid grid-cols-2 gap-3">
            <button
                type="button"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-200 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50"
            >
                <!-- google -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48"
                    class="w-4 h-4"
                >
                    <path
                        fill="#FFC107"
                        d="M43.6 20.1H24v8h11.3C33.6 31.9 29.3 35 24 35c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.8 1.1 8 3l5.7-5.7C34.7 5.1 29.6 3 24 3 12.9 3 4 11.9 4 23s8.9 20 20 20 20-8.9 20-20c0-1.3-.1-2.6-.4-3.9z"
                    />
                    <path
                        fill="#FF3D00"
                        d="M6.3 14.7l6.6 4.8C14.4 16.1 18.9 13 24 13c3.1 0 5.8 1.1 8 3l5.7-5.7C34.7 5.1 29.6 3 24 3c-7.7 0-14.3 4.3-17.7 11.7z"
                    />
                    <path
                        fill="#4CAF50"
                        d="M24 43c5.2 0 9.9-2 13.4-5.2l-6.2-5.2C29.1 34.5 26.7 35 24 35c-5.2 0-9.6-3.1-11.3-7.5l-6.6 5.1C9.6 38.8 16.2 43 24 43z"
                    />
                    <path
                        fill="#1976D2"
                        d="M43.6 20.1H24v8h11.3C34.2 31.4 31.5 34 28 35l6.2 5.2C36.6 38.4 40 31.5 40 23c0-1.3-.1-2.6-.4-3.9z"
                    />
                </svg>
                Google
            </button>
            <button
                type="button"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-200 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50"
            >
                <!-- apple -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 14 17"
                    class="w-4 h-4 fill-current"
                >
                    <path
                        d="M13.6 13.1c-.3.8-.7 1.5-1.3 2.2-.6.7-1.3 1-2 1-.5 0-1.1-.2-1.8-.5-.7-.3-1.3-.5-1.7-.5-.4 0-1 .2-1.8.5-.8.3-1.4.5-1.9.5-.7 0-1.4-.3-2-1-.6-.7-1-1.5-1.3-2.3C-.2 10 .4 7.7 1.8 6.1 2.7 5.1 3.9 4.6 5.3 4.6c.6 0 1.3.2 2 .5.7.4 1.2.5 1.5.5.3 0 .9-.2 1.7-.6.9-.4 1.6-.6 2-.6.2 0 .7.1 1.3.4-.5.8-.8 1.4-1 .8 1.1 3.8-.3 6.1-.2 6.5z"
                    />
                    <path
                        d="M9.4 0c0 .6-.2 1.2-.6 1.8-.6.9-1.3 1.4-2 1.3 0-.6.2-1.2.7-1.9C8 0.4 8.8-.1 9.4 0z"
                    />
                </svg>
                Apple
            </button>
        </div>

        <!-- separator -->
        <div class="relative my-6">
            <div class="h-px bg-gray-200"></div>
            <span
                class="absolute inset-0 -top-3 mx-auto w-8 text-center text-xs text-gray-400 bg-white"
                >atau</span
            >
        </div>

        <!-- form -->
        <form @submit.prevent="submit" class="space-y-4">
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

            <div>
                <div class="flex items-center justify-between mb-1">
                    <label class="block text-sm font-medium text-gray-700"
                        >Password</label
                    >
                    <RouterLink
                        to="/forgot"
                        class="text-xs text-red-600 hover:underline"
                        >Lupa Password</RouterLink
                    >
                </div>
                <div class="relative">
                    <input
                        :type="showPass ? 'text' : 'password'"
                        v-model="form.password"
                        required
                        placeholder="Password"
                        class="w-full rounded-xl border border-gray-200 px-4 py-2.5 text-sm pr-10 focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none"
                    />
                    <button
                        type="button"
                        @click="showPass = !showPass"
                        class="absolute inset-y-0 right-3 grid place-items-center text-gray-400 hover:text-gray-600"
                    >
                        <EyeSlashIcon v-if="showPass" class="w-5 h-5" />
                        <EyeIcon v-else class="w-5 h-5" />
                    </button>
                </div>
            </div>

            <label class="inline-flex items-center gap-2 text-sm text-gray-600">
                <input
                    v-model="form.remember"
                    type="checkbox"
                    class="rounded border-gray-300 text-red-600 focus:ring-red-500"
                />
                Ingat saya
            </label>

            <button
                type="submit"
                :disabled="loading"
                class="w-full rounded-xl bg-red-600 hover:bg-red-700 text-white font-medium py-2.5 shadow disabled:opacity-60"
            >
                {{ loading ? "Memproses…" : "Log In" }}
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Belum punya akun?
            <RouterLink to="/register" class="text-red-600 hover:underline"
                >Daftar</RouterLink
            >
        </p>
    </AuthLayout>
</template>

<script setup>
import { reactive, ref } from "vue";
import axios from "axios";
import AuthLayout from "./AuthLayout.vue";
import { EyeIcon, EyeSlashIcon } from "@heroicons/vue/24/outline";

const form = reactive({ email: "", password: "", remember: false });
const showPass = ref(false);
const loading = ref(false);

const submit = async () => {
    try {
        loading.value = true;
        await axios.get("/sanctum/csrf-cookie");
        await axios.post("/api/login", form);
        // redirect setelah sukses
    } catch (e) {
        alert("Login gagal");
    } finally {
        loading.value = false;
    }
};
</script>
