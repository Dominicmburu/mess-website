
<footer>
    <div class="footer">
        <a class="<?php if ($page == 'home'){
            echo "active";
        } ?>" href="home.php">
            <i class="fas fa-home"></i>
            <p>HOME</p>
        </a>
        <a class="<?php if ($page == 'food'){
            echo "active";
        } ?>" href="food.php">
            <i class="fa-solid fa-utensils"></i>
            <P>FOOD</P>
        </a>
        <a class="<?php if ($page == 'settings'){
            echo "active";
        } ?>" href="settings.php">
            <i class="fa-solid fa-gear"></i>
            <P>SETTING</P>
        </a>
    </div>

</footer>