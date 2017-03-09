        <div class="lk_nav">
            <div class="left_nav_block">
                <a href="add_order.php" class="add_order">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    <span>Новый заказ</span>
                </a>
                <a href="topic.php?id=<?php echo $_SESSION['user_id']; ?>" class="add_order">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span>Задать вопрос</span>
                </a>
            </div>
            <div class="right_nav_block">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <span><?php echo $_SESSION['email']; ?></span>
            </div>
        </div>