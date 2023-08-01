<center>
    <H1>PT. ABC INDONESIA</H1>
</center>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($gudang as $g) : ?>
            <tr>
                <th scope="row">1</th>
                <td><? $g['user_id'];  ?></td>
                <td><? $g['username'];  ?></td>
                <td>@<? $g['password'];  ?></td>
                <td>@<? $g['level'];  ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>