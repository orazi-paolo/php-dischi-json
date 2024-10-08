const { createApp } = Vue

createApp({
    data() {
        return {
        }
    },
    methods: {
        // faccio una chiamata api per prendere la lista degli album
        getAlbums() {
            axios.get('api.php')
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                });
        }
    },
    created() {
        // al momento della creazione dell applicazione chiamo il metodo
        this.getAlbums();
    }
}).mount('#app')