<!DOCTYPE html>
<html lang="en">
<head>
	<title>GNU-V</title>
  <meta charset="UTF-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <style type="text/css">
            .example{
            margin: 20px;
            }
        </style> 
  	  <link rel="stylesheet" type="fi/css" href="fi.css">
  		<style type="text/css">
          nav{
              background-color:#888844   ;
          }
          nav a{
              display:inline-block;
              padding:10px;
              font-size:20px;
              color:white;
              text-decoration:none;
          }
          nav a:hover{
              background-color: #ecc6d9  ;
              color: #3d3d5c;
              text-decoration:none;
          }
          p {
          margin-top: 10px;
          margin-bottom: 10px;
          margin-right: 10px;
          margin-left: 8px;
          }
                    * {
            box-sizing:border-box
          }
          h2 {
            text-align: center;
          }
          /* Slideshow container */
          .slideshow-container {
           /* max-width: 500px;*/
            position: relative;
            margin: auto;
          }
          /* Ẩn các slider */
          .mySlides {
              display: none;
          }
          /* Định dạng nội dung Caption */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }
           
          /* định dạng các chấm chuyển đổi các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          /* khi được hover, active đổi màu nền */
          .active, .dot:hover {
            background-color: #717171;
          }
           
          /* Thêm hiệu ứng khi chuyển đổi các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 0s;
            animation-name: fade;
            animation-duration: 7s;
          }
           
          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
           
          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
                   
              </style>
          </head>


  <body >
<!-- header-->
<div class="slideshow-container">
 
  <div class="mySlides fade">
    <img  width="100%" src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.15752-9/121677355_403335794403040_8676235190233584570_n.png?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_ohc=Qo-sqM229YAAX-S0nau&_nc_ht=scontent.fhan3-2.fna&oh=9bdb5fe738a175954c243efd8e6c843b&oe=5FE0D0DA" >
    
  </div>
 
  <div class="mySlides fade">
    <img width="100%"  src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.15752-9/121257793_386147292790475_6288255395616212200_n.png?_nc_cat=104&ccb=2&_nc_sid=ae9488&_nc_ohc=B7N_4Lq-AyAAX-Jnqdx&_nc_ht=scontent-sin6-1.xx&oh=4a9c227278b7bd8978b76b8b16d26923&oe=5FE281BF" >
    
  </div>
 
   <div class="mySlides fade">
    <img width="100%"  src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.15752-0/p280x280/126092946_3471555632928669_162634963372053771_n.png?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=BVnz-26Fa9MAX_TGysq&_nc_ht=scontent.fdad1-1.fna&oh=79ce4841450dd8886c9f28577480a6c3&oe=5FE11969" >
    
  </div>
</div>
<br>
 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> </div>
  <script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 7s
      setTimeout(showSlides, 7000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
   </script>

<!-- menu-->

    <nav>
        <a href="http://localhost/gnu/gnu.php"> Trang chủ </a>
        <a href="http://localhost/gnu/video.php"> Video </a>
        <a href= "#bxh" > Bảng xếp hạng </a>
        <a href="http://localhost/gnu/signup.php"> Đăng kí/Tạo tài khoản </a>
        <a href="http://localhost/gnu/casting.html"> Casting </a>
        <a href="http://localhost/gnu/search.php"> Tìm kiếm </a>
        <a href="#"> Các hoạt động </a>
        <?php if(isset($_SESSION['id'])): ?>
          <a class="link" href="http://localhost/gnu/logout.php" style="text-decoration:none">Đăng xuất</a>
        <?php else: ?>
          <a class="link" href="http://localhost/gnu/login.php" style="text-decoration:none">Đăng nhập</a>
        <?php endif; ?>
    </nav>
    <br/>
     <center><h1> GNU TEAM - GNU VIDEO</h1></center>
    <h3><center>VIDEO THỊNH HÀNH</center></h3>

<!-- video đề xuất-->

    <div class="p">
    <a href="http://localhost/gnu/video.php"><img width="30%" src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.15752-9/121065798_716116075642833_8786301527616069501_n.png?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_ohc=9RApsOIK2jEAX8frlwR&_nc_ht=scontent.fhan3-2.fna&oh=0dd779c40109a54e4016b5f59f25bc6a&oe=5FDFDED9" title="Vì một người-Hờơơ">
    <a href="http://localhost/gnu/video.php"><img width="31.5%" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.15752-9/121143618_342093456877509_3611932568371533010_n.png?_nc_cat=111&ccb=2&_nc_sid=ae9488&_nc_ohc=C2OeAv6LJu8AX9AOmUq&_nc_oc=AQk8Qur8D-0KHX5ntemWfJmmJ3l9o0YMhYCyYIOZPBNwMCPfxRccduol4Y7BtxWDwdX7lfy2PXUFNH77ypyyIONx&_nc_ht=scontent-sin6-1.xx&oh=bb5e0a06f4e0908a3fd369e7c1437cb3&oe=5FDFF57A" title="Như những gì anh nói-Hờơơ">
    <a href="http://localhost/gnu/video.php"><img width="30.2%" src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.15752-9/121481359_733876360497897_3909785310759196963_n.png?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_ohc=fDFRhoqWkUcAX8n1LR3&_nc_ht=scontent.fhan3-2.fna&oh=22fa705e2ae880722430c9e127de6187&oe=5FE0657B" title="3107-Hờơơ ">
    <a href="http://localhost/gnu/video.php"><h3>MORE</h3></a>
   	 
<!--bảng xếp hạng-->  

          <div class="example">
              <div class="container">
                  <div class="row">
                    <a name="bxh">  <h2>BẢNG XẾP HẠNG </h2></a>
                      <div class="table-responsive">
                      <table class="table table-condensed">
                          <thead>
                              <tr class="active">
                                  <th>STT</th>
                                  <th>Tên</th>
                                  <th>Số video</th>
                                  <th>Video tiêu biểu </th>
                                  <th>Lượt tương tác nhiều nhất</th>
                              </tr>
                          </thead>
                          <tbody>
                               <tr class="danger">
                                  <td>1</td>
                                  <td>Zan</td>
                                  <td>0</t>
                                  <td>0</td>
                                  <td>0</td>
                              </tr>
                             <tr class="warning">
                                  <td>2</td>
                                  <td>Lạc</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
       
                              </tr>
                              <tr class="success">
                                  <td>3</td>
                                  <td>Thảo</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
       
                              </tr>
                              <tr class="danger">
                                  <td>4</td>
                                  <td>Phanh</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                              <tr>
                                  <tr class="warning">
                                  <td>5</td>
                                  <td>Dưn</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>

                              </tr>
                              <tr class="warning">
                                  <td>6</td>
                                  <td>Én</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
       
                              </tr>
                              <tr class="success">
                                  <td>7</td>
                                  <td>Lùn</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
       
                              </tr>
                              <tr class="success">
                                  <td>8</td>
                                  <td>Ekko</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
       
                              </tr>
                              <tr class="warning">
                                 <td>9</td>
                                 <td>Ga</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="success">
                                 <td>10</td>
                                 <td>Linh</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="warning">
                                 <td>11</td>
                                 <td>Chy</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="danger">
                                 <td>12</td>
                                 <td>Bảo</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="warning">
                                 <td>13</td>
                                 <td>Tomato</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="success">
                                 <td>14</td>
                                 <td>Xim</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="danger">
                                 <td>15</td>
                                 <td>Hidang</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                              <tr class="warning">
                                 <td>16</td>
                                 <td>Vy</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  </div>
              </div>
       
          </div>
       </div>
      </body>
      </html>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #7a7a52;"
              "text-decoration-color: : #ffe6e6" >
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"
             style="color:  #ffe6e6">

        <!-- Content -->
        <h3 class="text-uppercase font-weight-bold">GNU TEAM</h3>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 50Spx;">
        <p>Hãy tham gia với chúng tôi, thỏa sức đam mê với âm nhạc
        đem tình yêu với âm nhạc truyền tải tới 
         mọi người.</p>

      </div>
      <!-- Grid column -->
     <div style="color:  #ffe6e6">    
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"
              style="color:  #ffe6e6">

        <!-- Links -->
        <h5 class="text-uppercase font-weight-bold">Products</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px";>
        <p>
          <a href="#!" style="color:#ffe6e6">Đoán xem</a>
        </p>
        <p>
          <a href="#!"style="color: #ffe6e6">Đoán xem</a>
        </p>
        <p>
          <a href="#!"style="color: #ffe6e6">Đoán xem :)))</a>
        </p>
        <p>
          <a href="#!"style="color: #ffe6e6">mlem mlem mlem</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h5 class="text-uppercase font-weight-bold">Useful links</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="https://www.facebook.com/GNU-V-101357485107560/"style="color: #ffe6e6">Facebook</a>
        </p>
        <p>
          <a href="#"style="color: #ffe6e6">Zalo</a>
        </p>
        <p>
          <a href="http://localhost/gnu/casting.html"style="color: #ffe6e6">Casting</a>
        </p>
        <p>
          <a c href="https://www.facebook.com/GNU-V-101357485107560/"style="color: #ffe6e6">Báo cáo + Tư vấn</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h5 class="text-uppercase font-weight-bold">Contact</h5>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Vietnam: 2020-12-13  VN</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> lan43223@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +86 995 6657</p>
        <p>
          <i class="fas fa-print mr-3"></i> đoán xem :)))</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"
        style="color:  #ffe6e6"    >© 2020 Copyright:
    <a href="https://www.facebook.com/wings0202" style="color: #ffe6e6"> Nguyen Thi Minh Lan </a>
  </div>
  <!-- Copyright -->
</div>
</footer>
<!-- Footer -->
     