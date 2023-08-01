<center>
    <H1>PT. ABC INDONESIA</H1>
</center>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($laporan as $g) : ?>
            <tr>
                <th scope="row">1</th>
                <td><? $g['Idbarang'];  ?></td>
                <td><? $g['Nm_barang'];  ?></td>
                <td>@<? $g['Jumlah'];  ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    window.print();
</script>