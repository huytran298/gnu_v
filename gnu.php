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
     <img  width="100%" src="https://lh3.googleusercontent.com/vRAx1lQHIhIiAvN4QZq5WhCuj0pgLTNMsEFEK8mMXZ-yfBIKBQJArGHvl3HCUkZNfYYA4btngju3XDCPlMfsDynD7Qw3ZcoifeNCGISsshWrXryjl6d6sVz-yEB2mPCtm-UQxbsr-8tFw9_c6gUe4gGWIF_Fmx_l0IANE_Sae6P5rqL6vWEBA_nIgn8FP2ae-q2fcxkVydnovTeRWfSvTTGLT2rFdD9M-YNCkqkzDEWxwgi4uGC7QFJ4Wm7P6dLgtnTTZDR8HE1xauUS-u0QG1kc488PODoEResUUnGk3miz_Xun1LG5pH_ma8qMj2dTImGNNVCujPxFUTjoccsK_pDHkNDwvb9nbo6k5W6gFl7ngw-pOo3iaO763wdAze0ozCKWjU-bnErbQgpUvM4Z2mxTNgBQ1Fa7kEnJf2D0xxBA8sOBkg-01jpMDpasqlH_LztXx8YU41K0QaddWHxKTAIlx69ulHLXF1Prf4wxQA9lRZWwbn1i4GEGkEwzgYmrqYGeihAlS-JlmSJve71qkyZjYVFXpLCa_rwZtpXUn9oD1ZdqNohbBLt2asNCK05JYM-QmtvO7gf3zHl95bOt1e67gPCwH-bfO5vxr0N6cjfBV-RiszgOgcmMPodgK6uMsEJc0Zfbw9_sj6LBprllzshETKZWmE7PSVJVFVnJfwU3bfhMTu3D8yGcHCg2=w960-h199-no?authuser=0" >
    
  </div>
 
  <div class="mySlides fade">
    <img width="100%"  src="https://lh3.googleusercontent.com/KXVIZ2S2WrHukZr9DFrVHxZQQVBkWfJqHeUkCyXAmirdQlb-PIUBPNf-Me8-fQH0M4mMdcgaea8UpclaTJVr6y3Q2fAAW1uVKIxnB-0x1XAcjdEu5iKHOuJu2NCNLFy6DSMA-IAOu8RrK-6lT4mM8B3mJRZyQwOonUMbv3qJgrlpAXFI7dUD7QzflcQJR9ZgEQJOUxkY3TkAtbePLxTfKXygYyrSss8h4z5X21LfVR5lqJl9WtR5C_PF1p6pXjyPo3r7wpsOltkeol0OTqV_m7cFLEG1967RUl7TZKrsDETWFXUkSZ2iX6xXIkF0nDGA0Fc_gGSoj-671R_VF9uAxCcCm-e_OJ7LmJI28PYw1HzwuJwD3-ykY8bRoRwlCyYwer18sXy1vNRuSKV9ViE6hKpHROb6Y95fMnwphwkRuhCi_yc88RESPE4o9gOWGGi4n43QbNJFf5PEej1rX-3SkpccImgKdxZ1kRBUfiIm1OcvK793e9h3EpxcwEkNzZ3_ek1fvhcxs-DKpZkPou4X60jkmD7bGKiLKzkFrkgbqsE71xftHssPEo--umRH_tS6Nh5eNkISEVMOLcyj9BR20hrVM_ow4Jp4K5IEjFV93ZJe0vuBMW347d0b1awpgld0REbNiq8HpDn-j6ocT2OJmCXWX3nyF-KV_xAWLm6Ws7l4-ataME1Mhnnc_qQg=w960-h199-no?authuser=0" >
    
  </div>
 
   <div class="mySlides fade">
    <img width="100%"  src="https://lh3.googleusercontent.com/Y2RkMbkhfuvt7vQELRavQdQ85iHaOitgkNpeiLW-pqBD9tt8FvzXrfDONJR6agnBqfboPLaRBJvnGSERdj1BUE2Bl2vZfOXWfBOxMK3Az8cW3qJZwM8_PJv_8veKyQ3N8VTbTZAkHDVgtFiJ5t9jPkEBdj2bqa4p_BevoHWfO9qEafFHo30eNwwXJawLaP_gMFo-R6zuDN2mriUyO7h1iolQqZPVrZjTUvIWAA-G7IBMoIM1JIc0KBHE1t73sDnXePjqXrdqhbbF0BGcoWIJF7iTCmJjzO0HU3hjW2ipmxxxHuGEZqnuiV8SeewLfFxnjBKEptpepjUy3UaQ74UdXZ28nTB8cpbPZdwXwTe_Ng9k1xLvqPjodRke8tmQ0ceEsM-9_7goSfgtOOU8NOTjXqMP50BO1qZAT29l9TlBMm6eeeaAFGtMQyqEbhCPjdor4_cdU1RW89FegNEVXnQHwn23PTVjOHPLS2lhn01Sc9p2K5toDHCeY871-_QpooMUbNbLPn26gqqwA2y5U1lw6ARWGdXfaT358ZeV6fEwChOWsa-Acif4P9SeLGlGJx-AmLLTSTnXH_2sSBPkz3MsewoMRWesnjsgppbu4DjrRv-0E7pcxRK4yAmstkAOeQa4iY6TDZ2pt72UT8wrg_S9XYQABChfz3YvSOxF8m6cDaRwB-IyrO1ISTT3mgac=w960-h199-no?authuser=0" >
    
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
    <a href="http://localhost/gnu/video.php"><img width="30%" src="https://lh3.googleusercontent.com/fiCpAi1_OZWMgvkAkjySR_Oe-VeYWzoh1bASFBKBObxHvf6WhrrbLRTY2d-fBv55j-WtQLxnHcDNuGsaZsytC3G9BbEIoMS7DnrJGeUpgAVaOUBAZCcO0ZetOeeY46RogYFtWYv3qno4aoafaZK57gXjuZCakB-8g7flBAXFi76UZH0wsHiVFimVu5FuW71KXXXTlJdmew4zK-lNjIbQ4-kId9W0fFWAbnNdD0-jHmdAwcorGxvh1OOX2ngm18ILdYrq4QqFVs03CMi751eVsDPMo5BOAECQk7usE9z12yN75x2T20SsDWUPfu0xPVIYyOZajUukMclxIcifpvo7iWxTij7y25VkPREZ7or4becBO4qgVwXH9m_W3VA4Df2Cf-5gYqlpSuP5ap4LhbKH3T_MxLT_obB9I3akmUcWQ7yC8ZIjSc4a0H3nfMSi9HT12fXPBQtzUgWYx49EFe6bUzCi7njzHpHOVYBlc893mzTH_GspWG7SJf0A-Xz0ID2OkBbnxBcPAM6VuLUIbzMBMbeg4jOZ_ZgWuKMsEohoTB3EXW7tYaIiJ46_c4p9nIr8xpErmjbnIdc3CCaRjuDsLBF1ZfuCfbh3hzAfDf_4yOMgdXH7h8YbvUJXKsXXuXr5xJvCgaCO5VhODeqAeNr_wnbVXUAp9LgTOsoAlgY5biMz8wimr-3jhUi6yJP3=w350-h200-no?authuser=0" title="Vì một người-Hờơơ">
    <a href="http://localhost/gnu/video.php"><img width="31.5%" src="https://lh3.googleusercontent.com/q5PcNt-Ld-hKcdIiwgefxxtci79oozTU1H-Ix2SgYbFxJP8G5HAZoSMD5wWbTzIdTvemmxRDjXSFc-8CkVO4KmdcB2t-Ikf3_jH09QSsUoWnrB7hbBrhg1zoTAX4j5cAiVKM9wbRNkx826e-Q1iM1xcaoCqED1ZMKz5wyQpT7CKJbCrYSfIRh0DchOWSYOLVw0FwvcT68sUv3FBTLUb3AsJoDDkgBBZKEBdpBlXFYGRoEx68qGQ2chmrBXuJaxvffEc7KT0JNIhFcKnnppoKsvxNvBkrdClWY_1K0E-ZI4Y0wfkN8ubbPIsq4n7yd4d9RuSEMgH7MANiw_Io7kGcIp-_l4GOklZXSrNZOXUpTuDDc0a53UlD6U4CBxEL6zZCakHeRoZvWonGbVE0cL0XCMO8vyrD75Q6V08_UvorfdcU9Sm1OdED55hY3gaRl6SeXYCSzR6LG67VBGIXeS0cqkCPmBWid7vZ0FuUOPQSkUOTiL6BNZ6T65ovMLYrtunBEzHgcD-CT2Xkum1cZwVrpDR7mzUjyz4WJqS79yh_LwQ41hZ_ZFxexDFpuhCN0hftWY1DXNEEgUAcu5p44CsPfhXswN7Lb0aCwKCVNm2ghN_WGHGcnmfPIFkmzONQ_4kj_JBkMMr8wb5wMZjFUcZybrzPor8AXmt8m38wFBjH8ZKFcxKJtY1S725BWLw5=w370-h200-no?authuser=0" title="Như những gì anh nói-Hờơơ">
    <a href="http://localhost/gnu/video.php"><img width="30.2%" src="https://lh3.googleusercontent.com/Z7l14Yntp4zX4Zs9bFzlnhGOfVcN3WygmuqxSUZaghE8M3Jydt8jBwI4Gm32uUbfWHYwa1iULTEYOBq-wpsLB_bFFKtXPX-iPs-mkYK0zsRR7e1G25XHUqI_nvU8qPijygGq9ZL9pDiAPaivHvkKisoNQEnt35HHKsxkSry00s1kYK4fIKPuBVInPjLnBS_3loAgVZgNomeNS3elfKnZwdz4Isqu5XqDJKTK7kY8_SeiXnrj2rRLHZOQUvg-rHCQhADwaJ0NF48MFE5k23G1_DmchwYIf06RYDNWxIE-0dIE6TmoAbxatJ6aC52WaLwvzmrXJAYxF82muHPl7RXRyjR2Nd8pOHXBPUoetWE5xToqiSp4dUSbHs3lH_zKI6gb77ZhbUV0Zgm-YK6btXej6wV4bYlDquckUMsFwProdPtsb0tRrlSdimnqVXOT0HWbxpVOCET08LWqWmwb42lDoQG2WHI7RlmNxfcc7rVTcmjGLtO0mmH2mwJakl9EnC6WXKz0z2lh7UJgqGowQ--Ocb9t6k_kER1z6JgEEN2T2rU5JfNeI6JafYYJDjNePnAou54VRtKC30qOlewJ--neSC9UkSfxNZ9FZahpTdz9NcNQAjp5HSrihzW3CRus0cjk_cPIZ8IoujUFG6SSlwWjf4MrqrRkvF4630AsslHW9HVoW4NgnHOvtUdZx6Il=w362-h206-no?authuser=0" title="3107-Hờơơ ">
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
     
