<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<title>Đăng Kí Khóa Học</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style.css')}}">
</head>
<body>
<header>
	<div class="w-50"><img src="{{URL::asset('/img/brand.png')}}" class="w-75 h-75 float-start"></div>
	<div class="col-12 col-sm-6  float-start mt text-secondary"><h2 class="text-center w-100 h-25 ">CHÀO MỪNG ĐẾN VỚI KHÓA ĐÀO TẠO <br>TRƯỜNG CAO ĐẲNG BÁCH KHOA</h2> </div>
</header>
<div class="container"> 
	<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
  		<div class="carousel-indicators">
    		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
   			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  		</div>
  		<div class="carousel-inner">
    		<div class="carousel-item active" data-bs-interval="10000">
      			<img src="{{URL::asset('/img/javaweb.png')}}" class="d-block w-100 h-100" alt="...">
   			</div>
    		<div class="carousel-item" data-bs-interval="2000">
      			<img src="{{URL::asset('/img/sale.png')}}" class="d-block w-100 h-100" alt="...">
    		</div>
    		<div class="carousel-item">
      			<img src="{{URL::asset('/img/lichhoc.png')}}" class="d-block w-100 h-100" alt="...">
    		</div>
  		</div>
  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="visually-hidden">Previous</span>
  		</button>
  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="visually-hidden">Next</span>
  		</button>
	</div>

	<div class="container">
		<div>
			<h1 class="text-center text-primary">
				Thông Tin Ưu Đãi Học Phí
			</h1>
		</div> 
		<div>
			<p class="text-danger fw-bold fs-3">Chương Trình Thiết Kế Web -App Mobie </p>
			<ul>
				<li>Kỹ thuật viên đang có học phí ưu đãi từ 5.500.000đ</li>
				<li><span class="text-primary fw-bold">Đặc Biệt:</span> ưu đãi 30% cho chu class="text-danger fw-bold"yên viên đồ họa đăng kí học cùng khóa</li>
				<li><span class="text-danger fw-bold">BẢO HÀNH KIẾN THỨC SAU TỐT NGHIỆP:</span><span>Hỗ trợ 70% học phí</span> khi Học Viên đăng kí học cập nhật kiến thức</li>
				<li>Tặng <span class="text-decoration-underline fw-bold">10%</span> học phí cho học viên cũ / sinh viên có các giờ học từ 8h00 hoặc 13h30</li>
				<li>Tặng <span class="text-decoration-underline fw-bold">100.000Đ</span> khi học viên mới đăng kí các lớp có giờ học từ 18h00</li>
			</ul>
		</div>
		<div>
			<p class="text-danger fw-bold fs-3">ƯU ĐÃI CÁC LỚP COMBO (3 THÁNG) & CHUYÊN ĐỀ NGẮN HẠN(1,5 THÁNG)</p>
			<ul>
				<li><span>ƯU ĐÃI NHÓM:</span><span> 10% </span>hộc phí cho nhóm 2 học viên, <span>15%</span> học phí cho nhóm 3 học viên trở lên</li>
				<li><span>Hỗ trợ 40% học phí</span> các lớp chuyên đề ĐỒ HỌA ngoài chương trình học</li>
			</ul>
		</div>
	</div>

	<div class= "container-fluid">
        <div class= "row d-inline-flex">
            <!-- Gallery Item 1 -->
            <div class =" col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border h-100">
                  <div>
                     <img src="{{URL::asset('/img/pic1.jpg')}}" class="GalleryItem">
                  </div>
                  <p>HỌC VIỆN ỦY QUYỀN CỦA CISCO, MICROSOFT, HỌC VIỆN PYTHON, LINUX</p>
               </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class =" col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border h-100">
                  <div>
                     <img src="{{URL::asset('/img/pic2.jpg')}}" class="GalleryItem">
                  </div>
                  <p>THỜI GIAN THỰC HÀNH >6O% PHÒNG LAB HIỆN ĐẠI</p>
               </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class =" col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border h-100">
                  <div>
                     <img src="{{URL::asset('/img/pic3.jpg')}}" class="GalleryItem">
                  </div>
                  <p>THAM GIA COMPANY TOUR VÀ BK- JOBS HỖ TRỢ VIỆC LÀM SAU KHÓA HỌC</p>
               </div>
            </div>
            <!-- Gallery Item 4 -->
            <div class =" col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border h-100">
                  <div>
                     <img src="{{URL::asset('/img/pic4.jpg')}}" class="GalleryItem">
                  </div>
                  <p>HỌC VIỆN CÓ CO-WORKING SPACE</p>
               </div>
            </div>
            <!-- Gallery Item 5 -->
            <div class =" col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border h-100">
                  <div>
                     <img src="{{URL::asset('/img/pic5.jpg')}}" class="GalleryItem">
                  </div>
                  <p>ĐƯỢC THƯỜNG XUYÊN THAM GIA CÁC HỘI THẢO VỀ CNTT</p>
               </div>
            </div>
            <!-- Gallery Item 6 -->
            <div class =" col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border h-100">
                  <div>
                     <img src="{{URL::asset('/img/pic6.jpg')}}" class="GalleryItem">
                  </div>
                  <p>CÓ VIỆC LÀM SAU KHI HOÀN THÀNH CÁC KHÓA HỌC</p>
               </div>
            </div>
        </div>
    </div>

 	<h1 class="text-center"> </h1> 
 	<div class="row d-flex justify-content-center bg-secondary"> 
  		<div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   			<legend class="text-light">
   				 Đăng Ký Khóa Học
   			</legend> 
   			<form action="" method="post" class="form" role="form"> 
    			<div class="row"> 
     				<div class="col-xs-6 col-md-6"> 
     					<input class="form-control" name="firstname" placeholder="Họ" required="" autofocus="" type="text">
     				</div> 
     				<div class="col-xs-6 col-md-6"> 
     					<input class="form-control" name="lastname" placeholder="Tên" required="" type="text"> 
     				</div> 
    			</div> 
    			<input class="form-control" name="youremail" placeholder="Email" type="email" required=""> 
    			<input class="form-control" name="address" placeholder="Address" type="text" required=""> 
    			<label class="radio-inline text-light">          
    				<input name="sex" id="inlineCheckbox1" value="male" type="radio">Nam 
    			</label> 
    			<label class="radio-inline text-light">          
    				<input name="sex" id="inlineCheckbox2" value="female" type="radio">Nữ 
    			</label><br>
    			<label class="text-light"> Ngày Bắt đầu học</label> 
    			<input class="form-control" name="dateBegin" placeholder="date" type="date"> 
    			<label class="text-light"> Thời Gian Kết thúc Khóa Học</label> 
    			<div class="row">  
    				<div class="col-xs-6 col-md-6"> 
    					<select class="form-control">              
    						<option value="Month">1 Tháng</option>
    						<option value="Month">2 Tháng</option>
    						<option value="Month">3 Tháng</option>
    						<option value="Month">5 Tháng</option>
    						<option value="Month">7 Tháng</option>
    						<option value="Month">9 háng</option>            
    					</select> 
    				</div>    				 
    			</div>
    			<label class="text-light"> Chọn Khóa Học Mà Bạn Muốn Đăng Kí</label> 
    			<div class="row">
    				<div class="col-xs-12 col-md-12"> 
    					<select class="form-control">              
    						<option value="Course">HTML CSS</option> 
    						<option value="Course">XÂY DỰNG KHUNG FRAMESETS</option>
    						<option value="Course">BOOTSRAP</option>
    						<option>LARAVEL FRAMEWORK</option> 
    						<option>JAVASCRIFT</option>          
    					</select> 
     				</div>
    			</div>  
    			<br> 
    			<button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   			</form> 
  		</div> 
 	</div>
</div>
<footer>
     
</footer>
</body>
</html>