<div class="left-sidebar">
    <ul class="lvl1">
        <li><a href="/admin/transactions/index.php">Manage Transactions</a></li>
        <li><a href="/admin/expenses/index.php">Manage Expenses</a></li>
        <li><a href="/admin/income/index.php">Manage Income</a></li>
        <li><a href="/admin/budget/index.php">Manage Budget</a></li>
        <ul class="lvl2">
            <li><a href="/admin/income/index.php">Manage Categories</a></li>
            <li><a href="/admin/budget/index.php">Manage Accounts</a></li>
        </ul>
    </ul>
</div>

<style>
    ul { padding:0; margin:0;  }
li { list-style:none; }
li > ul { display: none; }
li:hover > ul { display: block; }
.lvl1 li { margin-right: 10px; display: inline; position:relative; }
.lvl2 { position: absolute; }
.lvl2 li { position: relative; }
</style>