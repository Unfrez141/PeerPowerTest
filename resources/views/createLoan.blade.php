<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <title>Show Loans</title>
</head>

<body>
   <div class="container">
      <p class="h1">Create Loan</p>
      <div class="row justify-content-md-center">
         <div class="col">
            <form action="/form/showdata" method="post" id='form'>
               <div class="form-group">
                  <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                  <!-- <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea> -->
                  <h4>Loan Amount:</h4>
                  <div class="input-group">
                     <input type="text" class="form-control"
                        aria-label="Dollar amount (with dot and two decimal places)">
                     <div class="input-group-append">
                        <span class="input-group-text">$</span>
                     </div>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>

   </div>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
   </script>
</body>

</html>