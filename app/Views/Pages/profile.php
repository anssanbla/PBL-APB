<!-- Profile -->
<div class="container mb-5">
  <h1>Hi, User</h1>
  <h1 class="mt-5 text-dark">Profile</h1>
  <form>
    <div class="row">
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="staticUsername" value="Risky St" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control bg-primary text-white" id="staticNama" value="Risky" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="statickJk" value="Laki" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="statickaddress" value="Batam" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" readonly class="form-control" id="staticEmail" value="Risky@gmail.com" />
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="staticEmail" class="col-sm-2 col-form-label">Number Phone</label>
        <div class="col-sm-10">
          <input type="number" readonly class="form-control" id="staticEmail" value="080000000000" />
        </div>
      </div>

      <div class="col-md btn-user">
        <div class="text-center mt-5">
          <a href="" class="btn btn-primary p-3" data-toggle="modal" data-target="#exampleModal" style="border-radius: 50px">Edit Profile</a>
          <a href="/vendor" class="ml-5">As Vendor</a>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- Profile -->

<!-- Modal Edit Profile -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORM -->
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Username">Username</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Username" />
            </div>
            <div class="form-group col-md-6">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Name" />
            </div>
          </div>
          <div class="form-group">
            <label for="inputNumber">Number Phone</label>
            <input type="text" class="form-control" id="inputNumber" placeholder="***********" />
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAlamat">Alamat</label>
              <input type="text" class="form-control" id="inputAlamat" />
            </div>
            <div class="form-group col-md-4">
              <label for="Jenis Kelamin">Jenis Kelamin</label>
              <select id="Jenis Kelamin" class="form-control">
                <option selected>Laki - laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit Profile -->