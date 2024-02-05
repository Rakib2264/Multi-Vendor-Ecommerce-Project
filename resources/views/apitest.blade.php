<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Apt Test</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <button class="btn btn-sm btn-info mt-3 mb-3" id="checkBtn">Check</button>

                <div class="form-group">
                    <label for="product">Product</label>
                    <input id="product" type="text" name="product" class="form-control">
                </div>
                <div class="form-group">
                    <label for="des">Des</label>
                    <input id="des" type="text" name="des" class="form-control">
                </div>
                <button type="submit" class="store btn btn-sm btn-secondary">Store</button>

                <table class="table table-bordered table-hover table-secondary">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody class="allData"></tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".store").click(function () {
                var product = $("#product").val();
                var des = $("#des").val();
                if (product === '') {
                    alert("Please enter a product and try again.");
                } else {
                    $.ajax({
                        url: "api_testpu",
                        type: "post",
                        data: {
                            'product': product,
                            'des': des,
                        },
                        success: function (res) {
                            alert('Data stored successfully.');
                            // Optionally, clear the input fields after storing data
                            $("#product").val('');
                            $("#des").val('');
                            // Reload or update the table data if needed
                            // updateTable();
                        },

                    });
                }
            });

            $("#checkBtn").click(function () {
                $.ajax({
                    url: "https://jsonplaceholder.typicode.com/posts/1",
                    type: "get",
                    success: function (res) {
                        $('#product').val(res.title);
                        $('#des').val(res.body);
                    },
               
                });
            });
        });
    </script>
</body>
</html>
