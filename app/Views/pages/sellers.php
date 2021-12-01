<div class="container">

    <a href="/seller/create" class="btn btn-primary my-5">cadastrar</a>

    <table class="table">
        <thead>
            <tr>
                <th>#Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>BaseSalary</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($sellers as $seller) : ?>
                <tr>
                    <td><?= $seller['Id'] ?></td>
                    <td><?= $seller['Name'] ?></td>
                    <td><?= $seller['Email'] ?></td>
                    <td><?= $seller['BaseSalary'] ?></td>
                    <td><a href="/seller/detalhes/<?= $seller['Id'] ?>">detalhes</a></td>
                    <td><a href="/seller/edit/<?= $seller['Id'] ?>">editar</a></td>
                    <td><a href="/seller/delete/<?= $seller['Id'] ?>">deletar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</div>
<!--/.container -->