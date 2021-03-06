<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('assets/slick.c6596996.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick-theme.aaa4ba93.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css.ec4f6c18.css')}}">
	<title>@yield('title')</title>
	@yield('css')
	
</head>

<body>
	<div class="modal">
		<div class="backdrop"></div>
		<form action="{{route('create_message')}}" method="POST">
			@csrf
			<div class="textarea"> 
				<label for="message">Что не работает и как это должно работать?</label> <textarea id="message" rows="10" name="message"  required></textarea> 
			</div>
			<div class="inputs">
				<div> 
					<label for="name">Ваше имя</label> 
					<input type="text" id="name" name="name" required> 
				</div>
				<div> 
					<label for="email">Ваш email</label> 
					<input type="email" id="email" name="email" required> 
				</div>
			</div>
			<div class="button"> 
				<button type="submit" class="btn">Отправить</button> 
			</div>
		</form>
	</div>
	<header>
		<div class="navigation">
			<div class="container d-flex justify-content-between align-items-center">
				<div class="logo"> <a href="{{route('home', $l)}}">Logo</a> </div>
				<div class="nav-wrapper">
					<nav>
						<div class="for-mobile"> <button><img src="assets/close-menu.b08aebfb.svg" alt="close-menu"></button>
							<div class="mobile-lang">
								<p>Выберите язык</p> <a href="#"><span>O'z</span></a> <a href="#"><span>Ўз</span></a> <a href="#" class="active"><span>Ру</span></a>
							</div>
						</div>
						<ul class="nav-links">
							<li> 
								<a href="{{route('places',$l)}}">
									Площадки
								</a> 
							</li>
							<li> 
								<a href="{{route('sections',$l)}}">
									Секции
								</a> 
							</li>
							<li> 
								<a href="{{route('clubs',$l)}}">
									Клубы
								</a> 
							</li>
						</ul>
						<div class="dropdown"> 
							<a href="#" class="dropdown-active">
								<i class="fas fa-globe"></i>&nbsp;
									{{$langs[$l]}}
								</a>
							<div class="dropdown-items"> 
								@foreach($inactive_langs as $key=>$lang)
								<a href="#" onclick="change_lang('{{$key}}')">
									{{$lang}}
								</a> 
								@endforeach
							</div>
						</div>
					</nav>
				</div>
				<div class="burger">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
				<div class="backdrop"></div>
			</div>
		</div>
	</header>

	@yield('content')


	<footer>
		<div class="container">
			<div class="row footer-row">
				<div class="col-md-6">
					<div class="wrap">
						<div class="foot-menu">
							<ul>
								<li> <a href="#"> О нас </a> </li>
								<li> <a href="#"> Контакты </a> </li>
								<li> <a href="#"> Правила </a> </li>
								<li> <a href="#"> Добавить объект </a> </li>
							</ul>
						</div>
						<div class="copyright"> <span> © 2013 – 2020 FindSport.ru </span> <a href="#"> Карта сайта </a> </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="wrap">
						<div class="social"> <button class="error-msg"> Что-то работает не так? </button>
							<div> <i class="fab fa-facebook-f"></i> </div>
							<div> <i class="fab fa-telegram-plane"></i> </div>
							<div> <i class="fab fa-instagram"></i> </div>
						</div>
						<div class="contacts"> <span class="email"> info@findsport.ru </span> <span class="phone"> +998 97 501-34-12 </span> </div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{asset('assets/jquery-3.5.1.min.44ae8a5b.js')}}"></script>

	@yield('js')

	<script>
		function change_lang(lang){
			const full_url_array=window.location.href.split("#")[0].split("/");
			full_url_array[5]=lang;
			const new_url=full_url_array.join("/");
			window.location.assign(new_url);
		}
	</script>
</body>

</html>