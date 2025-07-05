import './bootstrap'
import { createApp } from 'vue'

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

// Define the main component
import App from './App.vue'

const vuetify = createVuetify({ components, directives })

const app = createApp(App).use(vuetify)
app.mount("#app")
