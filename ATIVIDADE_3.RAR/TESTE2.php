<html>

<head>

    <title></title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</head>

<body>

<form>

    <input id="go" type="text" value="Diga ola aos REST"/>

</form>

<script type="text/javascript">

    $(document).ready(function() {

        $('#go').click(function()

        {

            $.ajax({

                url: "json.php",

                dataType: 'json'

            }).done(function(data) {

                alert(data.mensagem);

            });

        })

    });

</script>

</body>

</html>
