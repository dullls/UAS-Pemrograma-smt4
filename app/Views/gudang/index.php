<center>
    <H1>PT. ABC INDONESIA</H1>
</center>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($gudang as $g) : ?>
            <tr>
                <td><? $g['Idbarang'];  ?></td>
                <td><? $g['Nm_barang'];  ?></td>
                <td><? $g['Jumlah'];  ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>