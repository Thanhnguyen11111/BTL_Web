<h2>Danh sách tất cả sách</h2>
<hr>
<div class="content-book">
  <div class="book-container">
    <div class="search-bar">
      <div class="search-group">
        <input type="text" class="search-input" placeholder="Tìm kiếm với...">
      </div>
      <form  method="GET">
         <input type="hidden" name="page_layout" value="books">
        <div class="category-group">
          <select name="category">
            <option value="">Tất cả Thể Loại</option>
            <option value="Kỹ năng sống">Kỹ năng sống</option>
            <option value="Văn học">Văn Học</option>
            <option value="Kinh tế - kinh doanh">Kinh tế - kinh doanh</option>
            <option value="Tâm lý - Giáo dục">Tâm lý - Giáo dục</option>
            <option value="Lịch sử">Lịch Sử</option>
            <option value="Thiếu nhi">Thiếu nhi</option>
            <option value="Công nghệ thông tin">Công nghệ thông tin</option>
            <option value="Ngoại ngữ">Ngoại ngữ</option>
          </select>
        </div>

        <div class="button-group">
          <input type="submit" value="Tìm kiếm">
        </div>
      </form>
    </div>

    <div class="book-list-container">
      <section class="book-list">
        <div class="book-grid">
          <?php
            include "db.php";
            if(isset($_GET['category'])){
              $category = $_GET['category'];

            }else{
              $category = '';
            }
            $sql = "SELECT b.*, a.authorName, c.categoryName from books b
                      join authors a on b.author_id = a.id
                      join categories c on b.category_id = c.id ";
            if (!empty($category)) {
              $sql .= " WHERE c.categoryName = '$category'";
            }
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
          ?>
            <div class="book-item">
              <div class="book-cover">
                <a href="index.php?page_layout=book-detail&id=<?php echo $row['id'] ?>">
                  <img src="<?php echo $row['image'] ?>">
                </a>
              </div>
              <div class="book-about">
                <h3 class="book-title"><?php echo $row['title'] ?></h3>
                <p class="book-author"><?php echo $row['authorName'] ?></p>
              </div>
          </div>
          <?php
            }
          ?>


        </div>
      </section>
    </div>
  </div>
</div>