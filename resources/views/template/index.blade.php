<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productly | Design Agency Landing Page UI</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="{{ asset('ajax/index.js') }}"></script>
    <script src="{{ asset('ajax/checkbox.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet" />

    <script>
        function addtocart($id, $idUser) {
            console.log($id)
            $.ajax({
                url: '{{ route('add-to-cart') }}',
                type: "get",
                dateType: "text",
                data: {
                    id: $id,
                },
            });
            if ($idUser) {
                if ($.ajax) {
                    alert('them thanh cong');
                }
            } else {
                alert('vui lòng đăng nhập')
                window.location = "{{ route('login.get') }}";
            }
        }
    </script>
    <script>
        function detail(idProduct) {
            window.location = '/product-detail?idProduct=' + idProduct
        }
    </script>
    <script>
        function searchproduct1() {
            $.ajax({
                url: '{{ route('searchproduct') }}',
                type: "get",
                dateType: "text",
                data: {
                    content: document.getElementById('inputsearch').value,
                },
                success: function(result) {
                    $('#result').html(result);
                }
            });
        }
    </script>
</head>

<body>
    @include('template.component.header')

    <section class="pt-5" id="validation">
        @include('template.component.product')
    </section>


    <section class="pt-5" id="marketing">
        @include('template.component.footer')
    </section>

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
    <script src="{{ asset('assets/js/js.js') }}"></script>
</body>

</html>
