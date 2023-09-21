<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?>public/css/stylelogin1.css" />
  </head>
  <body>
  <p class="tip"></p>
    <div class="cont">
      <div class="form sign-in">
        <form action="<?= base_url()?>Login/index" method="post">
        <?php if($this->session->flashdata("login")):?>
              <div class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      Login <strong><?= $this->session->flashdata("login")?>.</strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            </div>
            <?php endif;?>
        <?php if($this->session->flashdata("active")):?>
              <div class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      Maaf Email Anda Belum <strong><?= $this->session->flashdata("active")?>.</strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            </div>
            <?php endif;?>
            <?php if($this->session->flashdata("logingagal")):?>
              <div class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      Maaf Email Yang Anda Masukkan <strong><?= $this->session->flashdata("logingagal")?>.</strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            </div>
            <?php endif;?>
            <?php if($this->session->flashdata("password")):?>
              <div class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      Maaf Password Yang Anda Masukkan <strong><?= $this->session->flashdata("password")?>.</strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            </div>
            <?php endif;?>
          <h2>Sign In</h2>
          <label>
            <span>Email</span>
            <input type="email" name="email1" <?= set_value("email1");?>/>
          </label>
          <?= form_error("email1");?>
          <label>
            <span>Password</span>
            <input type="password" name="password1" <?= set_value("password1");?>/>
          </label>
          <?= form_error("password1");?>
          <p class="forgot-pass">Forgot password?</p>
          <button type="submit" class="submit" name="signin">Sign In</button>
        </form>
      </div>
      <div class="sub-cont">
        <div class="img">
          <div class="img__text m--up">
            <h2>Belum Punya Akun?</h2>
            <p>Sign up Sekarang!</p>
          </div>
          <div class="img__text m--in">
            <h2>Sudah Punya Akun?</h2>
            <p>Sign In Sekarang!</p>
          </div>
          <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
          </div>
        </div>
        <div class="form sign-up">
          <form action="<?= base_url()?>Login/Registrasi" method="post">
          <div class="container">
      <?php if($this->session->flashdata("sukses")):?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
  Registrasi <strong><?= $this->session->flashdata("sukses")?>.</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
      </div>
        <?php endif;?>
        <div class="container">
          <?php if($this->session->flashdata("registrasi")):?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  Registrasi  <strong><?= $this->session->flashdata("registrasi")?>.</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif;?>
        </div>
            <h2>Sign Up</h2>
            <label>
              <span>Username</span>
              <input type="text" name="username" <?= set_value("username");?>/>
            </label>
            <?= form_error("username");?>
            <label>
              <span>Email</span>
              <input type="email" name="email" <?= set_value("email");?>/>
            </label>
            <?= form_error("email");?>
            <label>
              <span>Password</span>
              <input type="password" name="password" <?= set_value("password");?>/>
            </label>
            <?= form_error("password");?>
            <label>
              <span>Confirm Password</span>
              <input type="password" name="password2" <?= set_value("password2");?>/>
            </label>
            <?= form_error("password2");?>
            <button type="submit" class="submit" name="submit">Sign Up</button>
          </form>
        </div>
      </div>
    </div>

    <script src="<?= base_url()?>public/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>