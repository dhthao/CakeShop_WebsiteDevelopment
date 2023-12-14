<!-- <?php
include("../../Database/Config/config.php");
if(isset($_GET['id'])){ 
$id=$_GET['id'];
$sql="select * from product where product_id=$id";
$result= mysqli_query($mysqli,$sql);
}
while ($row = mysqli_fetch_array($result)) {
?>
<div class="product">
    <form method="POST" action="index.php?action=cart&query=none">
    
<table>
<tr>
    <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
    <td> Tên sp : <?php echo $row['title'] ?></td>
    <input type="hidden" name="title" value="<?php echo $row['title'] ?>"> 
</tr>
<tr>
    <td>Giá sp: <?php echo $row['price'] ?></td>
    <input type="hidden" name="price" value="<?php echo $row['price'] ?>"> 
</tr>
<tr>
    <td>Giá khuyến mãi sp: <?php echo $row['discount_price'] ?></td>
    <input type="hidden" name="discount_price" value="<?php echo $row['discount_price'] ?>"> 
</tr>
<tr>
    <td>Ảnh sản phẩm : <img src="../../../Database/images/<?php echo $row['thumbnail'] ?>" height="200" width="200" name="<?php echo $row['thumbnail'] ?>"></td>
    <input type="hidden" name="thumbnail" value="<?php echo $row['thumbnail'] ?>"> 
</tr>
<tr>
    <td>Mô tả : <?php echo $row['description'] ?></td>
    <input type="hidden" name="description" value="<?php echo $row['description'] ?>"> 
</tr>
<tr>
    <td><input type="number" name="quantity" value="1" min="1" ></td>
</tr>
<tr>
    <td><input type="submit" name="add_to_cart" value="Mua hàng"> </input></td>
</tr>
</table>
</form>
<?php
}?>
</div>
 -->

<div class="productbody">
    <section style="background-color: #fff7e6;">
        <div class="card-wrapper">
            <div class="card">
                <div class="product-imgs">
                <p style="color: #4d2600;"><a href="index.php?action=menupage&query=none" class="linkmenu">Menu</a> > [Ten banh] </p>
                    <div class="img-display" style="margin-top: 15px;">
                        <div class="img-magnifier-container">
                         <img src="images/2a.png" id="myimage">
                        </div>
                    </div>
             </div>
            
             <script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

             <script>
                magnify("myimage", 3);
             </script>

             <script>
            $(document).ready(function(){
            $('.img-select img').on('click', function(){
                var imagePath = $(this).attr('src');
                $('.img-display img').attr('src', imagePath);
            });

            $('.img-select').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>
                <div class="product-content">
                    <h2 class="product-title">Cake Sth</h2>

                    <div class="product-price">
                        <p class="last-price" style="color: #4d2600;">Giá Gốc: <span>100,000</span></p>
                        <p class="new-price" style="color: #4d2600;">Giá Khuyến Mãi: <span>69,000</span></p>
                    </div>

                    <div class="product-detail">
                        <h2> Thông tin sản phẩm: </h2>
                        <p> Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây Thông tin bánh ở đây </p>
                    </div>

                    <div class="purchase-info">
                        <input type="number" min="0" value="1"><br>
                        <button type="button" class="btn"><b><ion-icon name="cart-outline"></ion-icon>
                            THÊM VÀO GIỎ </b>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr style="border: 1px dashed #B0A695; width: 50%; align-items:center; margin-left:auto; margin-right:auto;">
        <h1 class="title"> Sản Phẩm Liên Quan </h1>
        <div class="img-select">
                    <div class="col">
                        <div class="img-item">
                                <img src="../modules/images/2a.png" alt="pic" style="width: 200px; height: 200px;" >
                                </div>
                                <p style="text-align:center;">Banh ngot</p>
                       
                        </div>
                        <div class="col">
                        <div class="img-item">
                                <img src="../modules/images/2b.png" alt="pic" style="width: 200px; height: 200px;" >
                                </div>
                                <p >Banh ngot</p>
                       
                        </div>
                        <div class="col">
                        <div class="img-item">
                                <img src="../modules/images/2c.png" alt="pic" style="width: 200px; height: 200px;" >
                                </div>
                                <p >Banh ngot</p>
                       
                        </div>
                        <div class="col">
                        <div class="img-item">
                                <img src="../modules/images/2d.png" alt="pic" style="width: 200px; height: 200px;" >
                                </div>
                                <p >Banh ngot</p>
                       
                        </div>
                        <div class="col">
                        <div class="img-item">
                                <img src="../modules/images/2b.png" alt="pic" style="width: 200px; height: 200px;" >
                                </div>
                                <p >Banh ngot</p>
                       
                        </div>
          
                    </div>
         </div>
    <script >
    $(document).ready(function(){
    $('.img-select').slick({
        infinite: true,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow:`<button type='button' class='slick-prev pull-left'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><ion-icon name="chevron-forward-outline"></ion-icon></button>`,
    });
  });
  </script>      
    </section>
    </div>
