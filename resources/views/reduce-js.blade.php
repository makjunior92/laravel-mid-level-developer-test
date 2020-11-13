<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Itech Test</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <!-- Styles -->
      <style>
         html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Nunito', sans-serif;
         font-weight: 600;
         height: 100vh;
         margin: 0;
         padding: 10px;
         }
         table{
         margin-left: 45px;
         }
         td{
         border: 1px solid #eee;
         padding: 3px;
         text-align: center;
         }
         code{
         color: #007b00;
         }
         a{
         color: red;
         }
         ul{
            list-style-type:none;
            color: #007b00;
         }
      </style>
   </head>
   <body>
      <div class="content">

        <ul>
            <li>
                var str = ['Hi',' ', ',',' ', 'I',' ','am',' ', 'Mohiuddin',' ','Abdul',' ','Kader'];
            </li>
            
            <li>
                var greeting = str.reduce((accumulator,currentValue) =>{ return accumulator + currentValue});
            </li>

            <li>
                console.log(greeting);
            </li>

            

        </ul>
            
     
      </div>

      <script>
   

   var str = ['Hi',' ', ',',' ', 'I',' ','am',' ', 'Mohiuddin',' ','Abdul',' ','Kader'];
   var greeting = str.reduce((accumulator,currentValue) =>{ return accumulator + currentValue});

     console.log(greeting);
    


        </script>
   </body>
</html>











