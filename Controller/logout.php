
<?php
session_start();
session_destroy();

header("location:../View/index.php");

?>
		<?php	
			$use = $_POST['usuario'];
			$pw = $_POST['pw'];
		?>
			<?php if ($use==$use && $pw==$pw):?>


			<script type="text/javascript">
			        mensagem = "Voce esta logado";
			        alert(mensagem);
			    </script> 
		}
			<?php endif ?>
			
			<? else:?>

					<script type="text/javascript">
			        mensagem = "senha ou usuario estão errados";
			        alert(mensagem);
			        
			    </script> 

			<?php endif ?>
		}