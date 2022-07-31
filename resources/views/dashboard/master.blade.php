<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>پنل داشبورد</title>
    <style>
        @tailwind base;
        @tailwind components;
        @font-face {
            font-family: "Bakh";
            font-style: normal;
            font-weight: normal;
            src: url('assets/fonts/bakh_Medium.woff');
        }
        @tailwind utilities;
    </style>
</head>



@yield('body')


<script>
    function closeAlert() {
        var element = document.getElementById("alert1");
        element.classList.add("hidden");
    }
</script>

</html>
