<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b873803313.js" crossorigin="anonymous"></script>
    <script src="CodeEditor.js"></script>
    <title>ทดสอบเขียนโค้ด | เอชทีเอ็มแอลไลบรารี่</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;}

        .navbar-textlogo:hover{
            color : #1BB2B6;
            transition: all 0.2s;}
        
        ::-webkit-scrollbar{
            width: 10px;}
  
        ::-webkit-scrollbar-track{
            background: #222;}
   
        ::-webkit-scrollbar-thumb{
            background: #1BB2B6;}
  
        ::-webkit-scrollbar-thumb:hover{
            background: #1BB2B6ab;}

        #container{
            position: relative;
            bottom: 0;
            width: 100%;
            display: flex;
        }    

        #code {
            min-height: 1080px;}

        #output {
            min-height: 1080px;
            background: #222;
            color: #ffffff;}
    </style>
</head>
<body>
    <navbar class="navbar navbar-expand-lg navbar-dark fixed-top" style="
                                                                                background-color:#222222;
                                                                                user-select: none; 
                                                                                z-index: 99;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span style="
                color : #00b4d8; 
                font-size: 25px; 
                margin: 0; 
                padding: 0;"><i class="fa-sharp fa-solid fa-file-code"></i> 
                                                    </span> <span class="navbar-textlogo" style="
                                                                                                font-size: 22px;
                                                                                                font-family: kanit;
                                                                                                font-weight: bold;
                                                                                                transition: all 0.2s"> 
                                                                                                 เอชทีเอ็มแอล - ไลบรารี่
                                                            </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" style="
                font-size: 16px;
                font-family: sarabun;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i> หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-book"></i> บทเรียน</a>
                        <ul class="dropdown-menu dropdown-menu-dark" style="
                                                                        background-color: #222222;">
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 1</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>เอชทีเอ็มแอลเบื้องต้น</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 2</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>เอกสารและการตกแต่ง</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 3</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>การสร้างรายการ</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 4</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>การใส่รูปภาพในเว็บเพจ</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 5</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>การสร้างตาราง</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 6</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>การสร้างการเชื่อมโยง</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 7</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>การสร้างฟอร์ม</a></li>
                            <li><a class="dropdown-item" href="#"><b>บทเรียนที่ 8</b> <span style="
                                                                                        font-size: 14px; 
                                                                                        font-weight: 200;"></span>การใช้ซีเอสเอส</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-book-open"></i> แบบทดสอบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CodeEditor.php"  style="
                                                    color : #1BB2B6;"><i class="fa-solid fa-code"></i> ทดสอบเขียนโค้ด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php"><i class="fa-solid fa-envelope" ></i> ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </navbar>
    <div class="container-fluid" style="
        height : 1800px; 
        padding: 0; 
        position: absolute; 
        background-color: #0000004d;
        z-index: -98;
        background-attachment: fixed;">
    </div>
    <video loop muted autoplay style="
        width: 100%; 
        height: 100%; 
        position: absolute; 
        object-fit: cover; 
        z-index: -99;
        position: fixed">
            <source src="Video/CodeEditor-header-videobg.mp4">
    </video>
    <div class="container pt-5"></div>
    <div class="container pt-5">
        <p class="text-white display-1 p-1 text-center" style="
                                                                font-family: kanit;
                                                                font-weight: bold;
                                                                user-select: none;"><i class="fa-solid fa-code"></i> ทดสอบ<span  style="
                                                                                                                                    color : #00b4d8;">เขียนโค้ด</span></p>
        <p class="text-center text-white" style="
                                                    font-family: sarabun;
                                                    font-weight: bold;">สามารถเขียนโค้ดบนแบบเว็บไซต์ของเราและแสดงผลรับด้วยการกดที่ปุ่ม "รันโค้ด"</p>
        <div class="container p-1 d-flex justify-content-center">
            <button class="btn btn-outline-info mb-3" id="btn" style="
                                                            font-family: kanit;
                                                            font-weight: bold;">รันโค้ด</button>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 pt-2 pb-3" id="htmPane">
                <div class="inner jumbotron" id="code"></div>
            </div>
            <div class="col-lg-6 col-12 pt-2 pb-3">
                <div id="output"></div>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start text-muted " style="
                                                        background-color:#222222;">
        <div class="container-fluid p-2">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa-sharp fa-solid fa-file-code"></i> เอชทีเอ็มแอลไลบรารี่
                        </h6>
                        <p class="text-center">
                            เว็บไซต์เอชทีเอ็มแอลไลบรารี่ คือเว็บไซต์เพื่อการสอนภาษา HTML เป็นสื่อการสอนที่นำเสนอความรู้ และเนื้อหา
                            โดยประกอบการเรียนในรายวิชา การเขียนเว็บไซต์ด้วยภาษา HTML โดยมีวัตถุประสงค์ให้นักเรียนและผู้สนใจทั่วไป...                                                             
                        </p>
                    </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"></div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">ลิงค์ทางลัด</h6>
                    <p>
                        <a href="index.php" class="text-reset">หน้าแรก</a>
                    </p>
                    <p>
                        <a href="index.php#lesson" class="text-reset">บทเรียน</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">แบบทดสอบ</a>
                    </p>
                    <p>
                        <a href="Contact.php" class="text-reset">ติดต่อเรา</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">ติดต่อเรา</h6>
                    <p><i class="fas fa-envelope me-3"></i>htmllibraryth@gmail.com</p>
                    <p><i class="fas fa-phone me-3"></i>096-069-7377</p>
                    <p><i class="fa-brands fa-facebook me-3"></i>Thitiphan Saragool</p>
                    <p><i class="fa-brands fa-line me-3"></i>_thtph</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center"><a href="#" class="text-reset">กลับขึ้นด้านบน</a></div>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2566 ลิขสิทธิ์:
            <a class="text-reset fw-bold" href="index.php">HtmlLibrary.com</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script src="CodeEditor.js"></script>
</body>
</html>