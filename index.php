<?php 
if(isset($_POST) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['comment']) && isset($_POST['phone'])){
    if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['comment']) && !empty($_POST['phone'])){
        $destinataire = "ines.maron@supinternet.fr";
        $sujet = "Demande de contact";
        $message = "Nom : ".$_POST['name']."\r\n";
        $message = "Adresse email : ".$_POST['mail']."\r\n";
        $message = "Message : ".$_POST['comment']."\r\n";
        $entete = 'From: '.$_POST['mail']."\r\n".
            'Reply-To: '.$_POST['mail']."\r\n".
        'X-Mailer: PHP/'.phpversion();
        if (mail($destinataire,$sujet,$message,$entete)){
            $result = 'Message envoyé';
        } else {
            $result =  "Une erreur est survenue lors de l'envoi du formulaire par email";
        }
    }else{
        $result = "Veuillez remplir toutes les informations";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ines Maron - Webdesigner</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/reset.css">
    <link rel="icon" href="asset/images/favicon.ico" />
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="asset/js/jquery-1.9.1.min.js"></script>
    <script src="asset/js/owl.carousel.js"></script>
    <link rel="stylesheet" href="asset/css/owl.carousel.css">
    <link rel="stylesheet" href="asset/css/owl.theme.css">
</head>
<body>
    <div class="wrapper" id="wrapper">
    <header>
     <a href="#wrapper"><img src="asset/images/IM.png" alt="Logo"></a>
        <nav>
            
            <a href="#aPropos">a propos</a>
            <a href="#projets">projets</a>
            <a href="#contact">contact</a>
        </nav>
    </header>
    
        <div class="popImages">
        <div class="banner" id="photographySlide">
                <div><img src="asset/images/photography/Photo01.jpg" alt=""></div>
                <div><img src="asset/images/photography/Photo02.jpg" alt=""></div>
                <div><img src="asset/images/photography/Photo03.jpg" alt=""></div>
                <div><img src="asset/images/photography/Photo04.jpg" alt=""></div>
                <div><img src="asset/images/photography/Photo05.jpg" alt=""></div>    
</div>
<div class="banner" id="photoshopSlide">
                <div><img src="asset/images/photoshop/Photo01.jpg" alt=""></div>
                <div><img src="asset/images/photoshop/Photo02.jpg" alt=""></div>
                <div><img src="asset/images/photoshop/Photo03.jpg" alt=""></div>
                <div><img src="asset/images/photoshop/Photo04.jpg" alt=""></div>
                <div><img src="asset/images/photoshop/Photo05.jpg" alt=""></div>
                <div><img src="asset/images/photoshop/Photo06.jpg" alt=""></div>
                <div><img src="asset/images/photoshop/Photo07.jpg" alt=""></div>
</div>
<div class="banner" id="illustratorSlide">
                <div><img src="asset/images/illustrator/Photo01.jpg" alt=""></div>
                <div><img src="asset/images/illustrator/Photo02.jpg" alt=""></div>
                <div><img src="asset/images/illustrator/Photo03.jpg" alt=""></div>
                <div><img src="asset/images/illustrator/Photo04.jpg" alt=""></div>
                <div><img src="asset/images/illustrator/Photo05.jpg" alt=""></div>
</div>
    </div>
        <div id="index" class="index">
            <div >
                <h1>Ines Maron</h1>
                <h2>Webdesigner</h2>
            </div>
        </div >
        <div  id="aPropos" class="aPropos">
            <h1>A Propos</h1>
            <p> Actuellement étudiante en 1ère année de Bachelor Webdesign à l’école Supinternet dans le 11ème arrondissement. 
<br>
    Agée de 19 ans et passionnée par le Design, je m’épanouie chaque jour dans les projets de mon école. Le design, l’imagination, la créativité, et l’envie de construire quelque chose de beau sont au coeur de mes envies.

<br>
    De nombreux projets et des mises en situations d’entreprise ont étés réalisés au seins de mon école, des connaissances générales en WebMarketing et en WebDeveloppement nous ont été transmise afin de pouvoir comprendre un minimum les personnes avec lesquelles ont travaillent.</p>
        
        <div id="projets" class="projets">
            <h1>Projets</h1>
            <div class="photography" id="photography">
                <h1>Photographie</h1>
            </div>
            <div class="photoshop" id="photoshop">
                <h1>Photoshop</h1>
            </div>
            <div class="illustrator" id="illustrator">
                <h1>Illustrator</h1>
            </div>
        </div>
        <div id="contact" class="contact">
            <h1>Contactez-moi</h1>
            <form action="#contact" method="post">
                <?php if (isset($result)) {
                    echo '<h1>'.$result.'</h1>';
                } ?>
                <input type="text" placeholder="Nom" name="name"><br>
                <input type="number" placeholder="Numéro de téléphone" name="phone"><br>
                <input type="email" placeholder="Adresse-email" name="mail"><br>
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Commentaire"></textarea><br>
                <input type="submit">
            </form>
            <table>
                <tr>
                    <td><img src="asset/images/phone.png" alt="Phone">O6.25.72.78.29</td>
                    <td><img src="asset/images/email.png" alt="Email"><a href="mailto:ines.maron@supinternet.fr">ines.maron@supinternet.fr</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
    <script type="text/javascript">
            $(function(){
                $('nav a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

                $('#projets div').click(function(event){
                    var $image = $(this).attr('id');
                    $(".popImages" ).show("slow",function(){
                        if ($image == 'photography') {
                            $('#illustratorSlide').css('display', 'none');
                            $('#photoshopSlide').css('display', 'none');
                            $('#photographySlide').css('display', 'block');
                            
                        }else if ($image == 'photoshop') {
                            $('#photographySlide').css('display', 'none');
                            $('#illustratorSlide').css('display', 'none');
                            $('#photoshopSlide').css('display', 'block');
                            
                        }else if ($image == 'illustrator') {
                            $('#photographySlide').css('display', 'none');
                            $('#photoshopSlide').css('display', 'none');
                            $('#illustratorSlide').css('display', 'block');
                            
                        };
                            
                    });
                });

               
                    $('.popImages').click(function(){
                        if ($('.popImages').css('display') == 'block') {
                            $( ".popImages" ).hide( "slow", function(){
                            $('.banner ').css('display', 'none');
                            });
                        };  
                    });
                    $(document).ready(function() {
                          $(".banner").owlCarousel({items : 1,
                           navigation : true, autoHeight : false,navigationText : ["Précédent","Suivant"], itemsDesktop : false})});
                    $('.banner').click(function(event){
                        event.stopPropagation();
                    });
               
            });
            
        </script>
</body>
</html>