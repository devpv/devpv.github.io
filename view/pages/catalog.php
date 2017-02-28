<h1>Catalog</h1>

<?foreach ($goods as $id => $good) {?>
	<div class="col-lg-4">
		<div class = "goodWrap">
			<div class="col-sm-4">

				<?if ($goods[$id]["mediaLinkVideo"]) {?>
					<a href="<?=$goods[$i]["mediaLinkVideo"]?>">Видеообзор</a>
				<?}?>
				<br>
				<?if ($goods[$id]["mediaLinkDemo"]) {?>
					<a href="<?=$goods[$i]["mediaLinkDemo"]?>">Демонстрация товара</a>
				<?}?>
<!-- id='.$id.'" -->
			</div>
			<div class="col-sm-8">	
				<div class="nameGood">				
					<h4><a href="?r=product&id.$goods">
							<?=$goods[$id]["nameGood"]["name"]?></a></h4>
				</div>
				
				<p class = "imgGood">
					<a href ="#" ><img src="<?=$goods[$id]["imgGood"][1]?>"></a>
				</p>
			
			<?if ($goods[$id]["price"]) {?>
				<b><p class="price"><?=$goods[$id]["price"] . " грн"?></p></b>
			<?}?>

			<p class="buy"><a href="#" class="btn btn-info btn-lg" role="button">Купить</a></p>
				
				
				
		 		<div class = "description">
		 			<!-- <?if($goods[$id]["description"]) {?> -->
		 			<p><?=$goods[$id]["description"]?></p>
		 			<!-- <?}?> -->
		 		</div>
		 
			</div>
		 </div>
		</div>
<?}?>
