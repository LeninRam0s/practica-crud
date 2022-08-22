<title>UMG | Sistema</title>
<!-- CSS only -->
<?php $this->load->view('layout/header'); ?>

<!-- Image and text -->
<!--
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="<?= base_url('public/img/bootstrap-solid.svg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
    </a>
</nav>
-->
<p></p>
<center><h2><p style="color:#063970;">CONTROL DE ALUMNOS</h2></p></center>

<body>
    <div style="background-color: #cee3da;" class="containter-fluid" >
        <?php $this->load->view($vista) ?>
    </div>
    

</body>
<!-- JavaScript Bundle with Popper -->
<?php $this->load->view('layout/footer'); ?>