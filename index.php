<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>demo</title>
</head>

<body>
    <div id="app">
        <section id="cont" class="row justify-content-around m-o">
            <div v-for="(element, index) in data" :key="index"
                class="col-4 d-flex justify-content-center align-items-center">
                <div @click="position(index)" class="card mb-3" style="width: 18rem;" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <img :src="element.poster" class="card-img-top" alt="...">
                    <div class="card-body text-center text-white">
                        <h5>{{element.title}}</h5>
                        <span>{{element.author}}</span>
                        <h5>{{element.year}}</h5>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="card modal-content mx-auto" style="width: 18rem;" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <img :src="data[positionI].poster" class="card-img-top" alt="...">
                            <div class="card-body text-center text-white">
                                <h5>{{data[positionI].title}}</h5>
                                <span>{{data[positionI].author}}</span>
                                <h5>{{data[positionI].year}}</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="main.js"></script>
</body>

</html>