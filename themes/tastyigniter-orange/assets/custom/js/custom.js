// Featured Product items
$(document).ready(function () {
  $(".quick-view-btn").click(function () {
      let name = $(this).data("name");
      let image = $(this).data("image");
      let price = $(this).data("price");
      let description = $(this).data("description");
      let reviews = $(this).data("reviews");
      let rating = $(this).data("rating");
      let addToCartUrl = $(this).data("url");

      $("#modalProductName").text(name);
      $("#modalProductImage").attr("src", image);
      $("#modalProductPrice").text(price);
      $("#modalProductDescription").text(description);
      $("#modalProductReviews").text(reviews);
      $("#modalProductRating").text(`Rated ${rating} out of 5`);
      $("#modalAddToCart").attr("onclick", `window.location.href='${addToCartUrl}'`);

      // Open the modal
      $.magnificPopup.open({
          items: {
              src: "#QuickView"
          },
          type: "inline"
      });
  });
});

