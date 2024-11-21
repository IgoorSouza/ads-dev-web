<HTML>
	<HEAD>
		<TITLE> Listagem de Contatos </TITLE>
		<META charset="UTF-8" />
		<style>
			#cadastrarLink {
				background: white;
				color: black;
				padding: 10px;
				font-size: 20px;
				border-radius: 10px;
				text-decoration: none;
				transition: all;
				transition-duration: 300ms;
			}

			#cadastrarLink:hover {
				opacity: 0.8;
			}
			
			table {
				border-collapse: collapse;
				margin-top: 10px;
			}

			th, td {
				font-size: 18px;
				text-align: center;
				padding: 10px;
				border: 1px solid white;
			}
		</style>
	</HEAD>
	<BODY>
		<?php
			if(isset($status)){ echo "<H2 style='line-height: 1.1'>".$status."</H2>";}
		?>
		<A href="contato.php?fun=cadastrar" id="cadastrarLink" > Cadastrar </A>
		<br /><br />
			
		<TABLE>
			<TR> 
				<TH> ID </TH>
				<TH> Nome </TH>
				<TH> Email </TH>
				<TH> Telefone </TH>	
				<TH> <img src="visao/img/update.png" width='30px' /> </TH>
				<TH> <img src="visao/img/delete.png" width='30px' /> </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			    <?php
				foreach($lista as $c){	
					echo "<TR>"; 	

					echo "<TD>" . $c->getId() . "</TD>";
					
					echo "<TD><A href='contato.php?fun=exibir&id=". $c->getId() . 
					      "'>" . $c->getNome() . "</A></TD>";
					
					echo "<TD>" . $c->getEmail() . "</TD>";
					
					echo "<TD style='text-wrap: nowrap;'>" . $c->getTelefone() . "</TD>";		
					
					echo "<TD><A href=contato.php?fun=alterar&id=" . 
					      $c->getId() . "><img src='visao/img/update.png' width='30px'/> 
						  </A></TD>"; 

					echo "<TD><A href=contato.php?fun=excluir&id=" . 
					      $c->getId() . "><img src='visao/img/delete.png' width='30px' /> 
						  </A></TD>";	
					
					echo "</TR>";	
				}	
			?>	
		</TABLE>
	</BODY>
</HTML>
