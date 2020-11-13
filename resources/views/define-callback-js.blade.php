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
                var data = {email:'trump@gmail.com', age:15};
            </li>
            
            <li>
                function checkAge(data, callback){
            </li>

            <li>
                callback(data.age);
            </li>

            <li>
            }
            </li>

            <li>
                checkAge(data, function(age){
            </li>

            <li>
                if(age< 18) {
            </li>
            <li>
                console.log("Age is not valid");
            </li>

            <li>
            }
            </li>

            <li>
                else{
            </li>

            <li>
                console.log("Age is valid");
            </li>

            <li>
            }
            </li>

            <li>
            });
            </li>

      

        </ul>
            
           

                
                       
               

     
                
             
                
                    
              

                
            
            
        



      </div>

      <script>
          var data = {email:'trump@gmail.com', age:15};

            function checkAge(data, callback){
                callback(data.age);
            }

            checkAge(data, function(age){
             
             // If data.age < 18 it'll log as not valid.
             if(age<18){
                 
                 console.log("Age is not valid");
             }
             else{
             
             console.log("Age is valid");
             }

             
         
         });
      </script>
   </body>
</html>