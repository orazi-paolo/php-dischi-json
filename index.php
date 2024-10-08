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
        <header class="p-4">
            <div class="container">
                <div class="icon-header">
                    <i class="fa-brands fa-spotify fa-2xl"></i>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row pt-3 justify-content-around">
                    <div class="col-3 text-white">
                        <img src="" alt="">
                        <h5 class="text-center">new jersey</h5>
                        <div class="text-center text-secondary mb-2">bon jovi</div>
                        <div class="text-center">1988</div>
                    </div>
                    <div class="col-3 text-white">
                        <img src="" alt="">
                        <h5 class="text-center">new jersey</h5>
                        <div class="text-center text-secondary mb-2">bon jovi</div>
                        <div class="text-center">1988</div>
                    </div>
                    <div class="col-3 text-white">
                        <img src="" alt="">
                        <h5 class="text-center">new jersey</h5>
                        <div class="text-center text-secondary mb-2">bon jovi</div>
                        <div class="text-center">1988</div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- js -->
    <script src="./js/script.js"></script>
</body>

</html>