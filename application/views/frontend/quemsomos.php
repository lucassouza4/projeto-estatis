<!-- QUEM SOMOS -->

	<div class="divmaster">
		<section class="titulo">
			
			<h1>SOBRE NÓS</h1>
			<hr>
			<?php 
				foreach ($descricao as $sobre){
			?>
			<p> 
				<?php echo $sobre->descricao ?>
			</p>
			<?php  
				}
			?>
			<ul class="img">
				<li>
					<img src="<?php echo base_url('/assets/frontend/img/missao2.png'); ?>">
					<h4>MISSÃO</h4>
				</li>
				<li>
					<img src="<?php echo base_url('/assets/frontend/img/visao2.png'); ?>">
					<h4>VISÃO</h4>
				</li>
				<li>
					<img src="<?php echo base_url('/assets/frontend/img/valores2.png'); ?>">
					<h4>VALORES</h4>
				</li>
			</ul>
			
		</section>
	</div>