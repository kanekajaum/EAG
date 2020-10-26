<?php 
//Sessao


if (isset($_SESSION['mensagem'])) {
?>
	

<script type="text/javascript">
	//Mensagem
	window.onload = function(){
		M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
	};
</script>

<?php
}
if (isset($_SESSION["mensagem"])) {
	unset ($_SESSION["mensagem"]);
}

?>