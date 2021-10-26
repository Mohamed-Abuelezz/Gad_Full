
<!DOCTYPE html>
<html>

   <head>
      <title>Gad</title>

      <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">

   </head>

   <body>
      <table width = "100%" border = "0">
         
         <tr>
            <td colspan = "2" bgcolor = "#7C83FD" style="text-align: center">
               <h1 style="color: white">{{$title}}</h1>
               <div class="logo" >
                <img src="{{ URL::asset('website_assets/assets/icons/logo.png') }}" width="40"
                    height="40" />
            </td>
         </tr>
         <tr valign = "top">

            
            <td bgcolor = "#eee" width = "50" height = "200" style="text-align: center;font-size: 15px;font-weight: bold">
                <br>
                <br>
                {{$desc}}
               <br>
               <br>
               <br>
        <a href="{{ url($url) }}" class="btn" style="background:#7C83FD;color: white;text-decoration: unset;padding: 10px 20px;border-radius: 5px"> {{Config::get('app.locale') == 'ar' ? 'الذهاب' : 'OK'}} </a>

            </td>
         </tr>
         <tr>
            <td colspan = "2" bgcolor = "#7C83FD" style="color: white">
               <center>
                  Copyright ©2021
               </center>
            </td>
         </tr>
         
      </table>
   </body>

</html>











