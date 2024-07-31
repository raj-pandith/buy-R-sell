<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .parent {
        height: 600px;


        background-size: 1600px 700px;
        object-fit: cover;
        background-repeat: no-repeat;
        animation: changebgimage 10s ease-in-out infinite;
    }

    @keyframes changebgimage {
       0%{
       background-image:url('./newbanner1.jpg');
       }
       
        50% {
            background-image: url('./newbanner2.jpg');

        }

        100% {
            background-image: url('./newbanner3.jpg');

        }

    }
</style>

<body>
    <div class="parent">

    </div>
</body>

</html>