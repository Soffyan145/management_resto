<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('a/salary/choose') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Add salary</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/salary/choose') ?>">Choose employee</a></div>
                <div class="breadcrumb-item">Add salary</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="section-body">
                    <h2 class="section-title">Form add salary</h2>
                    <p class="section-lead">
                        National Polithecnic Institute Of Cambodia
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form add salary</h4>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($employees as $pl) : ?>
                                        <form method="post" action="<?php echo site_url('admin/salary_controller/add_action') ?>" enctype="multipart/form-data">
                                            <div class="hitung">
                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Employee</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="hidden" class="form-control" name="id_employee" value="<?php echo $pl->id_employee ?>">
                                                        <input type="text" class="form-control" name="nama_employee" value="<?php echo $pl->nama_employee ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Position</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" name="id_position" value="<?php echo $pl->nama_position ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date salary</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" name="date_salary" value="<?php echo date('l, d-m-Y'); ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Salary</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="number" class="form-control" id="salary" name="salary" value="<?php echo $pl->salary ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Salary bonus</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="number" class="form-control" id="salary_bonus" name="salary_bonus">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Salary cuts</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="number" class="form-control" id="salary_cuts" name="salary_cuts" placeholder="required">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrption</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="description" id="" cols="77" rows="7"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Salary total</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="number" class="form-control" id="total_salary" name="total_salary" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <button type="submit" class="btn btn-primary">Add salary</button>
                                                        <a href="<?php echo base_url('admin/data_employee/') ?>" class="btn btn-danger ml-2">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(".hitung").keyup(function() {
        var salary = parseInt($("#salary").val())
        var salary_bonus = parseInt($("#salary_bonus").val())
        var salary_cuts = parseInt($("#salary_cuts").val())

        var total_salary = salary + salary_bonus - salary_cuts;
        $("#total_salary").attr("value", total_salary)

    });
</script>