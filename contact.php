<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <style>
       *{
           margin:0;
           padding:0;
       }
        #title-name{
           padding-top:50px;
           margin-bottom:30px;
           color:#2d545e;
       }
       #btn-sub{
           background:  #2d545e;
           color:white;
        }
        #btn-sub:hover{
            font-size:20px;
        }
       

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body background="images/contact.png">
    
    <section id="contact">
        
        <h2 class="text-center" id="title-name">Contact Us</h2>
        <form class="w-50 m-auto" action="userContact.php" method="post">
            
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" >
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email id" >
            </div>
            <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="Comments"></textarea>
            </div>
            <button id="btn-sub" type="submit" class="btn btn-default" data-toggle="button" aria-pressed="false" autocomplete="off">Submit</button>
        </form>
    </section>
</body>
</html>