<div class="container">
    <article>
        <section>
            <div>
                <h3 class="subTitle">REGISTRATION</h3>
            </div>
            <form action="<?= base_url('main/register'); ?>" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="user@mail.com" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="bill-add" placeholder="Juan" required>
                </div>
                <div class="form-group">
                    <label>Surname</label>
                    <input class="form-control" type="text" name="bill-add" placeholder="Dela Cruz" required>
                </div>
                <div class="form-group">
                    <label>Sex</label><br>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Re-type Password</label>
                    <input class="form-control" type="password" name="repassword" placeholder="Re-type Password" required>
                </div>
                <div class="form-group">
                    <label>Billing Address</label>
                    <input class="form-control" type="text" name="bill-add" placeholder="Billing Address" required>
                </div>
                <div class="form-group">
                    <label>Deliver Address</label>
                    <input class="form-control" type="text" name="deliver-add" placeholder="Deliver Address" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Register</button><br/>
                        <label>Do you have account already?</label><br/>
                        <a href="<?= base_url(); ?>">	
                            <button type="button" class="btn btn-primary">Go to Login</button>
                        </a>
                    </div>
                </div>
            </form>	
        </section>
    </article>
</div>
    
    