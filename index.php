    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/BTL_WEB/assets/css/style.css?v=<?= time() ?>">

        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

    <div class="banner">
        <h1>Kho Sách PDF Miễn Phí</h1>
        <p>Hàng ngàn sách miễn phí – cập nhật mỗi ngày</p>
    </div>

    <main>
        <?php
            if(!isset($_GET['page_layout'])){
                    include "home.php";
            }
            else{
                switch($_GET['page_layout'] ){
                    case 'books':
                        include "./users/books.php";
                        break;
                
                    case 'book-detail':
                        include "./users/book-detail.php";
                        break;
                    case 'profile':
                        include "./users/profile.php";
                        break; 
                    default:
                        include "home.php";
                        break;
                
                }    
            }
            
        ?> 
    </main>

    <?php include 'includes/footer.php'; ?>
        
    </body>
     <script src="/BTL_WEB/assets/js/app.js?v=<?= time() ?>"></script>
    </html>