<?php if(!empty($_GET['error'])){ ?>
    <div id="autoDismiss" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> <?php echo $_GET['error'];  ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Auto hide after 3 seconds (3000ms)
        setTimeout(function() {
            var alert = document.getElementById('autoDismiss');
            if (alert) {
                var bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 3000);
    </script>
<?php } ?>
<?php if(!empty($_GET['success'])){ ?>
    <div id="autoDismiss" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> <?php echo $_GET['success'];  ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Auto hide after 3 seconds (3000ms)
        setTimeout(function() {
            var alert = document.getElementById('autoDismiss');
            if (alert) {
                var bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 3000);
    </script>
<?php } ?>