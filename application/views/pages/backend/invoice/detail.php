<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Advanced Forms</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">

                                <h6>No. transaction : <?php echo $invoices->kode ?></h6><br>

                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Name menu</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $total = 0;
                                        $total_purchase = 0;
                                        foreach ($orders as $order) :
                                            $subtotal = $order->qty * $order->price;
                                            $total += $subtotal;
                                            $total_purchase1 = $order->purchase * $order->qty;
                                            $total_purchase += $total_purchase1;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td><?php echo $order->nama_menu ?></td>
                                                <td><?php echo $order->qty ?></td>
                                                <td><?php echo number_format($order->price, 0, ',', '.') ?></td>
                                                <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Payment</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('admin/shop_controller/pay') ?>" method="post">
                                <div class="hitung">
                                    <div class="form-group">
                                        <label>Sub total</label>
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $invoices->id ?>">
                                        <input type="hidden" name="total_purchase" class="form-control" value="<?php echo $total_purchase ?>" readonly>
                                        <input type="number" id="total" name="total" class="form-control" value="<?php echo $total ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Cash</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    $
                                                </div>
                                            </div>
                                            <input type="number" id="pay" name="pay" class="form-control currency">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Change</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    $
                                                </div>
                                            </div>
                                            <input type="number" id="change" name="change" class="form-control currency" readonly>
                                        </div>
                                    </div>
                                    <div align="right">
                                        <button type="reset" class="btn btn-lg btn-danger ml-1"><i class="fas fa-shopping-cart"></i>Cancel</button>
                                        <button type="submit" class="btn btn-lg btn-info ml-1"><i class="fas fa-shopping-cart"></i> Print & Finish</button>
                                    </div>
                                </div>
                            </form>
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
        var total = parseInt($("#total").val())
        var pay = parseInt($("#pay").val())

        var change = pay - total;
        $("#change").attr("value", change)

    });
</script>