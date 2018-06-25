
<div class="product-list">
    <ul class="flex">

        <?php
        session_start();
//        var_dump($_SESSION['basket']);
            foreach ($_SESSION['basket'] as $product) {
                foreach ($product as $item)
            ?>
                <li class="product-list-plate">
                    <p class="name"><b><span>Name:          </span><?php echo $item['name']?></b></p>
                    <p class="category"><b><span>Category:   </span><?php echo " " . $item['category']?></b></p>
                    <p class="price"><b><span>Price:          </span><?php echo " " . $item['price']?></b></p>
                    <p class="count"><b><span>Quantity:    </span><?php echo " " . $item['count']?></b></p>
                <form action="basket" method="post">
                    <input type="hidden" name="id" value="<?php echo $item['id']?>">
                    <input type="hidden" name="name" value="<?php echo $item['name']?>">
                    <input type="hidden" name="price" value="<?php echo $item['price']?>">
                    <input type="hidden" name="category" value="<?php echo $item['category']?>">
                    <input type="hidden" name="action" value="dell">
                    <button type="submit" >Del</button>
                </form>
                </li>

                <?php
        }
        ?>
		<?php if (empty($_SESSION['t-count']) || !isset($_SESSION['email'])) {?>
		<div class="total">
				<div>
					<p class="total-sum">LOG IN or/and BUY</p>
				</div>
		</div>
		<?php } else { ?>
		<div class="total">
			<a href="endshoping" class="dis">
			<div>
				<p class="total-sum">TOTAL SUM:<?php echo " " . $_SESSION['t-count'] . "₴"?> </p>
				<p>Buy</p>
			</div>
			</a>
		</div>
		<?php } ?>
    </ul>
</div>