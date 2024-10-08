const { createApp } = Vue

createApp({
    data() {
        return {
            // creo un array vuoto
            albumsList: [],
        }
    },
    methods: {
        // faccio una chiamata api per prendere la lista degli album
        getAlbums() {
            axios.get('api.php')
                .then((response) => {
                    console.log(response.data);
                    // aggiungo la lista dalla chiamata api in albumsList
                    this.albumsList = response.data;
                    console.log(this.albumsList);
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