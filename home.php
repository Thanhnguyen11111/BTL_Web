<div class="categories">
    <h2>Những Cuốn Sách Bạn Nên Biết</h2>
    <div class="category-grid">
        <?php
        include "db.php";
        $sql = "SELECT * from books b where b.id < 8";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {


        ?>
        <a href="index.php?page_layout=book-detail&id=<?php echo $row['id'] ?>">
            <div class="category-item">
                <div class="image">
                    <img  src="<?php echo $row['image'] ?>" alt="">
                </div>
                <div class="name">
                    <?php echo $row['title'] ?>
                </div>
            </div>

        </a>
        <?php
        }
        ?>
    </div>
    <!-- <div class="category-grid">

            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
            <div class="category-item">
                <div class="image">
                    <img src="Uploads/covers/tu-ay-2.jpg" alt="">
                </div>
                <div class="name">
                    Conan
                </div>    
            </div>
        </div> -->
</div>
