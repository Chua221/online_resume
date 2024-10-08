<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.name a {
			font-family: 'Playfair Display', serif; /* 使用优雅的衬线字体 */
			font-size: clamp(2rem, 2.5vw, 3rem);
			color: white; /* 字体颜色设置为白色 */
			text-transform: uppercase; /* 字母全部大写 */
			letter-spacing: 1px; /* 增加字母间距 */
			font-weight: 600; /* 适度加粗 */
			text-decoration: none; /* 去掉下划线 */
			transition: color 0.3s ease; /* 添加平滑的颜色变化效果 */
		}

		.name a:hover {
			color: #f0f0f0; /* 悬停时稍微改变成淡白色 */
		}

		html{
			scroll-padding-top: 100px;
		}

		body {
			font-family: 'Roboto', sans-serif;
			padding-top: 0; /* 取消顶部的空白 */
		}

        /* 第一个 header 的样式 */
        header {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between; /* 左右两边内容分开 */
            align-items: center;
            font-family: 'Playfair Display', serif;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed; /* 固定第一个header */
            top: 0;
            left: 0;
            right: 0;
            z-index: 2000; /* 确保第一个header在上面 */
        }

        /* Dropdown 的样式 */
        .dropdown {
            display: none;
        }

        /* 导航链接的样式 */
        header .info {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            flex: 1;
        }

        header .info p {
            margin: 0;
            font-size: 18px;
        }

        header .info a {
            color: white;
            text-decoration: none;
        }

        /* 为移动设备显示的样式 */
        @media (max-width: 768px) {
            header .info {
                display: none;
            }

            .dropdown {
                display: inline-block;
                position: relative;
            }

            .dropdown button {
				background: linear-gradient(135deg, #ff8800, #f36f56); /* 渐变背景 */
				color: white;
				padding: 10px 20px;
				font-size: 16px;
				border: none;
				border-radius: 8px; /* 圆角按钮 */
				cursor: pointer;
				box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* 添加轻微阴影 */
				transition: background 0.3s ease; /* 平滑过渡效果 */
			}

			.dropdown button:hover {
				background: linear-gradient(135deg, #f36f56, #ff8800); /* 悬停时渐变颜色反转 */
			}

            .dropdown-content {
				display: none;
				position: absolute;
				right: 0;
				background-color: #fff;
				min-width: 200px;
				box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* 添加阴影 */
				border-radius: 8px; /* 为菜单框增加圆角 */
				z-index: 1000;
				overflow: hidden; /* 圆角效果更明显 */
			}

			.dropdown-content a {
				color: #333;
				padding: 12px 20px;
				text-decoration: none;
				display: block;
				transition: background 0.3s ease, color 0.3s ease; /* 添加过渡效果 */
			}

			.dropdown-content a:hover {
				background-color: #f36f56; /* 悬停时的背景颜色 */
				color: white; /* 悬停时的字体颜色 */
			}

			/* 激活下拉菜单 */
			.dropdown.active .dropdown-content {
				display: block;
			}

        }
		
		.content {
            padding: 20px;
        } 

        /* 第二个 header 的样式 */
		#fh5co-header {
			top: 0; /* 使第二个 header 直接与第一个 header 叠加 */
			z-index: 1000; /* 确保第二个header在第一个header下 */
		}

		.feature-copy img {
			transition: transform 0.3s ease, box-shadow 0.3s ease; /* 添加平滑的过渡效果 */
		}

		.feature-copy img:hover {
			transform: scale(1.05); /* 图片放大 5% */
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* 添加阴影 */
		}

		.fh5co-social-icons li a {
			font-size: 24px; /* 图标大小 */
			color: #25D366; /* WhatsApp 的绿色 */
			transition: color 0.3s ease;
		}

		.fh5co-social-icons li a:hover {
			color: #128C7E; /* 悬停时的颜色 */
		}
		
		.resume-button {
			background: linear-gradient(135deg, #4e54c8, #8f94fb); /* 渐变背景 */
			color: white;
			padding: 12px 25px;
			font-size: 18px;
			border: none;
			border-radius: 8px; /* 圆角按钮 */
			cursor: pointer;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* 添加轻微阴影 */
			transition: background 0.3s ease, transform 0.3s ease; /* 平滑过渡效果 */
		}

		.resume-button a {
			color: white;
			text-decoration: none;
			font-weight: bold;
		}

		.resume-button:hover {
			background: linear-gradient(135deg, #8f94fb, #4e54c8); /* 悬停时渐变反转 */
			transform: scale(1.05); /* 悬停时轻微放大 */
		}

		.resume-button a:hover {
			color: #f0f0f0; /* 悬停时稍微改变字体颜色 */
		}


    </style>

	</head>
	<body>
<div>
	<header>
        <div class="name"><a href="#ccy">Chua Chong Yang</a></div>

        <!-- Desktop Navigation Links -->
        <div class="info">
            <p><a href="#about_me"><b>About Me</b></a></p>
            <p>|</p>
            <p><a href="#my_resume"><b>My Resume</b></a></p>
            <p>|</p>
            <p><a href="#qualification"><b>Qualification</b></a></p>
            <p>|</p>
            <p><a href="#skills"><b>Skills</b></a></p>
            <p>|</p>
            <p><a href="#my_project"><b>My Project</b></a></p>
            <p>|</p>
            <p><a href="#reference"><b>Reference</b></a></p>
            <p>|</p>
			<p><a href="{{ route('logout') }}"><b>Logout</b></a></p>
        </div>

        <!-- Dropdown for Mobile -->
        <div class="dropdown">
            <button id="dropdown-button" onclick="toggleDropdown()">Menu</button>
            <div class="dropdown-content">
                <a href="#about_me"><b>About Me</b></a>
                <a href="#my_resume"><b>My Resume</b></a>
                <a href="#qualification"><b>Qualification</b></a>
				<a href="#skills"><b>Skills</b></a>
                <a href="#my_project"><b>My Project</b></a>
                <a href="#reference"><b>Reference</b></a>
				<p><a href="{{ route('logout') }}"><b>Logout</b></a></p>
            </div>
        </div>
    </header>

    <!-- 第二个header -->
    <div id="page">    
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" id="ccy">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <div class="profile-thumb" style="background: url({{ asset('storage/images/image333.png') }});"></div>
                                <h1><span>Chua Chong Yang</span></h1>
                                <h3><span>Web Developer / Photographer</span></h3>
								<p style="display: flex; align-items:center;justify-content:center;">
									<ul class="fh5co-social-icons" >
										<li><a href="https://wa.me/601159532858" target="_blank"><i class="icon-whatsapp" ></i></a></li>
										<li><a href="https://www.facebook.com/chongyang.chua" target="_blank"><i class="icon-facebook3" ></i></a></li>
										<li><a href="mailto:chuachongyang05@gmail.com" target="_blank"><i class="icon-email"></i></a></li>
										<li><a href="https://github.com/Chua221" target="_blank"><i class="bi bi-github"></i></a></li>
									</ul>
								</p>
								<button class="resume-button">
									<a href="storage/images/resume.pdf" target="_blank">My Resume</a>
								</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2 id="about_me">About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block">Chua Chong Yang</span></li>
						<li><span class="first-block">Phone:</span><span class="second-block">011-5953-2858</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">chuachongyang05@gmail.com</span></li>
						<li><span class="first-block">Address:</span><span class="second-block">32 & 34, Jalan Perai Jaya 4, Bandar Perai Jaya, 13600 Perai, Pulau Pinang</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p>I am a student majoring in application development with a passion for creating efficient and user-friendly software solutions. I will begin my internship from early February to late May, where I expect to gain practical skills in software development and problem-solving. I am eager to continue learning and growing in the field of application development.</p>
					<p style="display: flex; align-items:center;justify-content:center;">
						<ul class="fh5co-social-icons">
							<li><a href="https://wa.me/601159532858" target="_blank"><i class="icon-whatsapp"></i></a></li>
							<li><a href="https://www.facebook.com/chongyang.chua" target="_blank"><i class="icon-facebook3"></i></a></li>
							<li><a href="mailto:chuachongyang05@gmail.com" target="_blank"><i class="icon-email"></i></a></li>
							<li><a href="https://github.com/Chua221" target="_blank"><i class="bi bi-github"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2 id="my_resume">My Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">TVET Diploma</h3>
									<span class="company">Kolej Synergy - 2023 - Present</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Secondary School</h3>
									<span class="company">SMK SYP 1 - 2017 - 2022</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-features" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2 id="qualification">Qualification</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<div class="feature-copy">
								<a href="storage/images/Chua Chong Yang front end CSS.pdf" target="_blank"><img src="{{ asset('storage/images/Chua Chong Yang front end CSS.jpg') }}" height="200px" width="auto"></a>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<div class="feature-copy">
								<a href="storage/images/Chua Chong Yang front end HTML.pdf" target="_blank"><img src="{{ asset('storage/images/Chua Chong Yang front end HTML.jpg') }}" height="200px" width="auto"></a>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<div class="feature-copy">
								<a href="storage/images/Chua Chong Yang JavaScript.pdf" target="_blank"><img src="{{ asset('storage/images/Chua Chong Yang JavaScript.jpg') }}" height="200px" width="auto"></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 text-center">

						<div class="feature-left">
							<div class="feature-copy">
								<a href="storage/images/Chua Chong Yang Mysql.pdf" target="_blank"><img src="{{ asset('storage/images/Chua Chong Yang Mysql.jpg') }}" height="200px" width="auto"></a>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<div class="feature-copy">
								<a href="storage/images/Chua Chong Yang PHP.pdf" target="_blank"><img src="{{ asset('storage/images/Chua Chong Yang PHP.jpg') }}" height="200px" width="auto"></a>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<div class="feature-copy">
								<a href="storage/images/e-latih php.pdf" target="_blank"><img src="{{ asset('storage/images/e-latih php.jpg') }}" height="200px" width="auto"></a>
								<a href="storage/images/e-latih HTML.pdf" target="_blank"><img src="{{ asset('storage/images/e-latih HTML.jpg') }}" height="200px" width="auto"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-skills" class="animate-box">
		<div class="container" id="skills">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">HTML5</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">CSS3</span><span class="value-right">50%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:50%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">45%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:45%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Mysql</span><span class="value-right">45%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:45%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Javascript</span><span class="value-right">40%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:40%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Laravel</span><span class="value-right">55%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:55%">
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container" id="my_project">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Project</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="https://cychua.jom-jom.com/calculator/calculator.php" class="work" style="background-image: url({{ asset("storage/images/BMI.png") }});" target="_blank">
						<div class="desc">
							<h3>BMI</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="https://cychua.jom-jom.com/calculator/calculator.php" class="work" style="background-image: url({{ asset("storage/images/calculator.png") }});" target="_blank">
						<div class="desc">
							<h3>Calculator</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url({{ asset("storage/images/portfolio-3.jpg") }});" target="_blank">
						<div class="desc">
							<h3>Vegetable Shop</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url({{ asset("storage/images/portfolio-4.jpg") }});" target="_blank">
						<div class="desc">
							<h3>Project Name</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url({{ asset("storage/images/portfolio-5.jpg") }});" target="_blank">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Website</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url({{ asset("storage/images/portfolio-6.jpg") }});">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url({{ asset("storage/images/portfolio-7.jpg") }});">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url({{ asset("storage/images/portfolio-8.jpg") }});">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="reference">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Reference</h2>
					<p>Name: Mr. Ng Chuen Chuen</p>
					<p>Position: Head of IT Department</p>
					<p>Company: Kolej Synergy</p>
					<p>Phone Number: 012-4346832</p>
					<p>Email: c2@synergy-college.com</p>	
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
		document.getElementById("dropdown-button").addEventListener("click", function() {
			var dropdown = document.querySelector(".dropdown");
			dropdown.classList.toggle("active");
		});
	</script>

	</body>
</html>

