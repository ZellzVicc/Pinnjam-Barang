<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login ke Aplikasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <img src="{{ asset('images/asset/logo-no-text.png') }}" alt="Logo" width="80">
          </div>

          <form method="POST" action="/login">
            @csrf

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Login</button>
          </form>

          <div class="mt-3 text-center">
            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Belum punya akun? Daftar di sini</a>
          </div>
        </div>
      </div>
    </div>
  </div>
