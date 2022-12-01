<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $("#files").submit(function(e) {
                e.preventDefault();

                var formData = new FormData();
                formData.append('file', $('#file')[0].files[0]);
                formData.append('name', $('#name').val());
                formData.append('email', $('#email').val());
                formData.append('city', $('#city').val());

                $.ajax({
                    url: 'ajax.php',
                    type: 'POST',
                    data: formData,
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    success: function(data) {
                        $('.test').html('');
                        $('.test').append(data);
                        console.log(data);
                        console.log(data);
                    }
                });
            });
        })
    </script>

    <div class="container mt-4">
        <form id="files" method="post" enctype="multipart/form-data" action="">
            <input name="file" id="file" type="file" />
            <input name="name" id="name" type="text" placeholder="Enter name" />
            <input name="email" id="email" type="email" placeholder="Enter email" />
            <input name="city" id="city" type="city" placeholder="Enter city" />
            <button>Submit</button>
        </form>
    </div>
    <hr>
    <div class="container mt-4">
        <div class="test"></div>
    </div>
</body>

</html>
