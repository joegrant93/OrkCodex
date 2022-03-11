<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <title>Hello, world!</title>
</head>
<style>


    /*********************************************************************************** */
    .card-body {
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
    }


    .card {
        border: none;
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        overflow: hidden;
        border-radius: 20px;
        min-height: 450px;
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);


    }

    .card:hover .card-body {
        visibility: visible;
        opacity: 1;
    }

    .card:hover h4{
        background-color: black;
    }


    @media (max-width: 768px) {
        .card {
            min-height: 350px;
        }

    }

    @media (max-width: 420px) {
        .card {
            min-height: 300px;
        }

    }
</style>