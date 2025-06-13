<html>
    <head>
        <title>Evil Spam!!!</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include_once('sendMail.php');
        
        if(!empty($_GET['email']) && !empty($_GET['goedkeur'])){
            header('Location: index.php');
            $sendMail = new Mailer($_GET['email'], $_GET['goedkeur']);

            $sendMail->Spam();
            echo 'haha';
        }
        ?>
        <header>
            <img src="img/logo.png">
        </header>
        <main>
            <section id="eenmalig">
                <h1>Krijg 1 keer spam!</h1>
                <?php
                include('templates/form.php');
                ?>
            </section>
            <section id="vaker">
                <h1>Krijg vaker spam! (10x)</h1>
                <?php
                include('templates/form.php');
                ?>
            </section>
        </main>
    </body>
</html>