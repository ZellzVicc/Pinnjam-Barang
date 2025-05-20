<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Daftar Akun Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <img src="{{ asset('images/asset/logo-no-text.png') }}" alt="Logo" width="80">
          </div>
          <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
              <label>Nama</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
              </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Konfirmasi Password</label>
              <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Daftar</button>
          </form>
          <div class="mt-3 text-center">
            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Sudah punya akun? Login di sini</a>
          </div>
        </div>
      </div>
    </div>
  </div>
