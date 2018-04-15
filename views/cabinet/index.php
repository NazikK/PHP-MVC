<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

        
            
            <h3  class="display-1">Привіт, <?php echo $user['name'];?>!</h3>
            <ul>
                <li class="list-group-item"><a href="/cabinet/edit">Редактировать данные</a></li>
                <li class="list-group-item"><a href="/cabinet/history">Список покупок</a></li>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>