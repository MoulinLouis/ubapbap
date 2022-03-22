<?php if(isset($_SESSION['alert'])) { ?>
    <?php foreach($_SESSION['alert'] as $type => $alert) { ?>
        <script>
            Swal.fire(
                '<?= $alert["titre"] ?>',
                '<?= $alert["message"] ?>',
                '<?= $type ?>'
            )
        </script>
    <?php } ?>
    <?php unset($_SESSION['alert']); ?>
<?php } ?>