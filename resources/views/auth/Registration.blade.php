@extends('dashboard')

@section('content')
<main>
	<title>Đăng Kí Khóa Học</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style.css')}}">
</head>
<body>
<header>
	<div class="w-50 ml"><img src="{{URL::asset('/img/brand1.png')}}" class="w-75 h-75 float-start"></div>
	
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
      			<img src="{{URL::asset('/img/ED1.png')}}" class="d-block w-100 h-100" alt="...">
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
				VÌ SAO NÊN CHỌN EDUCATION.DEV
			</h1>
		</div> 
		<div>
			<p class="text-danger fw-bold fs-3">Học đúng nhu cầu </p>
			<ul>
				<li>Ở FUNiX bạn được toàn quyền chủ động lựa chọn học những kiến thức bạn cần theo các nhóm Chứng chỉ được thiết kế bởi những chuyên gia CNTT có uy tín trong ngành.</li>
				<li><span class="text-primary fw-bold">Đặc Biệt:</span> Nguồn học liệu từ các trường ĐH hàng đầu thế giới,được chọn lọc, dễ dàng áp dụng vào công việc thực tế. Học liệu được kiểm nghiệm, Việt hóa từ các chuyên viên, lập trình viên giàu kinh nghiệm thực tế và nhà tuyển dụng.</li>
				<li>dàng tương tác 1:1 với các chuyên gia và thảo luận với hơn 10.000 thành viên trong cộng đồng FUNiX giúp bạn học nhanh chóng hơn, giải quyết vấn đề nhanh hơn từ các bài toán thực tế họ đang mắc phải trong quá trình làm việc</li>
				<li> Hệ thống bài học ngắn gọn (~10-15’/bài giảng) bằng hình thức đa dạng, bạn dễ dàng sắp xếp thời gian học mà không ảnh hưởng đến công việc hiện tại và thời gian dành cho gia đình.</li>
            <li><span class="text-danger fw-bold">BẢO HÀNH KIẾN THỨC SAU TỐT NGHIỆP: khi Học Viên đăng kí học cập nhật kiến thức</li>
				
			</ul>
		</div>
		<div>
			<p class="text-danger fw-bold fs-3">Chương trình học linh hoạt với mọi mục tiêu và Đi làm ngay khi hoàn thành 3 kỳ học</p>
			<ul>
				<li>Sau khi học 3 Học kỳ (Khoảng 1 năm rưỡi), học viên sẽ được giới thiệu làm Lập trình viên tại hàng trăm doanh nghiệp có Ký kết Hợp tác Chiến lược về Đào tạo và Tuyển dụng ngành CNTT với FUNiX, như: FPT Software, Rikkeisoft, VTI, 1Office, Tinh Vân…</li>
				<li>Mỗi học kỳ 4-6 tháng, được thiết kế cho các học viên theo mục tiêu: Học lấy Bằng, Học nâng cao trình độ, Học kỹ năng CNTT, Học để đi làm, Học để biết</li>
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
   			<form action="{{ route('register.custom') }}" method="post" class="form" role="form" enctype="multipart/form-data"> 
   				@method('PATCH')
    			@csrf
    			<div class="row"> 
     				<div class="col-xs-6 col-md-6"> 
     					<input class="form-control" name="FirstName" placeholder="Họ" required="" autofocus="" type="text">
     				</div> 
     				<div class="col-xs-6 col-md-6"> 
     					<input class="form-control" name="LastName" placeholder="Tên" required="" type="text"> 
     				</div> 
    			</div> 
    			<input class="form-control" name="Email" placeholder="Email" type="email" required="" > 
    			<input class="form-control" name="Address" placeholder="Address" type="text" required="" pattern="[\s*A-Za-z]{1,50}"> 
    			<label class="radio-inline text-light">          
    				<input name="Sex" id="inlineCheckbox1" value="male" type="radio">Nam 
    			</label> 
    			<label class="radio-inline text-light">          
    				<input name="Sex" id="inlineCheckbox2" value="female" type="radio">Nữ 
    			</label><br>
    			<label class="text-light"> Ngày Bắt đầu học</label> 
    			<input class="form-control" name="dateBegin" placeholder="date" type="date"> 
    			<label class="text-light"> Thời Gian Kết thúc Khóa Học</label> 
    			<div class="row">  
    				<div class="col-xs-6 col-md-6"> 
    					<select class="form-control" class="Month">              
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
    					<select class="form-control" class="Course">              
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
</main>
@endsection