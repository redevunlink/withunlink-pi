<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<?php include 'header.php';?>
    <div class="bg-white my-4 shadow p-8 rounded-lg text-center">
    <div class="flex  text-center mb-4">
 
<h2 class="text-sm w-full">채팅방 전광판

</h2>

    </div>

    <div class="w-full">
        <div class="flex">
            <div id="payment" class="w-full flex-1 text-2xl  font-bold bg-black text-white rounded-l p-3 " >
                <marquee>테스트 입니다
                    </marquee>
                </div>

                 </div>
                 
    </div>
    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">나도 홍보 하기</button>
<button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">홍보 모두 보기</button>
</div>

<style>

@layer utilities {
  .text-gradient {
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
}
</style>

<section
      class="homescreen m-0 flex flex-col w-screen justify-center bg-gray-800 h-80 text-gray-100  "
    >
<h1 class="text-5xl  my-auto mx-auto  md:mx-48 ">
<img src="https://avatars.githubusercontent.com/u/58584157?s=460&amp;u=204ece99ed17a2061b46570ac65677af9a4bb654&amp;v=4" class="rounded-full border-solid border-white border-2 -mt-3 h-16"><strong><span class="text-gradient bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-500 font-mono">PaperCore</span></strong>-dev<br>
<span class="inline-block rounded-full text-white text-lg tracking-tight  mr-3">반가워요! PaperCore입니다.</span>
<br>
<a href="https://commerce.coinbase.com/embed/charges/JQXKFDQT?version=201807&amp;origin=https%3A%2F%2Fwithun.link" target="_blank">
<button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">가상화폐로 기부하기</button>
</a>
</h1>
    </section>
<script>
/*for (var i = 0; i < 100; i++) {
  var star =
    '<div class="star m-0" style="animation: twinkle ' +
    (Math.random() * 5 + 5) +
    's linear ' +
    (Math.random() * 1 + 1) +
    's infinite; top: ' +
    Math.random() * $(window).height() +
    'px; left: ' +
    Math.random() * $(window).width() +
    'px;"></div>';
  $('.homescreen').append(star);
}*/

</script>

<div class="px-6 py-8 dark:bg-gray-800 dark:text-gray-600">
        <div class="flex justify-between container mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">포스트</h1>
                    <div>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>최신순</option>
                            
                        </select>
                    </div>
                </div>
                <!--
형태
<div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center"><span class="font-light text-gray-600"></span><a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex justify-between items-center mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Alex John</h1>
                                </a></div>
                        </div>
                    </div>
                </div>-->

              <!-- <div class="mt-8">
                    <div class="flex">
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-500 font-medium rounded-md cursor-not-allowed">
                            previous
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            1
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            2
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            3
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            Next
                        </a>
                    </div>
                </div>-->
            </div>
            <div class="-mx-8 w-4/12 hidden lg:block">
                
                
                
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>
