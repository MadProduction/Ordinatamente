<html>
<head>
    <title><?php echo $title; ?></title>
    <link href="http://dev.ordinatamente.com/style/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://dev.ordinatamente.com/style/css/stili-custom.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://dev.ordinatamente.com/style/js/eralegis.js"></script>
    <script>
    $(function() {
    $('nav, .nav-controller').on('click', function(event) {
        $('nav').toggleClass('focus');
    });
    $('nav, .nav-controller').on('mouseover', function(event) {
        $('nav').addClass('focus');
    }).on('mouseout', function(event) {
        $('nav').removeClass('focus');
    })
})
    </script>
</head>
<body>
    
    
     <div class="container spessore">
        
        
 <nav class="animate">
     <p>Benvenuto sul mio sito. Ecco una <b>lista</b> dei miei <b>progetti</b>.</p>
                      <br>
    <ul>
        <li>
            <a href="#">@lwa93 on twitter</a>
        </li>
        <li>
            <a href="#">Pincopalla</a>
        </li>
        <li>
            <a href="#">A trendy Webring</a>
        </li>
        <li>
            <a href="#">Blog</a>
        </li>
   
    </ul>
    <div class="divider"></div>
    <h4>Grazie a</h4>
    <ul>
        <li>
            <a href="#">MadProduction</a>
            <a href="#">Centrico</a>
            <a href="#">Mamma</a>
            <a href="#">Papi</a>
            <a href="#">Sto-cacchio</a>
        </li>
    </ul>
     <div class="divider"></div>
     <h4>Cambia lingua</h4>
     <p> IT | ENG</p>
</nav>

<div class="nav-controller">
    <span class="[ glyphicon glyphicon-chevron-down ] controller-open"></span>
    <span class="[ glyphicon glyphicon-remove ] controller-close"></span>
</div>
                  