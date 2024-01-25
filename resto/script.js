<script>
  function searchRecipe() {
    // Mendapatkan nilai input pencarian
    var searchValue = document.getElementById('searchInput').value.toLowerCase();

    // Mendapatkan semua elemen resep
    var recipes = document.querySelectorAll('.recipe');

    // Loop melalui setiap resep
    recipes.forEach(function(recipe) {
      // Mendapatkan teks resep
      var recipeText = recipe.textContent.toLowerCase();

      // Menyembunyikan atau menampilkan resep berdasarkan pencarian
      if (recipeText.includes(searchValue)) {
        recipe.style.display = 'block';
      } else {
        recipe.style.display = 'none';
      }
    });
  }
</script>
