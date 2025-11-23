
// BẤM NÚT CHUYỂN ANH
let slideProducts = document.querySelectorAll('.slide-product');

    slideProducts.forEach(slide => {
        let listShoe = slide.querySelector('.product-man');
        let products = slide.querySelectorAll('.products');
        let right = slide.querySelector('.right');
        let left = slide.querySelector('.left');

        let current = 0;
        let visible = 4; // số sản phẩm hiển thị cùng lúc
        let length = products.length;

        // Chuyên ảnh khi bấm nút bên phải
        function handleChangeSlide() {
            let width = products[0].offsetWidth;
            if (current >= length - visible) {
                current = 0;
                listShoe.style.transform = `translateX(0px)`;
            } else {
                current++;
                listShoe.style.transform = `translateX(${width *-1*current}px)`;
            }
            
        }
         //Gnans vòng lặp
        let autoSlide = setInterval(handleChangeSlide, 4000);
        //Gắn sự kiện khi bấm nút phải
        right.addEventListener('click', () => {
            clearInterval(autoSlide);
            handleChangeSlide();
            autoSlide = setInterval(handleChangeSlide, 4000);
        });
        //Gắn sự kiện khi bấm nút trái
        left.addEventListener('click', () => {
            clearInterval(autoSlide);
            let width = products[0].offsetWidth;
            if (current === 0) {
                current = length - visible;
                listShoe.style.transform = `translateX(${width *-1 * current}px)`;
            } else {
                current--;
                listShoe.style.transform = `translateX(${width *-1 * current}px)`;
            }
            autoSlide = setInterval(handleChangeSlide, 4000);
        });

    });
    
//Đóng mở modal
let showModal = document.querySelectorAll('.show-modal');
let Modal = document.querySelector('.modal');
let modalClose = document.querySelector('.modal-close');
showModal.forEach(button =>{
    button.addEventListener('click', () =>{
        Modal.classList.add('open');
            
    });
});
modalClose.addEventListener('click', () => {
     Modal.classList.remove('open');
});
 

let shoeSize = document.querySelector('#shoe-size');
let shoeColor = document.querySelector('#shoe-color');
let shoeCount = document.querySelector('#shoe-count');

let chooseSize = document.querySelectorAll('.size-option');
chooseSize.forEach(function(btn){
    btn.addEventListener('click',() => {
        chooseSize.forEach(function(item){
            item.classList.remove('active')
        })
        btn.classList.add('active')
        shoeSize.textContent = btn.textContent
    })
})

let chooseColor = document.querySelectorAll('.color-option');
chooseColor.forEach(function(btn){
    btn.addEventListener('click',() => {
        chooseColor.forEach(function(item){
            item.classList.remove('active')
        })
        btn.classList.add('active')
        shoeColor.textContent = btn.style.backgroundColor;
    })
})

let chooseCount = document.querySelector('#count-option');
let bill = document.querySelector('#bill');
let billShoe = 1800000;
chooseCount.addEventListener('keyup', () => {
    shoeCount.textContent = chooseCount.value;
    let total = billShoe * chooseCount.value;
    bill.textContent = total.toLocaleString('vi-VN') + 'VNĐ';
}) 