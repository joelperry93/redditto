var Vue = require('vue');
Vue.use(require('vue-resource'));

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    
    el: '#new-comment-box',

    data: {
        comment: {
            text: '',
            parentId: null
        }
    },

    methods: {
        onSubmit: function (e) {
            this.$http.post(location.pathname + '/comment', this.comment);
        }
    }

});