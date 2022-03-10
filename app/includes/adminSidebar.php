<div class="left-sidebar">
    <ul class="lvl1">
        <li><a href="/admin/transactions/index.php">Manage Transactions</a></li>
        <li><a href="/admin/expenses/index.php">Manage Expenses</a></li>
        <li><a href="/admin/income/index.php">Manage Income</a></li>
        <li><a href="/admin/budget/index.php">Manage Budget</a></li>
        <li><a href="/admin/categories/index.php">Manage Categories</a></li>
        <li><a href="/admin/accounts/index.php">Manage Accounts</a></li>

        
    </ul>
</div>


<style>



</style>

<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

</script>