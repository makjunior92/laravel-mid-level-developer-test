
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    #app{
        width:50px;
        height:50px;
        background: #A4FF4F;


    }

    

    #wrapper{
        width:500px;
        height:500px;
        border:1px solid black;
        background: #40452e;
       
    }
</style>
<body>

<div id="wrapper" class="centered">

    <div id="app"></div>

</div>



   
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <script>
  
    anime({
  targets: '#app',
  translateX: 450,
  translateY:450,
  direction: 'alternate',
  easing: 'easeInOutExpo',
});
  
    
   
    </script>
</body>
</html>


