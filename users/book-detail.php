<main>
    <?php 
        include "db.php";
        $id = $_GET['id'];
        $sql = "SELECT b.* , a.authorName, c.categoryName from books b 
        join authors a on b.author_id = a.id 
        join categories c on b.category_id = c.id
        where b.id = '$id'";
        $result = mysqli_query($conn,$sql);
        $book = mysqli_fetch_assoc($result);
    ?>
    <div class="book-page">
        <div class="book-info">

            <div class="cover">
                <div class="cover-box">
                    <img src="<?php echo $book['image'] ?>" alt="Ảnh bìa sách">
                </div>
            </div>

            <div class="details">
                <div class="title-box">
                    <h1 class="title"><?php echo $book['title'] ?></h1>
                </div>
                <div class="author-box">
                    <p class="author">
                        <b>Tác giả:</b> <?php echo $book['authorName'] ?>
                    </p>
                </div>
                <div class="meta">
                    <div class="meta-item">
                        <b>Thể loại: </b> <?php echo $book['categoryName'] ?>
                    </div>
                  
                </div>
                <hr>
                <div class="description">
                    <b>Mô tả:</b><p><?php echo $book['description'] ?></p>
                </div>

                <div class="download-box">
                    <p class="download-title"> Tải sách: </p>
    
                    <div class="download-actions">
                        <a href="<?php echo $book['pdf_file'] ?>" class="btn-download" download>
                             Tải PDF
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>