<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi json</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <header class="p-4 mb-3">
            <div class="container">
                <div class="icon-header">
                    <i class="fa-brands fa-spotify fa-2xl"></i>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row pt-3 justify-content-around gap-1 gy-5 mb-3">
                    <div class="col-3 text-white cursor-pointer" v-for="(singleAlbum, index) in albumsList" :key="index"
                        @click="openAlbum(singleAlbum)">
                        <img :src="singleAlbum.poster" :alt="singleAlbum.title" class="w-100 mb-3">
                        <h5 class="text-center">{{ singleAlbum.title }}</h5>
                        <div class="text-center text-secondary mb-2">{{ singleAlbum.author}}</div>
                        <div class="text-center">{{ singleAlbum.year}}</div>
                    </div>
                </div>
                <!-- se è stato selezionato un album -->
                <transition name="modal">
                    <div v-if="selectedAlbum" class="album-selected">
                        <span class="close" @click="closeAlbum">&times;</span>
                        <div class="content-album">
                            <img :src="selectedAlbum.poster" :alt="selectedAlbum.title" class="w-100 mb-3">
                            <h5 class="text-center">{{ selectedAlbum.title }}</h5>
                            <div class="text-center text-secondary mb-2">{{ selectedAlbum.author }}</div>
                            <div class="text-center">{{ selectedAlbum.year }}</div>
                        </div>
                    </div>
                </transition>

            </div>
        </main>
    </div>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- js -->
    <script src="./js/script.js"></script>
</body>

</html>