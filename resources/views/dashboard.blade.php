<h2>
    <?= $admin ?>

    <p>
        {!! \App\Classes\CsrfToken::token() !!} <br>
        {!! \App\Classes\Session::get('token') !!}
    </p>
</h2>