 <!-- Page Specific Scripts -->
    <?php 

        if(isset($scripts)){
        foreach ($scripts as $value){

            echo "<script src='js/{$value}.js'></script>";

        }}
    ?>
    

</body>
</html>
