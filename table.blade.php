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
			padding: 0px;
			margin: 0px;
		}

		.email-bg {
			float: left;
			width: 100%;
			color: #222;
			background: #d9eaff;
			font-size: 17px;
			font-weight: normal;
			font-family: 'Baloo 2', 'Roboto', 'Segoe UI', 'Open Sans', 'Comic Sans MS', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
			overflow: hidden;
		}

		.tg {
			border-collapse: collapse;
			border-spacing: 0;
			width: 640px;
			max-width: 90%;
			margin: 50px auto;
			background: #fff;
			border: 0px;
		}

		.tg td,
		.tg th {
			border: 0px;
			padding: 0px;
		}

		.tg .td {
			vertical-align: top;
		}

		.tg img,
		.tg .img,
		.tg a img {
			display: block;
			max-width: 100%;
		}

		.tg p {
			margin: 1em 0px !important;
			text-align: justify;
		}

		.tg h1,
		.tg h2,
		.tg h3,
		.tg h4,
		.tg h5,
		.tg h6 {
			margin: 0.67em 0px !important;
		}

		.tg .padding {
			padding: 0px 20px;
		}

		.tg .line-height {
			line-height: 150%;
		}

		.tg .spacing {
			letter-spacing: 1px;
		}

		.tg .nowrap {
			white-space: nowrap;
		}

		a {
			outline: none;
			color: #0075ff !important;
		}

		a:active {
			color: #f23 !important;
		}

		a:visited {
			color: #d0f !important;
		}

		a:hover {
			color: #8fea98 !important;
		}

		a.email-button {
			display: inline-block;
			padding: 13px 25px;
			margin: 20px auto;
			font-weight: bold;
			color: #fff !important;
			background: #0075ff !important;
			border-radius: 10px !important;
			text-decoration: none;
		}

		a.email-button:hover {
			color: #fff !important;
			background: #8fea98 !important;
		}

		/* table content */

		.email-logo {
			display: flex;
			width: 100%;
			background: #0075ff;
		}

		.email-logo img {
			float: left;
			width: 200px;
			height: auto;
			margin: 20px;
		}

		.email-separator {
			display: block;
			height: 200px;
			width: 100%;
			background: url('https://t4.ftcdn.net/jpg/02/32/05/03/360_F_232050351_DzCjwLwEPUuYBHDA70B88clXtsMCEYpH.jpg') #d9eaff;
			overflow: hidden;
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

		.email-box-bottom {
			display: block;
			padding: 20px 20px !important;
			margin: 0px;
			text-align: center;
			color: #0099ff;
			background: #d9eaff;
		}

		.email-unsubscribe {
			display: block;
			color: #0075ff;
			background: #d9eaff;
			font-weight: bold;
		}

		.email-promo {
			display: flex;
			box-sizing: border-box;
		}

		.email-promo-left {
			margin-bottom: 20px;
			padding-right: 20px;
			box-sizing: border-box;
		}

		.email-promo-right {
			margin-bottom: 20px;
			padding-left: 20px;
			box-sizing: border-box;
		}

		.email-promo img {
			box-sizing: border-box;
			border-radius: 10px;
			border: 3px solid #0075ff;
			transition: all .6s;
		}

		.email-promo img:hover {
			box-sizing: border-box;
			border: 10px solid #8fea98;
		}

		@media screen and (max-width: 480px) {
			.email-promo {
				display: block;
			}

			.email-promo-left {
				padding-right: 0px;
			}

			.email-promo-right {
				padding-left: 0px;
			}
		}
	</style>
</head>

<body class="email-body">
	<div class="email-bg">
		<table class="tg">
			<tbody>
				<tr>
					<td class="td">
						<div class="email-logo">
							<a href="https://google.pl" target="_blank">
								<img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/625eb54bba1f7951f802c34c_Discord-Logo%2BWordmark-White%20(2).png" alt="Logo" />
							</a>
						</div>

						<div class="email-separator"></div>
					</td>
				</tr>
				<tr>
					<td class="td padding">
						<h1>Hello {{ $name }}</h1>
					</td>
				</tr>
				<tr>
					<td class="td padding line-height">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eos ipsa quam debitis autem velit animi doloribus inventore <a href="https://google.pl">text link</a>, cum consequatur esse vitae laudantium perferendis harum sed, reiciendis quasi non? Aspernatur?</p>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto natus deleniti rem laboriosam. Quis molestias qui doloremque harum nisi fugiat maxime, vitae, officia velit saepe dolore assumenda vel vero distinctio.</p>
					</td>
				</tr>
				<tr>
					<td class="td padding">
						<center>
							<a href="https://google.pl" class="email-button">Confirm Email</a>
						</center>
					</td>
				</tr>
				<tr>
					<td class="td padding">
						<h1>Super promotion</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt praesentium, similique a impedit sint veniam atque modi.</p>
						<div class="email-promo">
							<div class="email-promo-left">
								<a href="https://www.freepik.com/author/malikadesign" target="_blank">
									<img src="https://img.freepik.com/free-vector/flash-sale-banner-template-design_87202-1099.jpg" alt="Icon" />
								</a>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aperiam quis impedit atque, soluta excepturi deleniti consequuntur commodi dolorum explicabo.</p>
							</div>
							<div class="email-promo-right">
								<a href="https://www.freepik.com/author/malikadesign" target="_blank">
									<img src="https://img.freepik.com/free-vector/best-deal-banner-template-bright-colors_87202-1079.jpg" alt="Icon" />
								</a>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aperiam quis impedit atque, soluta excepturi deleniti consequuntur commodi dolorum explicabo.</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="td padding">
						<p>
							Thanks, <br />
							Have a nice day!
						</p>
					</td>
				</tr>
				<tr>
					<td class="td">
						<a href="https://google.pl?q=hello" target="_blank">
							<img src="https://appmaster.io/api/_files/skUfFRwsVbubAsUUd7xwq7/download" alt="Html email image" />
						</a>
					</td>
				</tr>
				<tr>
					<td class="td">
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
					</td>
				</tr>
				<tr>
					<td class="td">
						<div class="email-box-bottom">All rights reserved @php echo date('Y-m-d H:i:s', time()); @endphp</div>
						<center>
							<a href="http://your.domain/unsubscribe?id=12345" class="email-unsubscribe" target="_blank">Unsubscribe</a>
						</center>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>

</html>