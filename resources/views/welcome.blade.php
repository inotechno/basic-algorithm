<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal A-D</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk menengahkan konten */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="col-lg-8">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="soal-a-tab" data-toggle="tab" href="#soal-a" role="tab"
                        aria-controls="soal-a" aria-selected="true">Soal A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="soal-b-tab" data-toggle="tab" href="#soal-b" role="tab"
                        aria-controls="soal-b" aria-selected="false">Soal B</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="soal-c-tab" data-toggle="tab" href="#soal-c" role="tab"
                        aria-controls="soal-c" aria-selected="false">Soal C</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="soal-a" role="tabpanel" aria-labelledby="soal-a-tab">
                    <h3>Soal A</h3>
                    <p>Soal : [12,9,30,"A","M",99,82,"J","N","B"] </p>
                    <p>Output : <span id="output-soal-a"></span></p>

                    <p>
                        <button class="btn btn-info" id="process-soal-a">Process</button>
                    </p>
                </div>
                <div class="tab-pane fade" id="soal-b" role="tabpanel" aria-labelledby="soal-b-tab">
                    <h3>Soal B</h3>
                    <p>Soal :
                    <table class="table">
                        <tr>
                            <td>a. Input: "palindrom", "ind" <br> Output : <span id="value-a"></span></td>
                        </tr>
                        <tr>
                            <td>b. Input: "abakadabra", "ab" <br> Output : <span id="value-b"></span></td>
                        </tr>
                        <tr>
                            <td>c. Input: "hello", "" <br> Output : <span id="value-c"></span></td>
                        </tr>
                        <tr>
                            <td>d. Input: "ababab", "aba" <br> Output : <span id="value-d"></span></td>
                        </tr>
                        <tr>
                            <td>e. Input: "aaaaaa", "aa" <br> Output : <span id="value-e"></span></td>
                        </tr>
                        <tr>
                            <td>f. Input: "hell", "hello" <br> Output : <span id="value-f"></span></td>
                        </tr>
                    </table>
                    </p>

                    <p>
                        <button class="btn btn-info" id="process-soal-b">Process</button>
                    </p>
                </div>
                <div class="tab-pane fade" id="soal-c" role="tabpanel" aria-labelledby="soal-c-tab">
                    <h3>Soal C</h3>
                    <p>Soal :
                    <table class="table">
                        <tr>
                            <td>a. Input : "Hello World" <br> Output : <span id="value-a"></span></td>
                        </tr>
                        <tr>
                            <td>b. Input: "Bismillah" <br> Output : <span id="value-b"></span></td>
                        </tr>
                        <tr>
                            <td>c. Input: "MasyaAllah" <br> Output : <span id="value-c"></span></td>
                        </tr>
                    </table>
                    </p>

                    <p>
                        <button class="btn btn-info" id="process-soal-c">Process</button>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#process-soal-a').click(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('soal.a') }}",
                    dataType: "JSON",
                    success: function(response) {
                        var outputString = JSON.stringify(response);
                        $('#output-soal-a').html(outputString);
                    }
                });

            })

            $('#process-soal-b').click(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('soal.b') }}",
                    dataType: "JSON",
                    success: function(response) {
                        $('#soal-b #value-a').html(response.valueA);
                        $('#soal-b #value-b').html(response.valueB);
                        $('#soal-b #value-c').html(response.valueC);
                        $('#soal-b #value-d').html(response.valueD);
                        $('#soal-b #value-e').html(response.valueE);
                        $('#soal-b #value-f').html(response.valueF);
                    }
                });

            })

            $('#process-soal-c').click(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('soal.c') }}",
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);

                        $('#soal-c #value-a').html(JSON.stringify(response.valueA));
                        $('#soal-c #value-b').html(JSON.stringify(response.valueB));
                        $('#soal-c #value-c').html(JSON.stringify(response.valueC));
                    }
                });

            })
        });
    </script>
</body>

</html>
