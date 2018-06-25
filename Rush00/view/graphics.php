
<div class="main">
    <navigation>
        <nav id="nav-bar">
            <div class="nav-bar-navigation">
                <div class="bar-algorithms">
                    <a href="algorithms">Algorithms</a>
                </div>
                <div class="bar-unix">
                    <a href="unix">UNIX</a>
                </div>
                <div class="bar-graphics">
                    <a href="graphics">Graphics</a>
                </div>
                <div class="bar-devops">
                    <a href="devops">DevOps</a>
                </div>
            </div>
        </nav>

        <div class="product-list">
            <ul class="flex">

                <?php
                session_start();
                if (!empty($products)) {
                    foreach ($products as $product) {
                        ?>
                        <li class="product-list-plate">
							<p class="name"><b><span>Name:          </span><?php echo $product['name']?></b></p>
							<p class="category"><b><span>Category:   </span><?php echo $product['category']?></b></p>
							<p class="price"><b><span>Price:          </span><?php echo $product['price']?></b></p>
                            <form action="basket" method="post">
                                <input type="hidden" name="id" value="<?php echo $product['id']?>">
                                <input type="hidden" name="name" value="<?php echo $product['name']?>">
                                <input type="hidden" name="price" value="<?php echo $product['price']?>">
                                <input type="hidden" name="category" value="<?php echo $product['category']?>">
                                <button type="submit">Add to Cart</button>

                            </form>
                        </li>

                        <?php

                    }
                }
                ?>

            </ul>
        </div>

