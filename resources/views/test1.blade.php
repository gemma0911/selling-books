<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Paginate - Trung Quân</title>
    <base href="{{ asset('') }}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="show-products">
        @foreach ($products as $product)
            {{ $product->name }} <br>
        @endforeach
    </div>
    <nav aria-label="Page navigation">
        {!! $products->links() !!}
    </nav>
    <script>
        $('.pagination a').unbind('click').on('click', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getPosts(page);
        });

        function getPosts(page) {
            $.ajax({
                    type: "GET",
                    url: '?page=' + page
                })
                .success(function(data) {
                    $('#show-products').html(data);
                });
        }
    </script>
</body>

</html>
