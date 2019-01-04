<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Downloads</title>

    <style>
        .pdf-container {
            position: relative;
        }
    </style>

  </head>
  <body>
        <div class="row pdf-container">
            <div class="col-md-12">
                <div id="content">
                <br>
                <table class="table table-bordered" width="80%">
                    <thead>
                    <tr>
                        <th># Order</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_purchased_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <br>

                </div>
            </div>
        </div>
  </body>
</html>
