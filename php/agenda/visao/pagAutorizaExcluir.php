<HTML>
	<HEAD>
		<TITLE> Autorização de Exclusão </TITLE>
		<style>
			.confirmationLink {
				font-size: 24px;
				text-decoration: none;
				padding: 10px 20px;
				border-radius: 10px;
				cursor: pointer;
				transition: all;
				transition-duration: 300ms;
			}

			.confirmationLink:hover {
				opacity: 0.8;
			}
		</style>
	</HEAD>
	<BODY>
		
		<H1 style="font-size: 28px; text-align: center"> Confirmar exclusão de <?php echo $cont->getNome(); ?>? </h1>

		<div style="display: flex; justify-content: center; gap: 20px">
			<a href="contato.php?fun=excluir&conf=sim&id=<?php echo $cont->getId();?>" class="confirmationLink" style="background: red; color: white;"> Sim </a>
			<a href="contato.php?fun=listar" class="confirmationLink" style="background: white; color: black">Não</a>
		</div>
	</BODY>
</HTML>