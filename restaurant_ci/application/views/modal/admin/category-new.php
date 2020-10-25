<div id="modal-new-menu" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="c-modal">
        <h2>Create New Data Category</h2>
        <span class="ket-modal"></span>
        <?= $this->session->flashdata('message-modal'); ?>
        <form action="<?= base_url('menu/addCategory');?>" method="POST">
            <div class="m-content">
                <div>
                    <input type="text" name="categoryName" placeholder="Nama Kategori" required>
                    <textarea name="categoryNote" placeholder="Keterangan Kategori"></textarea>
                </div>
            </div>
            <div class="m-content m-flex m-flex-right">
                <a href="#" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-created">Create</button>
            </div>
        </form>
    </div>
</div>