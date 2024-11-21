<HTML>

	<HEAD>
		<TITLE> Contato <?php echo $cont->getNome(); ?> </TITLE>
		<style>
			.exibirContatoP {
				font-size: 18px;
			}

			#voltarLink {
				background: white;
				color: black;
				padding: 10px 20px;
				font-size: 20px;
				border-radius: 10px;
				text-decoration: none;
				transition: all;
				transition-duration: 300ms;
			}

			#voltarLink:hover {
				opacity: 0.8;
			}
		</style>
	</HEAD>

	<BODY>
		
		<H1 style="font-size: 28px"> Contato: <?php echo $cont->getNome(); ?> </H1>

		<p class="exibirContatoP"><strong>Id:</strong> <?php echo $cont->getId(); ?></p>
		<p class="exibirContatoP"><strong>Nome:</strong> <?php echo $cont->getNome(); ?></p>
		<p class="exibirContatoP"><strong>Telefone:</strong> <?php echo $cont->getTelefone(); ?></p>
		<p class="exibirContatoP" style="margin-bottom: 30px"><strong>E-mail:</strong> <?php echo $cont->getEmail(); ?></p>
		
		<A id="voltarLink" href="contato.php?fun=listar"> Voltar </A>
		
	</BODY>
	
</HTML>