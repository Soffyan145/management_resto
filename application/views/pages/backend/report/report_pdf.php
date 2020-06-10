<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="<?= base_url('assets/backend/css_pdf/style.css') ?>" media="all" />
</head>

<body>
    <header class="clearfix">
        <?php foreach ($profile as $data) : ?>
            <div id="logo">

                <img src="<?php echo base_url('assets/backend') ?>/img/upload_resto/default.png" width="40px" height="90">

            </div>
            <h1>Report of all transaction</h1>
            <div id="company" class="clearfix">
                <div><?= $data->nama_resto ?></div>
                <div>455 Foggy Heights,<br /> AZ 85004, US</div>
                <div>(602) 519-0450</div>
                <div><a href="mailto:company@example.com">company@example.com</a></div>
            </div>
            <div id="project">
                <div><span>PROJECT</span>System Management Restaurant</div>
                <div><span>Owner</span> John Doe</div>
                <div><span>ADDRESS</span>Phum Prey Popel, SK. Somrong Krom,</div>
                <div><span></span>Khan Po Sen Chey, Phnom Penh, Cambodia.</div>
                <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
                <div><span>DATE</span>
                    <?= date('Y-m-d'); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th class="service">No</th>
                    <th class="service">Kode</th>
                    <th class="desc">Date</th>
                    <th>Income</th>
                    <th>Profit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $grandtotal = 0;
                $grandprofit = 0;
                foreach ($report as $data) :
                    $profit = $data->pay;
                    $grandprofit += $profit;
                    $total = $data->total;
                    $grandtotal += $total; ?>
                    <tr>
                        <td class="service"><?= $no++ ?></td>
                        <td class="service"><?= $data->kode ?></td>
                        <td class="desc"><?= $data->date ?></td>
                        <td class="unit"><?= number_format($data->total, 0, ',', '.') ?></td>
                        <td class="qty"><?= number_format($data->pay, 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" class="grand total">GRAND TOTAL</td>
                    <td class="grand total"><?= number_format($grandtotal, 0, ',', '.') ?></td>
                    <td class="grand total"><?= number_format($grandprofit, 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>
    </main>
    <footer>
        Indonesian Student
    </footer>
</body>

</html>