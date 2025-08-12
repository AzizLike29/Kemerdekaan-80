// Import tailwind css
import '../css/app.css'

// Impor Vue
import { createApp } from 'vue'
import router from './router'
import LoginPage from './views/auth/LoginPage.vue'

// Contoh komponen utama
import LandingPage from './components/LandingPage.vue'

// Mount Vue ke elemen
createApp(LandingPage).mount('#app')
createApp(LoginPage).use(router).mount('#app-auth')