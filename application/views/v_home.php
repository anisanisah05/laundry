<button class="btn btn-primary" data-target="#tambahModal" data-toggle="modal">TAMBAH</button>
<table border="1">
	<tr>
		<th>Nama Paket</th>
		<th>Harga</th>
		<th colspan="2">Opsi</th>
	</tr>
	<?php foreach ($paket as $p ) : ?>
	<tr>
		<td>
			<?= $p['jenis'] ?>
		</td>
		<td>
			<?= $p['harga'] ?>
		</td>
		<td>
			<button class="btn btn-success">EDIT</button>
			<button class="btn btn-danger">HAPUS</button>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('paket/tambah') ?>" method="POST">
                    <input type="text" name="jenis" placeholder="masukkan jenis">
                    <input type="text" name="harga" placeholder="masukkan harga">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
			</div>
		</div>
	</div>
</div>
