<div class="container">
    <article>
        <section>
            <div >
                <h3 class="subTitle">LOGIN</h3>
            </div>
            <form action="<?= base_url('site/login'); ?>" method="POST">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Login</button>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('site/registration'); ?>">
                        <button type="button" class="form-control btn btn-primary">Register</button>
                        </a>
                    </div>
                </div>
            </form>
        </section>
    </article>
</div>