<?php 
    include('includes/header.php'); // header .. 
    session_start();  
    if(empty($_SESSION['name'])) {
        // login redirect ..
        header('location:index.php');
    }  
?>
<div class="container">
    <h1>Hello <?php echo $_SESSION['name']; ?> ! Welcome to login system ..</h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic, recusandae eaque deleniti laboriosam minima pariatur fuga eius earum, labore iure fugiat debitis, beatae cumque est tenetur nemo nisi sunt repudiandae quos omnis numquam magni dolor quia sequi? Perferendis deleniti aperiam quod odit perspiciatis vero harum voluptate quibusdam. Maxime eos consectetur repellat sed sapiente, fugiat totam recusandae facere animi quod voluptate consequatur dolores enim veritatis iste perferendis ratione vel ea a delectus minima magnam cupiditate facilis amet! Sint, facere? Consequuntur nostrum expedita ad deserunt quos? Possimus earum eligendi pariatur animi, consequatur unde at non quo, eum voluptatem ducimus numquam voluptas provident modi nemo. Porro dolorum ratione rem hic voluptatem saepe ex, autem assumenda culpa architecto reiciendis libero cupiditate ullam mollitia illo pariatur est nihil suscipit quis vel repudiandae sequi! Molestias, natus. Commodi, amet nobis suscipit ratione eius deserunt nisi nostrum molestias delectus incidunt itaque, consequuntur architecto quasi quis magni odit eos accusantium recusandae maxime molestiae, fuga distinctio. Maiores consectetur corrupti vero, ab impedit dignissimos distinctio minus aliquam perferendis nihil quo aut doloremque consequatur? Nisi dolore, ipsa repellendus ratione modi nam vel quas labore temporibus commodi. Necessitatibus nulla minima explicabo sit. Autem placeat ab temporibus nesciunt provident cupiditate vitae facilis nihil inventore.
    </p>
</div>
<?php include('includes/footer.php'); // footer .. ?>
