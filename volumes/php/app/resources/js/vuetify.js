import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify)

const opts = {
    theme: {
        dark: true,
        themes: {
            dark: {
                primary: '#3f51b5',
                info: '#4c86b5',
                success: '#17b535',
                secondary: '#fff',
                accent: '#8c9eff',
                error: '#b71c1c'
            }
        }
    },
}

export default new Vuetify(opts)