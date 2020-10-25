<div id="modal-info" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="c-modal">
        <h2>Detail Menu</h2>
        <form action="#" method="POST">
            <div class="m-content m-flex">
                    <img src="<?= base_url('asset/img/test.jpg'); ?>" />
                    <p>
                        <b>
                            <span>Qty Order</span> <input type="number" value="1" min="1">
                        </b>
                        <label class="title-label">Other Variant</label>
                        <label class="container-checkmark">Pedas
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkmark">Keju
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <textarea name="comment" placeholder="comment about order here"></textarea>
                    </p>
            </div>
            <div class="m-content m-flex m-flex-right">
                <a href="#" class="btn-cancel">Cancel</a>
                <a href="#" class="btn-created">Order</a>
            </div>
        </form>
    </div>
</div>