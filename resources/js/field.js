Nova.booting((Vue, router) => {
    Vue.component('index-enhanced-belongs-to-many', require('./components/IndexField'));
    Vue.component('detail-enhanced-belongs-to-many', require('./components/DetailField'));
    Vue.component('form-enhanced-belongs-to-many', require('./components/FormField'));
})
