<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ines Maron - Webdesigner</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/reset.css">
    <link rel="icon" href="asset/images/favicon.ico" />
    <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3"></script>  
    <script type="text/javascript" src="asset/js/jquery.easing.1.3.js"></script>

    <script src="http://unslider.com/unslider.min.js"></script>

   
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
            <a href="#" class="unslider-arrow prev">Previous slide</a>
<a href="#" class="unslider-arrow next">Next slide</a>
        <div class="banner" id="photographySlide">
            <ul >
                <li><img src="asset/images/photography/Photo01.jpg" alt=""></li>
                <li><img src="asset/images/photography/Photo02.jpg" alt=""></li>
                <li><img src="asset/images/photography/Photo03.jpg" alt=""></li>
                <li><img src="asset/images/photography/Photo04.jpg" alt=""></li>
                <li><img src="asset/images/photography/Photo05.jpg" alt=""></li>
            </ul>
            
            
</div>
<div class="banner" id="photoshopSlide">
    <ul >
                <li><img src="asset/images/photoshop/Photo01.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo02.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo03.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo04.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo05.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo06.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo07.jpg" alt=""></li>
                <li><img src="asset/images/photoshop/Photo08.jpg" alt=""></li>
            </ul>
</div>
<div class="banner" id="illustratorSlide">
    <ul >
                <li><img src="asset/images/illustrator/Photo01.jpg" alt=""></li>
                <li><img src="asset/images/illustrator/Photo02.jpg" alt=""></li>
                <li><img src="asset/images/illustrator/Photo03.jpg" alt=""></li>
                <li><img src="asset/images/illustrator/Photo04.jpg" alt=""></li>
                <li><img src="asset/images/illustrator/Photo05.jpg" alt=""></li>
            </ul>
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
            <form action="#contact">
                <input type="text" placeholder="Nom"><br>
                <input type="number" placeholder="Numéro de téléphone"><br>
                <input type="email" placeholder="Adressez email"><br>
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Commentaire"></textarea><br>
                <button type="submit">Envoyer</button>
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
                $('#projets div').click(function(event){
                    var $image = $(this).attr('id');
                    $(".popImages" ).show("slow",function(){
                        if ($image == 'photography') {
                            $('#illustratorSlide').css('display', 'none');
                            $('#photoshopSlide').css('display', 'none');
                            $('.banner').unslider({
    speed: 500,               //  The speed to animate each slide (in milliseconds)
    delay: 5000,              //  The delay between slide animations (in milliseconds)
    complete: function() {},  //  A function that gets called after every slide animation
    keys: true,               //  Enable keyboard (left, right) arrow shortcuts
    dots: true,               //  Display dot navigation
    fluid: true              //  Support responsive design. May break non-responsive designs
});
                            $('#photographySlide').css('display', 'block');
                            
                        }else if ($image == 'photoshop') {
                            $('#photographySlide').css('display', 'none');
                            $('#illustratorSlide').css('display', 'none');
                          $('.banner').unslider({
    speed: 500,               //  The speed to animate each slide (in milliseconds)
    delay: 5000,              //  The delay between slide animations (in milliseconds)
    complete: function() {},  //  A function that gets called after every slide animation
    keys: true,               //  Enable keyboard (left, right) arrow shortcuts
    dots: true,               //  Display dot navigation
    fluid: true              //  Support responsive design. May break non-responsive designs
});
                            $('#photoshopSlide').css('display', 'block');
                            
                        }else if ($image == 'illustrator') {
                            $('#photographySlide').css('display', 'none');
                            $('#photoshopSlide').css('display', 'none');
                            $('.banner').unslider({
    speed: 500,               //  The speed to animate each slide (in milliseconds)
    delay: 5000,              //  The delay between slide animations (in milliseconds)
    complete: function() {},  //  A function that gets called after every slide animation
    keys: true,               //  Enable keyboard (left, right) arrow shortcuts
    dots: true,               //  Display dot navigation
    fluid: true              //  Support responsive design. May break non-responsive designs
});
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
               
            });
            
        </script>
</body>
</html>