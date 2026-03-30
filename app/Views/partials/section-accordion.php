
<div class="accordion pt-5 " id="accordionExample">
<div class="pt-5"></div>
<h2 class="d-flex justify-content-center">Bantuan</h2>
    
    <?php foreach ($bantuan as $bantuan_item) : ?>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#collapseOne" 
                aria-expanded="true" 
                aria-controls="collapseOne"> 
                <?= $bantuan_item['judul'] ?>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <?= $bantuan_item['desk'] ?></div>
        </div>
    </div>
<?php endforeach; ?>
</div>