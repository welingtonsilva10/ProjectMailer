<?php $this->layout('master', ['title' => 'Contact']) ?>

<main>
    <div class="loginPage">
        <section class="formLoginBox">
            <form class="formLogin" action="" method="post">
                <input class="entryInformationUser" type="text"      placeholder="Usuário ou email">
                <input class="entryInformationUser" type="password"  placeholder="Senha">
                <input class="submitInformationUser" type="submit"  value="Entrar">
            </form>
            <div class="ancorPage">
                <a class="linkAncor" href="\">Esqueci minha senha</a> 
                <a class="linkAncor" href="\">Não tenho conta</a>
            </div>
        </section>

        <section class="oAunthLoginGoogle">
            <h2>Google oAuth</h2>
        </section>
    </div>
</main>