<?php if(session('message')):?>
<div class="alert alert-success alert-dismissible fade show mb-2 mt-2" role="alert">
    <?=session('message')?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif ?>