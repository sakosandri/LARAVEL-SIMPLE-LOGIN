<?php
$numbersOfPages = 200; // this is the static number of Pages
$page = $currentPage;
$start = $page > 3 ? $page - 2 : 1;
$end = ($numbersOfPages) - 2 > ($page) ? $page + 2 : $numbersOfPages;
?>
<div class="container">
    <ul class="pagination pagination-md row">
        <li class="page-item col-auto <?= $page == 1 ? 'disabled' : null ?>">
            <a class="page-link" href="./punkapi">&laquo;&laquo;</a>
        </li>
        <li class="page-item col-auto <?= $page == 1 ? 'disabled' : null ?>">
            <a class="page-link" href="./punkapi/?page=<?= $page - 1; ?>">Prev</a>
        </li>
        @for ($i = $start; $i <= $end; $i++)
            <li class="page-item col-auto <?= $i == $page ? 'active' : "" ?>" aria-current="page">
                <a class="page-link" href="./punkapi/?page=<?= $i; ?>"><?= $i; ?></a>
            </li>
        @endfor        
        <li class="page-item col-auto <?= $numbersOfPages == $page ? "disabled" : null ?>">
            <a class="page-link" href="./punkapi/?page=<?= $page + 1; ?>">Next</a>
        </li>
    </ul>
</div>