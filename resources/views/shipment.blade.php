<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{ mix('node_modules/bwip-js/dist/bwip-js-min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            let canvas = document.getElementById('mycanvas');
            try {
                bwipjs.toCanvas(canvas, {
                        bcid:        'code128',       // Barcode type
                        text:        {!! json_encode($data->awb) !!},    // Text to encode
                        scale:       3,               // 3x scaling factor
                        height:      10,              // Bar height, in millimeters
                        includetext: false,            // Show human-readable text
                    });
                document.getElementById('myimg').src = canvas.toDataURL('image/png');
            } catch (e) {
                console.log(e);
            }
        });
    </script>
</head>
<body>
    <div class="mt-2 border-2 absolute left-1/2 -translate-x-1/2 text-center w-screen sm:w-[360px] py-4 px-2">
        <div class="text-4xl font-bold underline">
            {{$data->market}}
        </div>
        <div class="mt-1 italic">
            {{$data->invoice}}
        </div>
        <div class="mt-3 font-semibold text-xl">
            {{$data->courier}}
        </div>
        <div id="my-img" class="w-11/12 m-auto mt-2 object-fill">
            <img id="myimg" class="object-fill w-full h-28 m-auto" alt="barcode">
            <canvas id="mycanvas" class="m-auto hidden"></canvas>
        </div>
        <div class="mt-1 font-md text-lg">
            {{$data->awb}}
        </div>
        <div class="mt-2 font-semibold text-xl">
            {{$data->customer}}
        </div>
        <hr class="my-2 mx-4 border-dashed border-stone-600">
        <div class="w-1/2 ml-7 -mt-6 text-left text-base whitespace-pre-line">
            {{$data->order}}
        </div>
        <hr class="my-2 mx-4 border-dashed border-stone-600">
        <div class="italic underline my-4 text-xs">
            "KAFKACHIPS"<br>
            Diproduksi Oleh DutaChips
        </div>
    </div>
</body>
</html>