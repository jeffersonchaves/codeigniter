<div class="container">

    <?php
    print \Config\Services::validation()->listErrors();
    ?>

    <form action="/seller/save" method="POST">
        <div class="mb-3">
            <label for="name_field" class="form-label">Name</label>
            <input type="text" class="form-control" id="name_field" name="Name" value="<?= (isset($Name)) ? $Name : '' ?>" placeholder="John doe">
        </div>

        <div class="mb-3">
            <label for="email_field" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email_field" name="Email" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="salary_field" class="form-label">Salary</label>
            <input type="text" class="form-control" id="salary_field" name="BaseSalary" placeholder="9999.00">
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
        </div>


    </form>


</div>