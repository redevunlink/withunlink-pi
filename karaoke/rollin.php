<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Karaoke Test </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'CookieRunOTF-Bold';

}
.undone{
     -webkit-text-fill-color: white;
   -webkit-text-stroke-width: 4px;
   -webkit-text-stroke-color: blue;
   }
   
.done{
     -webkit-text-fill-color: blue;
   -webkit-text-stroke-width: 4px;
   -webkit-text-stroke-color: white;
   }
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  width: 100%;
  padding: 20px;
  text-align: center;
  font-size:48px;
  color:#fff;
}
.content2 {
  position: fixed;
 top: 0;
  width: 100%;
  padding: 20px;
  font-size:48px;
  color:#fff;
}

h1{
margin: 0px;
}
.korean-pronounce{
margin: 0px;
     -webkit-text-fill-color: white;
   -webkit-text-stroke-width: 2px;
   -webkit-text-stroke-color: black;
}
@font-face {
    font-family: 'CookieRunOTF-Bold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.0/CookieRunOTF-Bold00.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
  .countdown{
border: 10px solid;
    border-image-slice: 1;
    border-width: 5px;
    font-family: Dotum,'돋움';
    color: #fff;
    background-color: red;
    font-size: 36px;
    border-radius: 500px;
  }
</style>
</head>
<body>

<iframe id="myVideo" src="https://www.youtube-nocookie.com/embed/TkQp9VESsK0?controls=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="content2">
  현재 곡 : <span id="songid"></span>
  </div>
<div class="content">
  <span id="ti3" class="countdown">3</span>
   <span id="ti2" class="countdown">2</span>
   <span id="ti1" class="countdown">1</span>
  <h1 id="ly1"></h1>
  <p id="k1" class="korean-pronounce"></p>
  <h1 id="ly2"></h1>
 <p id="k2" class="korean-pronounce"></p>
</div>

  <script>
    /* Reset */
    
    //CountDown
    document.getElementById("ti3").style.display = 'none';
    document.getElementById("ti2").style.display = 'none';
    document.getElementById("ti1").style.display = 'none';
    
    //Korean Pronounce
    document.getElementById("k1").style.display = 'none';
    document.getElementById("k2").style.display = 'none';
    
    /* Rollin */
    document.getElementById("songid").innerHTML = "Rollin";
    document.getElementById("ly1").innerHTML = "Rollin<br>작사 - 브레이브걸스<br>작곡 - 브레이브걸스";

   setTimeout(function() {
  document.getElementById("ly1").innerHTML = '<span class="undone">그날을 잊지 못해 babe</span><br><span class="undone">날 보며 환히 웃던 너의 미소에</span>';
        setTimeout(function() {
  document.getElementById("ly1").innerHTML = '<span class="done">그날을 잊지 못해 babe</span><br><span class="undone">날 보며 환히 웃던 너의 미소에</span>';
        setTimeout(function() {
  document.getElementById("ly1").innerHTML = '<span class="done">날 보며 환히 웃던 너의 미소에</span><br><span class="undone">홀린듯 Im fall in love</span>';
        setTimeout(function() {
  document.getElementById("ly1").innerHTML = '<span class="done">홀린듯 Im fall in love</span><br><span class="undone">But 너무 쪽팔림에</span>';
        setTimeout(function() {
  document.getElementById("ly1").innerHTML = '<span class="done">But 너무 쪽팔림에</span><br><span class="undone">한마디 말도 못해 babe</span>';
}, 1000)
}, 2000)
}, 2000)
}, 3000)
}, 9000)
    //Git Hub Pages are lazy
  </script>

</body>
</html>
