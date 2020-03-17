<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Queue</title>
</head>
<body>
    <?php include_once 'update_data.php';?>
    
    <form action="" id="form">
        <input type="submit" value="Отправить заявку">
    </form>
    <p>Ответ сервера: <span id="answer"></span></p>


    <script src="jquery-3.1.1.min.js"></script>

    <script>
        $(document).ready(function() {
            var form = $('#form');
            var form_data = form.serialize();
            form.submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "queue.php",
                    data: form_data,
                    cache: false,
                    success: function (res) {
                        $('#answer').text(res);
                        setTimeout(function() {
                            $('#answer').text('');
                        }, 3000);
                    }

                });
            });
        });
    </script>
</body>
</html>