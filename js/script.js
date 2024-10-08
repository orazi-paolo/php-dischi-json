const { createApp } = Vue

createApp({
    data() {
        return {
            // creo un array vuoto
            albumsList: [],
            selectedAlbum: null,
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
        },
        openAlbum(album) {
            // al click assegno alla variabile selectedAlbum l'album selezionato
            this.selectedAlbum = album;
        },
        closeAlbum() {
            // al click riporto la variabile a null
            this.selectedAlbum = null;
        }
    },
    created() {
        // al momento della creazione dell applicazione chiamo il metodo
        this.getAlbums();
    }
}).mount('#app')