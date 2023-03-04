<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{ mix('resources/js/jquery-barcode.js') }}"></script>
    <script type="text/javascript">

        function generateBarcode() {
        var value = {!! json_encode($data->awb) !!};
        //  ean8, ean13,upc,std25,int25,code11,code39,code93,code128,codebar,msi,datamatrix
        var btype = "code128";
        // css,bmp,svg
        var renderer = "bmp";

        var settings = {
            output: renderer,
            bgColor: "#FFFFFF",
            color: "#000000",
            barWidth: "2",
            barHeight: "80",
        };
        $("#barcodeTarget").barcode(value, btype, settings);
        }

        $(function () {
            generateBarcode();
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
        <div id="barcodeTarget" class="border-2 w-11/12 m-auto h-28 mt-2">
        
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
        <div class="italic underline text-xs my-6">
            "KAFKACHIPS"
        </div>
        <div  class="absolute w-96 border-2 bg-slate-500 object-fill"></div>
    </div>
</body>
</html>