<section>
    <table class="container mt-5 table table-bordered caption-top">
        
        <caption class="fs-5">Top 10 Kuda yang Kuda Banget</caption>
    
        <thead class="table table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kuda</th>
                <th scope="col">Stable</th>
                <th scope="col">Pemilik</th>
            </tr>
        </thead>
        
        <?php foreach($table as $table_kuda) : ?>
        <tbody>
            <tr>
                <th scope="row"><?= $table_kuda['no']?></th>
                <td><?= $table_kuda['kuda']?></td>
                <td><?= $table_kuda['stable']?></td>
                <td><?= $table_kuda['pemilik']?></td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</section>