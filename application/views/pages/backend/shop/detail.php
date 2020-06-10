<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Transaction</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Detail Transaction</h2>
            <p class="section-lead">National Polithecnic Institute Of Cambodia</p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Transaction</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>No</th>
                                        <th>Name Menu</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Sub Total</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    foreach ($this->cart->contents() as $items) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $items['name'] ?></td>
                                            <td><?php echo $items['qty'] ?></td>
                                            <td align="right"><?php echo number_format($items['price'], 0, ',', '.') ?></td>
                                            <td align="right"><?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="4">Total</td>
                                        <td align="right"><?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div align="right">
                        <a href="<?php echo base_url('admin/shop_controller/cancel') ?>" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Cancel</a>
                        <a href="<?php echo base_url('a/shop/') ?>" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Lanjut Belanja</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#input_money">Checkout</button>
                    </div>
                </div>
            </div>
    </section>
</div>

<div class="modal fade" id="input_money" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Continue the transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>the total of your order: <?php echo number_format($this->cart->total(), 0, ',', '.') ?></b>
                <form action="<?php echo base_url('admin/shop_controller/add') ?>" method="post">
                    <div class="form-group">
                        <label for="pay" class="col-form-label">No. invoice:</label>
                        <?php
                        echo form_input([
                            'name'  => 'kode',
                            'class' => 'form-control',
                            'value' => set_value('kode', $kode),
                            'readonly' => 'readonly'
                        ]);
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Message: (optional)</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="close" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Order Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>