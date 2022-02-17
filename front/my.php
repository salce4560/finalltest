<div id="space">
        <p id="space2">salce hsieh <br>Portfolio</p>
        <div id="space1">


        </div>
    </div>


<div>

    <div class="word1">
        <p class="word">about me</p>
        <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Vero porro incidunt at fugit.<br> Natus tempora odit aliquam nemo accusantium molestiae qui aperiam nulla? <br>Expedita natus excepturi inventore repellat consequatur repudiandae?</p>
    </div>
    <div class="borderbox">
        
    </div>
    <div class="father">
        
        <div class="exprience">
            <p class="word">exprience</p>
            <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Vero porro incidunt at fugit.<br> Natus tempora odit aliquam nemo accusantium molestiae qui aperiam nulla? <br>Expedita natus excepturi inventore repellat consequatur repudiandae?</p>
        </div>
    </div>
    <div class="borderbox">
        
    </div>
</div>

   

    <div class="row justify-content-around">
        <div class="col-7" id="dog">
            <div class="picture" id="mouseenterr"></div>
            <img src="./img/<?=$row['img']?>" alt="">
            <p>With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="col-4" id="dogg">
            <div class="picture" id="mouseenterr"></div>
            <p>With supporting text below as a natural lead-in to additional content.</p>
        </div>


    </div>


    <div class="row justify-content-around">
        <div class="col-5" id="dog">
            <div class="picture" id="mouseenterr"></div>
            <p>With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="col-5" id="dogg">
            <div class="picture" id="mouseenterr"></div>
            <p>With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
    <div>
        <div class="borderbox">
            
        </div>
        <div class="father">
            
            <div class="exprience1">
                <p class="word">my sol wallet</p>
                <p>sol: CMmUr5LcWrjBWNU1xw91ZyXAnctR977b4PsbjHUEPNNQ<br> USDC:CMmUr5LcWrjBWNU1xw91ZyXAnctR977b4PsbjHUEPNNQ<br> USDT CMmUr5LcWrjBWNU1xw91ZyXAnctR977b4PsbjHUEPNNQ </p>
            </div>
        </div>
        <div class="borderbox">
            
        </div>
    </div>
<div class="toTop">
    <a href="#" class="toTop">top</a>
</div>

    <!-- 先載入 -->
    <script src= "https://code.jquery.com/jquery-3.3.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <!-- 先載入 END-->

    <script>
        $(document).ready(function () {
            //   $('p').on('mouseenter',function(){
            //       console.log('mouseon');
            //   })     
            //   $('p').on('mouseout',function(){
            //       console.log('mouseout');
            //   })     
            $('.picture').on('mouseenter', function () {
                console.log('mouseon');
                $(this).css('background-image', 'url(https://picsum.photos/seed/picsum/200/300)');
            })
            $('.picture').on('mouseout', function () {
                console.log('mouseout');
                $(this).css('background-image', 'url(https://picsum.photos/id/237/200/300)');
            })

        $('.toTop').on('click', function () {
       $('html,body').animate({ // 有些瀏覽器只支援html，有些只支援body 所以兩個都寫進去
         scrollTop: 0, }, 700)
        });

        })

    </script>