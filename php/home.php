<?php 
    include('includes/header.php'); // header .. 
    if(empty($_SESSION['name'])) {
        // login redirect ..
        header('location:index.php');
    }  
    include('actions/cn.php'); // connection file ...
    $query  = "SELECT * FROM `users` ORDER BY id DESC";
    $result = mysqli_query($cn,$query) or die('cant run query');
?>
    <div class="bg-primary text-white p-5">
        <div class="container">
            <h1> <i class="fa fa-smile-o"></i> Hello <?php echo $_SESSION['name']; ?> ! Welcome to login system ..</h1>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae magni doloremque libero pariatur saepe ullam ipsum amet non quos ducimus nam eaque, ex facere molestias iure dolores voluptatibus nulla repellendus rem nostrum distinctio. Exercitationem, molestias obcaecati ipsum sapiente animi odit quos atque, ullam consequuntur voluptatibus doloribus quod a est in.
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card rounded-0 mt-2">
            <div class="card-header">
                <i class="fa fa-users"></i> All Users
            </div>
            <table class="table table-bordered table-stripped table-hover">
                <tr>
                    <th><i class="fa fa-hashtag"></i></th>
                    <th><i class="fa fa-user"></i> Name</th>
                    <th><i class="fa fa-envelope"></i> Email</th>
                    <th><i class="fa fa-whatsapp"></i> WhatsApp</th>
                    <th><i class="fa fa-cogs"></i> Action</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['whatsapp']; ?></td>
                    <td>
                        <a href="#" title="Edit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a href="#" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php include('includes/footer.php'); // footer .. ?>
