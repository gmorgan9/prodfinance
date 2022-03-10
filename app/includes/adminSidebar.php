<div class="left-sidebar">
    <ul class="lvl1">
        <li><a href="/admin/transactions/index.php">Manage Transactions</a></li>
        <li><a href="/admin/expenses/index.php">Manage Expenses</a></li>
        <li><a href="/admin/income/index.php">Manage Income</a></li>
        <li><a href="/admin/budget/index.php">Manage Budget</a></li>
        
        <a class="dropdown-btn">Settings
            <i class="fa fa-caret-down"></i>
</a>
            <div class="dropdown-container">
            <li><a href="#">Manage Categories</a></li>
            <li><a href="#">Manage Accounts</a></li>
            </div>

        
    </ul>
</div>


<style>


.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  display: block;
  border: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.dropdown-container {
  display: none;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}


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