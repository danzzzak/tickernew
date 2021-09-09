<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                    <div id="result"></div>
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

        <div class="row">
            <div class="col-md-12 mt-1">
                <div class="" id="show"></div>
                <div id="fetch">  </div>

            </div>

        </div>

    </div>

    <!-- MODAL -->
    <!-- Модальное окно read -->
<div class="modal">
  <div class="modal__content">
    <button class="modal__close-button"id="modal__close-button">123123</button>
    <!-- Контент модального окна -->
    <div id="read_data"></div>
  </div>
</div>

    <!-- Модальное окно edit -->
    <div class="modal modal_edit">
  <div class="modal__content">
    <button class="modal__close-button"id="modal__close-button">123123</button>
    <!-- Контент модального окна -->
    <div id="edit_data"></div>
  </div>
</div>


    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="model.js" ></script>
  <script>
      // submit

      $(document).on('click', "#submit", function(e){
        e.preventDefault();
        let title = $("#title").val();
        let disc = $("#disc").val();
        let submit = $("#submit").val();

        $.ajax({
            url:"insert.php",
            type:"post",
            data: {
                title:title,
                disc:disc,
                submit:submit
            },
            success: function(data) {
            fetch();
            $("#result").html(data);
            console.log(data);
            }

        });

        $("#form")[0].reset();
      });


      // fetch

      function fetch() {
          $.ajax({
              url:"fetch.php",
              type:"post",
              success: function(data){
                  $("#fetch").html(data);
              }

          })
      }
      fetch();

    //   delite

    $(document).on('click', '#del', function(e){
        // e.preventdefault();
        console.log('del');
        
        if (window.confirm("DELITE?")) {
        let del_id = $(this).attr('value');
        
        $.ajax({
            url: "del.php",
            type: "post",
            data: {
                del_id:del_id
            },
            success: function(data){
                fetch();
                $("#show").html(data);
            }

        })
        } else {    return false    }

        
    });

    // read

    $(document).on('click', '#read', function(e){

        let read_id = $(this).attr("value");

        $.ajax({
            url: "read.php",
            type: "post",
            data: {
                read_id:read_id
            },
            success: function(data) {
                console.log(data);
                $("#read_data").html(data);
            }
        });

    });


    // edit

    $(document).on('click', '#edit', function(e){
        let edit_id = $(this).attr("value");
        $.ajax({
            url: "edit.php",
            type: "post",
            data: {
                edit_id:edit_id
            },
            success: function(data){
                $("#edit_data").html(data);
            }
        })


    });


    // update

    $(document).on('click', '#update', function(e){
        let edit_title = $('#edit_title').val();
        let edit_disc = $('#edit_disc').val();
        let update = $('#update').val();
        let edit_id = $('#edit_id').val();

        $.ajax({
            url: 'update.php',
            type: 'post',
            data: {
                edit_id:edit_id,
                edit_title:edit_title,
                edit_disc:edit_disc,
                update:update
            },
            success: function(data) {
                fetch();
                $('#show').html(data)
            }
        })



    });

  </script>
</body>
</html>