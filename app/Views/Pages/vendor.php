<!-------Vendor Product---->
<div class="row-vendor">
  <div class="col-2">
    <div class="small-container vendor-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>
            <div class="vendor-info">
              <img src="/assets/Images/">
              <div>
                <p></p>
                <small></small>
                <p>Vendor Name = </p>
              </div>
            </div>
          </td>
          <td>
            <div class="vendor-action">
              <a href="">Editt</a><br />
              <a href="">Rented</a><br />
              <a href="">Remove</a><br />
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="vendor-info">
              <img src="./assets/images/3.jpg" />
              <div>
                <p>Camera Canon Rent</p>
                <small>Price: RP. 500.000</small>
                <br />
              </div>
            </div>
          </td>
          <td>
            <div class="vendor-action">
              <a href="">Editt</a><br />
              <a href="">Rented</a><br />
              <a href="">Remove</a><br />
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="vendor-info">
              <img src="./assets/images/3.jpg" />
              <div>
                <p>Camera Canon Rent</p>
                <small>Price: RP. 500.000</small>
                <br />
              </div>
            </div>
          </td>
          <td>
            <div class="vendor-action">
              <a href="">Editt</a><br />
              <a href="">Rented</a><br />
              <a href="">Remove</a><br />
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="vendor-info">
              <img src="./assets/images/3.jpg" />
              <div>
                <p>Camera Canon Rent</p>
                <small>Price: RP. 500.000</small>
                <br />
              </div>
            </div>
          </td>
          <td>
            <div class="vendor-action">
              <a href="">Editt</a><br />
              <a href="">Rented</a><br />
              <a href="">Remove</a><br />
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="vendor-info">
              <img src="./assets/images/3.jpg" />
              <div>
                <p>Camera Canon Rent</p>
                <small>Price: RP. 500.000</small>
                <br />
              </div>
            </div>
          </td>
          <td>
            <div class="vendor-action">
              <a href="">Editt</a><br />
              <a href="">Rented</a><br />
              <a href="">Remove</a><br />
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="vendor-info">
              <img src="./assets/images/3.jpg" />
              <div>
                <p>Camera Canon Rent</p>
                <small>Price: RP. 500.000</small>
                <br />
              </div>
            </div>
          </td>
          <td>
            <div class="vendor-action">
              <a href="">Editt</a><br />
              <a href="">Rented</a><br />
              <a href="">Remove</a><br />
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="col-2">
    <div class="small-container vendor-page">
      <form action="/vendor/save" method="POST">
        <?= csrf_field(); ?>

        <div class="upload">
          <legend>Upload Product</legend>
          <p>
            <label for="id_user">id user</label>
            <input name="id_user" required placeholder="id User" id="id_user" type="number" />
            <label for="nama_product">Nama Barang</label>
            <input name="nama_product" required placeholder="Nama Barang" id="nama_product" type="text" />
          </p>
          <p>
            <label for="harga">Harga Barang</label>
            <input name="harga" required placeholder="Rp .xxxx" id="harga" type="text" />
          </p>
          <p>
            <label for="berat">Berat Barang</label>
            <input name="berat" required placeholder="Kilogram" id="berat" type="text" />
          </p>
          <p>
            <label for="alamat">Alamat Barang</label>
            <textarea name="alamat" required placeholder="Alamat Barang" id="alamat"></textarea>
          </p>
          <p>
            <label for="deskripsi">Deskripsi Barang</label>
            <textarea name="deskripsi" required placeholder="Deskripsi Barang" id="deskripsi"></textarea>
          </p>
          <p>
            <label for="input_gambar">Input Gambar Utama</label>
            <input id="input_gambar" name="input_gambar" required type="file" />
          </p>
          <p>
            <label for="input_gambar_2">Input Gambar 2</label>
            <input id="input_gambar_2" name="input_gambar_2" required type="file" />
          </p>
          <p>
            <label for="input_gambar_3">Input Gambar 3</label>
            <input id="input_gambar_3" name="input_gambar_3" required type="file" />
          </p>
          <p>
            <label for="input_gambar_4">Input Gambar 4</label>
            <input id="input_gambar_4" name="input_gambar_4" required type="file" />
          </p>
          <p>
            <button type="submit" class="btn-home">Submit</button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>