<section class=" bg-dark pb-5">

  <h2 class="mt-5 d-flex justify-content-center">Berita</h2>
  <div class="card-group container">
  <?php foreach ($berita as $berita_item) : ?>
    <div class="card">
      <img src="<?= base_url('berita/' . $berita_item['image']) ?>" class="card-img-top p-2" height="200px">
      <div class="card-body">
        <h5 class="card-title">
          <a href="<?= $berita_item['link']?>"
          class="text-decoration-none text-dark"
          target="_blank">
            <?= $berita_item['judul'] ?>
          </a>
        </h5>
        <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;"><?= $berita_item['desk']?></p>
        <p class="card-text"><small class="text-body-secondary"><?= $berita_item['update'] ?></small></p>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</section>