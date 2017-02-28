<h2><?=$goods[1]["nameGood"]["name"]?></h2>
      <div class="col-lg-4 imageGood">
      	<img class="img-responsive" src="<?= $goods[1]["imgGood"][1]?>" alt="photo_good">
      </div>
			<div class="col-lg-8">
      	<p><?=$goods[1]["description"]?></p>
      	<div class="col-lg-6">
        	<b><p class="price pull-right"><?=$goods[1]["price"] . " грн"?></p></b>
				</div>
				<div class="col-lg-6">
					<p class="buy"><a href="#" class="btn btn-success btn-lg pull-left" role="button">Купить</a></p>  
				</div>
			</div>
      <p>id товара = <?=$id?></p>
      <h3>id=<?=$id?></h3>
      