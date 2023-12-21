<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="text/css" href="https://sistemas.cftla.cl/sistema/img/cft_lotaarauco_logo.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4e6911d35b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <style media="screen">
      .fade-in {
        animation: fadeIn 1s;
      }

      @keyframes fadeIn {
        from{
          opacity: 0;
        }
        to{
          opacity: 1;
        }
      }
      .trans{
        -moz-transition: .2s linear;
        -webkit-transition: .2s ease-out;
        transition: .2s linear;
      }
      .nover {display:none}

      .boton_menu{
        display: block;
        width: 100%;
        background-color: #fff;
        margin-bottom: 9px;
        border-radius: 35px;
        border: solid 1px #CACACA;
        color: #939393;
        padding: 6px 20px;
        text-align: left;
      }
      .boton_menu:hover{
        display: block;
        width: 100%;
        background-color: #F59F19;
        color: #fff;
        margin-bottom: 9px;
        border-radius: 35px;
        border: solid 1px #CACACA;
        padding: 8px 20px;
        text-align: left;
        -moz-transition: .2s linear;
        -webkit-transition: .2s ease-out;
        transition: .2s linear;
      }
      .ocultar-div{
          display:none;
      }
      @media screen and (max-width: 500px) {
          .ocultar-div{
              display:none;
          }
      }
    </style>
    <script>
        function cargar(){
          let timerInterval
          Swal.fire({
            imageUrl: 'img/iso_azul.png',
            imageHeight: 100,
            title: 'Cargando',
            html: 'Espere un Momento',
            timer: 60000,
            showConfirmButton: false,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              console.log('I was closed by the timer')
            }
          })
        }
      </script>
</head>
<body class="d-flex flex-column min-vh-100" style="font-family: 'Baloo Thambi 2';">
