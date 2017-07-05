<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Personal</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
</head>
<body>
    <!--<nav>
        <a href="">HOME</a>
        <a href="">ABOUT</a>
        <a href="">SERVICES</a>
        <a href="">CONTACT</a>
    </nav>-->

	<section id="secao1" class="slide">
        <h1>Personal Page</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </section>
        
    <section id="secao2" class="slide">
        <h2>About Me</h2>
        <div class="left">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. X</p>
        </div>
        <div class="right">
            <img class="img-thumbnail" src="img/perfil.png">
        </div>        
    </section>
        
    <section id="secao3" class="slide">
        <form class="form-contact" id="submit_form">
            <h2 class="page-title">Contact Us</h2>
            <p class="form-group">
                <label for="nome">Name</label>
                <input class="field" type="text" id="name" placeholder="Nome" required="required" name="name" />
            </p>
            <p class="form-group">
                <label for="email">E-mail</label>
                <input class="field" type="email" id="email" placeholder="E-mail" required="required" name="email" />
            </p>
            <p class="form-group">
                <label for="assunto">Subject</label>
                <input class="field" type="text" id="assunto" placeholder="Assunto" name="assunto" />
            </p>
            <p class="form-group">
                <label for="mensagem">Message</label>
                <textarea class="field" type="text" id="message" placeholder="Deixe sua mensagem" name="message"></textarea>
            </p>
            <p class="form-group">
                <input type="button" class="button" id="button" value="Submit">
            </p>
            <span id="error_message"></span>
            <span id="success_message"></span>
        </form>
    </section>


    <!-- https://www.youtube.com/watch?v=QJ5fUSYRdrU -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#button').click(function(){
                var name = $('#name').val();
                var email = $('#email').val();
                var assunto = $('#assunto').val();
                var message = $('#message').val();

                if(name == '' || email == '' || assunto == '' || message == ''){
                    $('#error_message').html("<h3>All Fields are Required!</h3>");
                } else{
                    $('#error_message').html('');
                    $.ajax({
                        url: "sendmail.php",
                        method: "POST",
                        data: {name: name, email: email, assunto: assunto, message: message},
                        success: function(data){
                            $("form").trigger("reset");
                            $('#success_message').fadeIn().html(data);
                            setTimeOut(function(){
                                $('#success_message').fadeOut('slow');
                            }, 2000);
                        }
                    });
                }
            });
        });

    </script>
</body>
</html>
