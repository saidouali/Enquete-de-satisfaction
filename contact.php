<!doctype html>
<html lang="en">
  <head>
    <title>Contactez-moi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8 m-4">
                <form action="contactform.php" method="post">
                    <div class="form-group">
                        <div class="text-center">
                            <h1>Contactez-moi </h1>
                        </div>
                        <input type="text" name="name" placeholder="Nom" autocomplete="off" class="form-control"/>
                        <br/>
                        <input type="text" name="mail" placeholder="Email" autocomplete="off" class="form-control"/>
                        <br/>
                        <input type="text" name="subject" placeholder="Sujet" autocomplete="off" class="form-control"/>
                        <br/>
                        <textarea rows="10" name="message" placeholder="Votre message" class="form-control"></textarea>
                        <br/>
                        <button type="submit" name="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
