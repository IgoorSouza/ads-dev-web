<HTML>
	<HEAD>
		<TITLE> Alterar Contato </TITLE>
		<META charset="UTF-8" />
		<style>
			.sendButton {
				transition: all;
				transition-duration: 300ms;
			}
		</style>
	</HEAD>
	<BODY>
		
		<H1 style="text-align: center; font-size: 28px;"> Alterar Contato </H1>
		
		<FORM action="contato.php?fun=alterar" method="POST">
			
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $cont->getId() . "'"; ?> />
			
			<LABEL for="nome" style="font-size: 18px"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" 
			<?php echo "value='" . $cont->getNome() . "'"; ?> />
			
			<LABEL for="email" style="font-size: 18px"> Email: </LABEL> 
			<INPUT type="text" id="email" name="email" 
			<?php echo "value='" . $cont->getEmail() . "'"; ?>/>
			
			<LABEL for="tel" style="font-size: 18px"> Telefone: </LABEL> 
			<INPUT type="text" id="tel" name="telefone" 
			<?php echo "value='" . $cont->getTelefone() . "'"; ?>/>
			
			<button type="submit" name="enviar" style="margin: auto" class="sendButton">Enviar</button>
		</FORM>
	</BODY>
</HTML>