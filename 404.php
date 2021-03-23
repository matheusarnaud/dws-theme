<?php get_header(); ?>

	<div class="main">
		<div class="container">
			<h2>ESSA PÁGINA NÃO EXISTE</h2>
			<a href="javascript:history.back()">Voltar</a>
		</div>
	</div>

	<style>
		header{
			top: 0;
		}
		.main{
			position: absolute;
			top: 0;
			left: 0;
			background-color: #263246;
			display: flex;
			flex-flow: column wrap;
    		align-items: center;
			justify-content: center;
			width: 100vw;
			height: 100vh;
		}
		.container{
			text-align: center;
			width: 100%;
		}
		h2{
			color: #ffffff;
			font-size: 52px;
			margin-bottom: 30px;
		}
		a{
			position: relative;
			text-decoration: none;
			font-size: 22px;
			color: #FDCD37;
			font-weight: 300;
			transition: 1s;
		}
		a::after {
			position: absolute;
			content: "";
			width: 100%;
			height: 1px;
			top: 100%;
			left: 0%;
			background: #FDCD37;
			transition: transform 0.5s;
			transform: scaleX(0);
			transform-origin: middle;
		}	
		a:hover:after {
			transform: scaleX(1);
			transform-origin: middle;
		}
	</style>
</body>
</html>