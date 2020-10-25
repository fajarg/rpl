    <div id="body-container">
        <section class="container-login">
            <section>
                <strong>Getto Project</strong>
                <small>
                    The linked client <br />
                    project admin Board
                </small>
                <div>
                    <a href="#"><i class='fab fa-instagram'></i> - 
                    <a href="#">Contact</a> - 
                    <a href="#">Help</a>
                </div>
            </section>
            <section>
                <section>
                    <form action="<?= base_url('user');?>" method="POST">
                        <b>Login</b> 
                        <small>to your account to browse through projects and explore our tools</small>
                        
                        <?= $this->session->flashdata('message'); ?>
                        <input type="text" name="username" placeholder="Username">
                        <?= form_error('username', '<small class="alert-login">', '</small>'); ?>
                        <input type="password" name="pass" placeholder="Password">
                        <?= form_error('pass', '<small class="alert-login">', '</small>'); ?>
                        <button><i class='fas fa-chevron-right'></i></button>
                    </form>
                    <small>Don't have an account ? <a href="#">Sign Up</a></small>
                </section>
            </section>
        </section>
    </div>