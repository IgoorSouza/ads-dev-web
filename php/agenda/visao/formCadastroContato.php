<H1 style="text-align: center; font-size: 28px;"> Cadastro Contato </H1>

<FORM action="contato.php?fun=cadastrar" method="POST" 
enctype="multipart/form-data">
	
	<LABEL for="nome" style="font-size: 18px"> Nome: </LABEL> 
	<INPUT type="text" id="nome" name="nome" />
	
	<LABEL for="email" style="font-size: 18px"> Email: </LABEL> 
	<INPUT type="text" id="email" name="email" />
	
	<LABEL for="tel" style="font-size: 18px"> Telefone: </LABEL> 
	<INPUT type="text" id="tel" name="telefone" />
	
	<button type="submit" name="enviar" style="margin: auto; transition: all; transition-duration: 300ms">Enviar</button>
</FORM>

