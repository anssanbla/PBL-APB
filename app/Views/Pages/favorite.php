<!-------Favorit---->
<div class="title">
    <h1>Favorite</h1>

</div>

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Product Address</th>
            <th>Action</th>
        </tr>
        <?php foreach ($tbl_product as $row) :  ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="/assets/images/<?= $row['input_gambar']; ?>">
                        <div>
                            <h4><?= $row['nama_product']; ?></h4>
                            <p><?= $row['deskripsi']; ?></p>
                            <small><?= $row['harga']; ?></small><br>
                            <small>Vendor Name: <?= $row['nama']; ?></small>
                            <br>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="cart-address">
                        <p><?= $row['alamat']; ?></p>
                    </div>
                </td>
                <td><a href="#" class="btn-home">Rental</a>
                    <a href="#" class="btn-home">Remove</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!------FOOTER------>
<!-- START FOOTER -->
<footer>
    <div class="footer-Container">
        <div class="row">
            <!-- PRODUCT -->
            <div class="product-Footer">
                <h4>Product</h4>
                <a href="">Overview</a>
                <a href="">Features <span>new</span> </a>
                <a href="">Checkout</a>
                <a href="">Pricing</a>
                <a href="">Releases</a>
            </div>

            <!-- COMPANY -->
            <div class="company-Footer">
                <h4>Company</h4>
                <a href="">About</a>
                <a href="">Press</a>
                <a href="">Careers</a>
                <a href="">Contact</a>
                <a href="">Partners</a>
            </div>

            <!-- SUPPORT -->
            <div class="support-Footer">
                <h4>Support</h4>
                <a href="">Help & Center</a>
                <a href="">Terms of sevice</a>
                <a href="">Legal</a>
                <a href="">Privacy policy</a>
                <a href="">Status</a>
            </div>
        </div>
    </div>