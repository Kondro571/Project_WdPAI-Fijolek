function toggleMenu() {
    var menuList = document.querySelector('.menu-list');
    menuList.style.display = (menuList.style.display === 'flex' || menuList.style.display === '') ? 'none' : 'flex';
}

window.addEventListener('resize', function () {
    var menuList = document.querySelector('.menu-list');
    if (window.innerWidth > 705) {
        menuList.style.display = 'flex';
    } else {
        menuList.style.display = 'none';
    }
});
$(document).ready(function () {


    $(".quantity-button.minus, .quantity-button.plus").on("click", function () {
        var productId = $(this).data("product-id");
    
        var input = $(".quantity-input[data-product-id='" + productId + "']");


        var currentValue = parseInt(input.val());

        if ($(this).hasClass("plus") && currentValue < 50) {

            input.val(currentValue + 1);
        } else if ($(this).hasClass("minus") && currentValue > 1) {
            input.val(currentValue - 1);
        }
    });
    
    $(".add-to-cart-button").on("click", function () {
        var productId = $(this).data("product-id");
        var quantityInput = $(this).siblings(".quantity-control").find(".quantity-input");
        console.log(quantityInput);
        var quantity = quantityInput.prop('value');
        console.log(quantity);

        // Tutaj możesz wywołać funkcję lub AJAX, aby dodać produkt do koszyka z określoną ilością
        // Przykład: addToCart(productId, quantity);
        addToCart(productId, quantity);
        console.log("Dodano do koszyka: Produkt ID = " + productId + ", Ilość = " + quantity);
    });

    function addToCart(productId, quantity) {
        // Użyj AJAX do przekazania danych do serwera (PHP)
        $.ajax({
            type: "POST",
            url: "add_to_cart.php", // Plik PHP obsługujący dodawanie do koszyka
            data: {
                productId: productId,
                quantity: quantity
            },
            success: function (response) {
                console.log(response);
                // Możesz dodać dodatkowe działania po udanym dodaniu do koszyka
            },
            error: function (error) {
                console.error(error);
            }
        });
    }



    $(".product-container .product-img").hover(
        function () {
            $(this).find(".nav-arrow").css("opacity", 1);
        },
        function () {
            $(this).find(".nav-arrow").css("opacity", 0);
        }
    );

    $(".product-container .next-arrow").on("click", function () {
        showNextImage($(this).closest(".product"));
    });

    $(".product-container .prev-arrow").on("click", function () {
        showPrevImage($(this).closest(".product"));
    });

    function showNextImage(product) {
        const images = product.find("img");
        const currentImageIndex = product.data("current-image-index") || 0;
        const totalImages = images.length;
        const nextImageIndex = (currentImageIndex + 1) % totalImages;

        product.data("current-image-index", nextImageIndex);
        updateImageTransform(product, nextImageIndex);
    }

    function showPrevImage(product) {
        const images = product.find("img");
        const currentImageIndex = product.data("current-image-index") || 0;
        const totalImages = images.length;
        const prevImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;

        product.data("current-image-index", prevImageIndex);
        updateImageTransform(product, prevImageIndex);
    }

    function updateImageTransform(product, imageIndex) {
        const translateValue = -imageIndex * 100 + "%";
        product.find("img").css("transform", "translateX(" + translateValue + ")");
    }




});