<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">asdasd</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <form action="" method="post" id="form">
                    <!-- <div id="result"></div> -->
                    <div class="form-group">
                        <label for="">label</label>
                        <input type="text" id='title' class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="">disc</label>
                    <input type="text" id='disc' class="form-control">
                    </div>
                    <div class="form-group">
                        <button type = 'submit' id='submit' class="btn btn-outline-primary">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script>
      $(document).on('click', "#submit", function(e){
        e.preventDefault();
        let title = $("#title").val();
        let disc = $("#disc").val();
        let submit = $("#submit").val();

        $.ajax({
            url:"model.php",
            type:"post",
            data: {
                title:title,
                disc:disc,
                submit:submit
            },
            success: function(data) {
            //    $("#result").html(data);
            console.log(data);
            }

        });

        $("#form")[0].reset();
      })
  </script>
</body>
</html>