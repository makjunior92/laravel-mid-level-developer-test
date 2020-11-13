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
                var numbers = [1,3,5,8,9,20,45,6,86,544];
            </li>
            
            <li>
                var output =  numbers.filter(n=> n>9);
            </li>

            <li>
                console.log(output);
            </li>

            

        </ul>
            
     
      </div>

      <script>
   

        var numbers = [1,3,5,8,9,20,45,6,86,544];
        var output =  numbers.filter(n=> n>9);
        console.log(output);

      


        </script>
   </body>
</html>



































