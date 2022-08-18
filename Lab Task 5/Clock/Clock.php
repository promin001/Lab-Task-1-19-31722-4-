<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Digital Clock with Glowing Effect | CodingNepal</title>
      <link rel="stylesheet" href="sty.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="display">
            <div id="time"></div>
         </div>
         <span></span>
         <span></span>
      </div>
      <script>
         setInterval(()=>{
           const time = document.querySelector(".display #time");
           let date = new Date();
           let hours = date.getHours();
           let minutes = date.getMinutes();
           let seconds = date.getSeconds();
           let day_night = "AM";
           if(hours > 12){
             day_night = "PM";
             hours = hours - 12;
           }
           if(seconds < 10){
             seconds = "0" + seconds;
           }
           if(minutes < 10){
             minutes = "0" + minutes;
           }
           if(hours < 10){
             hours = "0" + hours;
           }
           time.textContent = hours + ":" + minutes + ":" + seconds + " "+ day_night;
         });
      </script>
   </body>
</html>