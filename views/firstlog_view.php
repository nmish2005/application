<h2>Страница подтверждения аккаунта</h2><br><hr width="50%">
<p>Чтобы подтвердить ваш аккаунт, просто повторно заполните поля:</p><br>
<form method="post" action="/testreg">
    <table class="login">
        <tr>
            <td>Логин<em>*</em></td>
            <td><label><input type="text" name="login" required="required"></label></td>
        </tr>
        <tr>
            <td>Пароль<em>*</em></td>
            <td><label><input type="password" name="password" required="required"></label></td>
        </tr>
        <tr>
            <th colspan="2" style="text-align: right">
                <input type="submit" value="Войти" name="send" style="width: 150px; height: 30px"></th>
        </tr>
    </table>