<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Email message</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<style>
		.email-body {
			display: block;
			margin: 0px;
			padding: 0px;
		}

		.email-bg {
			display: block;
			float: left;
			width: 100%;
			overflow: hidden;
			background: #d9eaff;
			font-size: 17px;
			font-family: 'Baloo 2', cursive, Roboto, 'Segoe UI', 'Open Sans', 'Comic Sans MS', Helvetica, Arial, monospace, sans-serif;
		}

		.email-box {
			margin: 50px auto;
			width: 640px;
			max-width: 90%;
			background: #fff;
		}

		.email-logo {
			display: flex;
			width: 100%;
			background: #0075ff;
		}

		.email-logo img {
			float: left;
			width: 200px;
			margin: 20px;
		}

		.email-separator {
			display: block;
			height: 200px;
			width: 100%;
			background: url('https://t4.ftcdn.net/jpg/02/32/05/03/360_F_232050351_DzCjwLwEPUuYBHDA70B88clXtsMCEYpH.jpg') #d9eaff;
			overflow: hidden;
		}

		.email-box-bottom {
			display: block;
			padding: 20px 20px !important;
			margin: 0px;
			text-align: center;
			color: #0099ff;
			background: #d9eaff;
		}

		.email-social {
			background: #0075ff !important;
			display: flex;
			padding: 20px;
		}

		.email-social img {
			height: 32px;
			width: 32px;
			padding: 10px;
			overflow: hidden;
		}

		.email-unsubscribe {
			display: block;
			color: #0075ff;
			background: #d9eaff;
			font-weight: bold;
		}

		a {
			outline: none;
			color: #09f !important;
		}

		a:active {
			color: #f23 !important;
		}

		a:visited {
			color: #d0f !important;
		}

		a:hover {
			color: #5c5 !important;
		}

		img,
		.img {
			display: block;
			max-width: 100%;
			border: 0px;
		}

		a.email-button {
			display: inline-block;
			padding: 15px 30px;
			margin: 20px auto;
			color: #fff !important;
			background: #09f !important;
			text-decoration: none !important;
			border-radius: 10px;
		}

		a.email-button:hover {
			color: #fff !important;
			background: #5c5 !important;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			display: block;
			color: #000 !important;
			margin: 0.67em 0px !important;
			padding: 0px 20px;
			line-height: 100%;
		}

		p {
			display: block;
			color: #000 !important;
			margin: 1em 0px !important;
			padding: 0px 20px;
			line-height: 140%;
		}
	</style>
</head>

<body class="email-body">
	<div class="email-bg">
		<div class="email-box">
			<div class="email-logo">
				<a href="https://google.pl" target="_blank">
					<img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/625eb54bba1f7951f802c34c_Discord-Logo%2BWordmark-White%20(2).png" alt="Logo" />
				</a>
			</div>

			<div class="email-separator"></div>

			<h1>Welcome {{ $name }}!</h1>

			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nostrum, optio laudantium laborum obcaecati reiciendis velit, <a href="https://google.pl">text link</a> blanditiis ratione nobis ducimus illum rem ipsum quo, esse a numquam nihil vitae autem!</p>

			<center>
				<a href="https://google.pl" class="email-button">Confirm Email</a>
			</center>

			<p>
				Thanks, <br />
				Have a nice day!
			</p>

			<a href="https://google.pl?q=hello" target="_blank">
				<img class="padding-top" src="https://appmaster.io/api/_files/skUfFRwsVbubAsUUd7xwq7/download" alt="Html email image" />
			</a>

			<div class="email-social">
				<a href="https://facebook.com">
					<img src="https://raw.githubusercontent.com/atomjoy/htmelo/main/icons/facebook.png" alt="Icon" />
				</a>
				<a href="https://instagram.com">
					<img src="https://raw.githubusercontent.com/atomjoy/htmelo/main/icons/instagram.png" alt="Icon" />
				</a>
				<a href="https://twitter.com">
					<img src="https://raw.githubusercontent.com/atomjoy/htmelo/main/icons/twitter.png" alt="Icon" />
				</a>
			</div>

			<div class="email-box-bottom">All rights reserved @php echo date('Y-m-d H:i:s', time()); @endphp </div>

			<center>
				<a href="http://your.domain/unsubscribe?id=12345" class="email-unsubscribe" target="_blank">Unsubscribe</a>
			</center>
		</div>
	</div>
</body>

</html>