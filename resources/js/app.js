// Import tailwind css
import '../css/app.css'

// Impor Vue
import { createApp } from 'vue'

// Contoh komponen utama
import LandingPage from './components/LandingPage.vue'

// Mount Vue ke elemen dengan id="app"
createApp(LandingPage).mount('#app')