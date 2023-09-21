<h1>Посты</h1>
<?php foreach ($posts as $post):?>


    <div class="card" style="width: 18rem;">
        <img src="../web/img/<?php echo $post['image'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo  $post['title'];?></h5>
            <p class="card-text"><?php echo  $post['description'];?></p>
            <a href="#" class="btn btn-primary">Читать подробнее</a>
        </div>
    </div>


<?php endforeach;?>
