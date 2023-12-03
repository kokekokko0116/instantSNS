<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            height: 100vh;
            width: 100vw;
        }

        .view {
            width: 100%;
            height: 85vh;
            overflow-y: scroll;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .item {
            width: 80%;
            margin: 8px;
            font-size: 16px;
            padding: 16px 8px;
            background: #F2F2F2;
            display: flex;
            align-items: center;
            position: relative;

            /* minwidth */
            @media screen and (min-width: 568px) {
                padding: 16px;
            }
        }

        .content {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .created_at {
            position: absolute;
            right: 8px;
            bottom: 8px;
            font-size: 8px;
            color: #545960;
        }

        .form {
            background: #D5D5D5;
            width: 100vw;
            height: 15vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form form {
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form input {
            border: 1px solid #545960;
            width: 80%;
            height: 40px;
            border-radius: 8px;
            padding: 8px;
            font-size: 16px;
        }

        .form button {
            width: 20%;
            height: 40px;
            border-radius: 8px;
            background: #F2F2F2;
            border: 1px solid #545960;
            font-size: 16px;
            margin-left: 8px;

            /* hover */
            &:hover {
                background: #545960;
                color: #F2F2F2;
            }

            &:click {
                background: #545960;
                color: #F2F2F2;
            }
        }
    </style>
</head>

<body class="antialiased">
    <livewire:post />
    @livewireScripts
</body>

</html>
