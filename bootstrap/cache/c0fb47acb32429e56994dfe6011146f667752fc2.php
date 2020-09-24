<h2>
    <?= $admin ?>

    <p>
        <?php echo \App\Classes\CsrfToken::token(); ?> <br>
        <?php echo \App\Classes\Session::get('token'); ?>

    </p>
</h2><?php /**PATH C:\laragon\www\orangephp\resources\views/dashboard.blade.php ENDPATH**/ ?>