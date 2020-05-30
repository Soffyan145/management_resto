<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>js/stisla.js"></script>

<!-- JS Libraies
<script src="../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
<script src="../node_modules/chart.js/dist/Chart.min.js"></script>
<script src="../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script> -->

<!-- Template JS File -->
<script src="<?= base_url('assets/backend/') ?>js/scripts.js"></script>
<script src="<?= base_url('assets/backend/') ?>js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url('assets/backend/') ?>js/page/index-0.js"></script>

<!-- Js additional -->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "<?= base_url() ?>admin/dashboard/get_tot",
                type: "POST",
                dataType: "json", //datatype lainnya: html, text
                data: {},
                success: function(data) {
                    $("#count").html(data.tot);
                }
            });
        }, 1000);
    })
</script>

<script>
    $(document).ready(function() {
        $("#nama_customer").autocomplete({
            source: "<?= site_url('admin/Autocomplete/search') ?>"
        });
    });
</script>
</body>

</html>