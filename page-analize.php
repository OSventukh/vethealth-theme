<?php
	/**
	 * Template Name: Загальний аналіз крові
	 */

?>

<?php get_header(); ?>

<div class="page-divider"></div>



	<main id="main">
		<div class="wrap">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display')) { bcn_display(); }?>
            </div>

			<?php if ( is_front_page() ) : ?>

				<div class="wrap">
					<h2 class="title"><?php bloginfo( 'description' ); ?></div>
				</div>

				<?php else : ?>
				<div class="wrap">
					<?php the_title( '<h2 class="title">', '</h2>' ); ?>
				</div>
				<?php endif; ?>

			<div class="cbc_data">
				<form action="#" class='complete-blood-count'>
					
					<fieldset class="choosing_animal">
						<legend>Виберіть вид тварини</legend>
						
							<input type="radio" name="emotion" id="dog" class="input-hidden" />
							<label for="dog">
								<img src="/wp-content/themes/vethealththeme/img/dogs.svg" alt="Собаки" />
							</label>
						
							<input type="radio" name="emotion" id="cat" class="input-hidden" />
							<label for="cat">
								<img src="/wp-content/themes/vethealththeme/img/cats.svg" alt="Коти" />
							</label>
						
					</fieldset>
					
					<fieldset>

						<label for="rbc">Еритроцити (10<sup>6</sup>/мкл)</label>
						<input id="rbc" type="text" name="rbc">
				
						<label for="hgb">Гемоглобін (г/дл)</label>
						<input id="hgb" type="text" name="hgb">
				
						<label for="hct">Гематокрит (%)</label>
						<input id="hct" type="text" name="hct">
				
						<label for="mcv">Середній об'єм еритроцитів (мкм<sup>3</sup>)</label>
						<input id="mcv" type="text" name="mcv">
				
						<!-- <label for="mch">Середній вміст гемоглобіну в 1 еритроциті (пкг)</label>
						<input id="mch" type="text" name="mch"> -->
				
						<label for="mchc">Концентрація гемоглобіну в еритроцитах (г/дл)</label>
						<input id="mchc" type="text" name="mchc">
				
						<label for="rdw">Ширина розподілу еритроцитів (%)</label>
						<input id="rdw" type="text" name="rdw">

						<label for="esr">Швидкість осідання еритроцитів (мм/год)</label>
						<input id="esr" type="text" name="esr">
				
						<label for="plt">Тромбоцити (тис/мм<sup>3</sup>)</label>
						<input id="plt" type="text" name="plt">
				
						<!-- <label for="mpv">Середній об'єм тромбоцитів</label>
						<input id="mpv" type="text" name="mpv"> -->
					
						<label for="wbc">Лейкоцити (тис./мкл)</label>
						<input id="wbc" type="text" name="wbc">

					</fieldset>
					<fieldset>
						<legend>Лейкоцитарна формула</legend>
						<!-- <label for="promyelocytes">Промієлоцити (%)</label>
						<input id="promyelocytes" type="text" name="promyelocytes">
				
						<label for="myelocytes">Мієлоцити (%)</label>
						<input id="myelocytes" type="text" name="myelocytes">
				
						<label for="metamyelocytes">Метамієлоцити (%)</label>
						<input id="metamyelocytes" type="text" name="metamyelocytes"> -->
				
						<label for="band-neutrophils">Нейтрофіли паличкоядерні (%)</label>
						<input id="band-neutrophils" type="text" name="band-neutrophils">
				
						<label for="segmented-neutrophils">Нейтрофіли сегментоядерні (%)</label>
						<input id="segmented-neutrophils" type="text" name="segmented-neutrophils">
				
						<label for="monocytes">Моноцити (%)</label>
						<input id="monocytes" type="text" name="monocytes">
				
						<label for="lymphocytes">Лімфоцити (%)</label>
						<input id="lymphocytes" type="text" name="lymphocytes">
				
						<label for="eosinophils">Еозинофіли (%)</label>
						<input id="eosinophils" type="text" name="eosinophils">
				
						<label for="basophils">Базофіли (%)</label>
						<input id="basophils" type="text" name="basophils">
				
						<!-- <label for="pseudoeosinophils">Псевдоеозинофіли (%)</label>
						<input id="pseudoeosinophils" type="text" name="pseudoeosinophils">
				
						<label for="plasma-cells">Плазматичні клітини (%)</label>
						<input id="plasma-cells" type="text" name="plasma-cells"> -->
					</fieldset>
						<button class="submit">Результат</button>
				</form>
			</div>
			<div class="cdc-result hide">
				<button class="back-to-form">Назад</button>
			</div>

			
			<div class="modal hide">
				<div class="modal__content">
					<div class="modal__info"></div>
					<button class="modal__ok">Добре</button>
				</div>  
   			</div>               
			<?php

			
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page-nopost' );

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
			?>
			
		</div><!-- .wrap -->
	
	</main>

<?php get_footer(); ?>
